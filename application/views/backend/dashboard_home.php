
<style type="text/css">
    .welcome{
        width: 100%;
    }
    .welcome_body{
        text-align: center;
        margin-top: 80px;
    }
    .welcome_body img{
        width: 200px;
    }
    .welcome_body h2{
        color: #D6002A;
        font-size: 35px;
        font-weight: 300;
        margin-top: 20px;
    }

    .admin_style{
        font-weight: 800;
        color: #36A95B;
    }
</style>

<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url() ?>Dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!-- ============================================================================ -->
        <!-- ============================================================================ -->
        <!-- Dynamic Body Content Start -->

        <div class="row">
            <div class="welcome">
                <div class="welcome_body">
                    <img src="<?php echo base_url() ?>/assets/backend/logo.png" alt="">
                    <h2>Welcome To <span class="admin_style">Kroy bangla</span></h2>
                </div>
            </div>
        </div>

        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->
        <!-- ============================================================================ -->

    </div>
</div>