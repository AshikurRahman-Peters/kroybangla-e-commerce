<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <!-- <h3 class="wthree_text_info">Some Of Our Work</h3> -->
        <?php
        if (isset($AllProductData)) :
            foreach ($AllProductData as $product) :
        ?>

                <!-- <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="<?php //echo base_url(); 
                                            ?>/uploads/product/<?php //echo $product->pro_image ?>" alt="" class="pro-image-front">
                                <img src="<?php //echo base_url(); 
                                            ?>/uploads/product/<?php //echo $product->pro_image ?>" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="<?php //echo base_url(); 
                                                    ?>single/<?php //echo $product->pro_id 
                                                                ?>" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="<?php //echo base_url(); 
                                                ?> single/<?php //echo $product->pro_id 
                                                            ?>"><?php //echo $product->pro_title ?></a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">tk- <?php //echo $product->pro_price 
                                                                    ?></span>
                                    <?php //if($product->pro_old_price): 
                                    ?>
                                    <del>tk <?php //echo $product->pro_old_price 
                                            ?></del>
                                    <?php //endif; 
                                    ?>
                                </div> 
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form  id="addToCartForm" method="post">
                                        <fieldset>


                                            <input type="hidden" name="product_id" id="product_id" value="<?php //$product->pro_id; ?>">

                                            <input type="submit" name="submit" value="Add to cart" class="button" id="addToCartProduct" data-id="<?php //$product->pro_id; ?>"  />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <?php endforeach;
        endif; ?>

    </div>
</div>
<!-- Main Container  -->
<div id="content">
    <div class="so-page-builder">
        <section id="section_1_h6">
            <div class="container page-builder-ltr">
                <div class="row row-style row_lkda">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col_iksd menu_vertical">
                        <div class="row row-style row-lkdn">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iuhd block">
                                <div class="module so-extraslider-ltr home3_extra bn-shadow">
                                    <h3 class="modtitle">News & Events</h3>
                                    <div class="modcontent">
                                        <div id="so_extra_slider_450" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                                            <div class="box-banner">
                                                <div class="banners">
                                                </div>
                                            </div>
                                            <!-- Begin extraslider-inner -->
                                            <div class="extraslider-inner products-list grid" data-effect="none">
                                                <div class="item ">
                                                    <div class="item-wrap product-layout style1 ">
                                                        <marquee width="100%" direction="up" height="300px" scrollamount="3">
                                                            <?php $news = $this->db->query('select * from common_part where com_status = 1 order by com_id asc limit 2')->result();
                                                            foreach ($news as $key => $value) { ?>


                                                                <h5> <?php echo $value->com_title; ?></h5>
                                                                <p> <?php echo $value->com_description; ?></p>

                                                            <?php } ?>
                                                        </marquee>
                                                        <!-- End item-wrap-inner -->
                                                    </div>
                                                    <!-- End item-wrap -->
                                                    <!-- <div class="item-wrap product-layout style1 ">
                                                        <div class="product-item-container">
                                                            <div class="left-block ">
                                                                <div class="product-image-container ">
                                                                    <a class="lt-image" href="product.html" target="_blank" title="Est Officia Including Shoes Beautiful Pi..">
                                                                        <img src="<?php ///echo base_url("assets/frontend/"); 
                                                                                    ?>image/catalog/demo/product/fashion/15-60x60.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label">
                                                                </div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4 class="font-ct">
                                                                        <a href="product.html" target="_blank" title="Est Officia Including Shoes Beautiful Pieces Canaz ">
                                                                            Est Officia Including Shoes Beautiful Pi..
                                                                        </a>
                                                                    </h4>
                                                                    <div class="content_price price font-ct">
                                                                        <span class="old-price product-price">$50.00 </span>&nbsp;&nbsp;
                                                                        <span class="price-old">$279.99 </span>&nbsp;
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        End item-wrap-inner 
                                                    </div> -->
                                                </div>
                                                <!-- <div class="item ">
                                                    <div class="item-wrap product-layout style1 ">
                                                        <div class="product-item-container">
                                                            <div class="left-block ">
                                                                <div class="product-<?php //echo base_url("assets/frontend/"); 
                                                                                    ?>image-container ">
                                                                    <a class="lt-<?php //echo base_url("assets/frontend/"); 
                                                                                    ?>image" href="product.html" target="_blank" title="Amazing Yoga Sport Poses Most  People Wo..">
                                                                        <img src="<?php //echo base_url("assets/frontend/"); 
                                                                                    ?>image/catalog/demo/product/fashion/10-60x60.jpg" alt="Amazing Yoga Sport Poses Most  People Wouldn't Dream ">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label">
                                                                </div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4 class="font-ct">
                                                                        <a href="product.html" target="_blank" title="Amazing Yoga Sport Poses Most  People Wouldn't Dream  ">
                                                                            Amazing Yoga Sport Poses Most People Wo..
                                                                        </a>
                                                                    </h4>
                                                                    <div class="content_price price font-ct">
                                                                        <span class="old-price product-price">$89.00 </span>&nbsp;&nbsp;
                                                                        <span class="price-old">$100.00 </span>&nbsp;
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        End item-wrap-inner -->
                                                <!-- </div> -->
                                                <!-- End item-wrap -->
                                                <!-- </div> -->
                                            </div>
                                            <!--End extraslider-inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lbre block hidden-xs">
                                <div class="banner-layout-3 bt-1 clearfix banners">
                                    <div class="button-group2">
                                        <a class="bn-shadow" href="#" title="Banner 1">
                                        <?php $offer_two=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=9")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_two->image;?>" alt="Static Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lbre block hidden-xs">
                                <div class="banner-layout-3 bt-1 clearfix banners">
                                    <div class="button-group2">
                                        <a class="bn-shadow" href="#" title="Banner 1">
                                        <?php $offer_three=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=8")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_three->image;?>" alt="Static Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lbre block hidden-xs">
                                <div class="banner-layout-3 bt-1 clearfix banners">
                                    <div class="button-group2">
                                        <a class="bn-shadow" href="#" title="Banner 1">
                                        <?php $offer_four=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=7")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_four->image;?>" alt="Static Image">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col_8sje slider_container">
                        <div class="row row_mwsi row-style">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6iia block">
                                <div class="module so-deals-ltr home3_deal_style2">
                                    <div class="head-title" id="hot-deal">
                                        <h2 class="modtitle font-ct"><span>Hot Deal</span></h2>
                                        <div class="cslider-item-timer">
                                            <div class="product_time_maxprice"></div>
                                        </div>
                                    </div>
                                    <div class="modcontent products-list grid">
                                        <div id="so_deals_986" class="so-deal modcontent products-list grid clearfix preset00-4 preset01-4 preset02-3 preset03-2 preset04-1  button-type1  style2">
                                            <div class="extraslider-inner" data-effect="none">
                                                <?php
                                                if (isset($AllProductData)) :
                                                    foreach ($AllProductData as $product) :
                                                ?>
                                                        <div class="item">
                                                            <div class="transition product-layout">
                                                                <div class="product-item-container ">
                                                                    <div class="left-block ">
                                                                        <div class="product-image-container">
                                                                            <div class="image ">
                                                                                <a class="lt-image hidden" href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                                </a>
                                                                                <a class="lt-" href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>" target="_self">
                                                                                    <img src="<?php echo base_url(); ?>/uploads/product/<?php echo $product->pro_image ?>" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-label">
                                                                            <span class="label-product label-sale">-20%</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <div class="caption">
                                                                            <h4><a href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>" target="_self" title=" <?php echo $product->pro_title ?>"> <?php echo $product->pro_title ?></a></h4>

                                                                            <div class="price">
                                                                                <span class="price-new"><?php echo $product->pro_price ?> TK</span>
                                                                                <span class="price-old"><?php echo $product->pro_old_price ?> TK</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="button-group2">
                                                                            <form id="addToCartForm" method="post">
                                                                                <fieldset>


                                                                                    <input type="hidden" name="product_id" id="product_id" value="<?php echo $product->pro_id; ?>">

                                                                                    <input type="submit" class="bt-cart addToCart" name="submit" value="Add to cart" class="button" id="addToCartProduct" data-id="<?= $product->pro_id; ?>" />
                                                                                </fieldset>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <?php endforeach;
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kjmz block">
                                <div class="banner-21 banner">
                                    <div>
                                        <a class="bn-shadow" href="#" title="Banner 24">
                                        <?php $offer_one=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=10")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_one->image;?>" alt="Static Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hksd block">
                                <div class="module so-listing-tabs-ltr home3_listingtab_style2">
                                    <div class="head-title" id="resent-products">
                                        <h3 class="modtitle">Resent Products</h3>
                                    </div>

                                    <?php $fature_product = $this->db->query("SELECT * FROM tbl_category where cat_status =1")->result(); ?>

                                    <div class="modcontent">
                                        <div class="so-listing-tabs first-load module">
                                            <div class="ltabs-wrap">
                                                <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="button-group2" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="0">
                                                    <!--Begin Tabs-->
                                                    <div class="ltabs-tabs-wrap">
                                                        <span class="ltabs-tab-selected"></span>
                                                        <span class="ltabs-tab-arrow">▼</span>
                                                        <div class="item-sub-cat">
                                                            <ul class="ltabs-tabs cf">
                                                                <?php foreach ($fature_product as  $key => $value) { ?>
                                                                    <a href="<?php echo base_url(); ?>category/<?php echo $value->cat_id; ?>">
                                                                        <li class="ltabs-tab tab-sel">
                                                                            <div class="ltabs-tab-img">

                                                                                <img style="max-width: 50%;" src="<?php echo base_url("assets/frontend/"); ?>cropped-New-Logo-kroy-1.png" title="CASE" alt="CASE" style="background:#fff" />

                                                                            </div>

                                                                            <span class="ltabs-tab-label">

                                                                                <?php echo $value->cat_name; ?>

                                                                            </span>
                                                                        </li>
                                                                    </a>


                                                                <?php } ?>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Tabs-->
                                                </div>
                                                <div class="wap-listing-tabs products-list grid">
                                                    <div class="ltabs-items-container">

                                                        <div class="ltabs-items-inner ltabs-slider ">
                                                            <div class="ltabs-item row" style="margin-left: 0px;">
                                                                <?php $resent_product = $this->db->query("SELECT * FROM tbl_products WHERE pro_status=1 AND active =1 ORDER by pro_id ASC LIMIT 20")->result();
                                                                foreach ($resent_product as $key => $value) { ?>

                                                                    <div class="col-md-3 product-thumb trg transition product-layout">
                                                                        <div class="product-item-container">
                                                                            <div class="left-block ">
                                                                                <div class="image product-image-container  ">
                                                                                    <a class="lt-image" href="<?php echo base_url(); ?>single/<?php echo $value->pro_id ?>" target="_self" title="<?php echo $value->pro_title ?>">
                                                                                        <img src="<?php echo base_url(); ?>/uploads/product/<?php echo $value->pro_image ?>" alt="<?php echo $value->pro_title ?>">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="box-label">
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-block" style="padding: 0px;">


                                                                                <div class="caption">
                                                                                    <h4><a href="<?php echo base_url(); ?>single/<?php echo $value->pro_id ?>" target="_self" title=" <?php echo $value->pro_title ?>"> <?php echo $value->pro_title ?></a></h4>

                                                                                    <div class="price" style="text-align: center;">
                                                                                        <span class="price-new"><?php echo $value->pro_price ?> TK</span>
                                                                                        <span class="price-old"><?php echo $value->pro_old_price ?> TK</span>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="button-group2">
                                                                                    <form id="addToCartForm" method="post">
                                                                                        <fieldset>
                                                                                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $value->pro_id; ?>">
                                                                                            <button class="bt-cart addToCart" type="submit" data-toggle="tooltip" title="Add to cart" name="submit" value="Add to cart" id="addToCartProduct" data-id="<?= $value->pro_id; ?>"> <span>Add to cart</span></button>
                                                                                        </fieldset>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4kdf block">
                                <div class="banner-layout-5 row clearfix">
                                    <div class="banner-22 col-sm-4  banners">
                                        <div>
                                            <a class="bn-shadow" href="#" title="Banner 22">
                                            <?php $offer_five=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=6")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_five->image;?>" alt="Static Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner-23 col-sm-4 banners">
                                        <div>
                                            <a class="bn-shadow" href="#" title="Banner 23">
                                            <?php $offer_six=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=5")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_six->image;?>" alt="Static Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner-24 col-sm-4  banners">
                                        <div>
                                            <a class="bn-shadow" href="#" title="Banner 24">
                                            <?php $offer_seven=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=4")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_seven->image;?>" alt="Static Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ksde block">
                        <div class="module so-extraslider-ltr home3_extra_style3">
                            <h3 id="feature-items" class="modtitle">Feature Items</h3>
                            <div class="modcontent">
                                <div class="wap-listing-tabs products-list grid">
                                    <div class="ltabs-items-container">

                                        <div class="ltabs-items-inner ltabs-slider ">
                                            <div class="ltabs-item row">
                                                <div class="ltabs-item row" style="margin-left: 0px;">

                                                    <?php $resent_product = $this->db->query("SELECT * FROM tbl_products WHERE pro_status=1 AND active =1 and future_product='f' LIMIT 20")->result();
                                                    foreach ($resent_product as $key => $value) { ?>

                                                        <div class="col-md-3 product-thumb trg transition product-layout">
                                                            <div class="product-item-container">
                                                                <div class="left-block ">
                                                                    <div class="image product-image-container  ">
                                                                        <a class="lt-image" href="<?php echo base_url(); ?>single/<?php echo $value->pro_id ?>" target="_self" title="<?php echo $value->pro_title; ?>">
                                                                            <img src="<?php echo base_url(); ?>/uploads/product/<?php echo $value->pro_image ?>" alt="<?php echo $value->pro_title; ?>">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="<?php echo base_url(); ?>single/<?php echo $value->pro_id ?>" target="_self" title=" <?php echo $value->pro_title ?>"> <?php echo $value->pro_title ?></a></h4>

                                                                        <div class="price" style="text-align: center;">
                                                                            <span class="price-new"><?php echo $value->pro_price ?> TK</span>
                                                                            <span class="price-old"><?php echo $value->pro_old_price ?> TK</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group2">
                                                                        <form id="addToCartForm" method="post">
                                                                            <fieldset>


                                                                                <input type="hidden" name="product_id" id="product_id" value="<?php echo $value->pro_id; ?>">
                                                                                <button class="bt-cart addToCart" type="submit" data-toggle="tooltip" title="Add to cart" name="submit" value="Add to cart" id="addToCartProduct" data-id="<?= $value->pro_id; ?>"> <span>Add to cart</span></button>
                                                                            </fieldset>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_g1nr  block">
                            <div class="row">
                                <div class="banner-25 col-sm-6 banners">
                                    <div>
                                        <a class="bn-shadow" href="#" title="Banner 25">
                                        <?php $offer_eight=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=3")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_eight->image;?>" alt="Static Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="banner-26 col-sm-6  banners">
                                    <div>
                                        <a class="bn-shadow" href="#" title="Banner 26">
                                        <?php $offer_nine=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=2")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer_nine->image;?>" alt="Static Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
<!-- //Main Container -->

<!--/grids-->
<?php $this->load->view('frontend/partials/brands') 
?>