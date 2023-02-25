

<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Get Unstack - You ask,We answer</title>

    <!-- Google fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com/"> -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="assets/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">
    <link rel="stylesheet" href="assets/css/selectize.css">
    <!-- end inject -->
    <script src="lib/jquery.js"></script>
	<script defer src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<style>
    .form--control-bg-gray {
    background-color: rgb(127 136 151 / 34%);
    border: 0;
}

.la-icon{

    margin-top:10px;
}

</style>



    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>
<body>

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->



<!--======================================
        START HEADER AREA
    ======================================-->

        <header class="header-area bg-make menu-wrapper">
            <div class="container">
                <div class="hero-content  ">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>
                                <ul class="breadcrumb-list pt-20px pb-15  fs-15">


                                    <a href="{{route('layouts.post')}}"><li class="text-white"><i class="la la-pencil mr-1"></i>ADD POST |</li></a>


                                    <a href="{{route('layouts.login')}}"> <li class="text-white "><i class="la la-sign-in mr-1"></i>LOGIN |</li></a>
                                    <a href="{{route('layouts.signup')}}"><li class="text-white "><i class="la la-plus-circle mr-1"></i>SIGN UP |</li></a>


                                    <a href="{{route('layouts.contact')}}"><li class="text-white "><i class="la la-phone mr-1"></i>CONTACT</li></a>

                                </ul>
                            </h2>
                        </div>
                        <div class="col-lg-3">
                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-bg-gray text-white-50" type="text" name="search" placeholder="Type your search words...">
                                    <button class="form-btn text-white" type="button"><i class="la la-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div><!-- row -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
            <div class="body-overlay"></div>
        </header><!-- end header-area -->

<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START HEADER AREA
    ======================================-->
    <header class="header-area bg-dark border-bottom border-bottom-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo-box">
                <a href="/home" class="logo"><img src="assets/images/logo-dark.png" alt="logo"></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search la-icon" ></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars la-icon"></i>
                        </div>
                        <div class="user-off-canvas-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="User menu">
                            <i class="la la-user la-icon"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-9">

                <div class="menu-wrapper  justify-content-end">
                    <nav class="menu-bar ml-auto pr-2 ">
                        <ul>
                            <li class="pl-30px" >
                                <a href="{{route('layouts.home')}}" class="text-white">HOME</a>
                            </li>
                            <li class="is-mega-menu pl-30px">
                                <a href="{{route('layouts.question')}}" class="text-white">ASK QUESTION</a>

                            </li>
                            <li class="is-mega-menu pl-30px">
                                <a href="{{route('layouts.allquestion')}}" class=" text-white">QUESTIONS</a>

                            </li>
                            <li class="pl-30px">
                                <a href="{{route('layouts.blog')}}" class=" text-white">BLOG</a>
                            </li>

                            <li class="dropdown user-dropdown pl-30px">
                                    <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                        <div class="media-img media-img-xs flex-shrink-0 rounded-full ">
                                            <img src="assets/images/img4.jpg" alt="avatar" class="rounded-full ">
                                        </div>
                                    </div>
                                <ul class="dropdown-menu-item text-dark">
                                    <h6 class="dropdown-header">Hi, abc</h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>

                                        <a class="dropdown-item" href="{{route('layouts.profile')}}"><li><i class="la la-user mr-2"></i> Profile</li></a>
                                        <a class="dropdown-item" href="{{route('layouts.notification')}}"><li><i class="la la-bell mr-2"></i> Notifications</li></a>
                                        <a class="dropdown-item" href="{{route('layouts.referral')}}"><li><i class="la la-user-plus mr-2"></i> Referrals</li></a>
                                        <a class="dropdown-item" href="{{route('layouts.setting')}}"><li><i class="la la-gear mr-2"></i> Settings</li></a>
                                        <a class="dropdown-item" href="logout"><li><i class="la la-power-off mr-2"></i> Log out</li></a>

                                    </ul>
                            </li>

                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->


                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="off-canvas-menu custom-scrollbar-styled">
        <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times la-icon"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px text-blue">

            <li><a href="{{route('layouts.post')}}"><i class="la la-pencil mr-1 fs-20 pb-20px">ADD POST</i></a></li>


            <li><a href="{{route('layouts.login')}}"> <i class="la la-sign-in mr-1 fs-20 pb-20px"> LOGIN</i></a></li>
            <li><a href="{{route('layouts.signup')}}"><i class="la la-plus-circle mr-1 fs-20 pb-20px"> SIGN UP</i></a></li>

            <li><a href="{{route('layouts.contact')}}"><i class="la la-phone mr-1 fs-20 pb-20px"> CONTACT</i></a></li>
        </ul>
            <hr>
        <ul class="generic-list-item off-canvas-menu-list text-blue ml-20px">
            <li  class="fs-20 pb-20px">
                <a href="{{route('layouts.home')}}"><i class="la la-home mr-1 fs-20 "> HOME</i></a>

            </li>
            <li class="fs-20 pb-20px">
                <a href="{{route('layouts.question')}}"><i class="la la-edit mr-1 fs-20 "> ASK QUESTION</i></a>

            </li>
            <li class="fs-20 pb-20px">
                <a href="{{route('layouts.allquestion')}}"><i class="la la-question-circle mr-1 fs-20 "> QUESTIONS</i></a>

            </li>
            <li class="fs-20 pb-20px">
                <a href="{{route('layouts.blog')}}"><i class="la la-comment mr-1 fs-20 "> BLOG</i></a>

            </li>
        </ul>

    </div><!-- end off-canvas-menu -->
    <div class="user-off-canvas-menu custom-scrollbar-styled">
        <div class="user-off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times "></i>
        </div><!-- end user-off-canvas-menu-close -->
        <ul class="nav nav-tabs generic-tabs generic--tabs pt-90px pl-4 shadow-sm" id="myTab2" role="tablist">
            <li class="nav-item"><div class="anim-bar"></div></li>
            <li class="nav-item">
                <a class="nav-link active" id="user-notification-menu-tab" data-toggle="tab" href="#user-notification-menu" role="tab" aria-controls="user-notification-menu" aria-selected="true">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="user-profile-menu-tab" data-toggle="tab" href="#user-profile-menu" role="tab" aria-controls="user-profile-menu" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content pt-3" id="myTabContent2">
            <div class="tab-pane fade show active" id="user-notification-menu" role="tabpanel" aria-labelledby="user-notification-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">

                        <a class="dropdown-item" href="{{route('layouts.notification')}}">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="assets/images/img4.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">Arnold Smith answered on your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>5 mins ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="{{route('layouts.notification')}}">
                            <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                <div class="media-img media-img-sm flex-shrink-0">
                                    <img src="assets/images/img4.jpg" alt="avatar">
                                </div>
                                <div class="media-body p-0 border-left-0">
                                    <h5 class="fs-14 fw-regular">Saeed bookmarked your post</h5>
                                    <small class="meta d-block lh-24">
                                        <span>1 hour ago</span>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a class="dropdown-item border-bottom-0 text-center btn-text fw-regular" href="{{route('layouts.notification')}}">View All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                </div>
            </div><!-- end tab-pane -->
            <div class="tab-pane fade" id="user-profile-menu" role="tabpanel" aria-labelledby="user-profile-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                        <a class="dropdown-item" href="{{route('layouts.profile')}}"><i class="la la-user mr-2"></i>Profile</a>
                        <a class="dropdown-item" href="{{route('layouts.notification')}}"><i class="la la-bell mr-2"></i>Notifications</a>
                        <a class="dropdown-item" href="{{route('layouts.referral')}}"><i class="la la-user-plus mr-2"></i>Referrals</a>
                        <a class="dropdown-item" href="{{route('layouts.setting')}}"><i class="la la-gear mr-2"></i>Settings</a>
                        <a class="dropdown-item" href="home"><i class="la la-power-off mr-2"></i>Log out</a>
                    </div>
                </div>
            </div><!-- end tab-pane -->
        </div>
    </div><!-- end user-off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                    <span class="la la-search input-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->
