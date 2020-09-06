<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Press;

class PressController extends Controller
{
    protected $redirectTo = '/login';
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Press::orderBy('updated_at', 'desc')->paginate(4)->onEachSide(1);
        return view("press.updateIndex")->with('posts', $posts);
    }

    public function updateIndex()
    {
        $posts = Press::orderBy('updated_at', 'desc')->paginate(4)->onEachSide(1);
        return view("press.updateIndex")->with('posts', $posts);
    }

    public function deleteIndex()
    {
        $posts = Press::orderBy('updated_at', 'desc')->paginate(4)->onEachSide(1);
        return view("press.deleteIndex")->with('posts', $posts);
    }

    public function create()
    {
        return view('press.create');
    }

    public function store(Request $request)
    {
        $imgurl = isset($request->imgurl) ? $request->imgurl : 'https://drive.google.com/uc?id=1S_mT3ne6FW3mpA9ubpqpNqqdfHSV86Th';
        $data = new Press([
            'title' => $request->title,
            'body' => $request->editor1,
            'imgurl' => $imgurl,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $data->save();

        $request->session()->flash('status', "{$request->title} successfully posted!");
        return view('home');
    }

    public function show($id)
    {
        $post = Press::find($id);
        return view("press.updatePost")->with('post', $post);
    }

    public function edit($id)
    {
        $post = Press::find($id);
        return view("press.updatePost")->with('post', $post);
    }

    public function update(Request $request, $id)
    {        
        $imgurl = isset($request->imgurl) ? $request->imgurl : 'https://drive.google.com/uc?id=1S_mT3ne6FW3mpA9ubpqpNqqdfHSV86Th';
        $data = Press::find($id);
        $dataUpdate = $data->update([
                'title' => $request->title,
                'body' => $request->editor1,
                'imgurl' => $imgurl,
                'created_at' => $data->created_at,
                'updated_at' => date('Y-m-d H:i:s')
        ]);

        $request->session()->flash('status', "{$request->title} successfully updated!");
        return redirect('/home/update');   
    }

    public function delete(Request $request, $id)
    {
        $title = Press::find($id)->title;
        Press::destroy($id);
        return redirect("/home/delete")->with('status', "{$title} has been deleted successfully.");
    }

    public function viewHelp()
    {
        return view('press.help');
    }
}
