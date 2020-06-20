	<!-- Main Container  -->
	<div class="container" id="loadCartHtml">
 
        
		
	</div>
	
		
	<!-- //Main Container -->


<section class="main-contain bg-white">
    <div class="container" id="loadCartHtml">

    </div>
</section>



<script>
    $(document).ready(function(){
        var path= '<?php echo base_url();?>Product/cartLoad';
        function loadCartHtml(){
            $.ajax({
                url:path,
                method:"POST",
                beforeSend(){
                    $("#loadCartHtml").html("<p style='text-align:center;font-size:25px;color:red'> Lodding....</p>");
                },
                success:function(data){
                    $("#loadCartHtml").html(data);
                }
            })
        }

        loadCartHtml();


        // Remove Items

        $(document).on('click','#remnoveItem',function(){
            var id = $(this).attr('data-id');
            var path= '<?php echo base_url();?>Product/removeCart';


            $.ajax({
                url:path,
                method:"POST",
                data:{id:id},
                success:function(data){
                    loadCartHtml();
                }

            })
        });

        $(document).on('change','#quantity_up',function(){

            var path= '<?php echo base_url();?>Product/quantiyUpdate';
            var id = $(this).attr('data-id');
            var qury = $(this).val();
            if (qury=='0'){
                alert('Minimum at last one quantity');
            }

            $.ajax({
                url:path,
                method:"POST",
                data:{id:id,qury:qury},
                success:function(data){
                    loadCartHtml();
                }

            });


    });



    });


</script>

<!--grids-->
<!-- footer -->