<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Laatu</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <!-- lisätyt linkit -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <script>
    $(function() {
      $( "#accordion" ).accordion();
    });

    //lisätty scripti
    $.ajax({
      type: "GET",
      url: "elements.xml",
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

<div id="wrapper">
  <div id="navbaar"></div>

      <div class="header"><img src="pics/esedu_logo.png" style="float: left;"></img>
        <a id="header_text1">Etelä-Savon ammattiopisto</a><br>
        <a id="header_text2">South Savo Vocational College</a>
      </div>

       <div id='carousel-custom' class="carousel slide" data-interval="false" >

        <!-- Sivujen indikaattorit -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-custom" data-slide-to="0" class="active"><img src="pics/123.png"/></li>
          <li data-target="#carousel-custom"  data-slide-to="1"><img src="pics/123.png"/></li>
          <li data-target="#carousel-custom" data-slide-to="2"><img src="pics/123.png"/></li>
        </ol>

        <!-- Sivujen wrapperit -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <div class="rightside">
              <img src="pics/etusivu.png"/>
          </div>
          <div class="leftside">
            <h1>Laadunhallinnasta ja laadun kehityksestä Esedulaisille</h1>
          </div>


        </div>
        <div class="item">
            <div class="rightside">
              <div id="accordion">
            <h3>Section 1</h3>
            <div>
              <p>
              Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
              ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
              amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
              odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
              </p>
            </div>
            <h3>Section 2</h3>
            <div>
              <p>
              Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
              purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
              velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
              suscipit faucibus urna.
              </p>
            </div>
            <h3>Section 3</h3>
            <div>
              <p>
              Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
              Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
              ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
              lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
              </p>
              <ul>
                <li>List item one</li>
                <li>List item two</li>
                <li>List item three</li>
              </ul>
            </div>
            <h3>Section 4</h3>
            <div>
              <p>
              Cras dictum. Pellentesque habitant morbi tristique senectus et netus
              et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
              faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
              mauris vel est.
              </p>
              <p>
              Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
              Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
              inceptos himenaeos.
              </p>
            </div>
          </div>
        </div>
        <div class="leftside">

        </div>
        </div>

        <div class="item">
          <div class="rightside">
            <img src="pics/kysymysmerkki.png"/>
          </div>
          <div class="leftside">
            <form method="post" action="send.php">
              <h2> Totta vai Tarua? </h2>
              <div id="vastauswrapper">
              <p id="vastaus1">Totta ja Tarua</p>
              <p id="vastaus1">Totta</p>
              <p id="vastaus1">Tarua</p>

              </div>
              <div id="vastauswrapper">
              <p id="kysymys">1. Hyvin suunniteltu on puoliksi tehty</p>
              <fieldset id="group1">
              <input id="vastaus" type="radio" name="group1">
              <input id="vastaus" type="radio" name="group1">
              <input id="vastaus" type="radio" name="group1"> <br></fieldset>
            </div>
            <div id="vastauswrapper">
              <p id="kysymys">1. Hyvin suunniteltu on puoliksi tehty</p>
              <fieldset id="group2">
              <input id="vastaus" type="radio" name="group2">
              <input id="vastaus" type="radio" name="group2">
              <input id="vastaus" type="radio" name="group2"> <br></fieldset>
            </div>
            <div id="vastauswrapper">
              <p id="kysymys">1. Hyvin suunniteltu on puoliksi tehty</p>
              <fieldset id="group3">
              <input id="vastaus" type="radio" name="group3">
              <input id="vastaus" type="radio" name="group3">
              <input id="vastaus" type="radio" name="group3"> <br></fieldset>
            </div>
            <div id="vastauswrapper">
              <p id="kysymys">1. Hyvin suunniteltu on puoliksi tehty</p>
              <fieldset id="group4">
              <input id="vastaus" type="radio"  name="group4">
              <input id="vastaus" type="radio"  name="group4">
              <input id="vastaus" type="radio"  name="group4"> <br></fieldset>
            </div>
            <input type="submit" name="Lähetä">
          </form>
          </div>
        </div>

      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

  <!-- lisätyt linkit (2) -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
