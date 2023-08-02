(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
function saveProduct()
{
	// tinyMCE.triggerSave();
	// var year_val = jQuery(`#regisration_year`).val()
	// const regis_year = new Date(year_val) ;
	// get_regis_year = regis_year.getFullYear()
	// console.log("hello",get_regis_year)
	console.log(jQuery('#multiple_image').val());
	CheckData()
    .then((data) => {
      if (data) {
		let multiImageArray = [];
		jQuery.each(jQuery('input[name="multiple_image[]"]'), function(){
			multiImageArray.push(jQuery(this).val());
		});
		console.log(multiImageArray);
        let _data = {
			action: jQuery(`#ajax_action`).val(),
			product_name: jQuery(`#name`).val(),
			feature_image: jQuery(`#feature_image`).val(),
			price: jQuery(`#price`).val(),
			carpet: jQuery(`#carpet`).val(),
			yards: jQuery(`#yards`).val(),
			cons_old: jQuery(`#cons_old`).val(),
			bedrooms: jQuery(`#bedrooms`).val(),
			bathrooms: jQuery("#bathrooms").val(),
			// regisration_year:get_regis_year,
			parking: jQuery("#parking").val(),
			water: jQuery("#water").val(),
			electricity: jQuery("#electricity").val(),
			furniture: jQuery("#furniture").val(),
			cctv: jQuery("#cctv").val(),
			lift: jQuery("#lift").val(),
			roadFacing: jQuery("#roadFacing").val(),
			city: jQuery("#city").val(),
			typeHome: jQuery("#typeHome").val(),
			typeProp: jQuery("#typeProp").val(),
			area: jQuery("#area").val(),
			other: jQuery("#other").val(),
			image_name: multiImageArray,
        };
        console.log(_data);
        jQuery.ajax({
          type: "post",
          // dataType: "json",
          url: jQuery(`#ajax_url`).val(),
          data: _data,
          success: function (response) {
			console.log(response);
            if (response != "" || response == 1) {
				alert("Your Data Is Successfully Submited.")
            }
          },
        });
      }
    })
    .catch((e) => {
      console.log(`Add Form Error : ${e}`);
	  alert("error")
    });
}

function saveImage(event) {
	event.preventDefault();
	var file_frame;
  var wp_media_post_id = wp.media.model.settings.post.id;
  jQuery("#preimage").hide();
  jQuery("#Error_").remove();
  jQuery("#feature_image").val("");
  if (file_frame) {
    file_frame.open();
    return;
  }
  file_frame = wp.media.frames.file_frame = wp.media({
    title: "Select a image to upload",
    button: {
      text: "Use this image",
    },
    library: {
      type: ["image"],
    },
    multiple: false,
  });
  file_frame.on("select", function () {
    attachment = file_frame.state().get("selection").first().toJSON();
    let fixwidth = 500;
    let fixheight = 500;
    jQuery("#feature_image").val(attachment.url);
    if (attachment.url) {
      jQuery("#preimage").attr("src", attachment.url);
      jQuery("#preimage").show();
    }
    wp.media.model.settings.post.id = wp_media_post_id;
  });
  file_frame.open();
}

function multiple_image(event) {
	event.preventDefault();
	var file_frame;
	var wp_media_post_id = wp.media.model.settings.post.id;
	jQuery("#preimage").hide();
	jQuery("#Error_").remove();
	jQuery("#multiple_image").val("");
	if (file_frame) {
		file_frame.open();
		return;
	}
	file_frame = wp.media.frames.file_frame = wp.media({
		title: "Select a image to upload",
		button: {
			text: "Use this image",
		},
		library: {
			type: ["image"],
		},
		multiple: true,
	});
	file_frame.on("select", function () {
		attachment = file_frame.state().get("selection").toJSON();
		// console.log(attachment);
		let fixwidth = 500;
		let fixheight = 500;
		for(var i=0; i<attachment.length; i++)
		{
			console.log(attachment[i].url);
			jQuery("#multiple_image").append('<input class="form_control" class="" type="hidden" name="multiple_image[]" value="'+attachment[i].url+'">');
			if (attachment[i].url) {
				jQuery("#preimage").attr("src", attachment[i].url);
				jQuery("#preimage").show();
			}
		}
		wp.media.model.settings.post.id = wp_media_post_id;
	});
	file_frame.open();
};

async function CheckData() {
	jQuery(".error").remove();
	let error_counter = 0;
	let checkbox_error_counter = 0;
	jQuery(".req").each(function () {
	
	// switch (jQuery(this).attr("type")) {
	// 	case "text":
	// 		if (jQuery(this).val() == "") {
	// 			jQuery(this).after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 		}
	// 		break;
	// 	case "email":
	// 		if (jQuery(this).val() == "") {
	// 			jQuery(this).after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 		}
	// 		break;
	// 	case "password":
	// 		if (jQuery(this).val() == "") {
	// 			jQuery(this).after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 		}
	// 		break;
	// 	case "checkbox":
	// 		if (!jQuery(this).prop("checked") && jQuery(".industry:checked").length < 1 && checkbox_error_counter ==0) {
	// 			jQuery(this)
	// 				.parent()
	// 				.after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 			checkbox_error_counter++;
	// 		}
	// 		break;
	// 	case "hidden":
	// 		if (jQuery(this).val() == "") {
	// 			jQuery(this).after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 		}
	// 		break;
	// 	case "tel":
	// 		if (jQuery(this).val() == "") {
	// 			jQuery(this).after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 		}
	// 		break;
	// 	default:
	// 		if (jQuery(this).val() == "") {
	// 			jQuery(this).after(`<span class="error" style="color:red">This is required.</span>`);
	// 			error_counter++;
	// 		}
	// 		break;
	// }
	});
	if (error_counter == 0) {
	  return true;
	} else {
	  return false;
	}
}

function propDelete(id)
{
	let _data = {
		action: 'delete_prop',
		id: id,
	};
	alert("Successfully Deleted.")
	jQuery.ajax({
		type: "post",
		url: jQuery(`#ajax_url`).val(),
		data: _data,
		success: function (data) {
			location.reload();
		},
	});
}
function isNumberKey(evt){
	var charCode = evt.keyCode
	if (charCode > 48 && (charCode == 48 || charCode > 57))
		return alert("Only Numeric Value Accepted."), false;
	return true;
}

function propUpdate(id){
	var year_val = jQuery(`#regisration_year`).val()
	const regis_year = new Date(year_val) ;
	get_regis_year = regis_year.getFullYear()
	// console.log("hello",get_regis_year)
	console.log(jQuery('#multiple_image').val());
	CheckData()
    .then((data) => {
		if (data) {
			let multiImageArray = [];
			jQuery.each(jQuery('input[name="multiple_image[]"]'), function(){
				multiImageArray.push(jQuery(this).val());
			});
			console.log(multiImageArray);
			let _data = {
				action: 'update_prop',
				product_name: jQuery(`#name`).val(),
				feature_image: jQuery(`#feature_image`).val(),
				price: jQuery(`#price`).val(),
				carpet: jQuery(`#carpet`).val(),
				yards: jQuery(`#yards`).val(),
				cons_old: jQuery(`#cons_old`).val(),
				bedrooms: jQuery(`#bedrooms`).val(),
				bathrooms: jQuery("#bathrooms").val(),
				// regisration_year:get_regis_year,
				parking: jQuery("#parking").val(),
				water: jQuery("#water").val(),
				electricity: jQuery("#electricity").val(),
				furniture: jQuery("#furniture").val(),
				cctv: jQuery("#cctv").val(),
				lift: jQuery("#lift").val(),
				roadFacing: jQuery("#roadFacing").val(),
				city: jQuery("#city").val(),
				typeHome: jQuery("#typeHome").val(),
				typeProp: jQuery("#typeProp").val(),
				area: jQuery("#area").val(),
				other: jQuery("#other").val(),
				image_name: multiImageArray,
			};
			jQuery.ajax({
				type: "post",
				// dataType: "json",
				url: jQuery(`#ajax_url`).val(),
				data: _data,
				success: function (data) {
					// console.log(data);
					alert("Successfully Updated. ")
					location.reload();
				},
			});
		}
	})
}

function propType() {
	var x = document.getElementById("typeProp").value;
	var y = document.getElementById("selectedProp");
	var house = document.getElementById("house");
	var office = document.getElementById("office");
	var comman = document.getElementById("comman_top_field");
	var bottom_top_field = document.getElementById("bottom_top_field");
	// var php_code = '<?php _e("Upload image");?>';
	if (x == "House") {
		comman.style.display = "block";
		house.style.display = "block";
		bottom_top_field.style.display="block";
		office.style.display = "none";
	} else if (x =="Plotes") {
		comman.style.display = "block";
		bottom_top_field.style.display = "block";
		house.style.display = "none";
		office.style.display = "none";
	} else if (x == "Office") {
		comman.style.display = "block";
		office.style.display = "block";
		bottom_top_field.style.display = "block";
		house.style.display = "none";
	}
}

// function sortProp() {
// 	var col_name = $(this).attr("id");
// 	// var order = $(this).data("order");
// 	console.log("hello",col_name);
// 	// jQuery.ajax({
// 	// 	url: jQuery(`#ajax_url`).val(),
// 	// 	data: {col_name:col_name},
// 	// 	success: function (data) {
// 	// 		console.log(data);
// 	// 		if (data != "" || data == 1) {
// 	// 			alert("Your Data Is Successfully Sorted.")
// 	// 		}
// 	// 	},
// 	// })
// }

