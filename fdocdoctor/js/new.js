$(document).ready(function(){
	var edideel = 0;
	 $('.slct tbody tr').click(function(){
	 	  $('.slct tbody tr').removeClass('highlight');
	 	  $(this).addClass('highlight');

	 	  edideel = $(this).attr('data');//edit & delete table tr
	 });

	 $('#dlet1').click(function(){
	 	  if (edideel !=0) {
	 	  	   $.ajax({
	 	   	    	 type: 'POST',
	 	   	    	 url: 'deletetestimonial.php',
	 	   	    	 data: {edideel:edideel},

	 	   	    	 success : function(data){
	 	   	    	 	  if (data == 'yes') {
	 	   	    	 	  	$('.slct tbody tr[data="'+edideel+'"]').remove();
	 	   	    	 	  }
	 	   	    	 	  else{
	 	   	    	 	  	  alert(data);
	 	   	    	 	  }
	 	   	    	 }
	 	   	    })
	 	  }
	 });

	 $('#edti1').click(function(){
	 	  if(edideel != 0) {
	 	  	  let r = '.slct tbody tr[data="'+edideel+'"]';

	 	  	  let tr2 = $(r+' .c_salary').html();
	 	  	  $('input[name="testname"]').val(tr2);

	 	  	  let tr5 = $(r+' .c_descrip').html();
	 	  	  $('textarea[name="testcont"]').val(tr5);

	 	  	  $('.xyz').html('<input type="hidden" name="idf" value="'+edideel+'">');

	 	  	  $('#edttt').attr('action', 'updatetestimonial.php');
	 	  	  $('#upudt button').html('update');
	 	  }

	 });


	 $('#dlet2').click(function(){
	 	  if (edideel !=0) {
	 	  	   $.ajax({
	 	   	    	 type: 'POST',
	 	   	    	 url: 'deletesuccess.php',
	 	   	    	 data: {edideel:edideel},

	 	   	    	 success : function(data){
	 	   	    	 	  if (data == 'yes') {
	 	   	    	 	  	$('.slct tbody tr[data="'+edideel+'"]').remove();
	 	   	    	 	  }
	 	   	    	 	  else{
	 	   	    	 	  	  alert(data);
	 	   	    	 	  }
	 	   	    	 }
	 	   	    })
	 	  }
	 });

	 $('#edti2').click(function(){
	 	  if(edideel != 0) {
	 	  	  let r = '.slct tbody tr[data="'+edideel+'"]';
	 	  	  let tr = $(r+' .b_name').html();
	 	  	  $('input[name="sname"]').val(tr);

	 	  	  let tr2 = $(r+' .b_content').html();
	 	  	  $('textarea[name="scont"]').html(tr2);

	 	  	  $('.xyz2').html('<input type="hidden" name="idf2" value="'+edideel+'">');

	 	  	  $('#edttt2').attr('action', 'updatesuccess.php');
	 	  	  $('#upudt button').html('update');
	 	  }

	 });


	 $('#dlet3').click(function(){
	 	  if (edideel !=0) {
	 	  	   $.ajax({
	 	   	    	 type: 'POST',
	 	   	    	 url: 'deleteblog.php',
	 	   	    	 data: {edideel:edideel},

	 	   	    	 success : function(data){
	 	   	    	 	  if (data == 'yes') {
	 	   	    	 	  	$('.slct tbody tr[data="'+edideel+'"]').remove();
	 	   	    	 	  }
	 	   	    	 	  else{
	 	   	    	 	  	  alert(data);
	 	   	    	 	  }
	 	   	    	 }
	 	   	    })
	 	  }
	 });

	 $('#edti3').click(function(){
	 	  if(edideel != 0) {
	 	  	  let r = '.slct tbody tr[data="'+edideel+'"]';
	 	  	  let tr = $(r+' .b_name').html();
	 	  	  $('input[name="bname"]').val(tr);

	 	  	  let tr5 = $(r+' .b_content').html();
	 	  	  $('.edtokart').html(` <label>Description</label>
                                            <textarea id="editor2" name="bdesc" rows="10" cols="80">`+tr5+`</textarea>`)
	 	  	   $(function() {
                CKEDITOR.replace('editor2');
                $(".textarea").wysihtml5();
            });
	 	  	  // $('textarea[name="bdesc"]').val(tr5);
	 	  	  // $('iframe').contents().find('body').text(tr5);

	 	  	  $('.xyz3').html('<input type="hidden" name="idf3" value="'+edideel+'">');

	 	  	  $('#edttt3').attr('action', 'updateblog.php');
	 	  	  $('#upudt button').html('update');
	 	  }

	 });
})