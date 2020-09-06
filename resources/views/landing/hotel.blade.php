@extends("template.main")

@section('title', 'Venue: Courtyard Mariott Bandung - ITBMUN 2020')
@section('content')
    @include('components.sidebar-main')
    <main>
        @include('components.navbar-top-main')
        
        <section class="hotel-hero">
            <div class="hotel-hero-layer1">
                <h1>COURTYARD MARIOTT</h1>
                <h3>Bandung</h3>
            </div>
        </section>

        <section class="hotel-blurb">
            <div class="hotel-blurb-picture">
            </div>
            <div class="hotel-blurb-desc">
                <div class="hotel-blurb-rating">
                    <img src="{{URL::asset('/assets/hotelPage/rating.png')}}"/><br>
                    <h2>
                         <a href="https://www.marriott.com/hotels/hotel-reviews/bdocy-courtyard-bandung-dago/">
                            98% of guests recommend this hotel
                        </a>
                    </h2>
                </div>
                <p>
                    Strategically placed in the heart of the city, Courtyard Bandung Dago offers contemporary accommodation in a vibrant travel destination. Surround yourself with compelling attractions, including Riau Street, Stasiun Bandung, Braga City Walk and Trans Studio Bandung.
                </p>
            </div>
        </section>

        <section class='facilities'>
            <h1>FACILITIES</h1>
            <p>serves for the best</p>
        </section>

        <section class='conference-room'>
            <h1>CONFERENCE ROOM<br>&mdash;</h1>
            <div class='conference-wrapper'>
                <div class='conference-row'>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-meetings-4872-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-amarilis'>
                            <h2>Amarilis</h2>   
                        </div>
                    </a>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-ballroom-5672-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-magnolia'>
                            <h2>Magnolia</h2>
                        </div>
                    </a>
                </div>
                <div class='conference-row'>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-bougenvil-5669-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-bougenvil'>
                            <h2>Bougenvil</h2>
                        </div>
                    </a>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-meeting-5651-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-orchid'>
                            <h2>Orchid</h2>
                        </div>
                    </a>
                </div>
                <div class='conference-row'>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-ballroom-5670-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-eidelweis'>
                            <h2>Eidelweis</h2>
                        </div>
                    </a>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-function-4874-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-pre-function'>
                            <h2>Pre-Function</h2>
                        </div>
                    </a>
                </div>
                <div class='conference-row'>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-meeting-5671-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-lavender'>
                            <h2>Lavender</h2>
                        </div>
                    </a>
                    <a href="https://cache.marriott.com/marriottassets/marriott/BDOCY/bdocy-meeting-4875-hor-clsc.jpg?downsize=1440px:*" target="_blank">
                        <div class='bg-tulip'>
                            <h2>Tulip</h2>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class='guest-room'>
            <h1 class='guest-room-title'>GUEST ROOM<br>&mdash;</h1>

            <div class='guest-room-hero'>
                <div class="guest-room-padding"></div>
                <h1>DELUXE TWIN</h1>
                <div class="guest-room-desc">
                    <p>A room perfect for conference and business, which provides two beds for all the space and comfort you deserve</p>
                    <a href="https://www.marriott.com/hotels/hotel-rooms/bdocy-courtyard-bandung-dago/" class="button-white-transparent">MORE INFO</a>
                </div>
            </div>

            <div class='guest-room-features'>
                <div class='feature-wrapper'>
                    <div class='feature-list'>
                        <h2>Room Overview</h2>
                        <dl>
                            <dt>Air-Conditioned</dt>
                            <dt>2 Twin/Single Bed(s)</dt>
                            <dt>Room Service</dt>
                            <dt>Coffee Maker / Tea Service</dt>
                            <dt>Mini Bar, for a fee</dt>
                        </dl>
                    </div>
                    <div class='feature-list'>
                        <h2>In-Room Media</h2>
                        <dl>
                            <dt>Wireless Internet, complimentary</dt>
                            <dt>High-Speed Internet, for a fee</dt>
                            <dt>Premium Movie Channels</dt>
                            <dt>Phones</dt>
                        </dl>
                    </div>
                </div>
            </div>
        </section>

        <section class='hotel-dining'>
            <h1 class='hotel-dining-title'>HOTEL DINING<br>&mdash;</h1>

            <div class='hotel-dining-hero'>
                <div class="hotel-dining-padding"></div>
                <h1>MOMO CAFE</h1>
                <div class="hotel-dining-desc">
                    <p>A new style of restaurant for those looking for a refreshingly modern take on locally sourced food and drinks.</p>
                    <a href="https://www.marriott.com/hotels/hotel-information/restaurant/bdocy-courtyard-bandung-dago/" class="button-white-transparent">MORE INFO</a>
                </div>
            </div>
        </section>

        <section class='other-jumbotron'>
            <h1>OTHER INFORMATION</h1>
        </section>

        <section class='other'>
            <div class='other-wrapper'>
                <div class='other-row'>
                    <a href="https://g.page/CourtyardBandungDago?share" target="_blank">
                        <div class='bg-maps'>
                            <h2>See on maps</h2>   
                        </div>
                    </a>
                    <a href="https://www.marriott.com/hotels/travel/bdocy-courtyard-bandung-dago/">
                        <div class='bg-mariott'>
                            <h2>Visit Mariott.com</h2>
                        </div>
                    </a>
                </div>
            </div>  
        </section>

        @include('components.footer-main')
    </main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection
