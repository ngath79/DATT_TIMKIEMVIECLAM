<!DOCTYPE html>
<html lang="en">
<head>
    <?php use Illuminate\Support\Facades\DB;
    $footer_setting = \App\Models\FooterSetting::all();
    ?>
    @foreach($footer_setting as $st)
        <link href="{{asset('logo/'. $st->logo)}}" rel="icon">
    @endforeach
    @include("user.elements.lib")
</head>
<body>

<!-- ======= Top Bar ======= -->
@include("user.elements.topbar")

<!-- ======= Header ======= -->
@include("user.elements.header")

<!-- ======= Hero Section ======= -->
{{--@include("user.elements.banner")--}}
<main>
    @yield('content')
</main>

<!-- ======= Footer ======= -->

<!-- <div id="preloader"></div> -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<!-- Vendor JS Files -->
<script src="{{asset('frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>
@include("user.elements.footer")

</html>
