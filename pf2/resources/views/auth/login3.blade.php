
<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - Login</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("admin/assets/img/apple-touch-icon.png") }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("admin/assets/img/favicon-32x32.png") }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("admin/assets/img/favicon-16x16.png") }}">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset("admin/assets/vendors/css/base/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("admin/assets/vendors/css/base/elisyam-1.5.min.css") }}">
        <link rel="stylesheet" href="{{ asset("admin/assets/css/animate/animate.min.css") }}">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src= "{{ asset("admin/assets/img/logo.png") }}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-1 col-lg-3 col-md-3 col-sm-9 col-9 no-padding">
                    <div class="elisyam-bg  ">
                        
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <h3>Workana</h3>
                              <div align="center">
                                    <img src= "{{ asset("admin/carro.png") }}"  width="200px">
                              </div>
                              <br>




                                <form method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}

                                    <div class="group material-input">
        							    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Username</label>
                                    </div>

                                    <div class="group material-input">
        							    <input id="password" type="password" name="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Password</label>
                                    </div>

                                    <div class="sign-btn text-center">
                                        <button type="submit" class="btn btn-lg btn-gradient-01">Ingresar</button>
                                    </div>
                                </form>
                                




                                <?php
                                    //$ingresar = new MvcController();
                                    //$ingresar -> ingresoUsuarioController();
                                ?>
                            </div>
                            <!-- End Sign In -->
                        </div>
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="{{ asset("admin/assets/vendors/js/base/jquery.min.js") }}"></script>
        <script src="{{ asset("admin/assets/vendors/js/base/core.min.js") }}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{ asset("admin/assets/vendors/js/app/app.min.js") }}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{ asset("admin/assets/js/components/tabs/animated-tabs.min.js") }}"></script>
        <!-- End Page Snippets -->
    </body>
</html>