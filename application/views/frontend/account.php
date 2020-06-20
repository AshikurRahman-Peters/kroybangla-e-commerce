<?php if (isset($_SESSION['first_name'])) { ?>

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="#">My Account</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="row">

            <div class="mod-content box-category">
                <ul class="nav nav-pills col-md-2 col-sm-12 col-xs-12 accordion">
                    <li class="active panel">
                        <a href="#1a" data-toggle="tab">My Profile</a>
                    </li>
                    <li class="panel"><a href="#2a" data-toggle="tab">My Order</a>
                    </li>
                    <li class="panel"><a href="#3a" data-toggle="tab">Applying clearfix</a>
                    </li class="panel">
                    <li class="panel"><a href="#4a" data-toggle="tab">Background color</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content  col-md-10 col-sm-12 col-xs-12">
                <div class="tab-pane active" id="1a">
                    <aside class="col-md-12 col-sm-9 col-xs-12 content-aside left_column sidebar-offcanvas">
                        <div class="row">
                            <div id="content" class="col-sm-12">
                                <h1>My Profile
                                </h1>

                                <div class="table-responsive">
                                    <?php $name = $_SESSION['first_name'];
                                    $phone = $_SESSION['phone'];
                                    $email = $_SESSION['email'];
                                    $address = $_SESSION['address'];
                                    ?>
                                    <p> Name: <?php echo $name; ?></p>
                                    <p> Phone: <?php echo $phone; ?></p>
                                    <p> E-mail: <?php echo $email; ?></p>
                                    <p> Address: <?php echo $address; ?></p>


                                </div>
                            </div>


                        </div>

                    </aside>
                </div>

                <div class="tab-pane" id="2a">
                    <aside class=" content-aside left_column sidebar-offcanvas">
                        <div class="row">
                            <div id="content" class="col-sm-12">
                                <h1><?php echo $name ?> Order List
                                </h1>
                                <?php $name = $_SESSION['first_name'];

                                echo $name;
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-center">Product Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-left">Invoice</td>
                                                <td class="text-left">Status</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <?php
                                        $c_id = $_SESSION['c_id'];
                                       
                                        $order = $this->db->query("SELECT
                                        tbl_orders_master.*,
                                        tbl_orders.*,
                                        tbl_products.*
                                    FROM
                                        tbl_orders
                                    INNER JOIN tbl_orders_master ON tbl_orders.master_id = tbl_orders_master.order_m_id
                                    INNER JOIN tbl_customer ON tbl_orders.order_c_id = tbl_customer.c_id
                                    INNER join tbl_products on tbl_orders.order_pro_id = tbl_products.pro_id
                                    WHERE
                                                tbl_orders_master.c_id ='$c_id' 
                                             ")->result();
                                            
                                        ?>

                                        <tbody>
                                            <?php
                                            foreach ($order as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"> <a href="product.html"><img style="width:30%" src="<?php echo  base_url() ?>uploads/product/<?php echo $value->pro_image; ?>" alt="G<?php echo $value->pro_title;?>" title="<?php echo $value->pro_title;?>" class="img-thumbnail"></a> </td>
                                                    <td class="text-left"><a href="#"><?php echo $value->pro_title;?></a><br>
                                                    <td class="text-left"><a href="#"><?php echo $value->pro_quantity;?></a><br>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>Product/view_master_detail/<?php echo $value->order_m_id ?>">
                                                            <button class="btn btn-success btn-sm">view</button>
                                                        </a>
                                                    </td>
                                              
                                                <?php if ($value->order_status == 'p') { ?>
                                                    <td><button class="btn btn-danger btn-sm" id="" data-id="p">pending</td>
                                                <?php } else if ($value->order_status == 's') { ?>
                                                    <td><button class="btn btn-primary btn-sm" id="" data-id="s">shipping</td>
                                                <?php } else { ?>
                                                    <td><button class="btn btn-success btn-sm" id="" data-id="d">delivered</td>
                                                <?php } ?>
                                                    <td class="text-right"><?php echo $value->amount; ?> TK</td>
                                                    <td class="text-right"><?php echo $value->total_amount;?> TK</td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>


                        </div>

                    </aside>
                </div>
                <div class="tab-pane" id="3a">
                    <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                </div>
                <div class="tab-pane" id="4a">
                    <h3>We use css to change the background color of the content to be equal to the tab</h3>
                </div>
            </div>
        </div>
    </div>
    <style>
        @media only screen and (max-width: 992px) {
            .product-detail .sidebar-offcanvas.left_column {
                left: 0% !important;
            }

            .product-detail .sidebar-offcanvas {
                width: 100%;
                position: inherit;
            }
        }

        .nav-pills>li {
            float: none;
            width: 159px;
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-left: 17px;
        }
    </style>
<?php } ?>