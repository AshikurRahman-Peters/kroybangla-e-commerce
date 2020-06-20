<!-- Footer Container -->
<footer class="footer-container typefooter-3">
    <div class="footer-has-toggle collapse" id="collapse-footer">
            </section>
            <section class="section_2  section-color ">
                <div class="container page-builder-ltr">
                    <div class="row row_dsw3  row-style  row-color ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_itqc  col-style">
                            <div class="clearfix bonus-menus bonus-menu-4">
                                <ul>
                                    <li class="item secure col-md-3">
                                        <div class="icon">
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">100% Secure Payments</a></h5>
                                            <p>All major credit & debit</p>
                                            <p> cards accepted</p>
                                        </div>
                                    </li>
                                    <li class="item help col-md-3">
                                        <div class="icon">
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">Help Center</a></h5>
                                            <p>Got a question? Look no further. </p>
                                            <p> Browse our FAQs or submit your here.</p>
                                        </div>
                                    </li>
                                    <li class="item trustpay col-md-3">
                                        <div class="icon">
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">TrustPay</a></h5>
                                            <p>100% Payment Protection. Easy</p>
                                            <p> Return Policy </p>
                                        </div>
                                    </li>
                                    <li class="item delivery col-md-3">
                                        <div class="icon">
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">Worldwide Delivery</a></h5>
                                            <p>With sites in 5 languages, we ship to </p>
                                            <p>over 200 countries & regions.</p>
                                        </div>
                                    </li>
                                    <li class="item value col-md-3">
                                        <div class="icon">
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">Great Value</a></h5>
                                            <p>We offer competitive prices on our 100</p>
                                            <p>million plus product range.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_3 ">
                <div class="container page-builder-ltr">
                    <div class="row row_4gdc  row-style ">

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col_l60i  col-style">
                            <div class="footer-links">
                                <h4 class="title-footer">
                                    FOLLOW US
                                </h4>
                                <div class="socials">
                                    <style>
                                    .socials i {
                                        font-size: 15px;
                                        padding: 4% 0%;
                                    }
                                    </style>
                                    <a href="https:www.facebook.com/" class="facebook" target="_blank">
                                        <i class="fa fa-facebook"> Facebook</i>
                                    </a>
                                    <br>
                                    <a href="https:twitter.com/" class="twitter" target="_blank">
                                        <i class="fa fa-twitter"> Twitter</i>
                                    </a>
                                    <br>
                                    <a href="https:plus.google.com/" class="google" target="_blank">
                                        <i class="fa fa-google-plus"> Google +</i>
                                    </a>
                                    <br>
                                    <a href="#" class="linkedIn" target="_blank">
                                        <i class="fa fa-linkedin"> linkedIn</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col_sa3f  col-style">
                            <div class="footer-links">
                                <h4 class="title-footer">
                                    POLICY INFO
                                </h4>
                                <ul class="links">
                                    <li>
                                        <a title="About US" href="<?php echo base_url('about_us'); ?>">About US</a>
                                    </li>
                                    <li>
                                        <a title="Contact us" href="<?php echo base_url('contact_us'); ?>">Contact
                                            us</a>
                                    </li>
                                    <?php if (isset($_SESSION['first_name'])) { ?>
                                    <li class="">
                                        <a href="<?php echo base_url(); ?>My_Account" class="clearfix">
                                            <strong>
                                                My Account
                                            </strong>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col_r3tw  col-style">
                            <div class="footer-links">
                                <h4 class="title-footer">
                                    Our BUSINESS
                                </h4>
                                <ul class="links">
                                    <li>
                                        <?php $fature_product = $this->db->query("SELECT * FROM tbl_category where cat_status =1")->result();
                    foreach ($fature_product as $key => $value) { ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>category/<?php echo $value->cat_id; ?>"><?php echo $value->cat_name; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col_asli  col-style">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0; width:100%; height:230px"></iframe>
                        </div>
                       

                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="footer-toggle hidden-lg hidden-md">
        <a class="showmore collapsed" data-toggle="collapse" href="#collapse-footer" aria-expanded="false"
            aria-controls="collapse-footer">
            <span class="toggle-more"><i class="fa fa-angle-double-down"></i>Show More</span>
            <span class="toggle-less"><i class="fa fa-angle-double-up"></i>Show less</span>
        </a>
    </div>
    <div class="footer-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-md-7  col-sm-7 copyright">
                    KroyBangla © 2020. All Rights Reserved. Designed by <a href="http://linktechbd.com/"
                        target="_blank">Linkup-technology</a>
                </div>
                <div class="col-md-5 col-sm-5 paymen">
                    <img src="<?php echo base_url() ?>/assets/frontend/image/catalog/demo/payment/payments-1.png"
                        alt="imgpayment">
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
<!-- end Footer Container -->

<!-- End Color Scheme
       ============================================ -->
<!-- Include Libs & Plugins
       ============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/themejs/libs.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/countdown/jquery.countdown.min.js">
</script>
<script type="text/javascript"
    src="<?php echo base_url() ?>/assets/frontend/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/datetimepicker/moment.js"></script>
<script type="text/javascript"
    src="<?php echo base_url() ?>/assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/modernizr/modernizr-2.6.2.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/minicolors/jquery.miniColors.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/jquery.nav.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/quickview/jquery.magnific-popup.min.js">
</script>
<!-- Theme files
       ============================================ -->
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/themejs/application.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/themejs/homepage.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/themejs/custom_h3.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/frontend/js/themejs/addtocart.js"></script>
</body>

</html>