<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}" <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('title')</title>


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="backend/assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="backend/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="backend/assets/dist/css/style.min.css" rel="stylesheet" />

    <!-- Datatable CSS -->
    <link href="backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />

    <!-- form css -->
    <link rel="stylesheet" type="text/css" href="backend/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="backend/assets/libs/quill/dist/quill.snow.css" />
    <link rel="stylesheet" type="text/css" href="backend/assets/libs/select2/dist/css/select2.min.css" />

    <!-- Ajax files -->
    <link rel="stylesheet " href="backend/assets/sweetalert2.min.css">
    <link rel="stylesheet " href="backend/assets/toastr/toastr.css">


    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('backend.body.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.body.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->




            <!-- ============================================================== -->
            <!-- <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Library
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->




            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('admin')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="backend/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="backend/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="backend/assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="backend/assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="backend/assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="backend/assets/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="backend/assets/libs/flot/excanvas.js"></script>
    <script src="backend/assets/libs/flot/jquery.flot.js"></script>
    <script src="backend/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="backend/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="backend/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="backend/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="backend/assets/dist/js/pages/chart/chart-page-init.js"></script>
    <script src="backend/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Form script -->
    <script src="backend/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="backend/assets/dist/js/pages/mask/mask.init.js"></script>
    <script src="backend/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="backend/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="backend/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="backend/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="backend/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="backend/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="backend/assets/libs/quill/dist/quill.min.js"></script>

    <!-- Font Awesome CDN link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Ajax Files -->
    <script src="backend/assets/sweetalert2.min.js"></script>
    <script src="backend/assets/toastr/toastr.js"></script>

    <script>
        toastr.options.preventDuplicates = true;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {

            $('#add-std-form').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                //alert("data.msg");
                $.ajax({
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: new FormData(form),
                    dataType: 'json',
                    success: function(data) {
                        if (data.code == 0) {
                            $.each(data.error, function(prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $(form)[0].reset();
                            //alert(data.msg);
                            toastr.success(data.msg);
                        }
                    }
                })
            });
        });
    </script>




    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>

    <!-- ////////////////imageShow//////////    -->
    <script type="text/javascript">
        function imageShow(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

</html>