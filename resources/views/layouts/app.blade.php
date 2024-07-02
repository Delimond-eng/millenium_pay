<!DOCTYPE html>
<html lang="en" dir="ltr"  style="--primary-rgb: 14, 107, 230;" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="RH Management application">
    <meta name="Author" content="Dev.Gaston Delimond">
    <meta name="keywords" content="IT Developer, Freelance developer, ">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- TITLE -->
    <title> Gestion RH | {{$title}} </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{asset('assets/icon-fonts/icons.css')}}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{asset('assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />

    <!-- NODE WAVES CSS -->
    <link href="{{asset('assets/libs/node-waves/waves.min.css')}}" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/simplebar/simplebar.min.css')}}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/%40simonwep/pickr/themes/nano.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css"')}}">

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}">


    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css')}}">
    <!-- STYLES SECTIONS -->
    @yield('styles')
    <!-- STYLES SECTIONS -->

    <!-- CHOICES JS -->
    <script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <!-- MAIN JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</head>

<body>


<!-- LOADER -->
<div id="loader">
    <img src="{{asset('assets/images/media/loader.svg')}}" alt="">
</div>
<!-- END LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="main-content app-content">
        @yield('content')
    </div>
    <!-- END MAIN-CONTENT -->
</div>
<!-- END PAGE-->


<div id="responsive-overlay"></div>

<!-- POPPER JS -->
<script src="{{asset('assets/libs/%40popperjs/core/umd/popper.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- NODE WAVES JS -->
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

<!-- SIMPLEBAR JS -->
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>

<script src="{{asset('assets/js/pages/simplebar-init.js')}}"></script>

<!-- COLOR PICKER JS -->
<script src="{{asset('assets/libs/%40simonwep/pickr/pickr.es5.min.js')}}"></script>

<!-- JSVECTOR MAPS JS -->
<script src="{{asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

<script src="{{asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- APEX CHARTS JS -->
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- CHARTJS CHART JS -->
<script src="{{asset('assets/libs/chart.js/chart.min.js')}}"></script>


<!-- SWEETALERT JS -->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>


<!-- CRM-Dashboard -->
<script src="{{asset('assets/js/pages/crm-dashboard-init.js')}}"></script>


<!-- STICKY JS -->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- APP JS -->
<script src={{asset('assets/js/app.js')}}></script>

<!-- BS SCRIPTS JS -->
<script src={{asset('assets/js/app/bs_scripts_init.js')}}></script>

<!-- BS EDITION JS -->
<script src={{asset('assets/js/app/edition.js')}}></script>





<!-- CUSTOM-SWITCHER JS -->
<script type="module" src="{{asset('assets/js/custom-switcher.js')}}"></script>


<script src="{{asset('assets/libs/jquery/jquery.js')}}"></script>
<!-- DATATABLES CDN JS -->
<script src="{{asset('https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js')}}"></script>
@yield('scripts')


<!-- END SCRIPTS -->

</body>

</html>
