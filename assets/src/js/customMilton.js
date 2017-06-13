$ = jQuery;
$(function() {
    console.log('all-ready');
    console.log($("select[name='proficio_banner_height']"));
    $("select[name='proficio_banner_height']").change();
    if ($("select[name='proficio_banner_height']").value == 'custom') {
        $('#proficio_custom_banner_height').closest('tr').show();
    } else {
        $('#proficio_custom_banner_height').closest('tr').hide();
    }


    $("select[name='proficio_banner_height']").on('change', function() {
        console.log(this.value);
        if (this.value == 'custom') {
            $('#proficio_custom_banner_height').closest('tr').show();
        } else {
            $('#proficio_custom_banner_height').closest('tr').hide();
        }
    });


    if ($("select[name='proficio_customizable_section']").val() == 'video') {
        $('#proficio_video_option1').closest('tr').show();
        $('#proficio_description_section').closest('tr').show();
        $('select[name="proficio_my_quote_option"]').closest('tr').hide();



    } else if ($("select[name='proficio_customizable_section']").val() == 'quote') {
        $('#proficio_video_option1').closest('tr').hide();
        $('#proficio_description_section').closest('tr').hide();
        $('select[name="proficio_my_quote_option"]').closest('tr').show();
    } else if ($("select[name='proficio_customizable_section']").val() == 'none') {
        $('#proficio_video_option1').closest('tr').hide();
        $('#proficio_description_section').closest('tr').hide();
        $('select[name="proficio_my_quote_option"]').closest('tr').hide();


    } else {
        $('#proficio_video_option1').closest('tr').hide();
        $('#proficio_description_section').closest('tr').show();
        $('select[name="proficio_my_quote_option"]').closest('tr').hide();



    }





    $("select[name='proficio_customizable_section']").on('change', function() {
        console.log(this.value);
        if (this.value == 'video') {
            $('#proficio_video_option1').closest('tr').show();
            $('#proficio_description_section').closest('tr').show();
            $('select[name="proficio_my_quote_option"]').closest('tr').hide();




        } else if (this.value == 'quote') {
            $('select[name="proficio_my_quote_option"]').closest('tr').show();
            $('#proficio_video_option1').closest('tr').hide();
            $('#proficio_description_section').closest('tr').hide();

        } else if (this.value == 'none') {
            $('#proficio_video_option1').closest('tr').hide();
            $('#proficio_description_section').closest('tr').hide();
            $('select[name="proficio_my_quote_option"]').closest('tr').hide();


        } else {
            $('#proficio_video_option1').closest('tr').hide();
            $('#proficio_description_section').closest('tr').show();
            $('select[name="proficio_my_quote_option"]').closest('tr').hide();



        }
    });
});
