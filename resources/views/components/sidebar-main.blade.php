<aside class='navigation-sidebar'>
        <div class="navigation-sidebar-header">
            <ul>
                <li>
                    <h1>Navigation</h1>
                </li>
                <li>
                    <i class="fas fa-times fa-2x" onclick="closeNav()"></i>
                </li>
            </ul>
        </div>
        <div class="navigation-sidebar-body">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-6 offset-1 offset-sm-2 offset-md-3">
                    <div class="row">
                        <a href="/landing" class="navigation-link col-4">
                            <img src='{{URL::asset("assets/navigationIcons/home.svg")}}'>
                            <p>Home</p>
                        </a>
                        <a href="/councils" class="navigation-link col-4">
                            <img src='{{URL::asset("assets/navigationIcons/councils.svg")}}'>
                            <p>Councils</p>
                        </a>
                        <a href="/about" class="navigation-link col-4">
                            <img src='{{URL::asset("assets/navigationIcons/about.svg")}}'>
                            <p>About</p>
                        </a>
                    </div>
                    <div class="row">
                        <a href="/registration" class="navigation-link col-4">
                        <!-- <a href="/registration" class="navigation-link col-4"> -->
                            <img src='{{URL::asset("assets/navigationIcons/registration.svg")}}'>
                            <p>Registration</p>
                        </a>
                        <a href="/press" class="navigation-link col-4">
                            <img src='{{URL::asset("assets/navigationIcons/press.svg")}}'>
                            <p>Press</p>
                        </a>
                        <a href="/gossip" class="navigation-link col-4">
                            <img src='{{URL::asset("assets/navigationIcons/gossip.svg")}}'>
                            <p>Gossip Box</p>
                        </a>
                        <a href="/question" class="navigation-link col-4">
                            <img src='{{URL::asset("assets/navigationIcons/question.svg")}}'>
                            <p>Question Box</p>
                        </a>
                    </div>

                    <!--<div class="row">
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/articles.svg")}}' type="image/svg+xml"></object>
                            <p>Articles</p>
                        </a>
                        <a href="#" class="navigation-link col-4">
                            <object data='{{URL::asset("assets/navigationIcons/documents.svg")}}' type="image/svg+xml"></object>
                            <p>Documents</p>
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
    </aside>
