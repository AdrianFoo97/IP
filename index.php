<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <title>IP Finder</title>
    <style>
      form {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </head>
  <body>
    <form action='import.php' method='post' enctype="multipart/form-data">
      <div style='text-align: center'>
        <img src='img/icon.png' height='150' width='150' style='margin-bottom: 2em;'>
        <input class='form-control-file' type='file' name='fileToUpload' accept='.log' id='fileToUpload'><br>
        <button type='submit' class="btn btn-primary">Next</button>
      </div>
    </form>
  </body>
</html>
