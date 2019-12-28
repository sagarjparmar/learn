jQuery(function(){
    jQuery("#frmPostotherpage").validate({
        submitHandler:function(){
            var postdata = "action=custom_plugin_library&param=post_form_data&"+jQuery("#frmPostotherpage").serialize();
           // console.log(postdata);
            jQuery.post(ajaxurl,{action:"custom_plugin",name:$("#name").val(),email:$("#email").val(),description:encodeURIComponent(tinyMCE.get("description_id").getContent({format:'html'}))},function(response){
                console.log(response);
                console.log(tinyMCE.get("description_id").getContent({format:'html'}));
                console.log(tinyMCE.activeEditor.getContent());
               // console.log(tinyMCE.activeEditor.getContent());
            })
        }
    });
});