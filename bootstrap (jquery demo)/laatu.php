<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Yläpuolella olevien tagien tulee olla ensimmäisenä headissa -->

    <title>Laatu</title>

    <!-- css tiedostot -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- jquery linkit -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
      $.ajax({
        type: "GET",
        url: "xml.xml",
        dataType: "xml",
        success: function (xml) {
          init(xml);
          console.log("success");
        },
        error: function(){
          console.log("error");
        }
      });

      function init(xml) {
        var $xml = $(xml);
        console.log($xml);
        var $teksti = $xml.find("teksti");
        console.log($teksti);
      }
    </script>
  </head>
  <body>
    <div class="varjo">
      <div class="header"></div>

      <div  id="carousel-example-generic" class="carousel slide" data-interval="false" style=" background-color: ;width: 1000px;height: 550px;  margin: 0 auto;" >

        <!-- Sivujen indikaattorit -->
        <ol class="carousel-indicators indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Sivujen wrapperit -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <p>Insert XML here</p>
            <div class="carousel-caption">
              Caption
            </div>
          </div>

          <div class="item">
            <p>Insert XML here</p>
            <div class="carousel-caption">
              Caption
            </div>
          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
