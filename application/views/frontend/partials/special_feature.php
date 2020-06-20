<div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 class="wthree_text_info">Some of our Special Feature</h3>

        <?php
            if( count($specialFeatured) > 2):
        ?>

        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href="<?php echo base_url().'category/10' ?>">
                <div class="bb-left-agileits-w3layouts-inner grid">
                    <figure class="effect-roxy">
                        <img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $specialFeatured[0]->image ?>" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><?php echo $specialFeatured[0]->description ?></h3>
                            <p><?php echo $specialFeatured[0]->title ?></p>
                        </figcaption>
                    </figure>
                </div>
            </a>
        </div>
        <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?php echo base_url('Product_page') ?>">
                <div class="bb-middle-agileits-w3layouts grid">
                    <figure class="effect-roxy">
                        <img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $specialFeatured[1]->image ?>" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><?php echo $specialFeatured[1]->description ?></h3>
                            <p><?php echo $specialFeatured[1]->title ?></p>
                        </figcaption>
                    </figure>
                </div>
            </a>
            <a href="<?php echo base_url('Product_page') ?>">
                <div class="bb-middle-agileits-w3layouts forth grid">
                    <figure class="effect-roxy">
                        <img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $specialFeatured[2]->image ?>" alt=" " class="img-responsive">
                        <figcaption>
                            <h3><?php echo $specialFeatured[2]->description ?></h3>
                            <p><?php echo $specialFeatured[2]->title ?></p>
                        </figcaption>
                    </figure>
                </div>
            </a>
            <div class="clearfix"></div>
        </div>

        <?php endif; ?>


    </div>
</div>