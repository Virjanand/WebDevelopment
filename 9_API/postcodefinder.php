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
        background-image: url("background.jpeg");
        width:100%;
        height:100%;
        background-size: cover;
        background-position: center;
        padding-top: 100px;
      }

      .center {
        text-align: center;
      }

      p {
        padding-top: 15px;
        padding-bottom: 15px;
      }

      button {
        margin-top: 20px;
        margin-bottom: 20px;
      }

      .alert {
        margin-top: 20px;
        display:none;
      }

    </style>

  </head>
  <body>

    <div class="container">

      <div class="row">

        <!-- center and half screen -->
        <div class="col-md-6 col-md-offset-3 center">

          <h1 class="center">Postcode Finder</h1>

          <p class="lead center">Enter any address to find the postcode.</p>

          <form>

            <div class="form-group">

              <input type="text" class="form-control" name="address" id="address" placeholder="Eg. 63 Fake Street, Faketown"/>

            </div>

            <button id="findMyPostcode" class="btn btn-success btn-lg">Find My Postcode</button>

          </form>

          <div id="success" class="alert alert-success">Success!</div>

          <div id="fail" class="alert alert-danger">Could not find postcode data for that address. Please try again.</div>

          <div id="fail2" class="alert alert-danger">Could not connect to server. Please try again.</div>

        </div>

      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

$("#findMyPostcode").click(function(event) {

  var restult = 0;

  $(".alert").hide();

  event.preventDefault();

  $.ajax({
    type: "GET",
    url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyAeEgBIkITRxtZQFNpLgwr38MgfVP1petA",
    dataType: "xml",
    success: processXML,
    error: error
  });

  function error() {
    $("#fail2").fadeIn();
  }

  function processXML(xml) {

    $(xml).find("address_component").each(function() {

      if ($(this).find("type").text() == "postal_code") {

        $("#success").text("The postcode you need is " + $(this).find('long_name').text()).fadeIn();

        result = 1;

      }

      });

    if (result == 0) {

      $("#fail").fadeIn();

    }

  }

});

</script>

  </body>
</html>
