jQuery("#btnImage").click(function(){
    var image = wp.media({
        title: "Upload image",
        button:{
            text: 'Use this media'
          },
        multiple:true
    }).open().on("select",function(e){
        var uploadedImage = image.state().get('selection');
        var selectedImages = uploadedImage;
        console.log(uploadedImage.toJSON());

        selectedImages.map(function(image){
            var itemdetails = image.toJSON();
            console.log(itemdetails.url);
        });
    });
});
