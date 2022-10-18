{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="hero_home version_1">
        <div class="content">
            <h3>CONECTAT CU MEDICUL TĂU</h3>
             <p>
              
            </p>
            <form method="GET">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class="search-query" name="search" value="{{ request()->get('search') }}" placeholder="Caută medicul după nume sau specializare ....">
                        <input type="submit" class="btn_search" value="Search">
                    </div>
                    <p class="text-center margin_60_35"><a href="register-user" class="btn_1 medium">Crează cont</a></p>
                    <p class="text-center">Ai deja un cont?<a href="/login"> Login aici!</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- /Hero -->

    <div class="container margin_60_35">
        <div class="main_title">
            <h3>Acum ai oportunitatea de a fi mai aproape de medicii care au grijă de sănătatea ta!</h3>
            <p>Prin intermediul aplicației Medisbook este mult mai ușor să ții legătura cu medicul tău urmând 3 pași simplii:</br> <b>Caută, descoperă și conectează-te!</b>llll
            </p>
        </div>
        <div class="row add_bottom_30">
            <div class="col-lg-4">
                <div class="box_feat" id="icon_1">
                    <span></span>
                    <h3>Caută medicul tău</h3>
                    <p>Caută medicul tău după nume sau specializare.Folosește funcția de căutare sau de pe pagina medicilor.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_feat" id="icon_2">
                    <span></span>
                    <h3>Descoperă profilul</h3>
                    <p>Odată ce ai găsit medicul tău, intră pe profilul medicului și adaugă-l în lista ta de medici.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_feat" id="icon_3">
                    <h3>Conectează-te</h3>
                    <p>Trimiți și primești rezultatele medicului tău. De la o rețetă simplă până la scrisoare medicală.</p>
                </div>
            </div>
        </div>
        <!-- /row -->
        <p class="text-center"><a href="/list" class="btn_1 medium">Listă medici</a></p>

    </div>
    <!-- /container -->
    </div>
    <!-- /white_bg -->

    <div id="app_section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <p><img src="img/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
                </div>
                <div class="col-md-6">
                    <small>Application</small>
                    <h3>Download <strong>Findoctor App</strong> Now!</h3>
                    <p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
                    <div class="app_buttons wow" data-wow-offset="100">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
                        <path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
                        <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
                        <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
                    </svg>
                        <a href="#0" class="fadeIn"><img src="img/apple_app.png" alt="" width="150" height="50" data-retina="true"></a>
                        <a href="#0" class="fadeIn"><img src="img/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /app_section -->
<!-- /main content -->
@endsection

