
<!DOCTYPE html >
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/admiro/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jan 2025 22:15:08 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>SYNCSPORT</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('storage/backend/assets2/images/favicon.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('storage/backend/assets2/images/favicon.png') }}" type="image/x-icon"/>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{ asset('storage/backend/assets2/css/vendors/flag-icon.css') }}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('storage/backend/assets2/css/iconly-icon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('storage/backend/assets2/css/bulk-style.css') }}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('storage/backend/assets2/css/themify.css') }}"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="{{ asset('storage/backend/assets2/css/fontawesome-min.css') }}"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/backend/assets2/css/vendors/weather-icons/weather-icons.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/backend/assets2/css/vendors/scrollbar.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/backend/assets2/css/vendors/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/backend/assets2/css/vendors/slick-theme.css') }}"/>
    <link rel="stylesheet" href="https://cdn.iconly.com/fonts/iconly.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('storage/backend/assets2/css/style.css') }}"/>
    <link id="color" rel="stylesheet" href="{{ asset('storage/backend/assets2/css/color-1.css') }}" media="screen"/>
  </head>
  <body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 
      <header class="page-header row">
        @include('backend.body.header')
      </header>
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
        <!-- Page sidebar start-->
        <aside class="page-sidebar"> 
          @include('backend.body.sidebar')
        </aside>
        <!-- Page sidebar end-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              @include('backend.body.breadcrumb')
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
                @yield('content')
            </div>
          </div>
        </div>
        <footer class="footer"> 
         @include('backend.body.footer')
        </footer>
      </div>
    </div>
    <!-- jquery-->
    <script src="{{ asset('storage/backend/assets2/js/vendors/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('storage/backend/assets2/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer=""></script>
    <script src="{{ asset('storage/backend/assets2/js/vendors/bootstrap/dist/js/popper.min.js') }}" defer=""></script>
    <!--fontawesome-->
    <script src="{{ asset('storage/backend/assets2/js/vendors/font-awesome/fontawesome-min.js') }}"></script>
    <!-- feather-->
    <script src="{{ asset('storage/backend/assets2/js/vendors/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('storage/backend/assets2/js/vendors/feather-icon/custom-script.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('storage/backend/assets2/js/sidebar.js') }}"></script>
    <!-- height_equal-->
    <script src="{{ asset('storage/backend/assets2/js/height-equal.js') }}"></script>
    <!-- config-->
    <script src="{{ asset('storage/backend/assets2/js/config.js') }}"></script>
    <!-- apex-->
    <script src="{{ asset('storage/backend/assets2/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('storage/backend/assets2/js/chart/apex-chart/stock-prices.js') }}"></script>
    <!-- scrollbar-->
    <script src="{{ asset('storage/backend/assets2/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('storage/backend/assets2/js/scrollbar/custom.js') }}"></script>
    <!-- slick-->
    <script src="{{ asset('storage/backend/assets2/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('storage/backend/assets2/js/slick/slick.js') }}"></script>
    <!-- data_table-->
    <script src="{{ asset('storage/backend/assets2/js/js-datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('storage/backend/assets2/js/js-datatables/datatables/datatable.custom.js') }}"></script>
    <!-- page_datatable1-->
    <script src="{{ asset('storage/backend/assets2/js/js-datatables/datatables/datatable.custom1.js') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('storage/backend/assets2/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!-- theme_customizer-->
    <script src="{{ asset('storage/backend/assets2/js/theme-customizer/customizer.js') }}"></script>
    <!-- tilt-->
    <script src="{{ asset('storage/backend/assets2/js/animation/tilt/tilt.jquery.js') }}"></script>
    <!-- page_tilt-->
    <script src="{{ asset('storage/backend/assets2/js/animation/tilt/tilt-custom.js') }}"></script>
    <!-- dashboard_1-->
    <script src="{{ asset('storage/backend/assets2/js/dashboard/dashboard_1.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('storage/backend/assets2/js/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" 
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
    
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": "5000", // Durée d'affichage
            "extendedTimeOut": "2000",
            "positionClass": "toast-top-right", // Position
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    
        var message = "{{ Session::get('message') }}";
    
        // Gérer les types d'alertes avec des styles personnalisés
        switch (type) {
            case 'info':
                toastr.info(message).css({
                    "background-color": "#3498db", // Bleu pour info
                    "color": "#ffffff" // Texte blanc
                });
                break;
    
            case 'success':
                toastr.success(message).css({
                    "background-color": "#000000", // Vert pour succès
                    "color": "#ffffff" // Texte blanc
                });
                break;
    
            case 'warning':
                toastr.warning(message).css({
                    "background-color": "#f1c40f", // Jaune pour warning
                    "color": "#000000" // Texte noir
                });
                break;
    
            case 'error':
                toastr.error(message).css({
                    "background-color": "#e74c3c", // Rouge pour erreur
                    "color": "#ffffff" // Texte blanc
                });
                break;
    
            default:
                toastr.info(message).css({
                    "background-color": "#95a5a6", // Gris pour les cas non définis
                    "color": "#ffffff" // Texte blanc
                });
                break;
        }
        @endif
    </script>
  </body>

<!-- Mirrored from admin.pixelstrap.net/admiro/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Jan 2025 22:17:03 GMT -->
</html>