<!-- Banner -->
<section class="home-banner home-slider-first">
  <div id="Bannerslider">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="<?php echo base_url('optimum/web/') ?>images\1860.jpg" alt="..." />
        <div class="carousel-caption">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-7 col-md-7 col-sm-8  col-8">
                <h1 class="anim-2"> <strong>RS TYPING</strong></h1>
                <div class="tagline anim-3 d-none d-sm-block">We Provides always our best services for our users</div>
                <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">Call for inquiry </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="C:\xampp\htdocs\rstyping\rst1img.jpg" alt="...">
        <div class="carousel-caption">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-7 col-md-7  col-sm-8 col-8">
                <span class="shapewrapper-inner anim-1">EYE CARE SPECIALIST</span>
                <h1 class="anim-2">Service that'll make you <br /><strong>see us with new eyes</strong></h1>
                <div class="tagline anim-3 d-none d-sm-block">We Provides always our best services for our clients</div>
                <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">Call for inquiry </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Welcome -->
  <section class="bg-lightgrey welcome-company">
    <div class="container">
      <div class="row align-items-lg-center align-items-md-end">
        <div class="col-md-12 col-lg-6">
          <img src="<?php echo base_url('optimum/web/') ?>images/rst1img.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-md-12 col-lg-6 mt-sm-30 pb-50">
          <div class="section-title mt-md-50">
            <h4 class="subheading skincolor">WELCOME TO RS TYPING</h4>
            <h2>WE PRESERVE, ENHANCE, AND <strong>PROTECT YOUR VISION</strong></h2>
          </div>
          <!-- <p>You are nothing without your eyes, <a class="opt-underline-dotted" href="#">consectetur adipisicing elit,</a> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        ullamco.</p> -->
        <!-- <p><a class="opt-underline-dotted" href="#">Care your eyes,</a> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p> -->
        <div class="sing-owner d-flex">
          <!--   <div class="sing">
            <img src="<?php echo base_url('optimum/web/') ?>images/signature.png" class="img-fluid" alt="" />
          </div>
          <div class="owner-author">
            <h4 class="owner-name">Mitchell Newman</h4>
            <h6 class="owner-postion">Owner, Lead Optometrist</h6>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="get-appointment">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h1 class="subheading skincolor">Join us</h1>
          <h2 class="white-color-2">Reach great heights by becoming our member</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-lightgrey appointment-from">
  <div class="container">
    <div class="row  box-shadow-02">
      <div class="col-lg-4 appointment-image">
      </div>
      <div class="col-lg-8 appointment-inner">
        <h3>Please call +918808930250 if urgent</h3><br>
        <div class="contact-form">
          <form method="POST" action="<?php echo base_url('') ?>">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input id="name" type="text" class="form-control" placeholder="Your Name" name="name" required="">
              </div>
              <div class="form-group col-lg-6">
                <input id="email" class="form-control" placeholder="Your Email" name="email" type="email" value="" aria-required="true" required="">
              </div>
              <div class="form-group col-lg-6">
                <input id="phone" type="number" class="form-control" placeholder="Your Phone" name="phone" required="" minlength="10" maxlength="12">
              </div>
              <div class="form-group col-lg-6">
                <textarea id="comment" class="form-control" placeholder="Message" name="message" cols="45" rows="5" aria-required="true" required=""></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <input class="btn" type="submit" value="SEND MESSAGE">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>