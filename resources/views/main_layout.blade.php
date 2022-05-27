<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ubios</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->

    <link rel="stylesheet" href="{{ asset('css/ubi/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('css/ubi/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ubi/font-awesome.min.css')}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield("scripts-added")

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

<div id="ubios">
    @yield("section")
</div>




<!-- Button trigger modal -->

@yield("js-scripts")


<!-- JS here -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
{{--<script src="{{ asset('js/ajax-form.js')}}"></script>--}}
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('js/scrollIt.js')}}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/nice-select.min.js')}}"></script>
<script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>
<!-- <script src="js/gijgo.min.js"></script> -->
<script src="{{ asset('js/slick.min.js')}}"></script>



<!--contact js-->
<script src="{{ asset('js/contact.js')}}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('js/jquery.form.js')}}"></script>
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('js/mail-script.js')}}"></script>


<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>




</body>

</html>
