@extends('layouts.app')

@section('title')
Create Post - ITBMUN Admin Dashboard 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark" style="color: white">Help Page</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <small>/ <a href='/home'>Home</a></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h4>Link Image to Post using Google Drive</h4>
                            <ol>
                                <li>Go to <a href="https://drive.google.com/drive/folders/1rfcNgBlZ9ffNQPXQs61YouUkpzew68yn?usp=sharing" target=_blank>ITBMUN Website Google Drive</a> (Sharing option has been set to Public on the Web)</li>
                                <li>Upload Image to the Google Drive folder</li>
                                <li>
                                    Right Click the uploaded image, select 'Get sharable link' and copy the URL<br>
                                    <small>Usually, the URL looked something like this: <br><a href="https://drive.google.com/open?id=1uY1b3IyEJfiNcDnwn0xraCVIAiMi0CqP">https://drive.google.com/open?id=1uY1b3IyEJfiNcDnwn0xraCVIAiMi0CqP</a></small>
                                </li>
                                <li>
                                    Paste the URL, then change the 'open?' to 'uc?'<br>
                                    <small>
                                        From This: <a href="https://drive.google.com/open?id=1uY1b3IyEJfiNcDnwn0xraCVIAiMi0CqP">https://drive.google.com/open?id=1uY1b3IyEJfiNcDnwn0xraCVIAiMi0CqP</a><br>
                                        To This: <a href="https://drive.google.com/open?id=1uY1b3IyEJfiNcDnwn0xraCVIAiMi0CqP">https://drive.google.com/uc?id=1uY1b3IyEJfiNcDnwn0xraCVIAiMi0CqP</a>
                                    </small>
                                </li>
                            </ol>
                            <button class="btn btn-primary" onclick="history.go(-1)">Go Back</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

