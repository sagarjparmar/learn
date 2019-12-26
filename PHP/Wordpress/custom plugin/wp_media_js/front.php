<!DOCTYPE html>
<html lang="en">
<head>
  <title>file upload wp Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <style>
      .error{
          color:red;
      }
  </style>
<?php wp_enqueue_media() ?>
</head>
<body>
<?php
 global $wpdb;
 /*$wpdb->update(
    "custom_plugin_table",
    array(
      "email"=>"onlieprofotech@gmail.com"
    ),
    array(
      "id"=>1
    )
    );*/
    
  /*$wpdb->query(
      $wpdb->prepare(
        "update custom_plugin_table set email='%s' where id=%d",'sagar@mails.com',1
      )
  );*/

 /* $wpdb->delete(
    "custom_plugin_table",
    array("id"=>1)
  )*/

  $wpdb->query(
    $wpdb->prepare(
      "delete from custom_plugin_table where id=%d",1
      )
  );
?>
<div class="container">
  <form action="#" id="frmPostotherpage">
    <div class="form-group">
      <label for="img">Upload Image:</label>
      <input type="button" class="form-control" id="btnImage" required placeholder="txtImage" name="Upload Image">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
