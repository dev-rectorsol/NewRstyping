<section class="inner-banner">
                <div class="titlebar-main">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <h1 class="inner-page-title">CONTACT US</h1>
                            </div>
                            <div class="col-lg-6 col-md-12 text-lg-right">
                                <nav aria-label="breadcrumb" class="breadcrumb-section d-flex justify-content-center  justify-content-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

 <section class="section-mdt bg-lightgrey">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="section-title text-center">
                                <h4 class="skincolor">GET IN TOUCH</h4>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="iconbox iconbox-style-7">
                                <div class="iconbox-inner d-flex">
                                    <div class="iconbox-icon skincolor">
                                        <i class="optico-icon optico-icon-headphone-alt"></i>
                                    </div>
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Phone Number</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>Mobile 01:- 7007705103</p>
                                                <p>Mobile 02:- 8808930250</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-sm-30">
                            <div class="iconbox iconbox-style-7">
                                <div class="iconbox-inner d-flex">
                                    <div class="iconbox-icon skincolor">
                                        <i class="optico-icon optico-icon-location-pin"></i>
                                    </div>
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Our Address</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>275 / 226 Karnailganj Backside of
                                                    <br/>Police Station Near (Temple) Allahabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-sm-30">
                            <div class="iconbox iconbox-style-7">
                                <div class="iconbox-inner d-flex">
                                    <div class="iconbox-icon skincolor">
                                        <i class="optico-icon optico-icon-mail"></i>
                                    </div>
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Email Address</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>info@typing.com</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- appointment -->
                     <div class="row  box-shadow-02 bg-white contact-appointment">
                        <div class="col-lg-4 appointment-image">
                        </div>
                        <div class="col-lg-8 appointment-inner">
                            <h3>Please call +918808930250 if urgent</h3><br>
                            <!-- <p>your personal case manager will ensure thate you receive the best possible care</p> -->
                            <div class="contact-form">
                                <form method="POST" action="<?php echo base_url('contact') ?>">
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
                                        <!-- <div class="form-group col-lg-6">
                                            <input id="subject" type="text" class="form-control" placeholder="subject" name="subject">
                                        </div> -->
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
                    <!-- appointment end -->
                </div>
            </section>
            <!-- Contact End --> 

            <!-- Map -->
            <section>
                <div class="map-box overflow-hidden">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.40315673!2d81.6614962636314!3d25.40250754485519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1582894273912!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Map end -->