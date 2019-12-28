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
<div class="container">
  <form action="#" id="frmPostotherpage">
    <div class="form-group">
      <label for="img">Description</label>
      <?php wp_editor("","description_id"); ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
