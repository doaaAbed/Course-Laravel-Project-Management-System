<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>@yield('title_page')</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
     <!-- FONT AWESOME-->
   <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="{{asset('assets/vendor/animate.css/animate.min.css')}}">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="{{asset('assets/vendor/whirl/dist/whirl.css')}}">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" id="maincss">
   @yield('page_level_css')
</head>

<body>



   <div class="wrapper">
      <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
         <div class="panel panel-dark panel-flat">
          @yield('alert')
            <div class="panel-heading text-center">
               <a href="#">
                  <img src="{{asset('assets/img/logo.png')}}" alt="Image" class="block-center img-rounded">
               </a>
            </div>
            <div class="panel-body">
     
               <p class="text-center pv"> @yield('title_form')</p>
          @yield('form_section')

             </div>
         </div>
         <!-- END panel-->
         <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2016</span>
            <span>-</span>
            <span>Angle</span>
            <br>
            <span>Developed by D.F.A</span>
         </div>
      </div>
   </div>
    
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->

    <script src="{{asset('assets/vendor/modernizr/modernizr.custom.js')}}"></script>
   <!-- JQUERY-->
<script src="{{asset('assets/vendor/jquery/dist/jquery.js')}}"></script>
   <!-- BOOTSTRAP-->
   <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
   <!-- STORAGE API-->
   <script src="{{asset('assets/vendor/jQuery-Storage-API/jquery.storageapi.js')}}"></script>
   <!-- PARSLEY-->
   <script src="{{asset('assets/vendor/parsleyjs/dist/parsley.min.js')}}"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="{{asset('assets/js/app.js')}}"></script>
  @yield('additional_script')
  @yield('page_level_js')
</body>

</html>
