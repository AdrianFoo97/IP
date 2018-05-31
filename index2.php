<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <title>IP Finder</title>
    <style>
      .card {
          /* Add shadows to create the "card" effect */
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
      }
      /* Add some padding inside the card container */
      .container {
          padding: 2px 16px;
      }
    </style>
  </head>
  <body>
    <div class='container'>
        <div class='row'>
            <div class='offset-sm-2 card col-sm-8' style='margin-top: 15%;'>
              <div style='text-align: center; margin-top: 2em; margin-bottom: 2em;'>
                <img src='img/ip.png' height='110' width='110' style='margin-bottom: 2em;'>
                <h1>Maxis VPN Quick Check Tool</h1>
            </div>
            <h5>1. Insert your file:</h5>
            <div class='row'>
              <div class='col-sm-10' style='padding-right:1em;'>
                  <input class='form-control' type='file' name='fileToUpload' accept='.log' id='fileToUpload' value='hello.txt'>
              </div>
              <div class='col-sm-2' style='padding-left:0'>
                <button type='submit' class="btn btn-primary btn-block">Import</button>
              </div>
            </div><br><br>
            <h5>2. Insert IP address:</h5>
            <input class='form-control input-lg' type='text' name='ipSearch'
            pattern='^([0-9]{1,3})+\.([0-9]{1,3})+\.([0-9]{1,3})+\.([0-9]{1,3})$' size='60'
            placeholder='Please enter an IP address to search' title='XXX.XXX.XXX.XXX' required>
            <div style='text-align: center;'>
              <button style='width:8em; margin-top: 1em;' class='btn btn-primary' type='submit' >Submit</button>
            </div><br><br>
            <div class='row'>
              <div class='offset-sm-1 col-sm-10 card'
              style='height: 6em; margin-bottom:2em; box-shadow: 0 0 0 0 rgba(0,0,0,0); text-align: center; padding: 2em 0 2em 0;'>
                <h3 style=''>hello world</h3>
              </div>
            </div>

        </div>
    </div>
    <form action='import.php' method='post' enctype="multipart/form-data">

    </form>
  </body>
</html>
