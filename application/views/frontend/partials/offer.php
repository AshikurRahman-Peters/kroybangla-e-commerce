
<?php
if( count($getFeaturedOffer) > 1 ):
?>
<div class="agile_last_double_sectionw3ls">

    <div class="col-md-6 multi-gd-img multi-gd-text ">
        <a href="<?php echo base_url().'category/10'; ?>"><img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $getFeaturedOffer[0]->image ?>" alt=" "><h4><?php echo $getFeaturedOffer[0]->description ?></h4></a>
    </div>

    <div class="col-md-6 multi-gd-img multi-gd-text ">
        <a href="<?php echo base_url().'category/11'; ?>"><img src="<?php echo base_url(); ?>/uploads/featured/<?php echo $getFeaturedOffer[1]->image ?>" alt=" "><h4><?php echo $getFeaturedOffer[1]->description ?></h4></a>
    </div>
    <div class="clearfix"></div>
</div>
<?php endif; ?>