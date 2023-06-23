<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ogistic</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('img/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('img/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
         <a href="">Home </a>
         <a href="#about">About</a>
         <a href="#service">Services  </a>
         <a href="#vehicles">Our Vehicles</a>
         <a href="#testimonial">Testimonial</a>
         <a href="#contact">Contact</a>
         
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
          <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <a href="index.html"><img src="{{asset('images/Spotify_logo.png')}}" alt="Logo" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                     <div class="right_bottun">
                        <ul class="conat_info d_none ">
                           <li><a href="{{url('/home') }}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div> 

         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <a href="index.html"><img src="#" alt="#" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                     <div class="right_bottun">
                        <ul class="conat_info d_none ">
                           <li><a href="{{url('/home') }}">Logueate</a></li>
                           <li><a href="{{ route('register') }}">Registrate</a></li>
                        </ul>
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide banner_slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7 col-lg-5">
                              <div class="text-bg">
                                 <h1>Los Mejores Productos</h1>
                                 <span>Compra los mejores productos al mejor precio </span>
                                 <a class="read_more" href="#"></a>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="ban_track">
                                       <figure><img src="images/track.png" alt="#"/></figure>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    {{-- <form class="transfot">
                                       <div class="col-md-12">
                                          <span>Professional Services</span>
                                          <h3>Get your transport quote</h3>
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Location" type="text" name="Location">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="To destination" type="text" name="To destination">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Email" type="text" name="Email">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Contact Number" type="text" name="Contact Number">
                                       </div>
                                       <div class="col-md-12">
                                          <button class="get_now">Get Now quote</button>
                                       </div>
                                    </form> --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7 col-lg-5">
                              <div class="text-bg">
                                 <h1>Best Logistic Company</h1>
                                 <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has i</span>
                                 <a class="read_more" href="#">Contact Us</a>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="ban_track">
                                       <figure><img src="images/track.png" alt="#"/></figure>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <form class="transfot">
                                       <div class="col-md-12">
                                          <span>Professional Services</span>
                                          <h3>Get your transport quote</h3>
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Location" type="text" name="Location">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="To destination" type="text" name="To destination">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Email" type="text" name="Email">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Contact Number" type="text" name="Contact Number">
                                       </div>
                                       <div class="col-md-12">
                                          <button class="get_now">Get Now quote</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7 col-lg-5">
                              <div class="text-bg">
                                 <h1>Best Logistic Company</h1>
                                 <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has i</span>
                                 <a class="read_more" href="#">Contact Us</a>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="ban_track">
                                       <figure><img src="images/track.png" alt="#"/></figure>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <form class="transfot">
                                       <div class="col-md-12">
                                          <span>Professional Services</span>
                                          <h3>Get your transport quote</h3>
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Location" type="text" name="Location">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="To destination" type="text" name="To destination">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Email" type="text" name="Email">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Contact Number" type="text" name="Contact Number">
                                       </div>
                                       <div class="col-md-12">
                                          <button class="get_now">Get Now quote</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      {{-- <div id="about" class="about ">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="about_right">
                     <figure><img src="images/about.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There 
                     </p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- about section -->
      <!-- service section -->
      {{-- <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Usuarios</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="service_main">
                     <div class="service_box blu_colo">
                        <i><img src="images/ser1.png" alt="#"/></i>
                        <h4>FLY ANYWHERE</h4>
                     </div>
                     <div class="service_box yelldark_colo">
                        <i><img src="images/ser2.png" alt="#"/></i>
                        <h4>Cargo service</h4>
                     </div>
                     <div class="service_box yell_colo">
                        <i><img src="images/ser3.png" alt="#"/></i>
                        <h4> COURIER SERVICES</h4>
                     </div>
                     <div class="service_box yelldark_colo">
                        <i><img src="images/ser4.png" alt="#"/></i>
                        <h4>BOX STORAGE</h4>
                     </div>
                     <div class="service_box yell_colo">
                        <i><img src="images/ser5.png" alt="#"/></i>
                        <h4>100% safe</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end service section -->
      <!-- vehicles section -->
      <section id="vehicles" class="vehicles">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Productos</h2>
                     <p>Aqui ves todos los productos</p>
                  </div>
               </div>
            </div>
         </div>
         <div id="veh" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#veh" data-slide-to="0" class="active"></li>
               <li data-target="#veh" data-slide-to="1"></li>
               <li data-target="#veh" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc1.png" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc2.png" alt="#"/></figure>
                              </div>
                              <h3 class="blac_co">Truck</h3>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc3.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc1.png" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc2.png" alt="#"/></figure>
                              </div>
                              <h3 class="blac_co">Truck</h3>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc3.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc1.png" alt="#"/></figure>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc2.png" alt="#"/></figure>
                              </div>
                              <h3 class="blac_co">Truck</h3>
                           </div>
                           <div class="col-md-4">
                              <div class="vehicles_truck">
                                 <figure><img src="images/truc3.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#veh" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#veh" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </section>
      <!-- end vehicles section -->
      <!-- testimonial section -->
      {{-- <div id="testimonial" class="testimonial bottom_cross bottom_cross2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonials</h2>
                     <p>nternet. It uses a dictionary of over 200 Latin words, combined with .</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="testimonial_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="testimonial_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full cross_layout">
                                          <div class="testimonial_box">
                                             <figure><img src="images/our.png" alt="#"/></figure>
                                             <h3>Luda Johnson <br><span class="kisu">( Ceo)</span></h3>
                                             <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 year</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-caret-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-caret-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end testimonial section -->
      <!-- choose section -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Why Choose Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="choose_box">
                     <i><img src="images/why1.png" alt="#"/></i>
                     <h3>Our Vission</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
               <div class="col-md-5 offset-md-2">
                  <div class="choose_box">
                     <i><img src="images/why2.png" alt="#"/></i>
                     <h3>Estimate Shipping</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Registrate</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="con_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-5">
                     <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                           <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                 {{ __('Register') }}
                              </button>
                           </div>
                           <div>
                              <a href=" class= nav-link">
                                 <i class="fas fa-fire-alt"></i>
                                 <p>Logueate</p>
                               </a>
                           </div>
                        </div>
                        
                    </form>
                  </div>
                  <div class="col-md-7">
                     <div class="co_tru">
                        <figure><img src="images/truc4.png" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer bottom_cross1">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Address : Lorem Ipsum <br> is simply dummy 
                        </li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>Phone :  +(1234) 567 890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>Email : demo@gmail.com</li>
                     </ul>
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
                  <div class="col-md-8">
                     <div class="map">
                        <figure><img src="images/map.png" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
   </body>
</html>


<style>
   .header {
      background-color: black;
      padding: 10px;
      font-size: 12px;
   }

   .header a {
         color: white;
         text-decoration: none;
         margin-right: 5px;
      }


      .banner_main {
         background-color:aqua;
      }

</style>
