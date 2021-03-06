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
  function addAccordion(sivu, haitari){
    var $sivu = $xml.find(sivu);
    var $haitarilista = $sivu.find("haitarilista");
    var $haitari = $haitarilista.find(haitari);
    var $otsikko = $haitari.find("otsikko");
    var $teksti = $haitari.find("teksti");
    var otsikkoValue = $otsikko.text();
    var otsikkoAttribute = $otsikko.attr("id");
    var tekstiValue = $teksti.text();
    var tekstiAttribute = $teksti.attr("id");
    document.getElementById(otsikkoAttribute).innerHTML = otsikkoValue;
    document.getElementById(tekstiAttribute).innerHTML = tekstiValue;
  }
  function addContent(){
    //vastaukset
    var $vastaukset = $xml.find("vastaukset");
    var vastauksetValue = $vastaukset.text();
    document.getElementById("vastaukset").innerHTML = vastauksetValue;

    addTitle("sivu1");
    var sivut = ["sivu2","sivu3","sivu4","sivu5","sivu6","sivu7","sivu8","sivu9","sivu10","sivu11","sivu12","sivu13","sivu14","sivu15","sivu16"];
    for(i=0; i < sivut.length; i++){
      addTitle(sivut[i]);
      addText(sivut[i]);
    }
    addAccordion("sivu3", "haitari1");
    addAccordion("sivu3", "haitari2");
    addAccordion("sivu3", "haitari3");
    addAccordion("sivu3", "haitari4");
    addAccordion("sivu4", "haitari5");
    addAccordion("sivu6", "haitari6");
    addAccordion("sivu6", "haitari7");
    addAccordion("sivu7", "haitari8");
    addAccordion("sivu7", "haitari9");
    addAccordion("sivu9", "haitari10");
    addAccordion("sivu9", "haitari11");
    addAccordion("sivu9", "haitari12");
    addAccordion("sivu10", "haitari13");
    addAccordion("sivu10", "haitari14");
    addAccordion("sivu12", "haitari15");
    addAccordion("sivu12", "haitari16");
    addAccordion("sivu14", "haitari17");
    addAccordion("sivu14", "haitari18");
  }
  addContent();
}

//haitari listat

$(function() {
  var icons = {
    header: "iconMinus",
    activeHeader: "iconPlus"
  };

  $( ".accordion" ).accordion({
    icons: icons,
    collapsible: true,
    active: false,
    heightStyle: "fill"
  });
});

//tab lista

  function checkActivity(){
    var tab1 = document.getElementById("tab1");
    $(tab1).data("tab", 1);
    var tab2 = document.getElementById("tab2");
    $(tab1).data("tab", 2);
    var tab3 = document.getElementById("tab3");
    $(tab1).data("tab", 3);
    var tab4 = document.getElementById("tab4");
    $(tab1).data("tab", 4);
    var tab5 = document.getElementById("tab5");
    $(tab1).data("tab", 5);
    var tab6 = document.getElementById("tab6");
    $(tab1).data("tab", 6);
    var tab7 = document.getElementById("tab7");
    $(tab1).data("tab", 7);
    var tab8 = document.getElementById("tab8");
    $(tab1).data("tab", 8);
    var tab9 = document.getElementById("tab9");
    $(tab1).data("tab", 9);
    var tab10 = document.getElementById("tab10");
    $(tab1).data("tab", 10);
    var tab11 = document.getElementById("tab11");
    $(tab1).data("tab", 11);
    var tab12 = document.getElementById("tab12");
    $(tab1).data("tab", 12);
    var tab13 = document.getElementById("tab13");
    $(tab1).data("tab", 13);
    var tab14 = document.getElementById("tab14");
    $(tab1).data("tab", 14);
    var tab15 = document.getElementById("tab15");
    $(tab1).data("tab", 15);
    var tab16 = document.getElementById("tab16");
    $(tab1).data("tab", 16);
    var tab17 = document.getElementById("tab17");
    $(tab1).data("tab", 17);
    var tab18 = document.getElementById("tab18");
    $(tab1).data("tab", 18);
    var tab19 = document.getElementById("tab19");
    $(tab1).data("tab", 19);
    var tab20 = document.getElementById("tab20");
    $(tab1).data("tab", 20);

    var tabs = [tab1, tab2, tab3, tab4, tab5, tab6, tab7, tab8, tab9, tab10, tab11, tab12, tab13, tab14, tab15, tab16, tab17, tab18, tab19, tab20];

    var indicator1 = document.getElementById("indicator1");
    $(indicator1).data("indicator", 1);
    var indicator2 = document.getElementById("indicator2");
    $(indicator2).data("indicator", 2);
    var indicator3 = document.getElementById("indicator3");
    $(indicator3).data("indicator", 3);
    var indicator4 = document.getElementById("indicator4");
    $(indicator4).data("indicator", 4);
    var indicator5 = document.getElementById("indicator5");
    $(indicator5).data("indicator", 5);
    var indicator6 = document.getElementById("indicator6");
    $(indicator6).data("indicator", 6);
    var indicator7 = document.getElementById("indicator7");
    $(indicator7).data("indicator", 7);
    var indicator8 = document.getElementById("indicator8");
    $(indicator8).data("indicator", 8);
    var indicator9 = document.getElementById("indicator9");
    $(indicator9).data("indicator", 9);
    var indicator10 = document.getElementById("indicator10");
    $(indicator10).data("indicator", 10);
    var indicator11 = document.getElementById("indicator11");
    $(indicator11).data("indicator", 11);
    var indicator12 = document.getElementById("indicator12");
    $(indicator12).data("indicator", 12);
    var indicator13 = document.getElementById("indicator13");
    $(indicator13).data("indicator", 13);
    var indicator14 = document.getElementById("indicator14");
    $(indicator14).data("indicator", 14);
    var indicator15 = document.getElementById("indicator15");
    $(indicator15).data("indicator", 15);
    var indicator16 = document.getElementById("indicator16");
    $(indicator16).data("indicator", 16);
    var indicator17 = document.getElementById("indicator17");
    $(indicator17).data("indicator", 17);
    var indicator18 = document.getElementById("indicator18");
    $(indicator18).data("indicator", 18);
    var indicator19 = document.getElementById("indicator19");
    $(indicator19).data("indicator", 19);
    var indicator20 = document.getElementById("indicator20");
    $(indicator20).data("indicator", 20);

    var indicators = [indicator1, indicator2, indicator3, indicator4, indicator5, indicator6, indicator7, indicator8, indicator9, indicator10, indicator11, indicator12, indicator13, indicator14, indicator15, indicator16, indicator17, indicator18, indicator19, indicator20];

    for(var i = 0; i < indicators.length; i++){
      if(indicators[i].getAttribute("class") === "active"){
        for(var o = 0; i < tabs.length; o++){
          var indicator = $(indicators[i]).data("indicator");
          var tab = $(tabs[o]).data("tab");
          console.log(indicator);
          console.log(tab);
          if(indicator === tab){
            tabs[o].setAttribute("class", "active");
          }else{
            tabs[o].setAttribute("class", "inactive");
          }
        }
      }
    }
  }


//dragdrop testi
$(function(){
  var block1 = document.getElementById("block1");
  $(block1).data("target", 4);
  var block2 = document.getElementById("block2");
  $(block2).data("target", 4);
  var block3 = document.getElementById("block3");
  $(block3).data("target", 4);
  var block9 = document.getElementById("block9");
  $(block9).data("target", 2);
  var block4 = document.getElementById("block4");
  $(block4).data("target", 1);
  var block5 = document.getElementById("block5");
  $(block5).data("target", 1);
  var block6 = document.getElementById("block6");
  $(block6).data("target", 2);
  var block7 = document.getElementById("block7");
  $(block7).data("target", 2);
  var block10 = document.getElementById("block10");
  $(block10).data("target", 3);
  var block11 = document.getElementById("block11");
  $(block11).data("target", 3);
  var block12 = document.getElementById("block12");
  $(block12).data("target", 3);
  var block8 = document.getElementById("block8");
  $(block8).data("target", 2);

  var goal1 = document.getElementById("goal1");
  $(goal1).data("id", 1);
  var goal2 = document.getElementById("goal2");
  $(goal2).data("id", 2);
  var goal3 = document.getElementById("goal3");
  $(goal3).data("id", 3);
  var goal4 = document.getElementById("goal4");
  $(goal4).data("id", 4);

  $( ".draggable" ).draggable();
  $( ".droppable" ).droppable({
    drop: handleDropEvent,
  });
});

function handleDropEvent( event, ui ) {
  var drop = $(this).data( 'id' );
  var drag = ui.draggable.data( 'target' );
  if(drop === drag){
    ui.draggable.removeClass( "droppedwrong" );
    ui.draggable.addClass( "droppedright" );
  } else{
    ui.draggable.removeClass( "droppedright" );
    ui.draggable.addClass( "droppedwrong" );
  }
}
