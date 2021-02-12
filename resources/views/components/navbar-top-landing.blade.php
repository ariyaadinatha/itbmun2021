<nav class='navigation navigation-landing' id='navbar-fixed-top'>
    <ul>
        <li class='navigation-brand'>
            <a href="/landing"><img class="navigation-logo" src="{{URL::asset('assets/logo/itbmun2020-logo-white.png')}}"></a>
        </li>
        <ul class='navigation-items'>
            <li class='navigation-item'><a href="/landing">Home</a></li>
            <li class='navigation-item'><a href="/about">About</a></li>
             <li class='navigation-item'><a href="/councils">Councils</a></li>
            <li class='navigation-item'><a href="/registration">Registration</a></li>
            <li class='navigation-item'><a href="/merch">Merch</a></li>
            <!--D  <li class='navigation-item'><a href="/registration">Registration</a></li>  -->
            <li class='navigation-item'><a href="/press">Press</a></li>
            <li class='navigation-item'><a href="/gossip">Gossip Box</a></li>
            <li class='navigation-item'><a href="/question">Question Box</a></li>
            <!--<li class='navigation-item'><a href="/articles">Articles</a></li>
            <li class='navigation-item'><a href="/documents">Documents</a></li>-->
        </ul>
        <li class='navigation-burger'>
            <button class="hamburger" type="button" onclick="openNav()">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </li>
    </ul>
</nav>

<script>
    const hrefs = document.querySelectorAll(".navigation .navigation-item a");
    const urlString = window.location.href;

    hrefs.forEach(link => {
        var hrefLink = link.getAttribute('href');
        var firstLocation = urlString.indexOf(hrefLink);
        var headerLink = urlString.substr(firstLocation, link.length);

        if (hrefLink === headerLink){
            document.querySelector(".navigation .navigation-item a[href='"+hrefLink+"']").classList.add('active-nav');
        }
    })

</script>


<div class="theme-image carousel-caption">
    <img src="{{URL::asset('assets/main/theme.png')}}">
</div>

