<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
      <label for="name">Name for author:</label>
      <input type="text" class="form-control" id="name" required placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Email for author:</label>
      <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
