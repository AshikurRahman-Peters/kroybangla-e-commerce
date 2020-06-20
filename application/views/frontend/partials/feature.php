<div class="banner_bottom_agile_info">
    <div class="container">
        <?php
        if( count($getFeatured) > 1 ):
        ?>

        <div class="banner_bottom_agile_info_inner_w3ls">
            <h3 class="wthree_text_info">welcome Kroy Bangla</h3>

            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <a href="<?php echo base_url('Product_page') ?>">
                        <img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $getFeatured[0]->image ?>" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><?php echo $getFeatured[0]->description ?></h3>
                            <p><?php echo $getFeatured[0]->title ?></p>
                        </figcaption>
                    </a>
                </figure>
            </div>

            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <a href="<?php echo base_url('Product_page') ?>">
                        <img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $getFeatured[1]->image ?>" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><?php echo $getFeatured[1]->description ?></h3>
                            <p><?php echo $getFeatured[1]->title ?></p>
                        </figcaption>
                    </a>
                </figure>
            </div>

            <div class="clearfix"></div>
        </div>

        <?php endif; ?>
    </div>
</div>