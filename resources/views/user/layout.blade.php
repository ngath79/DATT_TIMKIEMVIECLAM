<!DOCTYPE html>
<html lang="en">
<head>
    <?php use Illuminate\Support\Facades\DB;
    $footer_setting = \App\Models\FooterSetting::all();
    ?>
    @foreach($footer_setting as $st)
        <link href="{{url('public/logo/'. $st->logo)}}" rel="icon">
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

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>