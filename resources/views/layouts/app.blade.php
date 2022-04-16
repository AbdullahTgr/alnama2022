<!DOCTYPE html>

<?php 

$me = DB::select('select * from users where id=? ',[1]);
?>




<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" /> 
        <meta name="author" content="" />

        <title> شركة النماء للتعبئة والتغليف ,آلات التعبئة والتغليف - خطوط إنتاج الشيبس - ماكينات تعبئة و تغليف ماكينات تعبئة الزيت , ماكسنات تعبئة السكر ,ماكينات تعبئة الارز , ماكينات تعبئة الدقيق  </title>
        <meta name="description" content="ماكينات تعبئة الزيت , ماكسنات تعبئة السكر ,ماكينات تعبئة الارز , ماكينات تعبئة الدقيق, شركة  متخصصة في مجال صناعة خطوط إنتاج شيبس الذرة وخطوط قلي الشيبس و آلات التعبئة و التغليف الغذائية المطابقة لمعايير الجودة العالمية ISO 9001,ماكينات التعبئة والتغليف الغذائية بنظام العمل الوزني والحجمي الميكانيكي التي تلبي كافة احتياجاتكم في مجال تعبئة الشيبس والمواد الغذائية - موديل ألماني - صناعة   ">
        <meta name="author" content="">
        <meta name="keywords" content=" ,ماكينات تعبئة الزيت , ماكسنات تعبئة السكر ,ماكينات تعبئة الارز , ماكينات تعبئة الدقيق, خطوط إنتاج الشيبس,أحدث خطوط الشيبس,شيبس النفش,شيبس البفك,اكسترود شيبس الذرة,مكينات شيبس الذرة,شيبس الذرة,صناعة الشيبس ,تصنيع مكنات الشيبس,صناعة مكنات الشيبس,شيبس النفش,جبس الذرة,مصانع,فوول اوتوماتيك,خطوط انتاج شيبس الذرة,خطوط شيبس الذرة,خطوط انتاج الشيبس,خطوط انتاج الجبس,خطوط انتاج سناكس,سناكس الذرة,تعبئة وزنية,مكنات تعبئة وزنية,تعبئةالمكسرات,تعبئة الشاي,تعبئة البقوليات,تعبئة سكاكر,تعبئة شيبس,تعبئة تمر,تعبئة موالح,تعبئة كرزات,تعبئة فواكة مجففة,تعبئة نودلز,أبو,شركات التعبئة والتغيلف,مصانع التعبئة والتغليف,تعبئة وتغليف ,خطوط قلي شيبس البيلت,خطوط قلي شيبس البلت,خطوط البيلت,خطوط القلي للشيبس,قلايات شيبس,مصانع شيبس البيلت,مصانع انتاج شيبس البيلت,خطوط قلي الشيبس,صناعة مكنات الشيبس ,تصنيع مكنات الشيبس ,تعبئة وتغليف,ماكينات تعبئة وتغليف,ماكينات تعبئة وتغليف,آلات التعبئة والتغليف الغذائية,مكنات تعبئة المواد الغذائية">
        <meta name="Image" content="assets/logos/namaa.png">
        <meta name="NewImage" content="">
        <meta name="NewsTopics" content="assets/logos/namaa.png">
        <meta name="twitter:card" content="">
        <meta name="twitter:title" content="آلات التعبئة والتغليف - خطوط إنتاج الشيبس - ماكينات تعبئة و تغليف ">
        <meta name="twitter:description" content="شركة  متخصصة في مجال صناعة خطوط إنتاج شيبس الذرة وخطوط قلي الشيبس و آلات التعبئة و التغليف الغذائية المطابقة لمعايير الجودة العالمية ISO 9001,ماكينات التعبئة والتغليف الغذائية بنظام العمل الوزني والحجمي الميكانيكي التي تلبي كافة احتياجاتكم في مجال تعبئة الشيبس والمواد الغذائية - موديل ألماني - صناعة   ">
        <meta name="twitter:image" content="">
        <meta name="twitter:image:src" content="assets/logos/namaa.png">
        <meta name="twitter:image:alt" content="آلات التعبئة والتغليف - خطوط إنتاج الشيبس - ماكينات تعبئة و تغليف ">
        <meta property="fb:app_id" content="">
        <meta property="og:url" content="https://al-namapacking.com/">
        <meta property="og:type" content="خطوط إنتاج الشيبس,أحدث خطوط الشيبس,شيبس النفش,شيبس البفك,اكسترود شيبس الذرة,مكينات شيبس الذرة,شيبس الذرة,صناعة الشيبس ,تصنيع مكنات الشيبس,صناعة مكنات الشيبس,شيبس النفش,جبس الذرة,مصانع,فوول اوتوماتيك,خطوط انتاج شيبس الذرة,خطوط شيبس الذرة,خطوط انتاج الشيبس,خطوط انتاج الجبس,خطوط انتاج سناكس,سناكس الذرة,تعبئة وزنية,مكنات تعبئة وزنية,تعبئةالمكسرات,تعبئة الشاي,تعبئة البقوليات,تعبئة سكاكر,تعبئة شيبس,تعبئة تمر,تعبئة موالح,تعبئة كرزات,تعبئة فواكة مجففة,تعبئة نودلز,شركات التعبئة والتغيلف,مصانع التعبئة والتغليف,تعبئة وتغليف ,خطوط قلي شيبس البيلت,خطوط قلي شيبس البلت,خطوط البيلت,خطوط القلي للشيبس,قلايات شيبس,مصانع شيبس البيلت,مصانع انتاج شيبس البيلت,خطوط قلي الشيبس,أبو ,صناعة مكنات الشيبس ,تصنيع مكنات الشيبس ,تعبئة وتغليف,ماكينات تعبئة وتغليف,ماكينات تعبئة وتغليف,آلات التعبئة والتغليف الغذائية,مكنات تعبئة المواد الغذائية">
        <meta property="og:title" content="آلات التعبئة والتغليف - خطوط إنتاج الشيبس - ماكينات تعبئة و تغليف ">
        <meta property="og:description" content="شركة  متخصصة في مجال صناعة خطوط إنتاج شيبس الذرة وخطوط قلي الشيبس و آلات التعبئة و التغليف الغذائية المطابقة لمعايير الجودة العالمية ISO 9001,ماكينات التعبئة والتغليف الغذائية بنظام العمل الوزني والحجمي الميكانيكي التي تلبي كافة احتياجاتكم في مجال تعبئة الشيبس والمواد الغذائية - موديل ألماني - صناعة   ">
        <meta property="og:image" content="assets/logos/namaa.png">





        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logos/namaa.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
  
  
<link rel="stylesheet" href="{{asset('css/main.css')}}">

<link href="sty/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="sty/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

@if (!isset($langu))
@php

$langu='ar'
@endphp
@endif

@if ($langu=="ar")

    @if(substr(last(request()->segments()),0,4)=='cats'||substr(last(request()->segments()),0,4)=='dash'||substr(last(request()->segments()),0,4)=='prod'||substr(last(request()->segments()),0,4)=='prof'
    ||substr(last(request()->segments()),0,4)=='part' ||substr(last(request()->segments()),0,8)=='quickmsg' ||substr(last(request()->segments()),0,4)=='clin'||substr(last(request()->segments()),0,4)=='cont')
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/app.ar.css') }}" rel="stylesheet">   
    @endif



                  
@else
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endif
        


<link href="{{ asset('css/footer.css') }}" rel="stylesheet"> 


<!-- Core theme JS-->
<script href="{{ asset('js/app.js') }}"></script>
<script href="{{ asset('js/js.js') }}"></script>
 

    </head>
    <body id="page-top">
<!-- Page Content -->
@if (!isset($nav))

    @if (substr(last(request()->segments()),0,4)!='show'||substr(last(request()->segments()),0,8)!='products')
        @include('layouts.navbar')
    @else
        @include('layouts.navbarshow')
    @endif


@endif

@yield('content') 

    </body>
@include('layouts.footer')

@yield('scripts') 


<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{asset('js/soft-ui-dashboard.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<!-- Vendor JS Files -->
<script src="sty/assets/vendor/aos/aos.js"></script>
<script src="sty/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="sty/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="sty/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="sty/assets/vendor/php-email-form/validate.js"></script>
<script src="sty/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="sty/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="sty/assets/js/main.js"></script>
</html>
