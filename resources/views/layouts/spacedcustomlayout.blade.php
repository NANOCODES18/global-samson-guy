

<!DOCTYPE html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <title>{{$title}} | {{$company_features? $company_features->companyname :"No company name set"}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="{{asset('img/bitpaddyltd_icon.jpg')}}" rel="icon">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet"> 
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        
    </head>

    <body>
      <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->    <div class="wrapper">


            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="{{route('index')}}">
                                    <!-- <h1>Builderz</h1> -->
                                    <img src="{{asset('img/Bitpaddy-logo.png')}}" alt="{{$company_features? $company_features->companyname :"No company name set"}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - sun, 8:00 - 9:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="ytWidget" style="float: right !important;     position: fixed; z-index: 1000;right: 10px;bottom: 100px;"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=true" type="text/javascript"></script>
			
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>{{$company_features? $company_features->companyphone :"No company phone set"}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Mail Us</h3>
                                            <p>{{$company_features? $company_features->companyemail :"No company email set"}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ytWidget" style="float: right !important;     position: fixed; z-index: 1000;right: 10px;bottom: 100px;"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=true" type="text/javascript"></script>
			
            <!-- Top Bar End -->



            <!-- Nav Bar Start -->
            <div class="nav-bar" style="background-color: #030f27;">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="{{route('login')}}" class="navbar-brand"><h3 style="color:white">LOGIN</h3></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{route('index')}}" class="nav-item nav-link ">HOME</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">ABOUT US</a>
                                    <div class="dropdown-menu">
                                        <a href="{{route('about')}}" class="dropdown-item">About Us</a>
                                         <a href="#" class="dropdown-item"><hr></a>
                                        <a href="{{route('terms')}}" class="dropdown-item">Term And Condition</a>
                                    </div>
                                </div>

                                 <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">LOG IN</a>
                                    <div class="dropdown-menu">
                                        <a href="{{route('login')}}" class="dropdown-item">Access  Account</a>
                                        <a href="#" class="dropdown-item"><hr></a>
                                        <a href="{{route('password.request')}}" class="dropdown-item">Retrive Account</a>
                                    </div>
                                </div>

                                <a href="{{route('register')}}" class="nav-item nav-link">CREATE ACCOUNT</a>
                                <a href="{{route('faq')}}" class="nav-item nav-link">F.A.Q</a>
                                <a href="{{route('contact')}}" class="nav-item nav-link">CONTACT US</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{asset('img/bitpaddyltd%20certificate%20of%20incorporation.pdf')}}" target="_blank">VIEW COMPANY CERTIFICATE</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->


          

             <div style="padding:10px;background-color:#ba7803;background-image: url('{{asset("img/longlivechat.jpg")}}');background-size:cover;">
                 <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe>            </div>
           

								@yield('body')

								


								
            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s" style="border-top:10px solid #fdbe33;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>{{$company_features? $company_features->companylocation :"No company address set"}} </p>
                                <p><i class="fa fa-phone-alt"></i>{{$company_features? $company_features->companyphone :"No company phone set"}}</p>
                                <p><i class="fa fa-envelope"></i>{{$company_features? $company_features->companyemail :"No company email set"}}</p>
                                <p><a href="https://www.facebook.com/{{$company_features? $company_features->companyName :"No company name set"}}-101311525722961/" target="_blank" style=" color:white;"><i class="fab fa-facebook-f"></i> Facebook.com/{{$company_features? $company_features->companyname :"No company name set"}}</a></p>
                                <p>
                                <a href="https://www.instagram.com/{{$company_features? $company_features->companyName :"No company name set"}}" target="_blank" style=" color:white;"><i class="fab fa-instagram"></i>@ {{$company_features? $company_features->companyname :"No company name set"}}</a>
                                </p>
                            <div class="footer-social">
                               <img src="{{asset('img/lock/avg.png')}}" width="30%">
                               <img src="{{asset('img/lock/dnb.png')}}" width="30%">
                               <img src="{{asset('img/lock/geo.png')}}" width="30%">
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Account Areas</h2>
                                <a href="{{route('login')}}">Login</a>
                                <a href="{{route('register')}}">Sign Up</a>
                                <a href="{{route('password.request')}}">forget Password</a>
                                <a href="{{asset('img/bitrally%20certificate%20of%20incorporation.pdf')}}" target="_blank">View Certificate</a>
                                <a href="https://find-and-update.company-information.service.gov.uk/company/13115652" target="_blank">Verify Certificate</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="{{route('about')}}">About Us</a>
                                <a href="{{route('contact')}}">Contact Us</a>
                                <a href="{{route('terms')}}">Teams and Conditions</a>
                                <a href="{{route('faq')}}">F.A.Q</a>
                                <a href="{{route('login')}}">Start Earning</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Daily News Feed</h2>
                                <p>
                                    You are a member or not but you wish to get daily news feed from us <b>{{$company_features? $company_features->companyname :"No company name set"}}</b>. Drop your mail to gain access free

                                </p>
                                <div class="form">
                                    <form method="post">
                                                                                <input name="email" class="form-control" placeholder="Email here" required>
                                        <button type="button" name="" class="btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="#">
    <div id="google_translate_element" class="google_translate" style="border:2px solid #ffa800;padding:5px;border-radius:7px;"></div> <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({
              pageLanguage: 'en',
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
          }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>                                
                                
                        </a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">{{$company_features? $company_features->companyname :"No company name set"}}.top</a>, All Right Reserved. 2021 </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                        <a href="#"><img src="{{asset('img/payment/pay3.png')}}" width="10%"></a>
                          <a href="#"><img src="{{asset('img/payment/pay1.png')}}" width="10%"></a>
                          <a href="#"><img src="{{asset('img/payment/pay2.png')}}" width="10%"></a>
                          <a href="#"><img src="{{asset('img/payment/pay4.png')}}" width="10%"></a>
                          <a href="#"><img src="{{asset('img/payment/pay5.png')}}" width="10%"></a>
                          <a href="#"><img src="{{asset('img/payment/pay6.png')}}" width="10%"></a>
                          <a href="#"><img src="{{asset('img/payment/pay7.png')}}" width="10%"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('lib/slick/slick.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/stats.js')}}"></script>


 
     
    </body>

	</html>
