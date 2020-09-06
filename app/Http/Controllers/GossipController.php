<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gossip;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class GossipController extends Controller
{
    use UploadTrait;

    public function viewGossipIndex(){
        $gossips = Gossip::orderBy('created_at', 'desc')->paginate(10)->onEachSide(1);
        return view('gossip.gossipIndex')->with('gossips', $gossips);
    }

    public function create(){
        return view('gossip.gossipCreate');
    }

    public function store(Request $request){
        $request->validate([
            'image'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gossipImage = NULL;

        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = $request->title . Str::random(10);
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $gossipImage = $filePath;
        }

        $data = new Gossip([
            'sender' => $request->sender,
            'reciever' => $request->reciever,
            'council' => $request->council,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $gossipImage
        ]);
        $data->save();

        return redirect('/gossip')->with('status', "The gossip has been posted successfully.");
    }
}
