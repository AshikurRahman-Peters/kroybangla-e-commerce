<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">District</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <!--Form Part Start-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chart-area"></i> <span id="cardTitle"> Add District</span>
                <div>
                    <?php
                    if($success = $this->session->userdata('success')){
                        echo "<span style=\"color: green; font-size: 18px\">$success</span>";
                    }
                    elseif($error = $this->session->userdata('error')){
                        echo "<span style=\"color: red; font-size: 18px\">$error</span>";
                    }

                    //                    echo validation_errors();
                    ?>
                </div>
            </div>

            <div class="card-body">
                <div class=" col-md-12">

                    <?php
                    if(isset($editDistrictData)):
                        foreach($editDistrictData as $district):
                    ?>

                    <form id="formGallery" method="post" action="<?php echo base_url() ?>update_district/<?php echo $district->district_id ?>">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">District Name <span class="red">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="district_name" id="title" class="form-control" placeholder="Name" autocomplete="off" value="<?= $district->district_name ?>">
                                <?= form_error('district_name', '<span style="color: #ff0002">', '</span>'); ?>

                                <span id="title" class="error"></span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="offset-2 col-md-9">
                                <button type="submit" id="saveBtn" class="btn btn-primary">Update </button>
                                <button type="reset" id="resetBtn" class="btn btn-default btn-outline">Reset</button>
                            </div>
                        </div>
                    </form>

                    <?php endforeach; endif; ?>


                </div>

            </div>
        </div>

        <!--Form Part End-->


        <!-- ============================================================================ -->
        <!-- ============================================================================ -->

    </div>
</div>