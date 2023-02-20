@include('layouts.header')

<!--======================================
    START HERO AREA
======================================-->
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
<span class="stroke-shape stroke-shape-1"></span>
<span class="stroke-shape stroke-shape-2"></span>
<span class="stroke-shape stroke-shape-3"></span>
<span class="stroke-shape stroke-shape-4"></span>
<span class="stroke-shape stroke-shape-5"></span>
<span class="stroke-shape stroke-shape-6"></span>
<div class="container">
    <div class="hero-content text-center">
        <h2 class="section-title pb-3">BLOGS</h2>
        <ul class="breadcrumb-list">
            <li><a href="#">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
            <li>Blog</li>
        </ul>
    </div><!-- end hero-content -->
</div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
    END HERO AREA
======================================-->

<!-- ================================
     START BLOG AREA
================================= -->
<section class="blog-area pt-80px pb-80px">
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="sidebar">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-17 pb-3">Search blog</h3>
                        <div class="divider"><span></span></div>
                        <form method="post" class="pt-4">
                            <div class="form-group mb-0">
                                <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                                <button class="form-btn" type="button"><i class="la la-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-17 pb-3">Categories</h3>
                        <div class="divider"><span></span></div>
                        <div class="category-list pt-4">
                            <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                <span class="cat-title">Technology</span>
                                <span class="cat-number">238</span>
                            </a>
                            <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                <span class="cat-title">Project Management</span>
                                <span class="cat-number">238</span>
                            </a>
                            <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                <span class="cat-title">Business</span>
                                <span class="cat-number">238</span>
                            </a>
                            <a href="#" class="cat-item d-flex align-items-center justify-content-between mb-3 hover-y">
                                <span class="cat-title">Digital design</span>
                                <span class="cat-number">238</span>
                            </a>
                        </div>
                    </div>
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-17 pb-3">Trending Posts</h3>
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
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-17 pb-3">Trending Tags</h3>
                        <div class="divider"><span></span></div>
                        <div class="tags pt-4">
                            <a href="#" class="tag-link tag-link-md">analytics</a>
                            <a href="#" class="tag-link tag-link-md">computer</a>
                            <a href="#" class="tag-link tag-link-md">python</a>
                            <a href="#" class="tag-link tag-link-md">java</a>
                            <a href="#" class="tag-link tag-link-md">swift</a>
                            <a href="#" class="tag-link tag-link-md">javascript</a>
                            <a href="#" class="tag-link tag-link-md">c#</a>
                            <a href="#" class="tag-link tag-link-md">html</a>
                            <a href="#" class="tag-link tag-link-md">machine-language</a>
                        </div>
                    </div>
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-17 pb-3">Follow & Connect</h3>
                        <div class="divider"><span></span></div>
                        <div class="social-icon-box pt-3">
                            <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Facebook">
                                <svg focusable="false" class="svg-inline--fa fa-facebook-f fa-w-10" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                            </a>
                            <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Twitter">
                                <svg focusable="false" class="svg-inline--fa fa-twitter fa-w-16" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                            </a>
                            <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Linkedin">
                                <svg focusable="false" class="svg-inline--fa fa-linkedin fa-w-14" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                            </a>
                            <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="#" target="_blank" title="Follow on Instagram">
                                <svg focusable="false" class="svg-inline--fa fa-instagram-square fa-w-14" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div><!-- end card -->
            </div><!-- end sidebar -->
        </div><!-- end col-lg-4 -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 responsive-column-half">
                    <div class="card card-item hover-y">
                        <a href="singleblog" class="card-img">
                            <img class="lazy" src="assets/images/img-loading.png" data-src="assets/images/img6.jpg" alt="Card image">
                        </a>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Digital design</a>
                            <h5 class="card-title fw-medium"><a href="singleblog">Designers should always keep their users in mind</a></h5>
                            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                    <img src="assets/images/img1.jpg" alt="avatar" class="rounded-full">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-14 fw-medium">By <a href="#">Arden Smith</a></h5>
                                    <small class="meta d-block lh-20">
                                        <span>Feb 25, 2021</span>
                                    </small>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column-half">
                    <div class="card card-item hover-y">
                        <a href="singleblog" class="card-img">
                            <img class="lazy" src="assets/images/img-loading.png" data-src="assets/images/img7.jpg" alt="Card image">
                        </a>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Project Management</a>
                            <h5 class="card-title fw-medium"><a href="singleblog">What You Can Learn About Managing Projects</a></h5>
                            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                    <img src="assets/images/img2.jpg" alt="avatar" class="rounded-full">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-14 fw-medium">By <a href="#">Kevin Martin</a></h5>
                                    <small class="meta d-block lh-20">
                                        <span>Feb 25, 2021</span>
                                    </small>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column-half">
                    <div class="card card-item hover-y">
                        <a href="singleblog" class="card-img">
                            <img class="lazy" src="assets/images/img-loading.png" data-src="assets/images/img8.jpg" alt="Card image">
                        </a>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Business</a>
                            <h5 class="card-title fw-medium"><a href="singleblog">Open space – new trend in office design</a></h5>
                            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                    <img src="assets/images/img3.jpg" alt="avatar" class="rounded-full">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-14 fw-medium">By <a href="#">Tim Brooks</a></h5>
                                    <small class="meta d-block lh-20">
                                        <span>Feb 25, 2021</span>
                                    </small>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column-half">
                    <div class="card card-item hover-y">
                        <a href="singleblog" class="card-img">
                            <img class="lazy" src="assets/images/img-loading.png" data-src="assets/images/img9.jpg" alt="Card image">
                        </a>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Digital design</a>
                            <h5 class="card-title fw-medium"><a href="singleblog">Designers should always keep their users in mind</a></h5>
                            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                    <img src="assets/images/img1.jpg" alt="avatar" class="rounded-full">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-14 fw-medium">By <a href="#">Arden Smith</a></h5>
                                    <small class="meta d-block lh-20">
                                        <span>Feb 25, 2021</span>
                                    </small>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column-half">
                    <div class="card card-item hover-y">
                        <a href="singleblog" class="card-img">
                            <img class="lazy" src="assets/images/img-loading.png" data-src="assets/images/img10.jpg" alt="Card image">
                        </a>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Project Management</a>
                            <h5 class="card-title fw-medium"><a href="singleblog">What You Can Learn About Managing Projects</a></h5>
                            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                    <img src="assets/images/img2.jpg" alt="avatar" class="rounded-full">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-14 fw-medium">By <a href="#">Kevin Martin</a></h5>
                                    <small class="meta d-block lh-20">
                                        <span>Feb 25, 2021</span>
                                    </small>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column-half">
                    <div class="card card-item hover-y">
                        <a href="singleblog." class="card-img">
                            <img class="lazy" src="assets/images/img-loading.png" data-src="assets/images/img11.jpg" alt="Card image">
                        </a>
                        <div class="card-body pt-0">
                            <a href="#" class="card-link">Business</a>
                            <h5 class="card-title fw-medium"><a href="singleblog">Open space – new trend in office design</a></h5>
                            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                    <img src="assets/images/img3.jpg" alt="avatar" class="rounded-full">
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-14 fw-medium">By <a href="#">Tim Brooks</a></h5>
                                    <small class="meta d-block lh-20">
                                        <span>Feb 25, 2021</span>
                                    </small>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
            <div class="pager text-center pt-30px">
                <nav aria-label="Page navigation example">
                    <ul class="pagination generic-pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="fs-13 pt-3">Showing 1-6 results of 22 articles</p>
            </div>
        </div><!-- end col-lg-8 -->
    </div><!-- end row -->
</div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
     END BLOG AREA
================================= -->
@include('layouts.footer')
