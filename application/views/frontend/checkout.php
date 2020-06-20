<!-- Main Container  -->

<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Checkout</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>So Onepage Checkout</h1>
            <div class="so-onepagecheckout layout1">
                <div class="col-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="checkout-content checkout-register">
                        <fieldset id="address">
                            <h2 class="secondary-title"><i class="fa fa-map-marker"></i>Your Address</h2>
                            <div class=" checkout-payment-form">
                                <div class="box-inner">
                                    <form method="post" id="order_address_form" class="form-horizontal form-payment">
                                        <div id="payment-new" style="display: block">
                                            <div class="form-group company-input">
                                                <input type="text" id="name" name="name" value="" required="" placeholder="Full Name" class="form-control">
                                            </div>
                                            <div class="form-group required">
                                                <input type="phone" id="phone" name="phone" value="" required="" placeholder="phone or mobile no" class="form-control">
                                            </div>
                                           
                                            <div class="form-group required">
                                                <select class="form-control" id="district_id" name="district_id">
                                                    <option value="0">Select a District</option>
                                                    <?php foreach ($district as $key => $value) {?>
                                                            <option value="<?php echo $value['district_id'] 
                                                            ?>"><?php echo $value['district_name'] ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group address-2-input">
                                                <textarea class="form-control" placeholder="Delivery or shipping address here" id="address" name="address" rows="3"></textarea>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="password" name="password" id="password" placeholder="Your Password" class="form-control">
                                            </div> -->

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
                        </fieldset>


                    </div>
                </div>

                <div class="col-right col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <section class="section-right">


                        <div class="checkout-content checkout-cart">
                            <h2 class="secondary-title"><i class="fa fa-shopping-cart"></i>Shopping Cart (0.00kg) </h2>
                            <div class="shopping-cart-block" id="loadCartHtml">
                            </div>


                        </div>

                    </section>
                </div>
            </div>

        </div>
    </div>


</div>

<!-- //Main Container -->


<!-- /banner_bottom_agile_info -->
<!-- <div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Checkout <span> </span></h3> -->
<!--/w3_short-->
<!-- <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="<?php //echo base_url('home') 
                                    ?>">Home</a><i>|</i></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div> -->
<!--//w3_short-->
<!-- </div>
</div> -->
<!-- /banner_bottom_agile_info -->


<!-- <section class="main-contain bg-white">
    <div class="container">
        <div class="shopping-cart-block" id="loadCartHtml">
        </div>

        <div class="shopping-cart-checkout">
            <div class="coupon-code">
                <div class="row"> -->
<!-- <div class="col-sm-4 sm-margin-bottom-30">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please register or login.</p>
                        <form action="" method="post">
                            <div class="form-group col-md-12 no-padding">
                                <label>Username or email <span class="required">*</span>
                                </label>
                                <input type="email" name="placeemail" id="ordemail" class="form-control" placeholder=""> </div>
                            <div class="form-group col-md-12 no-padding">
                                <label>Password <span class="required">*</span>
                                </label>
                                <input type="password" id="ordpassword" name="placepassword" class="form-control" placeholder=""> </div>
                            <button type="button" class="btn-check checkout-btn" onclick="tbl_orders_master()">Login</button>
                        </form>
                    </div> -->
<!-- <form method="post" id="order_address_form">
                        <div class="col-sm-5">
                            <div class="page-title page-title-2 text-left">
                                <h3>Delivery Information </h3>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group col-sm-12">
                                    <input type="text" id="name" name="name" value="" required="" placeholder="Full Name" class="form-control">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="phone" id="phone" name="phone" value="" required="" placeholder="phone or mobile no" class="form-control">
                                </div>

                                <div class="form-group col-sm-12">

                                    <textarea class="form-control" placeholder="Delivery or shipping address here" id="address" name="address" rows="3"></textarea>

                                </div>
                                <div class="form-group col-sm-12">
                                    <select class="form-control" id="district_id" name="district_id">
                                        <option value="0">Select a District</option>
                                        <?php //foreach ($district as $key => $value) { 
                                        ?>
                                            <option value="<?php //$value['district_id'] 
                                                            ?>"><?php //$value['district_name'] 
                                                                                                ?></option>
                                        <?php //} 
                                        ?>
                                    </select>
                                </div> -->
<!-- <div class="col-sm-12 form-group">
                                    <input type="radio" value="create-account" name="create-ac" id="create-ac" checked="checked">
                                    <label for="create-ac">Create An Account?</label>
                                </div> -->
<!-- <div class="form-group col-sm-12">
                                    <input type="password" name="password" id="password" placeholder="Your Password" class="form-control">
                                </div>
                                <a href="" class="btn btn-product pull-right" id="orderNow">Order Now</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
</section> -->


<script>
    $(document).ready(function() {
        var path = '<?php echo base_url(); ?>Product/cartLoadForOrder';

        function loadCartHtml() {
            $.ajax({
                url: path,
                method: "POST",
                beforeSend() {
                    //$("#loadCartHtml").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
                },
                success: function(data) {
                    $("#loadCartHtml").html(data);
                }
            })
        }

        loadCartHtml();


        $(document).on('click', '#remnoveItem', function() {
            var id = $(this).attr('data-id');
            var path = '<?php echo base_url(); ?>Product/removeCart';


            $.ajax({
                url: path,
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    loadCartHtml();
                }

            })
        });

        $(document).on('change', '#quantity_up', function() {

            var path = '<?php echo base_url(); ?>Product/quantiyUpdate';
            var id = $(this).attr('data-id');
            var qury = $(this).val();
            if (qury == '0') {
                alert('Minimum at last one quantity');
            }

            $.ajax({
                url: path,
                method: "POST",
                data: {
                    id: id,
                    qury: qury
                },
                success: function(data) {
                    loadCartHtml();
                }

            });


        });

        $(document).on('click', '#pleaseLogin', function(e) {
            e.preventDefault();
            $('#myModal').modal('show');
        });

        $(document).on('click', '#orderNow', function(e) {
            e.preventDefault();
            $('#order_address_form').submit();

        });

        $(document).on('submit', '#order_address_form', function(e) {
            e.preventDefault();
            var name = $('#name', this).val();
            var phone = $('#phone', this).val();
            var address = $('#address', this).val();
            var district_id = $('#district_id', this).val();
            if (name == '') {
                alert('Name field is required');
            } else if (phone == '') {
                alert('Phone field is required');
            } else if (address == '') {
                alert('Address field is required');
            } else if (district_id == '') {
                alert('District field is required');
            } else {

                var orderNow = 'orderNow';
                var path = '<?php echo base_url(); ?>Product/orderNow';
                var formData = new FormData(this);

                var sub_total_amo = $('#hidden_page_sub_total_amo').val();
                var delivary_charge = $('#hidden_page_delivary_charge').val();
                var total_amo = $('#hidden_page_total_amount').val();
                formData.append('sub_total_amo', sub_total_amo);
                formData.append('delivary_charge', delivary_charge);
                formData.append('total_amo', total_amo);
                //formData.append('insert_id', $insert_id);
                $.ajax({
                    url: path,
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.trim() == 'cart_is_empty') {
                            alert('Please Product add to cart');
                            window.location.reload();
                        }
                        if (data.trim() == 'order_success') {


                            alert('thanks');
                            window.location.reload();


                        }

                    },
                    error: function() {
                        alert('Error');
                    }
                });
            }
        });

    });
</script>