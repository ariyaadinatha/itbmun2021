@extends("template.main")

@section('title', 'Medium WYSIWYG Editor Test')

<!--
IMPORTANT PARTS
| HTML REQUIRED FOR MEDIUM EDITOR       18
| STYLING USED                          29
| JS REQUIRED FOR MEDIUM EDITOR         67 
-->

@section("content")
<main>
    <div class="row" style="height: 15vh"></div>
    <div class="row justify-content-md-center">
        <div class="col-8">

            <!-- Form (with Medium Editor) starts here -->
            <form action="">
                <div id="title" placeholder="Title" contenteditable="true" >Title</div>
                <textarea name="Article" id="article" class="editable article" cols="30" rows="10" placeholder="Article goes here. Highlight text for more options."></textarea>
            </form>
            <!-- ends here -->

        </div>
    </div>

    
    <style>
        #title {
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(0, 0, 0, 0);
            font-size: 6rem;
            color: #FFFFFF;
        }

        input {
            width: 100%
        }

        .article {
            min-height: 400px;
            font-size: 3rem
        }

        p {
            font-size: 3rem;
        }

        h2 {
            font-size: 4rem;
        }

        h3 {
            font-size: 3.5rem;
        }

        input:focus, textarea:focus, div:focus {
            outline: none;
        }
    </style>
</main>
@endsection


@section('script')
    <!-- Required JS for Medium Editor -->
    <script src="js/medium-editor.js"></script>
    <script>
        var editor = new MediumEditor('.editable', {
            toolbar: {
                buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', "unorderedlist"]
            },
            extensions: {
                // markdown not working...
                // markdown: new MeMarkdown()
            }
        });
    </script>
    <!-- End of required JS -->

    <script>
        // uncomment for image upload w/ jQuery file upload. Also uncomment CDN @main.blade.php
        // $(function () {
        //     $('.editable').mediumInsert({
        //         editor: editor
        //     });
        // });
    </script>
@endsection