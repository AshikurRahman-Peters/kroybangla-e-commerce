   
       <!-- Main Container  -->
       <div id="content">
           <div class="so-page-builder">
               <div class="container page-builder-ltr">
                   <div class="row row_sxc8 row-style">
                       <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col_k2sd col-style">
                           <div class="module sohomepage-slider so-homeslider-ltr">
                               <div class="modcontent">
                                   <div id="sohompage-slider1">
                                       <div class="so-homeslider yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                           <?php $slider = $this->db->query("SELECT * FROM `tbl_slider` WHERE status=1")->result();
                                            foreach ($slider as $key => $value) {
                                            ?>


                                               <div class="item">
                                                   <a href="<?php echo base_url();?>" title="Kroy Bangla" target="_self">
                                                       <img class="responsive" src="<?php echo base_url("/uploads/slider/") . $value->image;
                                                                                    ?>" alt="slide 6 - 1">
                                                   </a>
                                                   <div class="sohomeslider-description">
                                                   </div>
                                               </div>
                                           <?php }
                                            ?>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_mdsk col-style">
                           <div class="banner-layout-2 h6-banner-1 clearfix">
                               <?php foreach ($slider as $key => $value) {
                                ?>
                                   <div class="banner-1 banners">
                                       <div>
                                           <a href="#" title="Banner 2">
                                               <img src="<?php echo base_url("/uploads/slider/") . $value->image; ?>" alt="Static Image">
                                           </a>
                                       </div>
                                   </div>
                               <?php }
                                ?>
                           </div>
                       </div>
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_jgpm  col-style">
                           <div class="block-service-home6">
                               <ul>
                                   <li class="item free-ship">
                                       <div class="wrap">
                                           <div class="icon"></div>
                                           <div class="text">
                                               <h5><a href="#">Free Delivery</a></h5>
                                               <p>From $59.89</p>
                                           </div>
                                       </div>
                                   </li>
                                   <li class="item support">
                                       <div class="wrap">
                                           <div class="icon"></div>
                                           <div class="text">
                                               <h5><a href="#">Support 24/7</a></h5>
                                               <p>Online 24 hours</p>
                                           </div>
                                       </div>
                                   </li>
                                   <li class="item free-return">
                                       <div class="wrap">
                                           <div class="icon"></div>
                                           <div class="text">
                                               <h5><a href="#">Free return</a></h5>
                                               <p>365 a day</p>
                                           </div>
                                       </div>
                                   </li>
                                   <li class="item payment">
                                       <div class="wrap">
                                           <div class="icon"></div>
                                           <div class="text">
                                               <h5><a href="#">payment method</a></h5>
                                               <p>Secure payment</p>
                                           </div>
                                       </div>
                                   </li>
                                   <li class="item big-saving">
                                       <div class="wrap">
                                           <div class="icon"></div>
                                           <div class="text">
                                               <h5><a href="#">Big Saving</a></h5>
                                               <p>Weeken Sales</p>
                                           </div>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- //Main Container -->




    

       




       <!-- 
        <script>
            
    $(document).on('submit','#customer_acc_cu_form',function(e){
        e.preventDefault();
        var first_name = $('#first_name',this).val();
        var last_name = $('#last_name',this).val();
        var email = $('#email',this).val();
        var password = $('#password',this).val();
        var phone = $('#phone',this).val();
        var address = $('#address',this).val();
        var zip_code = $('#zip_code',this).val();
        var city = $('#city',this).val();

        var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

        var emailFormat = re.test($("#email",this).val());// this return result in boolean type



        if (first_name==''){
            alert("First Name Field is Required");
        }else if(last_name== "button-group2"){
            alert("Last Name Field is Required");
        }else if(email== "button-group2"){
        alert("Email Field is Required");
        }else if(!emailFormat){
            alert("Invlid Email");
        }else if(password== "button-group2"){
            alert("Password Name Field is Required");
        }else if(address== "button-group2"){
            alert("Addrss  Field is Required");
        }else if(zip_code== "button-group2"){
            alert("Zip code  Field is Required");
        }else if(phone== "button-group2"){
            alert("Phone  Field is Required");
        }else if(city== "button-group2"){
            alert("City   Field is Required");
        }else{
            var path = '<?php //echo base_url(); 
                        ?>product/c_cu';

                $.ajax({
                    url:path,
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    success:function(data){


                            if(data.trim()=="created"){

                                $('#myModal2').modal('hide');
                                $("#myModal").modal('show');
                                //$('#customer_acc_cu_form')[0].reset();
                                // alert('Your account created success');
                            }
                            if(data.trim()=="notcreated"){
                                alert('Your account not created ');
                            }
                             if(data.trim()=="alreadyexit"){
                                alert('Sorry Your email already  Exists');
                            }

                    }
                })
        }

    });
        </script> -->
       <!-- Modal2 -->
       <!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
           <div class="modal-dialog"> -->
       <!-- Modal content-->
       <!-- <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <div class="modal-body modal-body-sub_agile">
                       <div class="col-md-8 modal_body_left modal_body_left1">
                           <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>

                           <form id="customer_acc_cu_form">
                               <div class="styled-input agile-styled-input-top">
                                   <input type="text" name="first_name" id="first_name">
                                   <label>First Name</label>
                                   <span></span>
                               </div>
                               <div class="styled-input agile-styled-input-top">
                                   <input type="text" name="last_name" id="last_name">
                                   <label>Last Name</label>
                                   <span></span>
                               </div>
                               <div class="styled-input">
                                   <input type="text" name="email" id="email">
                                   <label>Email</label>
                                   <span></span>
                               </div>
                               <div class="styled-input">
                                   <input type="password" name="password" id="password">
                                   <label>password</label>
                                   <span></span>
                               </div>
                               <div class="styled-input">
                                   <input type="text" name="phone" id="phone">
                                   <label>phone</label>
                                   <span></span>
                               </div>
                               <div class="styled-input">
                                   <textarea class="form-control" placeholder="Address Here" id="address" name="address" rows="3"></textarea>

                               </div>
                               <div class="styled-input">
                                   <input type="text" name="zip_code" id="zip_code">
                                   <label>Zip Code </label>
                                   <span></span>
                               </div>

                               <div class="styled-input">
                                   <input type="text" name="city" id="city">
                                   <label>City</label>
                                   <span></span>
                               </div>

                               <input type="hidden" name="action" id="action" value="create">
                               <input type="hidden" name="id" id="id" value="create">
                               <input type="submit" name="submit" id="submit" value="Sign Up">
                           </form>

                           <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                               <li><a href="#" class="facebook">
                                       <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                       <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                   </a></li>
                               <li><a href="#" class="twitter">
                                       <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                       <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                   </a></li>
                               <li><a href="#" class="instagram">
                                       <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                       <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                   </a></li>
                               <li><a href="#" class="pinterest">
                                       <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                       <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                   </a></li>
                           </ul>


                       </div>


                   </div>
               </div>
           </div>
       </div> -->