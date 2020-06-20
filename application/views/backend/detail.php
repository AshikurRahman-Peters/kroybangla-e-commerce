<!DOCTYPE html>
<html>
<head>
<title> </title>
<meta charset='utf-8'>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/frontend/css/bootstrap/css/bootstrap.min.css">

</head>
<style type="text/css" media="print">
.hide{display:none}

</style>
<script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
// document.getElementById('printButton').style.visibility="visible";  
}

window.print();
</script>
<body style="background:none;">
<input name="print" type="button" value="Print" id="printButton" style="display: none;" onClick="printpage()">



  <!-----------------    Print Type -- POS      ------------>
  <div class="container" >
        <div style="width:12%; float: left;">
            <img src="<?php echo base_url("assets/frontend/"); ?>cropped-New-Logo-kroy-1.png" alt="Logo" style="width:100px;" />
        </div>
        <div style="width:65%; text-align: center; float: left;">
            <strong style="font-size:18px;">Kroy Bangla BD</strong><br/>
                <br/>
        </div>
    </div>
    <div class="container">
    <table  cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td colspan="2" style="background:#ddd;" align="center"><strong style="font-size:16px;">Order detail</strong></td>
        </tr>
        <tr>
            <!-- Customer html -->

            <?php if (isset($customer_html)) {
              echo $customer_html;
            } ?>
        </tr>
        <tr>
            <td colspan="2"><hr></td>
        </tr>
    </table>
    
    <table class="border" cellspacing="0" cellpadding="0" width="100%">
        <tr>
           <th style="text-align:center;">SI No</th>
           <th  colspan="2" style="text-align:center;">Product Photo</th>
           <th style="text-align:center;">Name</th>
           <th style="text-align:center; width: 15%;">Quantity</th>
           <th style="text-align:center;">Price</th>
           <th style="text-align:center;">total</th>
        </tr>
       


          <?php if (isset($detail_html)) {
              echo $detail_html;
            } ?>

       
               
    </table>
    
  </div>
  <style>
tr td{
    border-top: 1px solid black;  
}
      
  </style>

</body>
</html>

