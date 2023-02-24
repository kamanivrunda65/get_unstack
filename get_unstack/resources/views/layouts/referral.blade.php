@include('layouts.header')
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-60px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content d-flex align-items-center">
                    <div class="icon-element shadow-sm flex-shrink-0 mr-3 border border-gray lh-55">
                        <svg class="svg-icon-color-5" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="55px" viewBox="0 0 24 24" width="32px"><g><rect fill="none" height="24" width="24"/></g><g><path d="M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z"/></g></svg>
                    </div>
                    <h2 class="section-title fs-30">Referrals</h2>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="hero-btn-box text-right py-3">
                    <a href="setting" class="btn theme-btn theme-btn-outline theme-btn-outline-gray"><i class="la la-gear mr-1"></i> Edit Profile</a>
                </div>
            </div><!-- end col-lg-4 -->
        </div>
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START USER DETAILS AREA
================================= -->
<section class="user-details-area pt-60px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="referrals-content-wrap mb-50px">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-26 fw-bold pb-2">Spread the word with friends. Earn points.</h3>
                            <p class="pb-3 lh-22">We have a number of ways to help spread the word to your friends and family, Choose whatever works best for you.</p>
                            <p class="pb-2">Send a referral by email.</p>
                            <form method="post" class="mb-4">
                                <div class="input-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="Enter 5 email address separated by comma">
                                    <div class="input-group-append">
                                        <button class="btn theme-btn" type="button">Send <i class="la la-arrow-right icon ml-1"></i></button>
                                    </div>
                                </div>
                            </form>
                            <p class="pb-3">Share the referral link on social media.</p>
                            <ul class="social-icons pb-4">
                                <li><a href="#" class="hover-y"><i class="la la-facebook"></i></a></li>
                                <li><a href="#" class="hover-y"><i class="la la-twitter"></i></a></li>
                                <li><a href="#" class="hover-y"><i class="la la-instagram"></i></a></li>
                                <li><a href="#" class="hover-y"><i class="la la-whatsapp"></i></a></li>
                            </ul>
                            <p class="pb-2">Copy and paste your referral link anywhere.</p>
                            <form action="#" class="copy-to-clipboard d-flex flex-wrap align-items-center">
                                <span class="text-success-message">Link Copied!</span>
                                <div class="input-group">
                                    <input type="text" class="form-control form--control form--control-bg-gray copy-input" value="https://www.disilab.com/share/101WxMB0oac1hVQQ==/">
                                    <div class="input-group-append">
                                        <button type="button" class="btn theme-btn copy-btn"><i class="la la-copy mr-1"></i> Copy</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end card -->
                    <div class="row">
                        <div class="col-lg-3 responsive-column-half">
                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                <div class="icon-element icon-element-sm flex-shrink-0 mr-3 bg-1">
                                    <svg class="svg-icon-color-white" width="20" viewBox="0 0 512 512.00004" xmlns="http://www.w3.org/2000/svg"><path d="m511.824219 255.863281-233.335938-255.863281v153.265625h-27.105469c-67.144531 0-130.273437 26.148437-177.753906 73.628906-47.480468 47.480469-73.628906 110.609375-73.628906 177.757813v107.347656l44.78125-49.066406c59.902344-65.628906 144.933594-103.59375 233.707031-104.457032v153.253907zm-481.820313 179.003907v-30.214844c0-59.132813 23.027344-114.730469 64.839844-156.542969s97.40625-64.839844 156.539062-64.839844h57.105469v-105.84375l162.734375 178.4375-162.734375 178.441407v-105.84375h-26.917969c-94.703124 0-185.773437 38.652343-251.566406 106.40625zm0 0"/></svg>
                                </div>
                                <div class="media-body">
                                    <h5 class="fw-medium">15</h5>
                                    <p class="fs-15">Invitations Sent</p>
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                <div class="icon-element icon-element-sm flex-shrink-0 mr-3 bg-2">
                                    <svg class="svg-icon-color-white" height="23" viewBox="0 -18 512 511" width="23" xmlns="http://www.w3.org/2000/svg"><path d="m417.1875 201.421875v-163.132813c0-20.835937-16.953125-37.789062-37.789062-37.789062h-341.609376c-20.835937 0-37.789062 16.953125-37.789062 37.789062v341.609376c0 20.839843 16.953125 37.789062 37.789062 37.789062h219.992188c25.644531 34.875 66.949219 57.550781 113.457031 57.550781 77.617188 0 140.761719-63.144531 140.761719-140.761719 0-61.535156-39.691406-113.964843-94.8125-133.054687zm-245.703125-170.160156h74.21875v84.910156l-31.402344-12.546875c-3.664062-1.460938-7.75-1.460938-11.414062 0l-31.402344 12.546875zm-133.695313 355.664062c-3.875 0-7.027343-3.152343-7.027343-7.027343v-341.609376c0-3.875 3.152343-7.027343 7.027343-7.027343h102.9375v107.621093c0 5.101563 2.53125 9.871094 6.753907 12.734376 4.226562 2.859374 9.59375 3.441406 14.332031 1.546874l46.78125-18.691406 46.785156 18.691406c1.839844.734376 3.777344 1.097657 5.703125 1.097657 3.03125 0 6.042969-.898438 8.628907-2.644531 4.222656-2.863282 6.753906-7.632813 6.753906-12.734376v-107.621093h102.933594c3.875 0 7.027343 3.152343 7.027343 7.027343v156.246094c-4.988281-.539062-10.054687-.820312-15.1875-.820312-77.617187 0-140.761719 63.144531-140.761719 140.761718 0 18.53125 3.605469 36.230469 10.140626 52.449219zm333.449219 57.550781c-60.65625 0-110-49.347656-110-110 0-60.65625 49.34375-110 110-110 60.652344 0 110 49.34375 110 110 0 60.652344-49.347656 110-110 110zm0 0"/><path d="m427.242188 320.121094h-41.648438v-41.648438c0-8.496094-6.886719-15.382812-15.382812-15.382812-8.492188 0-15.378907 6.886718-15.378907 15.382812v57.03125c0 8.492188 6.886719 15.378906 15.378907 15.378906h57.03125c8.496093 0 15.382812-6.886718 15.382812-15.378906 0-8.496094-6.886719-15.382812-15.382812-15.382812zm0 0"/></svg>
                                </div>
                                <div class="media-body">
                                    <h5 class="fw-medium">4</h5>
                                    <p class="fs-15">Pending</p>
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                <div class="icon-element icon-element-sm flex-shrink-0 mr-3 bg-3">
                                    <svg class="svg-icon-color-white" height="25" viewBox="0 0 515.556 515.556" width="25" xmlns="http://www.w3.org/2000/svg"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"/></svg>
                                </div>
                                <div class="media-body">
                                    <h5 class="fw-medium">11</h5>
                                    <p class="fs-15">Completed</p>
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-3 responsive-column-half">
                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                <div class="icon-element icon-element-sm flex-shrink-0 mr-3 bg-4">
                                    <svg class="svg-icon-color-white" width="25" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 360 360" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M346.5,65c0.1-1,0.1-1.4,0.2-2l0.1-0.6c0.3-1.4,0.3-2.9,0-4.3c-1-12.7-11.5-29.7-52.8-42.9C263.4,5.4,223,0,180,0
                                                    S96.6,5.4,66,15.2C24.7,28.4,14.3,45.4,13.2,58.1c-0.3,1.4-0.3,2.8,0,4.2l0.1,0.7c0,0.6,0.1,1,0.2,2c-0.8,0-1.5,0.7-1.5,1.5v33.8
                                                    c0,32.7,9.6,64.6,27.6,91.9l25.7,126.1l0.1,0.1c1.3,5.9,5,11,10.2,14c0.2,0.1,0.4,0.2,0.6,0.3c64.4,36.4,143.2,36.4,207.6,0
                                                    c0.2-0.1,0.4-0.2,0.6-0.3c5.2-3,8.9-8.1,10.2-14v-0.1l25.8-126.1c18-27.3,27.6-59.2,27.6-91.9V66.5C348,65.7,347.3,65,346.5,65z
                                                     M275.1,314.2c-0.1,0.2-0.2,0.5-0.4,0.7l-0.2,0.1c-58.6,33.4-130.4,33.4-189,0c-0.1,0-0.1-0.1-0.2-0.1c-0.2-0.2-0.3-0.4-0.4-0.7
                                                    l-18.4-90.3c64.2,58.9,162.7,58.9,226.9,0L275.1,314.2z M301.5,184.3c-46.2,67.1-138.1,84-205.2,37.8
                                                    c-14.8-10.2-27.6-23-37.8-37.8L40.2,94.7c32.5,17.6,88.9,25.9,139.8,25.9c39.8,0,78.2-4.7,107.9-13.3c10.3-3,21.8-7.1,31.9-12.6
                                                    L301.5,184.3z M326.2,63c-6.2,15.9-59.8,37.6-146.2,37.6S40,78.9,33.8,63.1l-0.6-3c0.2-6.3,10.5-16.7,39-25.8
                                                    c28.7-9.2,67-14.2,107.9-14.2c40.9,0,79.2,5.1,107.9,14.2c28.4,9.1,38.7,19.5,39,25.8L326.2,63z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="media-body">
                                    <h5 class="fw-medium">400</h5>
                                    <p class="fs-15">Earned</p>
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                    </div>
                </div><!-- end referrals-content-wrap -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Number Achievement</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">980k</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2">610k</span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3">650k</span>
                                        <p class="fs-14">Answer accepted</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">320k</span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="signup" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details">Using web3 to call precompile contract</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details">image picker and store them into firebase with flutter</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->
@include('layouts.footer')
