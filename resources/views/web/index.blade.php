<!doctype html>
<html class="no-js" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgriConnect | Your Agriculture Partner</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="shortcut icon" href="{{ asset('frontend/logo/fav_icon_latest.png') }}" />


@include('web.frontend.layouts.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shepherd.js@13.0.0/dist/css/shepherd.css">
<style>
    /* Customize the Shepherd.js tooltip */
    .shepherd-theme-arrows .shepherd-content {
      background: linear-gradient(45deg, #6a11cb, #2575fc); /* Gradient background */
      color: white; /* White text */
      border-radius: 12px; /* Rounded corners */
      font-family: 'Arial', sans-serif; /* Custom font */
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Drop shadow */
    }
  
    /* Customize the title text */
    .shepherd-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
  
    /* Customize the description text */
    .shepherd-text {
      font-size: 1rem;
      line-height: 1.5;
    }
  
    /* Customize buttons */
    .shepherd-footer .shepherd-button {
      background: #ff7b00; /* Orange background */
      color: white; /* White text */
      border: none;
      padding: 10px 15px;
      font-size: 1rem;
      border-radius: 8px; /* Rounded buttons */
      cursor: pointer;
      transition: background 0.3s ease;
    }
  
    /* Button hover effect */
    .shepherd-footer .shepherd-button:hover {
      background: #ff9f40; /* Lighter orange */
    }
  
    /* Customize arrows */
    .shepherd-theme-arrows .shepherd-arrow {
      border-color: transparent #6a11cb transparent transparent; /* Change arrow color */
    }
  </style>
  
</head>

<body class="home page-template-default page page-id-636 theme-backhoe woocommerce-no-js wd_page_transitions wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
    <div class="page-loading">
        <div class="spinner-loading">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    {{-- <div id="navbar">Navigation Bar</div>
    <button id="profile-button">Profile</button>
    <button id="logout-button">Logout</button> --}}
     <!-- Tour ko start karne ka button -->
  <button onclick="startTour()">Start Tour</button>
    <div id="spaces-main" class="pt-perspective ">


        @include('web.frontend.layouts.navbar')

        @yield('main-container')

    </div>

    @include('web.frontend.layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@9.1.0/dist/js/shepherd.min.js"></script>
    <script src="{{asset('tour.js')}}"></script>
</body>
</html>
