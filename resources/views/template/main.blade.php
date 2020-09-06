<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148823743-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148823743-1');
    </script>
    <!-- END of Google Analytics -->

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="57fiMRY2VHH1ZKZbPGZ6iZcq5_l0COmuxlKCHlm7z7E" />
    <!-- END of Google Search Console -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Metadata -->
    <meta name="description" content="ITBMUN once again calls upon you to bridge this multipolar world in which we live in, are you up for the challange, delegate?">
    <!-- END of Metadata -->

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <!-- END of Bootstrap CDN -->

    <!-- Medium WYSIWYG Editor -->
    {{-- <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8"> --}}
    <!-- End of Medium WYSIWYG Editor -->

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/9ef1e16e2c.js"></script>
    <!-- END of FontAwesome CDN -->

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <!-- END of Local CSS -->

    <!-- Metas -->
    <link rel="icon" type="image/png" sizes="192x171" href="{{URL::asset('assets/logo/itbmun2020-logo.png')}}">
    <meta name="theme-color" content="#120817">
    <meta name="msapplication-navbutton-color" content="#120817">
    <meta name="apple-mobile-web-app-status-bar-style" content="#120817">
    <!-- END of Metas -->


    <!-- Uncomment for jQuery image upload -->
    <!-- CSS
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor-insert-plugin/2.5.0/css/medium-editor-insert-plugin-frontend.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor-insert-plugin/2.5.0/css/medium-editor-insert-plugin.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" />

    JS
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.runtime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sortable/0.9.13/jquery-sortable-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.ui.widget@1.10.3/jquery.ui.widget.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.iframe-transport/1.0.1/jquery.iframe-transport.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.28.0/js/jquery.fileupload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor-insert-plugin/2.5.0/js/medium-editor-insert-plugin.min.js"></script> -->

    @yield('style')
</head>


<body>
    @yield('content')
</body>
    @yield('script')
</html>