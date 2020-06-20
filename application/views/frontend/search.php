

<!-- Main Container  -->
<div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            All searching Products
        </div>
        <ul class="breadcrumb-cate">
            <li><a href=""><i class="fa fa-home"></i></a></li>
            <li><a href="#"> <?php
                                $category = $this->db->query('select * from tbl_category where cat_status=1')->result();
                                foreach ($category as $key => $value) {
                                    echo $value->cat_name;
                                    echo ' / ';
                                } ?></a></li>
        </ul>
    </div>
</div>

<div class="container product-detail">
    <div class="row">
        <div id="content" class="col-md-12 col-sm-12 col-xs-12">
            <div class="products-category">
                <div class="products-category">
                    <div class="product-filter filters-panel">
                        <div class="row">
                            <div class="col-sm-2 view-mode hidden-sm hidden-xs">
                                <div class="list-view">
                                    <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="products-list grid row number-col-3 so-filter-gird">
                        <?php
                        if (isset($searchResult)) {
                            foreach ($searchResult as $search) {
                        ?>
                                <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container  second_img  ">
                                                <a href="<?php echo base_url(); ?>single/<?php echo $search->pro_id ?>" title="<?php echo $search->pro_title ?> ">
                                                    <img src="<?php echo  base_url() ?>uploads/product/<?php echo $search->pro_image ?>" alt="<?php echo $search->pro_title ?> " title="<?php echo $search->pro_title ?> " class="img-2 img-responsive">
                                                </a>
                                            </div>

                                            <div class="box-label">
                                                <span class="label-product label-sale">
                                                    Sale
                                                </span>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="<?php echo base_url(); ?>single/<?php echo $search->pro_id ?>"><?php echo $search->pro_title ?></a></h4>
                                                <div class="total-price">
                                                    <div class="price price-left">
                                                        <span class="price-new"><?php echo $search->pro_price ?> TK</span> <span class="price-old"><?php echo $search->pro_old_price ?> TK</span>
                                                    </div>
                                                    <div class="price-sale price-right">
                                                        <span class="discount">-20%
                                                            <strong>OFF</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="description item-desc hidden">
                                                    <p><?php echo $search->pro_description ?></p>
                                                </div>
                                                <div class="list-block hidden">
                                                    <form id="addToCartForm" action="post">
                                                    <input type="hidden" name="product_id" id="product_id" value="<?php echo $search->pro_id; ?>">
                                                        <button class="addToCart" name="submit" value="Add to cart" type="submit" title="" Cart id="addToCartProduct" data-id="<?= $search->pro_id; ?>"><span>Add to Cart </span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <form id="addToCartForm" action="post">
                                                    
                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo $search->pro_id; ?>">
                                                    <button name="submit" value="Add to cart" class="addToCart btn-button" type="submit" id="addToCartProduct" data-id="<?= $search->pro_id; ?>" title="" ><span class="hidden">Add to Cart </span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>

                    </div>

                  
                </div>

            </div>
        </div>

    </div>
</div>

<!-- //Main Container -->