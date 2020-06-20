/* -------------------------------------------------------------------------------- /
	
	Magentech jQuery
	Created by Magentech
	v1.0 - 20.9.2016
	All rights reserved.
	
/ -------------------------------------------------------------------------------- */
$(document).ready(function() {

	//    $('.addmorebtn').on('click', function(e) {
	//        e.preventDefault();
	//     //    var content = $('<tr> <td> <img src="http://www.gedachtegoed.nl/img/mobileimg1.png" alt="" class="image-swap"> </td> <td> <input type="text" value="1" id="qty" class="form-control"> </td> <td> <select class="sizeSelect form-control"> <option value="--">--</option> <option value="S (4)">S (4)</option> <option value="M (6-8)">M (6-8)</option> <option value="L (10-12)">L (10-12)</option> <option value="XL (14-16)">XL (14-16)</option> <option value="2XL (18-20)">2XL (18-20)</option> </select> </td> <td> <select class="brandName form-control"> <option value="http://www.gedachtegoed.nl/img/mobileimg1.png" data-price="19.99">Bella Women\'s Flowy Tank Black</option> <option value="http://www.gedachtegoed.nl/img/mobileimg2.png" data-price="20.99">Bella Women\'s Flowy Tank Black1</option> <option value="http://www.gedachtegoed.nl/img/mobileimg3.png" data-price="25.99">Bella Women\'s Flowy Tank Black2</option> <option value="http://www.gedachtegoed.nl/img/mobileimg4.png" data-price="27.99">Bella Women\'s Flowy Tank Black3</option> <option value="http://www.gedachtegoed.nl/img/mobileimg5.png" data-price="28.99">Bella Women\'s Flowy Tank Black4</option> </select> </td> <td> <p>$<span class="price">19.99</span></p> <span class="remove">+</span> </td> </tr>');
	//        $('.addCartTable').append(content);
	//        $('.remove').show();
	//    });
	   $(document).on('click', '.remove', function(e) {
		   console.log($('.addCartTable').find('tr').length);
		   $(this).parents('tr').remove();
		   if (($('.addCartTable').find('tr').length - 1) == 1) {
				console.log('#id');
			   $('.remove').hide();
			   event.stopPropagation();
		   }
	   });

	//    $(document).getElementById("age").value;
	  
	   $(document).on('change', '.brandName', function() {
		   console.log($(this).val());
		 
		   $(this).parents('tr').find('img.image-swap').attr("src", $(this).val());
		   $(this).parents('tr').find('.price').html($(this).find('option:selected').data('price'));
		   $(this).parents('tr').find('.price').html($(this).find('option:selected').data('price'));
	   });
	  
	   $('.add-product-button').on('click', function(e) {
		   e.preventDefault();
		   console.log($(this).data('discount'));
		   var price = $(this).data('discount');
			var qty = document.getElementById("qty").value;
		   var content = $('<tr> <td> <img src="http://www.gedachtegoed.nl/img/mobileimg1.png" alt="" class="image-swap"> </td> <td> <input type="text"  id="qty" class="form-control"> </td> <td> <select class="sizeSelect form-control"> <option value="--">--</option> <option value="S (4)">S (4)</option> <option value="M (6-8)">M (6-8)</option> <option value="L (10-12)">L (10-12)</option> <option value="XL (14-16)">XL (14-16)</option> <option value="2XL (18-20)">2XL (18-20)</option> </select> </td> <td> <select class="brandName form-control"> <option value="http://www.gedachtegoed.nl/img/mobileimg1.png" data-price="19.99" data-selected="Bella Women\'s Flowy Tank Black">Bella Women\'s Flowy Tank Black</option> <option value="http://www.gedachtegoed.nl/img/mobileimg2.png" data-price="20.99" data-selected="Bella Women\'s Flowy Tank Black1">Bella Women\'s Flowy Tank Black1</option> <option value="http://www.gedachtegoed.nl/img/mobileimg3.png" data-price="25.99" data-selected="Bella Women\'s Flowy Tank Black2">Bella Women\'s Flowy Tank Black2</option> <option value="http://www.gedachtegoed.nl/img/mobileimg4.png" data-price="27.99"  data-selected="Bella Women\'s Flowy Tank Black3">Bella Women\'s Flowy Tank Black3</option> <option value="http://www.gedachtegoed.nl/img/mobileimg5.png" data-price="28.99" data-selected="Bella Women\'s Flowy Tank Black4">Bella Women\'s Flowy Tank Black4</option> </select> </td> <td> <p>$<span class="price">' + price * qty + '</span></p> <span class="remove">Remove</span> </td> </tr>');
		   $('.addCartTable').append(content);
		   var qty = document.getElementById("qty").value;
		   console.log("qty");
		   $('.remove').show();
		   $('.id_100 option')
			   .removeAttr('select')
			   .filter('[data-selected=' + $(this).data('select') + ']')
			   .attr('selected', true);
	   });
	   $(document, '#tp_result').on("submit", ".cart", function(e) {
		   e.preventDefault(e);
		   $('#id').trigger('click');
		   console.log($('#id').trigger('click'));
	   });
   });


	// Cart add remove functions
	var cart = {
		'add': function(product_id, quantity) {
			addProductNotice('Product added to Cart', '<img src="image/catalog/demo/product/travel/1.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
		}
	}

	var wishlist = {
		'add': function(product_id) {
			addProductNotice('Product added to Wishlist', '<img src="image/catalog/demo/product/travel/1.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
		}
	}
	var compare = {
		'add': function(product_id) {
			addProductNotice('Product added to compare', '<img src="image/catalog/demo/product/travel/1.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
		}
	}

	/* ---------------------------------------------------
		jGrowl – jQuery alerts and message box
	-------------------------------------------------- */
	function addProductNotice(title, thumb, text, type) {
		$.jGrowl.defaults.closer = false;
		//Stop jGrowl
		//$.jGrowl.defaults.sticky = true;
		var tpl = thumb + '<h3>'+text+'</h3>';
		$.jGrowl(tpl, {		
			life: 4000,
			header: title,
			speed: 'slow',
			theme: type
		});
	}





