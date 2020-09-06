<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuestionMail;


use App\Mail\QuestionEmail;

class QuestionController extends Controller
{

  public function questionView()
  {
      return view('question.questionIndex');
  }

	function send(Request $request)
	{
		$this->validate($request, [
			'sender' => 'required|email',
			'title' => 'required',
			'body' => 'required',
		]);

    $data=array(
      'sender' => $request->sender,
      'title' => $request->title,
      'body' => $request->body,
    );

    Mail::to('itbmodelunitednations@gmail.com')->send(new QuestionMail($data));
    return back()->with('success','Thanks for contacting us!');
	}

}
