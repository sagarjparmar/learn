$("#frmPost").validate({
    submitHandler:function(){
       //console.log($("#frmPost").serialize());
            var post_data = $("#frmPost").serialize()+"&action=custom_plugin_library&param=post_form_data";
            $.post(ajaxurl,post_data,function(response){
                console.log(response.data.name);
                var data = response.data;
                console.log("Name: "+data.name+",Email: "+data.email);
            });
        }
    });

});

jQuery("#frmPostotherpage").validate({
    submitHandler:function(){
        var post_data=$("#frmPostotherpage").serialize()+"&action=add_author_details";
        jQuery.post(ajaxurl,post_data,function(response){
            console.log(response);
        })
    }
})