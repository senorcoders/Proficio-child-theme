$=jQuery;
$(function() {
	console.log('all-ready');
	/*$('#proficio_custom_banner_height').closest('tr').hide();*/
	console.log($("select[name='proficio_banner_height']"));
 $("select[name='proficio_banner_height']").change();
	if($("select[name='proficio_banner_height']").value == 'custom'){
                        $('#proficio_custom_banner_height').closest('tr').show();
                }else{
                        $('#proficio_custom_banner_height').closest('tr').hide();
                }


	$("select[name='proficio_banner_height']").on('change', function(){
		console.log(this.value);
		if(this.value == 'custom'){
			$('#proficio_custom_banner_height').closest('tr').show();
		}else{
			$('#proficio_custom_banner_height').closest('tr').hide();
		}
	});
});
