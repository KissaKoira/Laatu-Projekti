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
      var titleText = $title.text();
      document.getElementsByTagName("title").innerHTML = titleText;

      function addTitle(sivu){
        var $sivu = $xml.find(sivu);
        var $tekstit = $sivu.find("tekstit");
        var $otsikko = $tekstit.find("otsikko");
        var value = $otsikko.text();
        var attribute = $otsikko.attr("id");
        document.getElementById(attribute).innerHTML = value;
      }
      function addText(sivu){
        var $sivu = $xml.find(sivu);
        var $tekstit = $sivu.find("tekstit");
        var $teksti = $tekstit.find("teksti");
        var value = $teksti.text();
        var attribute = $teksti.attr("id");
        document.getElementById(attribute).innerHTML = value;
      }
      function addContent(){
        addTitle("sivu1");
        var sivut = ["sivu3","sivu4","sivu5","sivu6","sivu7","sivu8","sivu9","sivu10","sivu11","sivu12","sivu13","sivu14","sivu15","sivu16","sivu17"];
        for(i=0; i < sivut.length; i++){
          addTitle(sivut[i]);
          addText(sivut[i]);
        }
      }
      addContent();
    }

    //haitari listat
    $(function() {
      var icons = {
        header: "ui-icon-plus",
        activeHeader: "ui-icon-minusthick"
      };
      $( "#accordion" ).accordion({
        collapsible: true,
        heightStyle: "fill",
        icons: icons
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
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator2").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "active");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator3").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "active");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator4").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "active");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator5").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "active");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator6").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "active");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator7").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "active");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator8").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "active");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator9").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "active");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator10").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "active");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator11").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "active");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator12").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "active");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator13").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "active");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator14").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "active");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator15").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "active");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator16").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "active");
        document.getElementById("tab17").setAttribute("class", "inactive");
      }else if(document.getElementById("indicator17").getAttribute("class") === "active"){
        document.getElementById("tab1").setAttribute("class", "inactive");
        document.getElementById("tab2").setAttribute("class", "inactive");
        document.getElementById("tab3").setAttribute("class", "inactive");
        document.getElementById("tab4").setAttribute("class", "inactive");
        document.getElementById("tab5").setAttribute("class", "inactive");
        document.getElementById("tab6").setAttribute("class", "inactive");
        document.getElementById("tab7").setAttribute("class", "inactive");
        document.getElementById("tab8").setAttribute("class", "inactive");
        document.getElementById("tab9").setAttribute("class", "inactive");
        document.getElementById("tab10").setAttribute("class", "inactive");
        document.getElementById("tab11").setAttribute("class", "inactive");
        document.getElementById("tab12").setAttribute("class", "inactive");
        document.getElementById("tab13").setAttribute("class", "inactive");
        document.getElementById("tab14").setAttribute("class", "inactive");
        document.getElementById("tab15").setAttribute("class", "inactive");
        document.getElementById("tab16").setAttribute("class", "inactive");
        document.getElementById("tab17").setAttribute("class", "active");
      }
    }


  //dragdrop testi
  $(function(){
    var block1 = document.getElementById("block1");
    $(block1).data("target", 1);
    var block2 = document.getElementById("block2");
    $(block2).data("target", 1);
    var block3 = document.getElementById("block3");
    $(block3).data("target", 2);
    var block4 = document.getElementById("block4");
    $(block4).data("target", 2);
    var block5 = document.getElementById("block5");
    $(block5).data("target", 2);
    var block6 = document.getElementById("block6");
    $(block6).data("target", 2);
    var block7 = document.getElementById("block7");
    $(block7).data("target", 3);
    var block8 = document.getElementById("block8");
    $(block8).data("target", 3);
    var block9 = document.getElementById("block9");
    $(block9).data("target", 3);
    var block10 = document.getElementById("block10");
    $(block10).data("target", 3);
    var block11 = document.getElementById("block11");
    $(block11).data("target", 4);
    var block12 = document.getElementById("block12");
    $(block12).data("target", 4);
    var block13 = document.getElementById("block13");
    $(block13).data("target", 4);

    var goal1 = document.getElementById("goal1");
    $(goal1).data("id", 1);
    var goal2 = document.getElementById("goal2");
    $(goal2).data("id", 2);
    var goal3 = document.getElementById("goal3");
    $(goal3).data("id", 3);
    var goal4 = document.getElementById("goal4");
    $(goal4).data("id", 4);

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
        <div id="tab1" data-target="#carousel-custom" data-slide-to="0" class="active" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 1</a></div>
        <div id="tab2" data-target="#carousel-custom" data-slide-to="1" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 2</a></div>
        <div id="tab3" data-target="#carousel-custom" data-slide-to="2" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 3</a></div>
        <div id="tab4" data-target="#carousel-custom" data-slide-to="3" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 4</a></div>
        <div id="tab5" data-target="#carousel-custom" data-slide-to="4" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 5</a></div>
        <div id="tab6" data-target="#carousel-custom" data-slide-to="5" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 6</a></div>
        <div id="tab7" data-target="#carousel-custom" data-slide-to="6" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 7</a></div>
        <div id="tab8" data-target="#carousel-custom" data-slide-to="7" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 8</a></div>
        <div id="tab9" data-target="#carousel-custom" data-slide-to="8" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 9</a></div>
        <div id="tab10" data-target="#carousel-custom" data-slide-to="9" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 10</a></div>
        <div id="tab11" data-target="#carousel-custom" data-slide-to="10" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 11</a></div>
        <div id="tab12" data-target="#carousel-custom" data-slide-to="11" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 12</a></div>
        <div id="tab13" data-target="#carousel-custom" data-slide-to="12" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 13</a></div>
        <div id="tab14" data-target="#carousel-custom" data-slide-to="13" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 14</a></div>
        <div id="tab15" data-target="#carousel-custom" data-slide-to="14" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 15</a></div>
        <div id="tab16" data-target="#carousel-custom" data-slide-to="15" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 16</a></div>
        <div id="tab17" data-target="#carousel-custom" data-slide-to="16" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Content 17</a></div>
      </div>
    </div>
    <div class="header"><img src="pics/esedu_logo.png" style="float: left;"></img>
      <a id="header_text1">Etelä-Savon ammattiopisto</a><br>
      <a id="header_text2">South Savo Vocational College</a>
    </div>

    <div id='carousel-custom' class="carousel slide" data-interval="false">

    <!-- Sivujen indikaattorit -->
      <ol class="carousel-indicators">
        <li id="indicator1" data-target="#carousel-custom" data-slide-to="0" class="active" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator2" data-target="#carousel-custom" data-slide-to="1" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator3" data-target="#carousel-custom" data-slide-to="2" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator4" data-target="#carousel-custom" data-slide-to="3" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator5" data-target="#carousel-custom" data-slide-to="4" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator6" data-target="#carousel-custom" data-slide-to="5" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator7" data-target="#carousel-custom" data-slide-to="6" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator8" data-target="#carousel-custom" data-slide-to="7" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator9" data-target="#carousel-custom" data-slide-to="8" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator10" data-target="#carousel-custom" data-slide-to="9" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator11" data-target="#carousel-custom" data-slide-to="10" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator12" data-target="#carousel-custom" data-slide-to="11" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator13" data-target="#carousel-custom" data-slide-to="12" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator14" data-target="#carousel-custom" data-slide-to="13" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator15" data-target="#carousel-custom" data-slide-to="14" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator16" data-target="#carousel-custom" data-slide-to="15" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator17" data-target="#carousel-custom" data-slide-to="16" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
      </ol>

      <!-- Sivut -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="leftside">
            <p id="otsikko1" class="otsikko"></p>
          </div>
          <div class="rightside">
            <img src="pics/etusivu.png"/>
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
                  <option value="Tyhja"> - </option>';
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
          <p id="otsikko2" class="otsikko"></p>
          <p id="teksti1" class="teksti"></p>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko3" class="otsikko"></p>
            <p id="teksti2" class="teksti"></p>
          </div>
          <div class="rightside">
            <div class="accwrapper">
              <div id="accordion">
                <h3 id="hotsikko1">Esedun laadunhallintasuunnitelma</h3>
                <div>
                  <p id="hteksti1">
                    Esedun laadunhallintaa ohjaa säännöllisesti päivitettävä ja johtoryhmän hyväksymä laadunhallintasuunnitelma. Laadunhallintasuunnitelma<br>
                    * kuvaa laadunhallinnan periaatteet ja laadunhallinnan viitekehys (missä selitys mikä?)<br>
                    * kuvaa toimintajärjestelmämme<br>
                    * kuvaa kuinka prosesseja arvioidaan ja parannetaan<br>
                    * kuvaa laadunhallinnan työnjaon ja vastuut<br>
                    * sisältää arviointisuunnitelman<br>
                    * sisältää organisaatiotasoiset laadunhallinnan kehittämisen toimenpiteet seuraaville vuosille<br>
                    Laadunhallintasuunnitelma löytyy Essin aarrearkusta Laadun sivustolta
                  </p>
                </div>
                <h3 id="hotsikko2">Laatuympyrä – suunnittelu, toteutus, arviointi ja parantaminen</h3>
                <div>
                  <p id="hteksti2">
                    Laatuympyröitä on useita, mutta periaate niissä kaikissa on sama. Ympyrän mukainen toiminta on keskeistä omassa, tiimien sekä koko organisaation toiminnassa, jotta laatu kehittyy. <br>
                    EQAVET-viitekehyksen laatuympyrä <br>
                    * On ammatillisen koulutuksen eurooppalaisen viitekehyksen sisältyvä laatuympyrä, jonka vaiheet ovat suunnittelu, toteutus, arviointi ja parantaminen <br>
                    PDCA-sykli eli Demingin laatuympyrä <br>
                    * Perustuu ympyrää, jota kierretään ja jonka vaiheet ovat: suunnittele, toteuta, tarkista ja korjaa <br>
                    * kehittäminen nähdään jatkuvana prosessina, jossa jokaisen ympyrän kierroksen jälkeen ollaan lähempänä tavoitetta tai tavoitteita <br>
                    TUTKA- tai Radar-logiikka <br>
                    * EFQM-malliin sisältyvä ympyrä, jonka vaiheet ovat: määrittele tavoiteltavat tulokset (results), suunnittele ja kehitä toimintamallit ja –tavat (approaches), toteuta toimintamalleja ja –tapoja (deploy), mittaa, arvioi ja paranna toimintamalleja ja –tapoja sekä niiden toteutusta (assess and refine)
                  </p>
                </div>
                <h3 id="hotsikko3">Sidosryhmät ja kumppanit</h3>
                <div>
                  <p id="hteksti3">
                    Sidosryhmä tarkoittaa henkilöä, ryhmää tai organisaatiota, jolla on suora tai epäsuora sidos tai kiinnostus organisaatiota kohtaan, koska se voi joko vaikuttaa organisaatioon tai organisaatio voi vaikuttaa siihen. Ulkoisia sidosryhmiä ovat esim. omistajat, osakkaat, asiakkaat, toimittajat, kumppanit, valtionhallinto ja kunnat (EFQM Excellence –malli 2013) <br> <br>

                    Esedun kumppanit ja sidosryhmät on määritelty ja kokonaisuutta päivitetään säännöllisesti strategiaprosessin yhteydessä. Esedun asiakas, kumppani- ja sidosryhmätasot ovat: <br>
                    * Opetustoimen viranomaiset, omistajat, järjestöt ja toimikunnat <br>
                    * Hankeverkostot ja projektiorganisaatiot <br>
                    * Kv-toiminnan kumppanit <br>
                    * Rahoittajat <br>
                    * Koulutuksen toteutuksen yhteistyökumppanit <br>
                    * Koulutusmyynnin asiakkaat <br>
                  </p>
                </div>
                <h3 id="hotsikko4">Toiminnan reunaehtoja</h3>
                <div>
                  <p id="hteksti4">
                    Ammatillisen koulutuksen järjestäjälle reunaehtoja asettavat kansalliset normit, suositukset ja ohjeet joita esim. ovat <br>
                    * ammatillisen koulutukset lait, asetukset ja päätökset toimintaan ja rahoitukseen liittyen <br>
                    * ammatillisen koulutuksen järjestämisluvat koulutuksen järjestämistä varten <br>
                    * tutkinnon perusteet
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko4" class="otsikko"></p>
            <p id="teksti3" class="teksti"></p>
          </div>
          <div class="rightside">
            Esedun strategiassa on määritelty strategiset mittarit ja tavoitetulokset em. mittareille <br>
            Henkilöstön kannalta tärkeimmät strategiset mittarit ovat: <br>
            <table class="tableborder">
              <tr><td>Mittari</td><td>Tavoite</td></tr>
              <tr><td>Tutkintojen läpäisy </td><td> 80% </td></tr>
              <tr><td>Valmistuneiden opiskelijoiden työllistyminen </td><td> 70% </td></tr>
              <tr><td>Valmistuneiden opiskelijoiden jatko-opintoihin siirtyminen </td><td> 15% </td></tr>
              <tr><td>Vetovoima (hakijat/aloituspaikat) </td><td> 1,2 </td></tr>
              <tr><td>Opiskelijatyytyväisyys, nuoret </td><td> 4,0 </td></tr>
              <tr><td>Opiskelijatyytyväisyys, aikuiset </td><td> 4,0 </td></tr>
              <tr><td>Verkko-opintojen määrä koulutuksessa </td><td> 10% </td></tr>
              <tr><td>Opetushenkilöstön pedagoginen pätevyys </td><td> 85% </td></tr>
              <tr><td>Työolobarometrin tulos </td> <td> 4,0 </td></tr>
            </table>
          </div>
        </div>
        <div class="item">
          <p id="otsikko5" class="otsikko"></p>
          <p id="teksti4" class="teksti"></p>
          <div id="blocks">
            <div id="block6" class="draggable">Henkilöstösuunnitelma</div>
            <div id="block13" class="draggable">Oppimistulokset</div>
            <div id="block1" class="draggable">Työvoimapoliittisen koulutuksen raportointi</div>
            <div id="block5" class="draggable">Opetussuunnitelma</div>
            <div id="block12" class="draggable">Asiakastulokset</div>
            <div id="block7" class="draggable">Opetus</div>
            <div id="block3" class="draggable">Hanketoiminta</div>
            <div id="block4" class="draggable">HEKS-keskustelut</div>
            <div id="block9" class="draggable">Työssäoppiminen</div>
            <div id="block11" class="draggable">Opiskelijapalautteet</div>
            <div id="block2" class="draggable">Oman työn kehittäminen</div>
            <div id="block10" class="draggable">Näyttötutkinto</div>
            <div id="block8" class="draggable">Ohjaus</div>
          </div>
          <div id="goals">
            <div id="goal1" class="droppable">Suunnittelu</div>
            <div id="goal2" class="droppable">Toteutus</div>
            <div id="goal3" class="droppable">Arviointi</div>
            <div id="goal4" class="droppable">Parantaminen</div>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko6" class="otsikko"></p>
            <p id="teksti5" class="teksti"></p>
          </div>
          <div class="rightside">
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko7" class="otsikko"></p>
            <p id="teksti6" class="teksti"></p>
          </div>
          <div class="rightside">
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko8" class="otsikko"></p>
            <p id="teksti7" class="teksti"></p>
          </div>
          <div class="rightside">
            <form method="post" action="send.php">
              <h2> Totta vai Tarua? </h2>
              <div id="vastauswrapper">
                <p id="vastaus1">Totta</p>
                <p id="vastaus1">Tarua</p>
              </div>
                <div id="vastauswrapper">
                <p id="kysymys">Aikaisemman osaamisen tunnistamisen ja tunnustamisen prosessikuvauksen mukaan ohjauskeskustelun käyminen on opiskelijan vastuulla</p>
                <fieldset id="group1">
                <input id="vastaus" type="radio" name="group1">
                <input id="vastaus" type="radio" name="group1"> <br></fieldset>
              </div>
              <div id="vastauswrapper">
                <p id="kysymys">Aikuiskoulutushaussa vastuuopettaja ja opintosihteeri vastaavat yhdessä mahdollisten hakijoiden informoinnista ja ohjaamisesta</p>
                <fieldset id="group2">
                <input id="vastaus" type="radio" name="group2">
                <input id="vastaus" type="radio" name="group2"> <br></fieldset>
              </div>
              <div id="vastauswrapper">
                <p id="kysymys">Opettajan vastuulla on ohjata opiskelijat vastaamaan opiskelijapalautekyselyihin (nuorten tulo-, olo- ja päättökyselyt, aikuiskoulutus OPAL ja AIPAL sekä kummankin koulutusmuodon opettajan henkilökohtainen palaute)</p>
                <fieldset id="group3">
                <input id="vastaus" type="radio" name="group3">
                <input id="vastaus" type="radio" name="group3"> <br></fieldset>
              </div>
              <div id="vastauswrapper">
                <p id="kysymys">Opiskelija tunnistaa olemassa olevan osaamisen</p>
                <fieldset id="group4">
                <input id="vastaus" type="radio"  name="group4">
                <input id="vastaus" type="radio"  name="group4"> <br></fieldset>
              </div>
              <div id="vastauswrapper">
                <p id="kysymys">Oppisopimuskoordinaattori ja vastuuopettaja vastaavat yhdessä oppisopimuskoulutuksen tietopuolisen koulutuksen suunnittelusta</p>
                <fieldset id="group4">
                <input id="vastaus" type="radio"  name="group4">
                <input id="vastaus" type="radio"  name="group4"> <br></fieldset>
              </div>
              <input type="submit" name="Lähetä">
            </form>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko9" class="otsikko"></p>
            <p id="teksti8" class="teksti"></p>
          </div>
          <div class="rightside">
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko10" class="otsikko"></p>
            <p id="teksti9" class="teksti"></p>
          </div>
          <div class="rightside">
          </div>
        </div>
        <div class="item">
          <div style="width: 975px; height: 480px; overflow-y: auto;">
            <p id="otsikko11" class="otsikko"></p>
            <p id="teksti10" class="teksti"></p>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko12" class="otsikko"></p>
            <p id="teksti11" class="teksti"></p>
          </div>
          <div class="rightside">
          </div>
        </div>
        <div class="item">
          <p id="otsikko13" class="otsikko"></p>
          <p id="teksti12" class="teksti"></p>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko14" class="otsikko"></p>
            <p id="teksti13" class="teksti"></p>
          </div>
          <div class="rightside">
          </div>
        </div>
        <div class="item">
          <p id="otsikko15" class="otsikko"></p>
          <p id="teksti14" class="teksti"></p>
        </div>
        <div class="item">
          <p id="otsikko16" class="otsikko"></p>
          <p id="teksti15" class="teksti"></p>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev" onClick="window.setTimeout(checkActivity, 100);">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next" onClick="window.setTimeout(checkActivity, 100);">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

  <!-- lisätyt linkit (2) -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--    <div class="leftside">
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
  </div> -->

  <!-- <div class="rightside">
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
-->
