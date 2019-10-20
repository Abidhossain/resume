<!DOCTYPE html>
<html lang="en" class="no-js">  
      <meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <title>@yield('title')</title>
   @include('frontend.inc.header')
   @yield('custom_css')
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header">
        <?php 
          $data = DB::table('basic_infos')->first();
        ?>
        <div class="my-photo">
          <img src="{{$data->user_photo}}" alt="image">
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">{{$data->user_name}}</h1>
          <p class="site-description">{{$data->user_occupation}}</p>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </header>
      <!-- /Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Navigation & Social buttons -->
         @include('frontend.inc.top-header')
          <!-- Navigation & Social buttons -->

          <!-- Subpages -->
          <div class="subpages">
            <!-- About Me Subpage -->
         @yield('about_section')
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage --> 
         @yield('resume_section')
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            @yield('portfolio_section')
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            @yield('blog_section')
            <!-- End Blog Subpage -->

            <!-- Contact Subpage -->
            @yield('contact_section')
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
   @include('frontend.inc.footer')
   @yield('custom_script')
  </body> 
</html>
