@extends('layouts.template')
@extends('layouts.navegacion')
@extends('layouts.header')
    @section('content')
    <div class="content-inner">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{ asset("admin/assets/img/logo.png") }}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page db-social about">
            
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="compact-sidebar light-sidebar has-shadow">
                     
                </div>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
					<div class="jumbotron jumbotron-fluid"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                                <ul>
                                                    <li>
                                                        <div class="counter">8234</div>
                                                        <div class="heading">Comentarios</div>
                                                    </li>
                                                    <li>
                                                        <div class="counter">357</div>
                                                        <div class="heading">Likes</div>
                                                    </li>
                                                    <li>
                                                        <div class="counter">23</div>
                                                        <div class="heading">Products</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    <img class="rounded-circle" src="{{ asset("admin/assets/img/avatar/avatar-01.jpg") }}" alt="...">
                                                </div>
                                                <div class="infos">
                                                    <h2>{{$user->name}}</h2>
                                                    <div class="location">{{$user->email}}</div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                    <a class="btn btn-shadow" href="#"><i class="ti-pencil-alt"></i>Hacer comentario</a>
                                                    <div class="actions dark">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="#" class="dropdown-item"> 
                                                                    Report
                                                                </a>
                                                                <a href="#" class="dropdown-item"> 
                                                                    Block
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="head-nav nav nav-tabs justify-content-center">
                                            <li><a href="db-social.html">Timeline</a></li>
                                            <li><a class="active" href="pages-about.html">About</a></li>
                                            <li><a href="pages-friends.html">Friends</a></li>
                                            <li><a href="javascript:void(0);">Photos</a></li>
                                            <li><a href="javascript:void(0);">Videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row flex-row">
                                    <div class="col-xl-5">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Información general</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Perfil profesional:</div>
                                                    <div class="about-text">
                                                    {{$user->descripcion}}
                                                    </div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Correo electronico:</div>
                                                    <div class="about-text">{{$user->email}}</div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Tipo de usuario:</div>
                                                    <div class="about-text">{{$user->tipo_usuario}}</div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title">Fecha de registro:</div>
                                                    <div class="about-text">{{ $user->created_at }}</div>
                                                </div>
                                                <div class="about-infos d-flex flex-column">
                                                    <div class="about-title mr-auto">Ratings (21):</div>
                                                    <div class="about-text">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- Begin Column -->
                                    <div class="col-xl-7 column">
                                        <!-- Begin Education -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Education</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">The Art Institute (Atlanta):</div>
                                                        <div class="date">2005 - 2006</div>
                                                        <div class="about-text">Cras semper turpis arcu, in accumsan elit sagittis et. Nulla sed trnibh, vehicula blandit massa</div>
                                                    </div>
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">Epitech (Paris):</div>
                                                        <div class="date">2003 - 2005</div>
                                                        <div class="about-text">In et molestie risus. Etiam efficitur enim sit amet porttitor Nulla fermentum laoreet ipsum, vehicula</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">School of Visual Arts (Chicago):</div>
                                                        <div class="date">2001 - 2003</div>
                                                        <div class="about-text">Quisque tincidunt, dui efficitur elementum faucibus, est nunc ultricies lacus, et mattis neque nisi sollicitudin</div>
                                                    </div>
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">The Fake School:</div>
                                                        <div class="date">2000 - 2001</div>
                                                        <div class="about-text">Cras semper turpis arcu, in accumsan elit sagittis et. Nulla sed tristique nibh, vehicula blandit massa</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Education -->
                                        <!-- Begin Eployement -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Employement</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">Creative Media:</div>
                                                        <div class="date">2016 - 2018</div>
                                                        <div class="about-text">Cras semper turpis arcu, in accumsan elit sagittis et. Nulla sed tristique nibh, vehicula blandit massa</div>
                                                    </div>
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">Saerox Design:</div>
                                                        <div class="date">2015 - 2016</div>
                                                        <div class="about-text">In et molestie risus. Etiam efficitur enim sit amet porttitor rutrum. Nulla fermentum laoreet ipsum, vehicula</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">Pixel Bird:</div>
                                                        <div class="date">2014 - 2015</div>
                                                        <div class="about-text">Quisque tincidunt, dui efficitur elementum faucibus, est nunc ultricies lacus, et mattis neque nisi sollicitudin</div>
                                                    </div>
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">The Good Agency:</div>
                                                        <div class="date">2012 - 2014</div>
                                                        <div class="about-text">Cras semper turpis arcu, in accumsan elit sagittis et. Nulla sed tristique nibh, vehicula blandit massa</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">Elisyam Media:</div>
                                                        <div class="date">2010 - 2012</div>
                                                        <div class="about-text">Nullam id faucibus ipsum. Donec bibendum nibh et mi cursus tincidunt. Etiam id nisl sit amet nisi accumsan</div>
                                                    </div>
                                                    <div class="col-md-6 about-infos d-flex flex-column">
                                                        <div class="about-title">Awesome Agency:</div>
                                                        <div class="date">2008 - 2010</div>
                                                        <div class="about-text">Vivamus cursus odio sit amet nisl volutpat bibendum.Vivamus in leo efficitur, placerat leo sed</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Eployement -->
                                        <!-- Begin Hobbies & Interest -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Hobbies & Interest</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="d-flex justify-content-center">
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Camping">
                                                                <i class="ion-bonfire"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Photography">
                                                                <i class="ion-camera"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Music">
                                                                <i class="ion-headphone"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Travel">
                                                                <i class="ion-map"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Food">
                                                                <i class="ion-icecream"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Paint">
                                                                <i class="ion-paintbrush"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Nature">
                                                                <i class="ion-leaf"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hobbies">
                                                        <div class="hobbies-icon">
                                                            <a href="#" title="Coffee">
                                                                <i class="ion-coffee"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Hobbies & Interest -->
                                    </div>
                                    <!-- End Column -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                     
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    <div class="off-sidebar from-right">
                        <div class="off-sidebar-container">
                            <header class="off-sidebar-header">
                                <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                                    <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                                    <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                                </ul>
                                <a href="#off-canvas" class="off-sidebar-close"></a>
                            </header>
                            <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                                <div class="tab-content">
                                    <!-- Begin Messenger -->
                                    <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                                        <!-- Begin Chat Message -->
                                        <span class="date">Today</span>
                                        <div class="messenger-message messenger-message-sender">
                                        
                                            <img class="messenger-image messenger-image-default" src="{{ asset("admin/assets/img/avatar/avatar-02.jpg") }}" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        Hi David, what's up?
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Hi Brandon, fine and you?
                                                   </p>
                                                    <p>
                                                       I'm working on the next update of Elisyam
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                        
                                            <img class="messenger-image messenger-image-default" src="{{ asset("admin/assets/img/avatar/avatar-02.jpg") }}" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        I can't wait to see
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       I'm almost done
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date">Yesterday</span>
                                        <div class="messenger-message messenger-message-sender">
                                        
                                            <img class="messenger-image messenger-image-default" src="{{ asset("admin/assets/img/avatar/avatar-05.jpg") }}" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        I updated the server tonight
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Didn't you have any problems?
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                        
                                            <img class="messenger-image messenger-image-default" src="{{ asset("admin/assets/img/avatar/avatar-05.jpg") }}" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        No!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Great!
                                                   </p>
                                                    <p>
                                                       See you later!
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Chat Message -->
                                        <!-- Begin Message Form -->
                                        <div class="enter-message">
                                            <div class="enter-message-form">
                                                <input type="text" placeholder="Enter your message..."/>
                                            </div>
                                            <div class="enter-message-button">
                                                <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Message Form -->
                                    </div>
                                    <!-- End Messenger -->
                                    <!-- Begin Today -->
                                    <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                                        <!-- Begin Today Stats -->
                                        <div class="sidebar-heading pt-0">Today</div>
                                        <div class="today-stats mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="la la-users"></i>
                                                    <div class="counter">264</div>
                                                    <div class="heading">Clients</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-cart-arrow-down"></i>
                                                    <div class="counter">360</div>
                                                    <div class="heading">Sales</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-money"></i>
                                                    <div class="counter">$ 4,565</div>
                                                    <div class="heading">Earnings</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Today Stats -->
                                        <!-- Begin Friends -->
                                        <div class="sidebar-heading">Friends</div>
                                        <div class="quick-friends mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                        
                                                            <img src="{{ asset("admin/assets/img/avatar/avatar-02.jpg") }}" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Brandon Smith</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                        
                                                            <img src="{{ asset("admin/assets/img/avatar/avatar-03.jpg") }}" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Louis Henry</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                        
                                                            <img src="{{ asset("admin/assets/img/avatar/avatar-04.jpg") }}" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Nathan Hunter</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                        
                                                            <img src="{{ asset("admin/assets/img/avatar/avatar-05.jpg") }}" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Megan Duncan</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                        
                                                            <img src="{{ asset("admin/assets/img/avatar/avatar-06.jpg") }}" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Beverly Oliver</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Friends -->
                                        <!-- Begin Settings -->
                                        <div class="sidebar-heading">Settings</div>
                                        <div class="quick-settings mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Email</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox">
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Chat Message Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Settings -->
                                    </div>
                                    <!-- End Today -->
                                </div>
                            </div>
                            <!-- End Offcanvas Container -->
                        </div>
                        <!-- End Offsidebar Container -->
                    </div>
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        
        <script src="{{ asset("admin/assets/vendors/js/base/jquery.min.js") }}"></script>
        
        <script src="{{ asset("admin/assets/vendors/js/base/core.min.js") }}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        
        <script src="{{ asset("admin/assets/vendors/js/nicescroll/nicescroll.min.js") }}"></script>
        <script src="{{ asset("admin/assets/vendors/js/app/app.min.js") }}"></script>
        <!-- End Page Vendor Js -->
    </div>

    @endsection