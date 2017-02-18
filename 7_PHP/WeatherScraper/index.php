<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>

    html, body {
      height:100%;
    }

      .container {
        background-image: url("images/background.jpg");
        width:100%;
        height:100%;
        background-size: cover;
        background-position: center;
        padding-top: 150px;
      }

      .center {
        text-align: center;
      }

      .white {
        color:white;
      }

      p {
        padding-top: 15px;
        padding-bottom: 15px;
      }

      button {
        margin-top: 20px;
      }

    </style>

  </head>
  <body>

    <div class="container">

      <div class="row">

        <!-- center and half screen -->
        <div class="col-md-6 col-md-offset-3 center">

          <h1 class="center white">Weather Predictor</h1>

          <p class="lead center white">Enter your city below to get a forecast for weather.</p>

          <form>

            <div class="form-group">

              <input type="text" class="form-control" name="city" id="city"
              placeholder="Eg. London, Paris, San Francisco..."/>

            </div>

            <button class="btn btn-success btn-lg">Find My Weather</button>

          </form>

        </div>

      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
