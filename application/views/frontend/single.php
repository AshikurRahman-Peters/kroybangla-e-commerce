<?php
if (isset($singleProduct)) :
    foreach ($singleProduct as $single) :
?>
        <!-- Main Container  -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="title-breadcrumb">
                <?php echo $single->pro_title ?> Products of Kory Bangla 
                </div>
                <ul class="breadcrumb-cate">
                    <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>

                    <li><a href="">Products | <?php echo $single->pro_title ?></a></li>
                </ul>
            </div>
        </div>
<?php endforeach;
endif; ?>
<div class="container product-detail">
    <div class="row">
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module category-style">
                <h3 class="modtitle"><span>Categories </span></h3>
                <div class="mod-content box-category">
                    <ul class="accordion" id="accordion-category">
                        <!-- <li class="panel">
                            <a href="#">Book Stationery </a>
                            <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category0 "></a></span>
                            <div id="category0" class="panel-collapse collapse  " style="clear:both">
                                <ul>
                                    <li>
                                        <a href="#">Girls New </a>
                                    </li>
                                    <li>
                                        <a href="#">Kitchen </a>
                                    </li>
                                    <li>
                                        <a href="#">Pearl mens </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <?php $fature_product = $this->db->query("SELECT * FROM tbl_category where cat_status =1")->result();
                        foreach ($fature_product as $key => $value) { ?>
                            <li class="panel">
                                <a href="<?php echo base_url(); ?>category/<?php echo $value->cat_id; ?>"><?php echo $value->cat_name; ?> </a>
                            </li>
                        <?php } ?>



                    </ul>
                </div>
            </div>

            <div class="module banner-left hidden-xs ">
                <div class="static-image-home-left banners">
                    <div><a title="Static Image" href="#">
                    <?php $offer=$this->db->query("SELECT image FROM tbl_featured WHERE status = 1 and id=1")->row();?>
                                            <img src="<?php echo base_url("uploads/featured/"); ?><?php echo $offer->image;?>" alt="Static Image">
                    </a></div>
                </div>
            </div>
        </aside>


        <div id="content" class="col-md-9 col-sm-12 col-xs-12">
            <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
            <div class="sidebar-overlay "></div>
            <?php
            if (isset($singleProduct)) :
                foreach ($singleProduct as $single) :
            ?>
                    <div class="product-view product-detail">
                        <div class="product-view-inner clearfix">
                            <div class="content-product-left  col-md-5 col-sm-6 col-xs-12">
                                <div class="so-loadeding"></div>
                                <div class="large-image  class-honizol">
                                    <div class="box-label">
                                        <span class="label-product label-sale">
                                            -30%
                                        </span>
                                    </div>
                                    <img class="product-image-zoom" src="<?php echo base_url() ?>uploads/product/<?php echo $single->pro_image ?>" data-zoom-image="<?php echo base_url() ?>uploads/product/<?php echo $single->pro_image ?>" title="<?php echo $single->pro_title; ?>" alt="<?php echo $single->pro_title; ?>">
                                </div>
                                <!-- <div id="thumb-slider" class="full_slider category-slider-inner products-list yt-content-slider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    <div class="owl2-item ">
                                        <div class="image-additional">
                                            <a data-index="0" class="img thumbnail" data-image="<?php //echo base_url() 
                                                                                                ?>uploads/product/<?php //echo $single->pro_image ?>" title="<?php //echo $single->pro_title; ?>">
                                                <img src="<?php //echo base_url() 
                                                            ?>uploads/product/<?php //echo $single->pro_image 
                                                                                ?>" title="<?php //echo $single->pro_title; 
                                                                                            ?>" alt="<?php //echo $single->pro_title; ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl2-item ">
                                        <div class="image-additional">
                                            <a data-index="1" class="img thumbnail " data-image="<?php //echo base_url() 
                                                                                                    ?>uploads/product/<?php //echo $single->pro_image ?>" title="<?php //echo $single->pro_title; ?>">
                                                <img src="<?php //echo base_url() 
                                                            ?>uploads/product/<?php //echo $single->pro_image 
                                                                                ?>" title="<?php //echo $single->pro_title; ?>" alt="<?php //echo $single->pro_title; ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl2-item ">
                                        <div class="image-additional">
                                            <a data-index="2" class="img thumbnail " data-image="<?php //echo base_url() 
                                                                                                    ?>uploads/product/<?php //echo $single->pro_image ?>" title="<?php //echo $single->pro_title; ?>">
                                                <img src="<?php //echo base_url() 
                                                            ?>uploads/product/<?php //echo $single->pro_image 
                                                                                ?>" title="<?php //echo $single->pro_title; 
                                                                                            ?>" alt="<?php //echo $single->pro_title; ?>">
                                            </a>
                                        </div>
                                    </div>


                                </div> -->
                            </div>
                            <div class="content-product-right col-md-7 col-sm-6 col-xs-12">
                                <div class="countdown_box">
                                    <div class="countdown_inner">
                                        <div class="Countdown-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="title-product">
                                    <h1><?php echo $single->pro_title ?></h1>
                                </div>
                                <!-- <div class="box-review">
                                    <div class="rating">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                    <a class="reviews_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> / <a class="write_review_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                                </div> -->
                                <div class="product_page_price price" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new"><span id="price-special" class="item_price"><?php echo $single->pro_price; ?> tk</span></span>
                                    <span class="price-old" id="price-old">
                                        <?php echo $single->pro_old_price; ?> tk

                                    </span>
                                    <!-- <div class="price-tax"><span>Ex Tax:</span></div> -->
                                </div>
                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="brand">
                                            <?php $cat = $single->cat_id;
                                            $cat_name =$this->db->query("select cat_name,cat_id from tbl_category where cat_id=$cat")->row();
                                            ?>
                                            <span>Category: </span><a href="<?php echo base_url('');?>category/<?php echo $cat_name->cat_id;?>"><?php echo $cat_name->cat_name; ?></a>
                                        </div>
                                        <!-- <div class="model"><span>Product Code: </span> Simple Product</div>
                                        <div class="reward"><span>Reward Points:</span> 400</div> -->
                                        <!-- <div class="stock"><span>Availability:</span> <i class="fa fa-check-square-o"></i>In Stock</div> -->
                                    </div>
                                </div>
                                <div class="short_description form-group">
                                    <h3>OverView</h3>
                                </div>
                                <div id="product">
                                    <div class="box-cart clearfix">
                                        <div class="form-group box-info-product">
                                            <!-- <div class="quantity">
                        <form name="f1" class="product_quantity">
                            <button type="button" class="quantity_button" name="subtract" onclick="javascript: document.getElementById(&quot;qty36&quot;).value--;" value="-">-</button>

                            <input type="text" class="quantity_field" name="qty36" value="1" id="qty36">

                            <button type="button" class="quantity_button" name="add" onclick="javascript: document.getElementById(&quot;qty36&quot;).value++;" value="+">+</button>
                        </form>
                    </div> -->
                                            <div class="option quantity">
                                                <form name="f1" class="product_quantity">
                                                    <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                                                        <input type="text" class="quantity_field " name="qty36" value="1" id="qty36">
                                                        <!-- <input type="hidden" class="quantity_field " name="qty36" value="1" id="qty36"> -->
                                                        <span class="input-group-addon product_quantity_down fa fa-caret-down  quantity_button" name="subtract" onclick="javascript: document.getElementById(&quot;qty36&quot;).value--;" value="-"></span>
                                                        <span class="input-group-addon product_quantity_up fa fa-caret-up  quantity_button" name="add" onclick="javascript: document.getElementById(&quot;qty36&quot;).value++;" value="+"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="cart">
                                                <form id="addToCartFormano" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $single->pro_id; ?>">
                                                        <input type="submit" name="submit" value="Add to cart" class="button" id="addToCartProduct" data-id="<?php echo $single->pro_id; ?>">
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="add-to-links wish_comp">
                                                <!-- <ul class="blank">
                                                    <li class="wishlist">
                                                        <a onclick="wishlist.add(108);"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="compare">
                                                        <a onclick="compare.add(108);"><i class="fa fa-random"></i></a>
                                                    </li>
                                                </ul> -->
                                            </div>

                                            <script type="text/javascript">
                                                $(document).on('submit', '#addToCartFormano', function(e) {
                                                    e.preventDefault();
                                                    var proId = $('#product_id', this).val();
                                                    var qty36 = $('#qty36').val();
                                                    var formData = new FormData(this);
                                                    formData.append('q', qty36);
                                                    var path = '<?php echo base_url(); ?>Product/productAddTocartAno';
                                                    $.ajax({
                                                        url: path,
                                                        method: "POST",
                                                        data: formData,
                                                        contentType: false,
                                                        processData: false,
                                                        success: function(data) {
                                                            var path = '<?php echo base_url(); ?>Product/cartLoadForOrderHome';

                                                            $.ajax({
                                                                url: path,
                                                                method: "POST",
                                                                beforeSend() {
                                                                    // $("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
                                                                },
                                                                success: function(data) {
                                                                    $("#loadQuck").html(data);
                                                                }
                                                            });

                                                            if (data.trim() == "alreadyAdded") {
                                                                alert("Sorry!! product already added");

                                                                $('#myModal3').modal('show');

                                                            }
                                                            if (data.trim() == "cartAdded") {
                                                                alert("Success!! product  added");
                                                                $('#myModal3').modal('show');
                                                            }
                                                        }

                                                    });
                                                });
                                            </script>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>

            <div class="product-attribute module">
                <div class="row content-product-midde clearfix">
                    <div class="col-xs-12">
                        <div class="producttab ">
                            <div class="tabsslider  ">
                                <ul class="nav nav-tabs font-sn">
                                    <li class="active"><a data-toggle="tab" href="#tab-description">Description</a></li>
                                    <!-- <li><a href="#tab-review" data-toggle="tab">Review (0)</a></li>
                                    <li><a href="#tab-tags" data-toggle="tab">Tags</a></li> -->
                                </ul>
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="tab-description">
                                        <div>
                                            <?php echo $single->pro_description; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <p>There are no reviews for this product.</p>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-name">Your Name</label>
                                                    <input type="text" name="name" value="" id="input-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-review">Your Review</label>
                                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>

                                            <div class="buttons clearfix" style="visibility: hidden; display: block;">
                                                <div class="pull-right">
                                                    <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab-tags">
                                        <a href="#">Monitor</a>,
                                        <a href="#">Apple</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-product-bottom bottom-product clearfix">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#product-related">Related Products</a></li>
                    <!-- <li><a data-toggle="tab" href="#product-upsell">UPSELL PRODUCTS</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="product-related" class="tab-pane fade in active">
                        <div class="clearfix module horizontal">
                            <div class="products-category">
                                <div class="category-slider-inner products-list yt-content-slider releate-products grid" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    <?php
                                    if (isset($randomProduct)) :
                                        foreach ($randomProduct as $product) :
                                    ?>
                                            <div class="product-layout">
                                                <div class="product-item-container">
                                                    <div class="left-block">
                                                        <div class="product-image-container">
                                                            <a href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>" title="<?php echo $product->pro_title ?> ">
                                                                <img src="<?php echo base_url() ?>uploads/product/<?php echo $product->pro_image ?>" alt="<?php echo $product->pro_title ?>" title="<?php echo $product->pro_title ?> " class="img-1 img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">
                                                            -40%
                                                        </span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="caption">
                                                            <h4><a href="<?php echo base_url(); ?>single/<?php echo $product->pro_id ?>"><?php echo $product->pro_title ?> </a></h4>
                                                            <div class="total-price clearfix" style="visibility: hidden; display: block;">
                                                                <div class="price price-left">
                                                                    <span class="price-new"><?php echo $product->pro_price; ?> TK</span>
                                                                    <span class="price-old"><?php echo $product->pro_old_price; ?> TK</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">
                                                                        -40%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="description hidden">
                                                                <p><?php echo $product->pro_description; ?> </p>
                                                            </div>
                                                        </div>
                                                        <div class="button-group">
                                                            <div class="button-inner ">
                                                                <!-- <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
                                                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                                <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button> -->
                                                                <form id="addToCartFormano" method="post">
                                                                    <fieldset>
                                                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $single->pro_id; ?>">
                                                                        <button type="submit" name="submit" value="Add to cart" class="addToCart btn-button" id="addToCartProduct" data-id="<?php echo $single->pro_id; ?>"><span class="hidden">Add to Cart </span></button>
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
            </div>
        </div>
    </div>
</div>
<style>
    .owl2-controls .owl2-nav {
        display: none !important;
    }
</style>
<!-- //Main Container -->