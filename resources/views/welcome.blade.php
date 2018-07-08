<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qube Gallery</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/welcome.css')}}">
    </head>
    <body>
        <div id="app">
            {{-- SITE NAV SECTION --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <img src="{{asset('/images/site-logo.png')}}">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto"></div>
                
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link scroll" href="#carouselExampleIndicators">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item cool-link">
                    <a class="nav-link scroll" href="#">Artists</a>
                  </li>
                  <li class="nav-item cool-link">
                    <a class="nav-link scroll" href="#">Gallery</a>
                  </li>
                  <li class="nav-item cool-link">
                    <a class="nav-link scroll" href="#about-us">About Us</a>
                  </li>
                  <li class="nav-item cool-link">
                    <a class="nav-link scroll" href="#">Blog</a>
                  </li>
                  <li class="nav-item cool-link">
                    <a class="nav-link scroll" href="#contact-us">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
            {{-- END OF SITE NAV SECTION--}}

            {{-- IMAGE SLIDER SECTION --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img class="" src="{{asset('/images/slider/slider-1.jpg')}}" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/images/slider/slider-2.jpg')}}" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/images/slider/slider-3.jpg')}}" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        {{-- END OF SLIDER SECTION--}}

        {{-- ABOUT US SECTION --}}
        <section id="about-us">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{asset('/images/about-us.jpg')}}" width="550px">
                </div>
                <div class="col-md-5">
                    <p>Located in Cebu, the oldest city in the Philippines, Qube Gallery is a contemporary art space created in 2013 to cater to the largest creative community outside of Metro Manila. By providing agency through education, platform, and wider connectivity to both established and new artists from the Southern Philippines, Qube Gallery posits a frontier—albeit not new but still largely uncharted—by deconstructing the local/global dichotomy through emphasis on representation of the multi-cultural and minority whose identities and identifications define an archipelagic nation.</p>
                </div>
            </div>
            <div class="video-layer">
                <iframe width="100%" height="600" src="https://www.youtube.com/embed/FavjEfYr_pY?feature=oembed&amp;wmode=opaque" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
            </div>
                    <p>The context of the contemporary arts which Qube Gallery caters to arose from the specific history of the city, wherein decades of art practice—from religious 19th century Spanish colonial art down to modern art—experienced an abrupt unfurling through the introduction of the Fine Arts Program of the University of the Philippines Cebu in 1975, the first formal fine arts school outside the capital and soon after the fine arts of the University of San Carlos. Succeeding cultural infrastructures were put in place over the years, such as prestige student art- activities (U.P. Annual Joya Art Competition and Mindworks performance art festival), arts-based communities, alternative spaces, and artist’s groups and associations. The local visual art scene, then mostly supported by conservative collector patronage, imploded with a new generation of artists both self-taught and schooled by the academy. But while active cultural production enabled these artists with theoretical and practical skills, material conditions could not accommodate the influx of talents through the years looking for wage-earning opportunities. The surplus of this specific labor power and its search for realization through recognition/profit/survival is an ongoing narrative against which the gallery chooses its artists to represent and promote to the local and global art community.</p>

        </section>
        {{-- END OF ABOUT US SECTION --}}

        {{-- CONTACT US SECTION --}}
        <section id="contact-us">
            <div class="container">
                <form>
                    <fieldset>
                        <legend>Contact Us</legend>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="fname">First Name*</label>
                                      <input type="text" name="fname" class="form-control" id="fname" autocomplete="off" value="{{old('fname')}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="mname">Middle Name*</label>
                                      <input type="text" name="mname" class="form-control" id="mname" autocomplete="off" value="{{old('mname')}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="lname">Last Name*</label>
                                      <input type="text" name="lname" class="form-control" id="lname" autocomplete="off" value="{{old('lname')}}">
                                    </div>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="cnumber">Contact Number*</label>
                                      <input type="text" name="cnumber" class="form-control" id="cnumber" autocomplete="off" value="{{old('cnumber')}}">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="email">Email Address*</label>
                                      <input type="email" value="{{old('email')}}" name="email" class="form-control" id="email" autocomplete="off">
                                    </div> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="message">Message*</label>
                                      <textarea type="text" value="{{old('message')}}" name="message" class="form-control" id="message" autocomplete="off"></textarea>
                                    </div> 
                                </div>
                            </div>
                    </fieldset>
                    <a href="#" class="btn btn-primary">Submit</a>
                </form>
            </div>
        </section>
        {{-- END OF CONTACT US SECTION --}}

        <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // ADD BACKGROUND ON NAV WHEN SCROLL
                $(window).scroll(function() {
                   if($(window).scrollTop()) {
                       $('.bg-light').addClass('nav-bg-on-scroll');
                   } 
                    else {
                        $('.bg-light').removeClass('nav-bg-on-scroll');
                    }
                });

                var scrollLink = $('.scroll');
                
                scrollLink.click(function(e) {
                    e.preventDefault();
                    
                    $('body,html').animate({
                        
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                   
                });


                $(window).scroll(function() {
                var scrollLocation = $(this).scrollTop();

                scrollLink.each(function() {
                    var sLink = $(this.hash);

                    if(sLink.length) {
                        var sectionOffset = sLink.offset().top - 20
                    
                        if( sectionOffset <= scrollLocation ) {
                            $(this).parent().addClass('active');
                            $(this).parent().removeClass('cool-link');
                            $(this).parent().siblings().addClass('cool-link')
                            $(this).parent().siblings().removeClass('active');
                        }
                    }
                    
                    });
                });


                var $item = $('.carousel-item'); 
                var $wHeight = $(window).height();
                $item.eq(0).addClass('active');
                $item.height($wHeight); 
                $item.addClass('full-screen');

                $(window).on('resize', function (){
                  $wHeight = $(window).height();
                  $item.height($wHeight);
                });
                $('.carousel').carousel({
                  interval: 5000
                })
            });
        </script>
    </body>
</html>
