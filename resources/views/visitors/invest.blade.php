<!DOCTYPE html>
<html lang="en">
 
<!-- Mirrored from 127.0.0.1:8000/invest by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:49:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet"/>
  <title>{{$title}} | {{$company_features? $company_features->companyname :"No company name set"}}</title>
  <link href="static/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
   <link href="https://fonts.googleapis.com/" rel="preconnect"/>
   <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
   <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
   <link crossorigin="anonymous" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" referrerpolicy="no-referrer" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="static/temp/css/fontawesome-all.min.css" rel="stylesheet"/>

    <link href="static/css/style.css" rel="stylesheet"/>
    <script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript">
    </script>
     <script src="../code.tidio.co_443/4cihkkybheqskao593ubrnyyzgcofntd.js" async></script>
   </link>
  </link>
 </head>
 <body>
  <section class="plansfront">
   <nav class="navbar navbar-expand-lg sticky-top change" id="navbar">
    <a class="navbar-brand" href="{{route('index')}}">
     <img alt="" height="42" src="logo.png" style="object-fit: contain;" width="220"/>
     <!-- {{$company_features? $company_features->companyname :"No company name set"}} -->
    </a>
    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div id="google_translate_element">
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="{{route('index')}}">
        HOME
        <span class="sr-only">
         (current)
        </span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('about')}}">
        ABOUT US
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('invest')}}">
        INVEST
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('blog')}}">
        BLOG
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('contact')}}">
        CONTACT US
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('testimony')}}">
        TESTIMONIES
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{route('faq')}}">
        FAQ
       </a>
      </li>
      <!-- <li class="nav-item">
       <a class="nav-link" href="/terms">
        Legal and Terms
       </a>
      </li> -->
      <li class="nav-item dropdown">
       <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="invest.html#" id="clientDropdown" role="button">
        CLIENT AREA
       </a>
       <div aria-labelledby="clientDropdown" class="dropdown-menu">
       <a class="dropdown-item" href="{{route('register')}}">SIGN UP</a>
      <a class="dropdown-item" href="{{route('login')}}">LOGIN</a>
       </div>
      </li>
     </ul>
    </div>
   </nav>
   <div class="overlay2">
   </div>
   <div class="text">
    <h1>
     INVEST WITH US
    </h1>
    <p>
     {{$company_features? $company_features->companyname :"No company name set"}} is dedicated to helping Investment enthusiasts reach their desired goals and broaden their financial horizons.
     <br/>
     We seek to provide maximum security, privacy and a world class investment expertise across the crypto market.
        Coupled with a wide range of experience in the market, we transform new investment ideas into practical investment
        products designed to deliver maximized R.O.Is despite our significantly minimized risk level.
    </p>
   </div>
  </section>
  <section id="eigth" style="padding-top: 75px;">
   <div class="container">
    <h2>
     Investment Plans
    </h2>
    <div class="row">
     <!-- <div class="col-md-1">
     </div> -->









     @if ($investmentplans)
@foreach ($investmentplans as $plan)

<div class="col-md-3">
      <div class="card card-body">
       <h5 class="card-title">
       {{$plan->name}} Plan
       </h5>
       <p class="card-text">
       ${{$plan->minimum}}
        <b>
         Minimum
        </b>
        - ${{$plan->maximum}}
        <b>
         Maximum
        </b>
       </p>
       <!-- <br> -->
       <p class="card-text">
        <b>Profit: </b> {{$plan->percentage}}% <span> Daily</span>
        <br/>
        <b> Arbitration duration: </b>7 days
       </p>
      
      <p class="card-text">
      {{$plan->refpercent}}%
        <br/>
       <b>Referral Profit</b> 
       </p>
       <a href="{{route('index')}}">
        GET STARTED
       </a>
      </div>
     </div>
    

    
@endforeach
    
@else

<h3>No investment plan set</h3>
    
@endif

     
   
     
    
     
    
     <div class="col-md-1">
     </div>
    </div>
    
  </section>
  <section id="seventh">
   <div class="container">
    <div class="row text-center row1">
     <div class="col-md-4">
      <h3>
       Contact Us
      </h3>
      <h5>
       Send Us A Message
      </h5>
      <form id="contactform" method="POST" action="{{route('postcontact')}}">
                @csrf
              <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
              </div>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="message" rows="4" cols="10" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn d-md-flex">Send</button>
            </form>
     </div>
     <div class="col-md-4" id="links">
      <h3>
       Sitemap
      </h3>
      <div class="links">
       <a href="{{route('index')}}">
        Home
       </a>
       <a href="{{route('about')}}">
        About Us
       </a>
       <a href="{{route('invest')}}">
        Invest
       </a>
       <a href="{{route('blog')}}">
        Blog
       </a>
       <a href="{{route('faq')}}">
        FAQ
       </a>
       <a href="{{route('index')}}">
        Login
       </a>
       <a href="{{route('index')}}">
        Sign Up
       </a>
      </div>
     </div>
     <div class="col-md-4">
      <img alt="website logo" height="40" src="logo.png" width="100"/>
      <h3>
      </h3>
      <div class="contacts">
        <p>
          Phone: <br>
            <a href="tel:+" style="text-decoration: none; color: white;">{{$company_features? $company_features->companyphone :"No company phone set"}}</a>
          
        </p>
        <p>
          
           Email: <br> <a href='mailto:{{($company_features)? $company_features->companyemail :"No company email set"}}' style="text-decoration: none; color: white;">{{($company_features)? $company_features->companyemail :"No company email set"}}</a>
          
          
        </p>
        <p>
          
          
            Address: <br>  {{$company_features? $company_features->companylocation :"No company address set"}}
          
          
        </p>
        <p>
         Second Address: None
          
        </p>
        
      </div>
     </div>
    </div>
   </div>
  </section>
  <div class="container-fluid" id="copyright">
   <p>
    Copyright © 2021 All Rights Reserved {{$company_features? $company_features->companyname :"No company name set"}}
   </p>
  </div>
  
  <script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" src="../code.jquery.com/jquery-3.2.1.slim.min.js">
  </script>
  <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
  </script>
  <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
  </script>
  <script src="static/js/script.js">
  </script>
  <script type="text/javascript">
   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
  </script>
 </body>

<!-- Mirrored from 127.0.0.1:8000/invest by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 20:49:16 GMT -->
</html>