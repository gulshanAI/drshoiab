$(document).ready(function(){
	
	$('.bookform-form #submit_form').click(function() {
		var btn = true;
		$('.bookform-form input, textarea, select').each(function(){
			var n = $(this).val();
			if($.trim(n) == "")
			{	
				$(this).css("border", "1px solid red");
				btn = false;
			}
			else {
				$(this).css("border", "1px solid #ccc");
			}
		});
		if(btn == true)
		    {
		      var mbtn = $('.bookform-form #submit_form');
		      mbtn.attr("disabled", true);
		      mbtn.html("Sending.....");
		      mbtn.css("cursor", "not-allowed");
		    $.post( $(".bookform-form").attr("action"),
			        $(".bookform-form :input").serializeArray(),
					function(data) {
		        mbtn.attr("disabled", false);
		        mbtn.html("SEND MESSAGE");
		        mbtn.css("cursor", "pointer");
		        if(data == "y")
		        {
		          $('.bookform-form #success').html('Message Send Successfully');
		        }
		        else {
		          $(".bookform-form #errorrr").html(data);
		        }
		        $('.bookform-form input,textarea').each(function(){
					    $(this).val('');
					});
		        setInterval(function(){ $(".bookform-form #success").html("");}, 7000);
					});
		    }
		    console.log(btn);
	   return false;
	})
})