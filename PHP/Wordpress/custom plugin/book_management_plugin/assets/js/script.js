jQuery(document).ready(function() {
    jQuery('#example').DataTable();
    jQuery('#btnimg').on("click",function(){
        var image = wp.media({
            title:"Upload Image For My Book",
            multiple: false
        }).open().on("select",function(){
            var uploaded_image = image.state().get("selection").first();
            var get_image = uploaded_image.toJSON().url;
            jQuery("#showimage").html("<img src='"+get_image+"' style='height:50px; width:50px;'/>");
            jQuery("#image-name").val(get_image);
        });
    })
    jQuery("#frmAddBook").validate({
        submitHandler:function(){
            var postdata = "action=mybooklibrary&param=save_book&"+jQuery("#frmAddBook").serialize();
            jQuery.post(bm_ajax_uri,postdata,function(response){
                console.log(response);
                var data = jQuery.parseJSON(response);
                console.log(data);
                if(data.status == 1){
                    jQuery.notifyBar({
                        cssClass:"success",
                        html:data.message
                    });
                }else{

                }
            })
        }
    });
    jQuery("#frmEditBook").validate({
        submitHandler:function(){
            var postdata="action=mybooklibrary&param=update_book&"+jQuery("#frmEditBook").serialize();
            jQuery.post(bm_ajax_uri,postdata,function(response){
                console.log(response);
                var data = jQuery.parseJSON(response);
                console.log(data);
                if(data.status == 1){
                    jQuery.notifyBar({
                        cssClass:"success",
                        html:data.message
                    })
                    setTimeout(function(){
                        //window.location.reload();
                        location.reload();
                    },1300)
                }
            })
        }
    });
    jQuery(".deleteBtn").on('click',function(){
        if(confirm("are you sure want to delete?")){
            var id = jQuery(this).attr("data-id");
            var postdata = "action=mybooklibrary&param=delete_book&id="+id;
            jQuery.post(bm_ajax_uri,postdata,function(response){
                var data = jQuery.parseJSON(response);
                if(data.status ==  1){
                    jQuery.notifyBar({
                        cssClass:"success",
                        html:data.message
                    })
                    setTimeout(function(){
                        location.reload();
                    },1300)
                }
            })
        }
    });
} );

