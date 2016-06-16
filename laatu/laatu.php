<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <!-- lisätyt linkit -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <script>
    //ajax (hakee xml:n)
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
      var $title = $xml.find("title");
      console.log($title);
      document.getElementsByTagName("title").innerHTML = "Laatu";
      console.log(document.getElementsByTagName("title"))
      var $teksti2 = $xml.find("teksti2");
      console.log($teksti2);
      document.getElementById("esimerkki").innerHTML = $teksti2;
    }

    //haitari listat
    $(function() {
      $( "#accordion" ).accordion({
        collapsible: true,
        heightStyle: "content"
      });
    });

    //tab lista
    function checkActivity(){

      if(document.getElementById("indicator1").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "active");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator2").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "active");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator3").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "active");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator4").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "active");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator5").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "active");
        document.getElementById("tab6").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator6").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "active");
      }
    }
    setInterval(function(){ checkActivity(); }, 100);

//dragdrop testi
  $(function(){
    var block1 = document.getElementById("block1");
    $(block1).data("target", 1);
    var block2 = document.getElementById("block2");
    $(block2).data("target", 1);
    var block3 = document.getElementById("block3");
    $(block3).data("target", 2);
    var block4 = document.getElementById("block4");
    $(block4).data("target", 1);
    var block5 = document.getElementById("block5");
    $(block5).data("target", 2);
    var block6 = document.getElementById("block6");
    $(block6).data("target", 2);

    var goal1 = document.getElementById("goal1");
    $(goal1).data("id", 1);
    var goal2 = document.getElementById("goal2");
    $(goal2).data("id", 2);

    $( ".draggable" ).draggable({
      revert: "invalid",
    });
    $( ".droppable" ).droppable({
      drop: handleDropEvent,
    });
  });

    function handleDropEvent( event, ui ) {
      var drop = $(this).data( 'id' );
      var drag = ui.draggable.data( 'target' );
      if(drop === drag){
        ui.draggable.addClass( "droppedright" );
      } else{
        ui.draggable.addClass( "droppedwrong" );
      }
    }
  </script>
</head>
<body>

<div id="wrapper">
  <div id="navbaar">
    <h1> Sisältö </h1>
    <div id="navlist">
      <div id="tab1" data-target="#carousel-custom" data-slide-to="0" class="active"><a href=#>Content 1</a></div>
      <div id="tab2" data-target="#carousel-custom" data-slide-to="1" class="inactive"><a href=#>Content 2</a></div>
      <div id="tab3" data-target="#carousel-custom" data-slide-to="2" class="inactive"><a href=#>Content 3</a></div>
      <div id="tab4" data-target="#carousel-custom" data-slide-to="3" class="inactive"><a href=#>Content 4</a></div>
      <div id="tab5" data-target="#carousel-custom" data-slide-to="4" class="inactive"><a href=#>Content 5</a></div>
      <div id="tab6" data-target="#carousel-custom" data-slide-to="5" class="inactive"><a href=#>Content 6</a></div>
    </div>
  </div>
      <div class="header"><img src="pics/esedu_logo.png" style="float: left;"></img>
        <a id="header_text1">Etelä-Savon ammattiopisto</a><br>
        <a id="header_text2">South Savo Vocational College</a>
      </div>

       <div id='carousel-custom' class="carousel slide" data-interval="false" >

        <!-- Sivujen indikaattorit -->
        <ol class="carousel-indicators">
          <li id="indicator1" data-target="#carousel-custom" data-slide-to="0" class="active"><img src="pics/123.png"/></li>
          <li id="indicator2" data-target="#carousel-custom" data-slide-to="1"><img src="pics/123.png"/></li>
          <li id="indicator3" data-target="#carousel-custom" data-slide-to="2"><img src="pics/123.png"/></li>
          <li id="indicator4" data-target="#carousel-custom" data-slide-to="3"><img src="pics/123.png"/></li>
          <li id="indicator5" data-target="#carousel-custom" data-slide-to="4"><img src="pics/123.png"/></li>
          <li id="indicator6" data-target="#carousel-custom" data-slide-to="5"><img src="pics/123.png"/></li>
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
          <div class="leftside">
            <?php
            $lista = simplexml_load_file('esimiehet.xml');
            echo "<h1>$lista->nimi</h1>";

            echo '<form action="action_page.php">
                  Nimi:<br>
                  <div id="formi_nimi">
                  <input type="text" name="firstname"><br>
                  <select name="esimiehet">
                  <option value="Tyhja"> - </option>
            ';
            foreach ($lista->esimiehet->children() as $asia) {

              echo '<option value="esimies">' .$asia. '</option>';

            };
            ?>

      </select>
      <input type="submit">
    </form>
  </div>
</div>
<div class="rightside">
<img src="pics/ukko4.png"/>



        </div>
      </div>
        <div class="item">
          <div class="leftside">
            <div id="blocks">
              <div id="block1" class="draggable">Esim1</div>
              <div id="block2" class="draggable">Esim2</div>
              <div id="block3" class="draggable">Esim3</div>
              <div id="block4" class="draggable">Esim4</div>
              <div id="block4" class="draggable">Esim5</div>
              <div id="block4" class="draggable">Esim6</div>
            </div>
            <div id="goals">
              <div id="goal1" class="droppable">Esim1</div>
              <div id="goal2" class="droppable">Esim2</div>
            </div>
          </div>
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
        <div id="esimerkki" class="item">
        </div>
        <div class="item">
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
