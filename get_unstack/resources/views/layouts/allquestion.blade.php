@include('layouts.header')
<!--======================================
    START HERO AREA
======================================-->
<section class="hero-area pt-80px pb-80px hero-bg-1">
<div class="overlay"></div>
<span class="stroke-shape stroke-shape-1"></span>
<span class="stroke-shape stroke-shape-2"></span>
<span class="stroke-shape stroke-shape-3"></span>
<span class="stroke-shape stroke-shape-4"></span>
<span class="stroke-shape stroke-shape-5"></span>
<span class="stroke-shape stroke-shape-6"></span>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-9">
            <div class="hero-content">
                <h2 class="section-title pb-3 text-white">Share & grow knowledge with us!</h2>
                <p class="section-desc text-white">If you are going to  a passage of Lorem Ipsum, you need to be sure there
                    <br> isnt anything embarrassing hidden in the middle of text.
                </p>
                <div class="hero-btn-box py-4">
                    <a href="ask_question.php" class="btn theme-btn theme-btn-white">Ask a Question <i class="la la-arrow-right icon ml-1"></i></a>
                </div>
            </div><!-- end hero-content -->
        </div><!-- end col-lg-9 -->
        <div class="col-lg-3">
            <div class="hero-list hero-list-bg">
                <div class="d-flex align-items-center pb-30px">
                    <img src="assets/images/anonymousHeroQuestions.svg" alt="question icon" class="mr-3">
                    <p class="fs-15 text-white lh-20">Anybody can ask a question</p>
                </div>
                <div class="d-flex align-items-center pb-30px">
                    <img src="assets/images/anonymousHeroAnswers.svg" alt="question answer icon" class="mr-3">
                    <p class="fs-15 text-white lh-20">Anybody can answer</p>
                </div>
                <div class="d-flex align-items-center">
                    <img src="assets/images/anonymousHeroUpvote.svg" alt="vote icon" class="mr-3">
                    <p class="fs-15 text-white lh-20">The best answers are voted up and rise to the top</p>
                </div>
            </div>
        </div>
    </div><!-- end row -->
</div><!-- end container -->
</section>
<!--======================================
    END HERO AREA
======================================-->
<!-- ================================
     START QUESTION AREA
================================= -->
<section class="question-area pt-40px">
<div class="container">
    <div class="row">
        <div class="col-lg-2 pr-0">
            <div class="sidebar position-sticky top-0 pt-10px">
                <ul class="generic-list-item generic-list-item-highlight fs-15">
                    <li class="lh-26"><a href="index.html"><i class="la la-home mr-1 text-black"></i> Home</a></li>
                    <li class="lh-26 active"><a href="home-3.html"><i class="la la-globe mr-1 text-black"></i> Questions</a></li>
                    <li class="lh-26"><a href="tags-list.html"><i class="la la-tags mr-1 text-black"></i> Tags</a></li>
                    <li class="lh-26"><a href="user-list.html"><i class="la la-user mr-1 text-black"></i> Users</a></li>
                    <li class="lh-26"><a href="badges-list.html"><i class="la la-id-badge mr-1 text-black"></i> Badges</a></li>
                    <li class="lh-26"><a href="category-list.html"><i class="la la-sort mr-1 text-black"></i> Categories</a></li>
                    <li class="lh-26"><a href="job-list.html"><i class="la la-mouse mr-1 text-black"></i> Jobs</a></li>
                    <li class="lh-26"><a href="companies.html"><i class="la la-briefcase mr-1 text-black"></i> Companies</a></li>
                </ul>
            </div><!-- end sidebar -->
        </div><!-- end col-lg-2 -->
        <div class="col-lg-7 px-0">
            <div class="question-main-bar border-left border-left-gray pt-10px pb-40px">
                <div class="filters pb-4 pl-3">
                    <div class="d-flex flex-wrap align-items-center justify-content-between pb-3">
                        <h3 class="fs-22 fw-medium">All Questions</h3>
                        <a href="ask_question.php" class="btn theme-btn theme-btn-sm">Ask Question</a>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <p class="pt-1 fs-15 fw-medium lh-20">21,287 questions</p>
                        <div class="filter-option-box w-20">
                            <select class="custom-select">
                                <option value="newest" selected="selected">Newest </option>
                                <option value="featured">Bountied (390)</option>
                                <option value="frequent">Frequent </option>
                                <option value="votes">Votes </option>
                                <option value="active">Active </option>
                                <option value="unanswered">Unanswered </option>
                            </select>
                        </div><!-- end filter-option-box -->
                    </div>
                </div><!-- end filters -->
                <div class="questions-snippet border-top border-top-gray">
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block answered my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">3</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block answered-accepted my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">3</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">0</span>
                                <span class="answer-text d-block fs-14 lh-18">answer</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block answered my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">3</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><span class="badge bg-success mr-2 text-white fs-13">+100</span><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">0</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">0</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">0</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">0</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">0</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">0</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">0</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block answered my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">3</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                        <div class="votes text-center votes-2">
                            <div class="vote-block">
                                <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>
                                <span class="vote-text d-block fs-13 lh-18">votes</span>
                            </div>
                            <div class="answer-block answered my-2">
                                <span class="answer-counts d-block lh-20 fw-medium">3</span>
                                <span class="answer-text d-block fs-13 lh-18">answers</span>
                            </div>
                            <div class="view-block">
                                <span class="view-counts d-block lh-20 fw-medium">12</span>
                                <span class="view-text d-block fs-13 lh-18">views</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="mb-2 fw-medium"><a href="single_question.php">Bootstrap select pass value with disabled</a></h5>
                            <p class="mb-2 truncate lh-20 fs-15">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="tags">
                                <a href="#" class="tag-link">javascript</a>
                                <a href="#" class="tag-link">bootstrap-4</a>
                                <a href="#" class="tag-link">jquery</a>
                                <a href="#" class="tag-link">select</a>
                            </div>
                            <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                <a href="user-profile.html" class="media-img d-block">
                                    <img src="assets/images/img3.jpg" alt="avatar">
                                </a>
                                <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                    <div>
                                        <h5 class="pb-1"><a href="user-profile.html">Arden Smith</a></h5>
                                        <div class="stats fs-12 d-flex align-items-center lh-18">
                                            <span class="text-black pr-2" title="Reputation score">224</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>
                                            <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>
                                        </div>
                                    </div>
                                    <small class="meta d-block text-right">
                                        <span class="text-black d-block lh-18">asked</span>
                                        <span class="d-block lh-18 fs-12">6 hours ago</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end media -->
                </div><!-- end questions-snippet -->
                <div class="pager pt-30px px-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination generic-pagination pr-1">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
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
                    <p class="fs-13 pt-2">Showing 1-10 results of 50,577 questions</p>
                </div>
            </div><!-- end question-main-bar -->
        </div><!-- end col-lg-7 -->
        <div class="col-lg-3">
            <div class="sidebar pt-10px">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-17 pb-3">Related Questions</h3>
                        <div class="divider"><span></span></div>
                        <div class="sidebar-questions pt-3">
                            <div class="media media-card media--card media--card-2">
                                <div class="media-body">
                                    <h5><a href="single_question.php">Using web3 to call precompile contract</a></h5>
                                    <small class="meta">
                                        <span class="pr-1">2 mins ago</span>
                                        <span class="pr-1">. by</span>
                                        <a href="#" class="author">Sudhir Kumbhare</a>
                                    </small>
                                </div>
                            </div><!-- end media -->
                            <div class="media media-card media--card media--card-2">
                                <div class="media-body">
                                    <h5><a href="single_question.php">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                    <small class="meta">
                                        <span class="pr-1">48 mins ago</span>
                                        <span class="pr-1">. by</span>
                                        <a href="#" class="author">wimax</a>
                                    </small>
                                </div>
                            </div><!-- end media -->
                            <div class="media media-card media--card media--card-2">
                                <div class="media-body">
                                    <h5><a href="single_question.php">image picker and store them into firebase with flutter</a></h5>
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
                        <h3 class="fs-17 pb-3">Related Tags</h3>
                        <div class="divider"><span></span></div>
                        <div class="tags pt-4">
                            <div class="tag-item">
                                <a href="#" class="tag-link tag-link-md">analytics</a>
                                <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                            </div><!-- end tag-item -->
                            <div class="tag-item">
                                <a href="#" class="tag-link tag-link-md">computer</a>
                                <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                            </div><!-- end tag-item -->
                            <div class="tag-item">
                                <a href="#" class="tag-link tag-link-md">python</a>
                                <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                            </div><!-- end tag-item -->
                            <div class="tag-item">
                                <a href="#" class="tag-link tag-link-md">javascript</a>
                                <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                            </div><!-- end tag-item -->
                            <div class="tag-item">
                                <a href="#" class="tag-link tag-link-md">c#</a>
                                <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                            </div><!-- end tag-item -->
                            <div class="collapse" id="showMoreTags">
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">java</a>
                                    <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">swift</a>
                                    <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">html</a>
                                    <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">angular</a>
                                    <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">flutter</a>
                                    <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">machine-language</a>
                                    <span class="item-multiplier fs-13">
                                <span>??</span>
                                <span>32924</span>
                            </span>
                                </div><!-- end tag-item -->
                            </div><!-- end collapse -->
                            <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                            </a>
                        </div>
                    </div>
                </div><!-- end card -->
                <div class="ad-card">
                    <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                    <div class="ad-banner mb-4 mx-auto">
                        <span class="ad-text">290x500</span>
                    </div>
                </div><!-- end ad-card -->
            </div><!-- end sidebar -->
        </div><!-- end col-lg-3 -->
    </div><!-- end row -->
</div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
     END QUESTION AREA
================================= -->
@include('layouts.footer')
