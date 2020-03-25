  <?php include('layout/css.php'); ?>

    <!-- page wrapper -->
    <div class="page-wrapper">

      <!-- Header Main Area -->
      <header class="site-header header-style-1">
        <div class="pre-header">
          <div class="container">
            <div class="d-flex justify-content-between  align-items-center">
              <div class="pre-header-left">
                <ul class="top-contact">
                  <li><i class="optico-icon-location-pin"></i><strong>Head Office</strong>
                    275 / 226 Karnailganj Backside of Police Station Near (Temple) Allahabad</li>
                </ul>
              </div>
              <div class="pre-header-right">
                <ul class="top-contact d-inline">
                  <li><i class="optico-icon-clock"></i>Sun - Sat 8.00 - 20.00 </li>
                </ul>
                <ul class="social-icons d-inline">
                  <li><a target="_blank" href="#" data-tooltip="Facebook"><i class="optico-icon-facebook"></i></a></li>
                  <li><a target="_blank" href="#" data-tooltip="Twitter"><i class="optico-icon-twitter"></i></a></li>
                  <li><a target="_blank" href="#" data-tooltip="Flickr"><i class="optico-icon-flickr"></i></a></li>
                  <li><a target="_blank" href="#" data-tooltip="LinkedIn"><i class="optico-icon-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="site-header-menu">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="d-flex align-items-center">
                  <div class="site-branding flex-grow-1">
                    <a href="<?php echo base_url(''); ?>">
                      <img class="logo-img" alt="RS" src="<?php echo base_url('optimum/web/')?>images/RS2logo.png">
                    </a>
                  </div>
                  <div class="site-navigation ml-auto">
                    <nav class="main-menu navbar-expand-xl navbar-light">
                      <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="fa fa-bars"></span>
                        </button>
                      </div>
                      <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                          <li class="active"><a href="<?php echo base_url('home'); ?>">Home</a>
                          </li>
                          <li class="dropdown">
                            <a href="">Exam Practice</a>
                            <ul>
                              <li><a href="<?php echo base_url('post/test/index/').'junior_assistant'?>">Junior Assistant</a></li>
                              <li><a href="<?php echo base_url('post/test/index/').'uppcl'?>">UPPCL</a></li>
                              <li><a href="<?php echo base_url('post/test/index/').'high_court'?>">High court</a></li>
                              <li><a href="<?php echo base_url('post/test/index/').'ro_aro'?>">RO/ARO</a></li>
                              <li><a href="<?php echo base_url('post/test/index/').'crpf'?>">CRPF</a></li>
                              <li><a href="<?php echo base_url('post/test/index/').'ssc'?>">SSC</a></li>

                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="">Practice</a>
                            <ul>
                              <li><a href="<?php echo base_url('quiz/easy') ?>">Easy</a></li>
                              <li><a href="<?php echo base_url('quiz/medium') ?>">Meddium</a></li>
                              <li><a href="<?php echo base_url('quiz/high') ?>">High</a></li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url('faq');?>">FAQ</a></li>
                          <li class="dropdown">
                            <a href="">Typing Tools</a>
                            <ul>
                              <li><a href="<?php echo base_url('home/course/').'english' ?>">English</a></li>
                              <li><a href="<?php echo base_url('home/course/').'hindi' ?>">Hindi</a></li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url('contact');?>">Contact</a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                  <div class="menu-right-box d-flex align-items-center">
                    <a href="" class="search-btn"><i class="optico-icon-search-1"></i></a>
                    <div class="header-button">
                      <a href="<?php echo base_url('auth') ?>" class="btn btn-outline">Log in</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Header Main Area End Here -->

      <!-- page content -->
      <div class="page-content">

        <?php echo $main_content; ?>

        <!-- footer -->
        <footer class="footer site-footer">
          <div class="footer-top skin-bg-color">
            <div class="container">
              <div class="row d-flex white-color align-items-center">
                <div class="col-lg-8">
                  <div class="iconbox iconbox-style-6">
                    <div class="iconbox-inner d-flex">
                      <div class="iconbox-icon">
                        <i class="themifyicon ti-headphone-alt"></i>
                      </div>
                      <div class="iconbox-contents">
                        <div class="iconbox-title">
                          <h2>If you Have Any Questions <strong>feel free to ask OR Call Us On 7007705103 , 8808930250</strong>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mt-md-30 text-lg-right">
                  <a href="<?php echo base_url('contact');?>" class="btn btn-dark">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footerlogo mb-4">
                  <img class="" src="<?php echo base_url('optimum/web/')?>images/RS2logo.png" alt="">
                </div>
                <p class="mb-0">With RS typing go crack your exam and achieve what you desire for.</p>
                <div class="social-links-wrapper">
                  <ul class="social-icons">
                    <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a></li>
                    <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top" data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 mt-sm-30">
                <h6 class="footer-widget-title">Exam practice</h6>
                <ul class="list-unstyled footer-link-list">
                  <li><a href="<?php echo base_url('lesson/').'junior_assistant'?>">Junior Assistant</a></li>
                  <li><a href="<?php echo base_url('lesson/').'uppcl'?>">UPPCL</a></li>
                  <li><a href="<?php echo base_url('lesson/').'high_court'?>">High court</a></li>
                  <li><a href="<?php echo base_url('lesson/').'ro_aro'?>">RO/ARO</a></li>
                  <li><a href="<?php echo base_url('lesson/').'crpf'?>">CRPF</a></li>
                  <li><a href="<?php echo base_url('lesson/').'ssc'?>">SSC</a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 mt-md-30">
                <h6 class="footer-widget-title">Practice</h6>
                <ul class="list-unstyled footer-link-list">
                  <li><a href="<?php echo base_url('quiz/easy') ?>">Easy</a></li>
                  <li><a href="<?php echo base_url('quiz/medium') ?>">Meddium</a></li>
                  <li><a href="<?php echo base_url('quiz/high') ?>">High</a></li>
                  <!--  <li><a href="#">Vision Correction</a></li>
                          <li><a href="#">Oculoplastic Surgery</a></li>
                          <li><a href="#">Vitreo Retinal Surgery</a></li>-->
                </ul>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 address-box mt-md-30">
                <h6 class="footer-widget-title">Contact Us</h6>
                <div class="d-flex">
                  <i class="optico-icon-location-pin"></i>
                  <p><strong>Head Office</strong>
                    <br />275 / 226 Karnailganj Backside of Police Station Near (Temple) Allahabad</p>
                </div>
                <div class="d-flex">
                  <i class="optico-icon-mobile"></i>
                  <p>7007705103 , 8808930250</p>
                </div>
                <div class="d-flex">
                  <i class="optico-icon-comment-1"></i>
                  <p>info@rstyping.com</p>
                </div>
                <div class="d-flex">
                  <i class="optico-icon-clock"></i>
                  <p>Mon to Sat - 8:00am to 8:00pm</p>
                </div>
              </div>
            </div>
            <div class="bottom-footer">
              <div class="row">
                <div class="col-sm-6">
                  Copyright © 2020 <a href="<?php echo base_url(); ?>">RS TYPING</a>. All rights reserved.
                </div>
                <!--<div class="col-sm-6 text-lg-right text-md-right text-sm-left">-->
                <!--  <ul class="list-inline">-->
                <!--    <li class="list-inline-item"><a href="#">About Us</a></li>-->

                <!--    <li class="list-inline-item"><a href="#">Privacy</a></li>-->
                <!--  </ul>-->
                <!--</div>-->
              </div>
            </div>
          </div>
        </footer>
        <!-- footer End -->
        </div>
      <!-- page wrapper End -->
      </div>

      <!-- Search Box Start Here -->
      <div class="ts-search-overlay">
        <div class="ts-icon-close"></div>
        <div class="ts-search-outer">
          <div class="ts-search-logo"><img alt="optico" src="<?php echo base_url('optimum/web/')?>images/RS2logo.png" /></div>
          <form class="ts-site-searchform">
            <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
            <button type="submit"><span class="optico-icon-search"></span></button>
          </form>
        </div>
      </div>
      <!-- Search Box End Here -->
    </div>
   <?php include('layout/footer.php'); ?>
