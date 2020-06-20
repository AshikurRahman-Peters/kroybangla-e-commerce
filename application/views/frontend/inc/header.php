<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <!-- Basic page needs
         ============================================ -->
  <title>Kroy bangla</title>
  <meta charset="utf-8">
  <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
  <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
  <meta name="author" content="Magentech">
  <meta name="robots" content="index, follow" />
  <!-- Mobile specific metas
         ============================================ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- Favicon
         ============================================ -->
  <link rel="shortcut icon" type="<?php echo base_url("assets/frontend/"); ?>image/png" href="<?php echo base_url("assets/frontend/"); ?>ico/favicon-16x16.png" />
  <!-- Libs CSS
         ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/frontend/css/bootstrap/css/bootstrap.min.css">
  <link href="<?php echo base_url() ?>/assets/frontend/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/themecss/lib.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/js/minicolors/miniColors.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/js/slick-slider/slick.css" rel="stylesheet">
  <!-- Theme CSS
         ============================================ -->
  <link href="<?php echo base_url() ?>/assets/frontend/css/themecss/so_searchpro.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/themecss/so_megamenu.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/themecss/so-listing-tabs.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/themecss/so-newletter-popup.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/footer/footer3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/header/header6.css" rel="stylesheet">
  <link id="color_scheme" href="<?php echo base_url() ?>/assets/frontend/css/home6.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/responsive.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/quickview/quickview.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/frontend/css/themecss/so_onepagecheckout.css" rel="stylesheet">

  <!-- Google web fonts
         ============================================ -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i' rel='stylesheet' type='text/css'>
  <style type="text/css">
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Roboto, sans-serif;
    }
  </style>
</head>

<body class="common-home ltr layout-6">


  <!-- all Modal  -->

  <!-- Modal1 -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle"></i></button>
        </div>

        <div class="modal-body modal-body-sub_agile">
          <div class="col-md-8 modal_body_left modal_body_left1">
            <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
            <form action="#" id="login_form_action" method="post">

              <div class="form-group agile-form-group-top">
                <input type="text" name="email" value="" placeholder="E-Mail" id="email" required class="form-control">
                <!-- <input type="text" name="email" id="email" required="">
                <label>Email</label> -->
                <span></span>
              </div>
              <div class="form-group">
                <input type="password" name="password" value="" placeholder="password" id="password" required class="form-control">
                <!-- <input type="password" name="password" id="password" required="">
                <label>password</label> -->
                <span></span>
              </div>
              <input type="submit" value="Sign In">
            </form>
            <!-- <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul> -->
            <div class="clearfix"></div>
            <p><a href="#" data-toggle="modal" data-target="#myModal2"> Don't have an account?</a></p>

          </div>
          <div class="col-md-4 modal_body_right modal_body_right1">
            <img src="<?php echo base_url(); ?>/assets/frontend/images/log_pic.jpg" alt=" " />
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- //Modal content-->
    </div>
  </div>
  <!-- //Modal1 -->


  <!-- Modal2 -->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body modal-body-sub_agile">
          <div class="col-md-8 modal_body_left modal_body_left1">
            <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>

            <form id="customer_acc_cu_form">
              <div class="form-group agile-form-group-top">
                <input type="text" name="first_name" id="first_name" placeholder="Enter Your Name" class="form-control">
                <span></span>
              </div>
              <!-- <div class="form-group agile-form-group-top">
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control">
                <span></span>
              </div> -->
              <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                <span></span>
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="password" id="password" class="form-control">
                <span></span>
              </div>
              <div class="form-group">
                <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control">
                <span></span>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Address Here" id="address" name="address" rows="3" class="form-control"></textarea>

              </div>
              <!-- <div class="form-group">
                <input type="text" name="zip_code" placeholder="Zip Code" id="zip_code" class="form-control">
                <span></span>
              </div> -->

              <!-- <div class="form-group">
                <input type="text" name="city" id="city" placeholder="City" class="form-control">
                <span></span>
              </div> -->

              <input type="hidden" name="action" id="action" value="create">
              <input type="hidden" name="id" id="id" value="create">
              <input type="submit" name="submit" id="submit" value="Sign Up">
            </form>

            <!-- <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul> -->
            <div class="clearfix"></div>

          </div>
          <div class="col-md-4 modal_body_right modal_body_right1">
            <img src="<?php echo base_url(); ?>/assets/frontend/images/log_pic.jpg" alt=" " />
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- //Modal content-->


      <script type="text/javascript">
        $(document).ready(function() {
          $(document).on("submit", "#customer_acc_id", function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var username = $("#username").val();
            var pass = $("#pass").val();


            $.ajax({
              url: "Customer/create_account",
              method: "POST",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data) {
                let r = JSON.parse(data);
                alert(r.message);
                if (r.success) {
                  window.location = self.location;
                }
              },
              error: function(er) {
                alert(er.statusText);
              }
            });

          });
        });
      </script>

    </div>
  </div>
  <!-- //Modal2 -->

  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle"></i></button>
        </div>
        <div class="badge-open" style="padding: 40px;">
          <span id="loadQuck">

          </span>
          <div class="subtotal" style="margin-top: 20px;">

            <div class="row" style="display: inline-flex;">
              <div class="col-xs-6 col-sm-offset-1">
                <a href="<?php echo base_url(); ?>" class="btn btn-product cd-cart-btn pull-right">Browse Product</a>
              </div>
              <div class="col-xs-6 col-sm-offset-12">
                <a href="<?php echo base_url('add_cart') ?>" class="btn btn-product cd-cart-btn pull-right">View Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //Modal content-->
    </div>
  </div>

  <!--//Modal3-->


  <script>
    $(document).ready(function() {
      var path = '<?php echo base_url(); ?>Product/cartLoadForOrderHome';

      function loadCartHtml() {
        $.ajax({
          url: path,
          method: "POST",
          beforeSend() {
            //$("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
          },
          success: function(data) {
            $("#loadQuck").html(data);

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
    });


    $(document).ready(function() {


      var path = '<?php echo base_url(); ?>Product/cartLoadForOrderHome';

      function loadCartHtml() {
        $.ajax({
          url: path,
          method: "POST",
          beforeSend() {
            //$("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
          },
          success: function(data) {
            $("#loadQuck").html(data);

          }
        })
      }

      loadCartHtml();
    });

    $(document).on('submit', '#addToCartForm', function(e) {
      e.preventDefault();
      var proId = $('#product_id', this).val();
      var path = '<?php echo base_url(); ?>Product/productAddTocart';
      $.ajax({
        url: path,
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data) {
          var path = '<?php echo base_url(); ?>Product/cartLoadForOrderHome';

          $.ajax({
            url: path,
            method: "POST",
            beforeSend() {
              //$("#loadQuck").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
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


    $(document).on('submit', '#customer_acc_cu_form', function(e) {
      e.preventDefault();
      var first_name = $('#first_name', this).val();
      // var last_name = $('#last_name', this).val();
      var email = $('#email', this).val();
      var password = $('#password', this).val();
      var phone = $('#phone', this).val();
      var address = $('#address', this).val();
      // var zip_code = $('#zip_code', this).val();
      // var city = $('#city', this).val();

      var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

      var emailFormat = re.test($("#email", this).val()); // this return result in boolean type



      if (first_name == '') {
        alert("First Name Field is Required");
      // } else if (last_name == "") {
      //   alert("Last Name Field is Required");
      } else if (email == "") {
        alert("Email Field is Required");
      } else if (!emailFormat) {
        alert("Invlid Email");
      } else if (password == "") {
        alert("Password Name Field is Required");
      } else if (address == "") {
        alert("Addrss  Field is Required");
      // } else if (zip_code == "") {
      //   alert("Zip code  Field is Required");
      } else if (phone == "") {
        alert("Phone  Field is Required");
      // } else if (city == "") {
      //   alert("City   Field is Required");
      } else {
        var path = '<?php echo base_url(); ?>product/c_cu';

        $.ajax({
          url: path,
          method: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(data) {


            if (data.trim() == "created") {

              $('#myModal2').modal('hide');
              $("#myModal").modal('show');
              $('#customer_acc_cu_form')[0].reset();
               alert('Your account created success');
            }
            if (data.trim() == "not created") {
              alert('Your account not created ');
            }
            if (data.trim() == "already exit") {
              alert('Sorry Your email already  Exists');
            }

          }
        })
      }

    });


    $(document).ready(function() {
      $(document).on('submit', '#login_form_action', function(e) {
        e.preventDefault();
        $email = $('#email', this).val();
        $password = $('#password', this).val();
        if ($email == '') {
          alert('Email field is required')
        } else if ($password == '') {
          alert('Password field is required')

        } else {
          var path = '<?php echo base_url(); ?>product/tbl_orders_master';

          $.ajax({
            url: path,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
              if (data.trim() == "login") {
                alert('You login susses');
                location.reload();
              }

              if (data.trim() == "Access not match") {
                alert('Email or Password not match');
              }


            }
          })
        }


      })
    })
  </script>


  <!-- //header -->
  <div id="wrapper" class="wrapper-full banners-effect-7">
    <!-- Header Container  -->
    <header id="header" class="typeheader-6">
      <!-- Header Top -->
      <div class="header-top hidden-compact header" id="home">
        <div class="container">
          <div class="row">
            <div class="header-top-left  col-lg-6  col-sm-12 col-md-7 hidden-xs">
              <div class="list-contact hidden-sm hidden-xs">
                <marquee style="margin-top: 9px; margin-bottom:-5px">
                  Get an extra 10% off or more on select hotels with Member Pricing Join now, it’s free!
                </marquee>
              </div>
            </div>
            <div class="header-top-right collapsed-block col-lg-6 col-sm-12 col-md-5 col-xs-12 ">
              <div class="tabBlock" id="TabBlock-1">
                <ul class="top-link list-inline">
                  <li class="login">
                    <?php if (!isset($_SESSION['first_name'])) { ?>
                  <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                <?php }
                    if (!isset($_SESSION['first_name'])) { ?>

                  <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>

                <?php } else { ?>



                  <li> <a href="<?php echo base_url(); ?>Product/logout_customer" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Logout (<?php echo $_SESSION['first_name']; ?>)</a></li>

                <?php } ?>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //Header Top -->
      <style>
        .logo-title {
          position: absolute;
          top: 27%;
          left: 23%;
          color: white;
          font-size: 23px;
          font-family: cursive;
        }

        @media only screen and (max-width: 600px) {
          .logo-title {
            position: absolute;
            top: 93%;
            left: 34%;
            color: white;
            font-size: 23px;
            font-family: cursive;
          }
        }
      </style>
      <!-- Header center -->
      <div class="header-center">
        <div class="container">
          <div class="row">
            <div class="navbar-logo col-lg-3 col-md-12 col-xs-12">
              <a href="<?php echo base_url(''); ?>">
                <img style="height: 59px;margin: 0px;padding: 0px; background-color: white;" src="<?php echo base_url("assets/frontend/"); ?>cropped-New-Logo-kroy-1.png" title="Kroy Bangla" alt="Kroy Bangla">
                <p class="logo-title">Kroy Bangla</p>
              </a>
            </div>
            <div class="header-center-right col-lg-6 col-md-7 col-sm-7 col-xs-9">
              <div class="header_search">
                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                  <form method="post" action="<?php echo base_url('check_searching_data'); ?>">
                    <div id="search0" class="search input-group form-group">
                      
                      <input class="autosearch-input form-control" type="search" name="search" size="50" autocomplete="off" placeholder="Search" name="search">
                      <span class="input-group-btn">
                        <button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">Search</span></button>
                      </span>
                    </div>
                    <input type="hidden" name="route" value="product/search">
                  </form>
                  <!-- <form action="<?php //echo base_url('check_searching_data'); 
                                      ?>" method="post">
                                    <input type="search" name="search" placeholder="Search here..." required="">
                                    <input type="submit" value=" ">
                                    <div class="clearfix"></div>
                                </form> -->
                </div>
              </div>
            </div>
            <div class="header-cart-phone col-lg-3 col-md-5 col-sm-5 col-xs-3">
              <div class="bt-head header-cart">
                <div class="shopping_cart">
                  <div id="cart" class="btn-shopping-cart">
                    <a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="modal" data-target="#myModal3" class="w3view-cart" type="submit" name="submit">
                      <div class="shopcart">
                        <span class="handle pull-left"></span>
                        <div class="cart-info">
                          <!-- <h2 class="title-cart">Shopping cart</h2> -->
                          <span class="total-shopping-cart cart-total-full">
                            <h2 class="title-cart2 hidden" style="margin-top: 20%;">My Cart</h2>
                          </span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="header_custom_link hidden-xs">
                <!-- <ul>
                  <li class="compare"><a href="compare.html" class="top-link-compare" title="Compare "></a></li>
                  <li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="Wish List (0) "></a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //Header center -->
      <!-- Heaader bottom -->
      <div class="header-bottom hidden-compact">
        <div class="container">
          <div class="header-bottom-inner">
            <div class="row">
              <div class="header-bottom-left menu-vertical col-md-3 col-sm-6 col-xs-7">
                <div class="megamenu-style-dev megamenu-dev">
                  <div class="responsive">
                    <div class="so-vertical-menu no-gutter">
                      <nav class="navbar-default">
                        <div class=" container-megamenu  container   vertical  ">
                          <div id="menuHeading">
                            <div class="megamenuToogle-wrapper">
                              <div class="megamenuToogle-pattern">
                                <div class="container">
                                  <div><span></span><span></span><span></span></div>
                                  <span class="title-mega">
                                    All Categories
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                       

                      
                          <div class="navbar-header">
                            <span class="title-navbar hidden-lg hidden-md"> All Categories </span>
                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                          </div>
                          <div class="vertical-wrapper">
                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                            <div class="megamenu-pattern">
                              <div class="container">
                                <ul class="megamenu" data-transition="slide" data-animationtime="300">
                                <?php $cat = $this->db->query("SELECT * FROM tbl_category where cat_status =1")->result(); ?>
                                <?php foreach ($cat as $key => $value) { ?>
                                <li class="item-vertical  style1">
                                    <p class="close-menu"></p>
                                    <a href="<?php echo base_url(''); ?>category/<?php echo $value->cat_id;?>" class="clearfix">
                                      <span>
                                        <strong>
                                          <img src="<?php echo base_url("assets/frontend/"); ?>image/catalog/demo/menu/icon/icon-1.png" alt="">
                                          <?php echo $value->cat_name; ?></strong>
                                      </span>
                                    </a>
                                  </li>
                                  <?php } ?>
             
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Menuhome -->
              <div class="header-bottom-right col-md-9 col-sm-6 col-xs-5">
                <div class="header-menu">
                  <div class="megamenu-style-dev megamenu-dev">
                    <div class="responsive">
                      <nav class="navbar-default">
                        <div class="container-megamenu horizontal">
                          <div class="navbar-header">
                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                          </div>
                          <div class="megamenu-wrapper">
                            <span id="remove-megamenu" class="fa fa-times"></span>
                            <div class="megamenu-pattern">
                              <div class="container">
                                <ul class="megamenu" data-transition="slide" data-animationtime="500">
                                  <li class="full-width menu-home with-sub-menu ">

                                    <a href="<?php echo base_url(""); ?>" class="clearfix">
                                      <strong>
                                        Home
                                      </strong>
                                    </a>
                                  </li>
                                  <li class="full-width option2 with-sub-menu ">

                                    <a class="clearfix" href="<?php echo base_url(''); ?>#hot-deal">
                                      <strong>
                                      HOT DEAL
                                      </strong>
                                    </a>

                                  </li>
                                  <li class="item-style1 content-full with-sub-menu ">
                                    <a class="clearfix" href="<?php echo base_url(''); ?>#resent-products">
                                      <strong>
                                      RESENT PRODUCTS
                                      </strong>
                                    </a>
                                  </li>
                                  <li class="item-style2 content-full feafute with-sub-menu ">
                                    <a class="clearfix" href="<?php echo base_url(''); ?>#feature-items">
                                      <strong>
                                      FEATURE ITEMS
                                      </strong>
                                    </a>
                                  </li>
                                  <li class="style-page with-sub-menu ">
                                    <a class="clearfix" href="<?php echo base_url('about_us');?>">
                                      <strong>
                                       About US
                                      </strong>
                                    </a>
                                  </li>
                                  
                                  <li class="">
                                    <a href="<?php echo base_url();?>contact_us" class="clearfix">
                                      <strong>
                                        Contact 
                                      </strong>
                                    </a>
                                  </li>
                                  <?php if (isset($_SESSION['first_name'])) {?>
                                    <li class="">
                                    <a href="<?php echo base_url();?>My_Account" class="clearfix">
                                      <strong>
                                        My Account 
                                      </strong>
                                    </a>
                                  </li>
                                  <?php }?>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- //Header Container  -->