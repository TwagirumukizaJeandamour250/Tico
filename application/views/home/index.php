
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
    /* Tablet and up */

@media screen and (min-width: 768px) {
  .carousel-inner .active,
  .carousel-inner .active+.carousel-item {
    display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item {
    -webkit-transition: none;
    transition: none;
  }
  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -50%;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* left or forward direction */
  .active.carousel-item-left+.carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* right or prev direction */
  .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}

/* Desktop and up */

@media screen and (min-width: 992px) {
  .carousel-inner .active,
  .carousel-inner .active+.carousel-item,
  .carousel-inner .active+.carousel-item+.carousel-item {
    display: block;
  }
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
    -webkit-transition: none;
    transition: none;
  }
  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* left or forward direction */
  .active.carousel-item-left+.carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left+.carousel-item,
  .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
  .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }
  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }
  /* right or prev direction */
  .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right+.carousel-item,
  .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
  .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
    position: relative;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }
}
  </style>


<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Moderna</span></h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-target-lock"></i></div>
              <h4 class="title"><a href="">OUR MISSION</a></h4>
              <p class="description">Promoting, Protecting, and improving health and human rights of sexual minorities and vulnerable community through advocacy, training, research, and preparing local authorities in striving for equal rights for all in pursuit of sustainable excellence.Promoting, Protecting, and improving health and human rights of sexual minorities and vulnerable community through advocacy, training, research, and preparing local authorities in striving for equal rights for all in pursuit of sustainable excellence.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-bullseye"></i></div>
              <h4 class="title"><a href="">OUR VISION</a></h4>
              <p class="description">A country in which everyone has equal opportunity to enjoy optimum health and well-being regardless any form of stigma and discrimination.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Program ======= -->
    <div class="container">
      <center><h2>OUR PROGRAMS</h2></center>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <h4 class="panel-title">
              <a>HUMAN RIGHT PROGRAMS</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
                                    • Promoting human rights and fighting injustice against vulnerable and sexual minority’s community.<br>
                                    • Sensitizing local leaders through training and conducting community awareness training.<br>
                                    • Community integration and development strategies for vulnerable communities including sexual minorities by
                                    carrying out community advocacy for human rights awareness.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
              <a>COMMUNITY HEALTH PROGRAMS</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                                    • Prepare and include local health care providers and nurses in setting up a non-stigma and
                                    discriminating sustainable environment for better prevention of HIV/AIDS and STI among high-risk
                                    communities including Men Who Have sex with Men (MSM), Transgender individuals and non-confirming genderpersons.<br>
                                    • Increasing access to satisfactory Sexual and reproductive healthcare service of good quality among LGBTI community.<br>
                                    • Promoting Inclusive Sexual education.</div>
          </div>
        </div>
      </div> 
    </div><!-- ======= End Program ======= -->

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <center class="section-title"><h2>Latest events</h2></center>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Our Networks</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <!-- <img src="assets/img/features-1.svg" class="img-fluid" alt=""> -->
                    <div class="fb-page" data-href="https://www.facebook.com/TICORwanda" data-tabs="timeline, events" data-theme="dark" data-width="" data-height="430px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TICORwanda" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TICORwanda">Thriving Inclusive Community Organisation</a></blockquote></div>
                    <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="ICnUroW2"></script>
          </div>
          <div class="col-md-7 pt-4">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <!-- <img src="assets/img/features-2.svg" class="img-fluid" alt=""> -->
                    <a class="twitter-timeline" data-width="100%" height="430px" data-theme="dark" href="https://twitter.com/TicoRwanda?ref_src=twsrc%5Etfw">
                        Tweets by TicoRwanda</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <div class="container-fluid">
    <h1 class="text-center my-3">Projects and Sites</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
        <div class="carousel-item col-md-4 active">
          <div class="card">
            <div class="card-body">
              <img class="card-img-top" src="images/Enrich.PNG" alt="Card image cap">
              <h4 class="card-title">Card 1</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <img class="card-img-top" src="images/Accu-Med.PNG" alt="Card image cap">
              <h4 class="card-title">Card 2</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <img class="card-img-top" src="images/test-1.jpg" alt="Card image cap">
              <h4 class="card-title">Card 3</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <img class="card-img-top" src="images/test-2.jpg" alt="Card image cap">
              <h4 class="card-title">Card 4</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <!--
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 5</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 6</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 7</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div> -->
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-4">
            <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
              <i class="fa fa-lg fa-chevron-left"></i>
            </a>
            <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
              <i class="fa fa-lg fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  </main><!-- End #main -->



  <script type="text/javascript">
    
    (function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end 
        if (e.direction == "left") {
          $(
            ".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);

  </script>