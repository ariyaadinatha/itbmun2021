@extends('template.main')

@section('title', 'Create Gossip - ITBMUN 2020')

@section('content')
<main>    
    <section class='gossip-hero gossip-create' id='hero'>
        <a href="/gossip" class='hero-backicon'>
            <img src="{{URL::asset('assets/gossip/BackIcon.svg')}}" >
        </a>
        <div class='hero-desc'>
            <h1>Create Gossip</h1>
        </div>
    </section>

    <section class='registration-body' id='index' style='background-color:#0c0c0c'>
        <div class="registration-wrapper" style="display: flex">
            @if ($errors->any())
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <form action="" method="post" role="form" enctype="multipart/form-data" style="display: flex; width: 100%">
                @csrf
                <div class="registration-form-wrapper">
                    <h2 class='mb-3'>Identity<br>&mdash;</h2>

                    <div class="registration-row">
                        <div class="registration-col r-col-12">
                            <input type="text" class="form-input" name="sender" id="sender" placeholder=' '/>
                            <label class="text-label" for="sender">From ...</label>
                            <p class="registration-info">
                                <span class='info'>This field is optional</span>
                            </p>            
                        </div>
                    </div>

                    <div class="registration-row">
                        <div class="registration-col r-col-12">
                            <input type="text" class="form-input" name="reciever" id="reciever" placeholder=' '/>
                            <label class="text-label" for="reciever">To ...</label>
                            <p class="registration-info">
                                <span class='info'>This field is optional</span>
                            </p>            
                        </div>
                    </div>

                    <div class="registration-row">
                        <div class="registration-col r-col-12">
                            <div class="registration-radio-wrapper">
                                <p class='radio-header'>Sender's Council</p>
                                <label>
                                    <span class='radio-description'>WHA</span>
                                    <input type="radio" class="individual-radio" name="council" value="WHA">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>UNEP</span>
                                    <input type="radio" class="individual-radio" name="council" value="UNEP">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>DISEC</span>
                                    <input type="radio" class="individual-radio" name="council" value="DISEC">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>UNESCO</span>
                                    <input type="radio" class="individual-radio" name="council" value="UNESCO">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>Historical Crisis Council</span>
                                    <input type="radio" class="individual-radio" name="council" value="CRISIS">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>Futuristic UNSC</span>
                                    <input type="radio" class="individual-radio" name="council" value="UNSC">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>UNCA PRESS</span>
                                    <input type="radio" class="individual-radio" name="council" value="UNCA PRESS">
                                    <span class='radio-button'><span></span></span>
                                </label>
                                <label>
                                    <span class='radio-description'>Prefer not to say</span>
                                    <input type="radio" class="individual-radio" name="council" value="" checked>
                                    <span class='radio-button'><span></span></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h2 class='mb-3'>Content<br>&mdash;</h2>
            
                    <div class="registration-row">
                        <div class="registration-col r-col-12">
                            <input type="text" class="form-input" name="title" id="title" placeholder=' ' required/>
                            <label class="text-label" for="title">Title</label>
                            <p class="registration-info">
                                <span class='info'></span>
                                <span class='required'>*Required</span>
                            </p>             
                        </div>
                    </div>

                    <div class="registration-row">
                        <div class="registration-col r-col-12">
                            <textarea placeholder=' ' class="txta" name="body" id="body" required></textarea>
                            <label class="text-label" for="body">Gossip Text</label>
                            <p class="registration-info">
                                <span class='info'></span>
                                <span class='required'>*Required</span>
                            </p>  
                        </div>
                    </div>

                    <div class="registration-row">
                        <div class="registration-col r-col-12">
                            <label for="body">Do you want to attach an image? (optional, max 2MB)</label>
                            <input id="image" type="file" name="image">
                        </div>
                    </div>

                    <div class="registration-row">
                        <div class="registration-col r-col-12 nav-button-wrapper">
                            <input type="submit" value="Post" class="button-white-transparent" />
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    @include('components.footer-main')
</main>

@endsection

@section('script')
<script>
    // Targets all textareas with class "txta"
    let textareas = document.querySelectorAll('.txta'),
        hiddenDiv = document.createElement('div'),
        content = null;
    
    // Adds a class to all textareas
    for (let j of textareas) {
      j.classList.add('txtstuff');
    }
    
    // Build the hidden div's attributes
    
    // The line below is needed if you move the style lines to CSS
    // hiddenDiv.classList.add('hiddendiv');
    
    // Add the "txta" styles, which are common to both textarea and hiddendiv
    // If you want, you can remove those from CSS and add them via JS
    hiddenDiv.classList.add('txta');
    
    // Add the styles for the hidden div
    // These can be in the CSS, just remove these three lines and uncomment the CSS
    hiddenDiv.style.display = 'none';
    hiddenDiv.style.whiteSpace = 'pre-wrap';
    hiddenDiv.style.wordWrap = 'break-word';
    
    // Loop through all the textareas and add the event listener
    for(let i of textareas) {
      (function(i) {
        // Note: Use 'keyup' instead of 'input'
        // if you want older IE support
        i.addEventListener('input', function() {
          
          // Append hiddendiv to parent of textarea, so the size is correct
          i.parentNode.appendChild(hiddenDiv);
          
          // Remove this if you want the user to be able to resize it in modern browsers
          i.style.resize = 'none';
          
          // This removes scrollbars
          i.style.overflow = 'hidden';
    
          // Every input/change, grab the content
          content = i.value;
    
          // Add the same content to the hidden div
          
          // This is for old IE
          content = content.replace(/\n/g, '<br>');
          
          // The <br ..> part is for old IE
          // This also fixes the jumpy way the textarea grows if line-height isn't included
          hiddenDiv.innerHTML = content + '<br style="line-height: 3px;">';
    
          // Briefly make the hidden div block but invisible
          // This is in order to read the height
          hiddenDiv.style.visibility = 'hidden';
          hiddenDiv.style.display = 'block';
          i.style.height = (hiddenDiv.offsetHeight) + 'px';
    
          // Make the hidden div display:none again
          hiddenDiv.style.visibility = 'visible';
          hiddenDiv.style.display = 'none';
        });
      })(i);
    }
</script>
@endsection