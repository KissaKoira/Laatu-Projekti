
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="submit.js"></script>
  <!-- lisätyt linkit -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>

</head>
<body>

  <div id="wrapper">
    <div id="navbaar">
      <h1> Sisältö </h1>
      <div id="navlist">
        <div id="tab1" data-target="#carousel-custom" data-slide-to="0" class="active" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Etusivu</a></div>
        <div id="tab2" data-target="#carousel-custom" data-slide-to="1" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Esittely</a></div>
        <div id="tab3" data-target="#carousel-custom" data-slide-to="2" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>OSA 1 Suunnittelu ja toteutus</a></div>
        <div id="tab4" data-target="#carousel-custom" data-slide-to="3" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Mikä tekee oppilaitoksestamme laadukkaan</a></div>
        <div id="tab5" data-target="#carousel-custom" data-slide-to="4" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Mikä tekee omasta työstäni laadukkaan</a></div>
        <div id="tab6" data-target="#carousel-custom" data-slide-to="5" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Tehtäväsivu 1</a></div>
        <div id="tab7" data-target="#carousel-custom" data-slide-to="6" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Miten asetamme tavoitteet oppilaitoksellemme</a></div>
        <div id="tab8" data-target="#carousel-custom" data-slide-to="7" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Miten asetan tavoitteet työlleni</a></div>
        <div id="tab9" data-target="#carousel-custom" data-slide-to="8" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Tehtäväsivu 2</a></div>
        <div id="tab10" data-target="#carousel-custom" data-slide-to="9" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>OSA 2 Arvointi ja parantaminen</a></div>
        <div id="tab11" data-target="#carousel-custom" data-slide-to="10" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Miten arvioimme oppilaitoksemme toiminnan vaikuttavuutta</a></div>
        <div id="tab12" data-target="#carousel-custom" data-slide-to="11" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Miten arvioin oman työni vaikutuksia ja vaikuttavuutta</a></div>
        <div id="tab13" data-target="#carousel-custom" data-slide-to="12" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Tehtäväsivu 3</a></div>
        <div id="tab14" data-target="#carousel-custom" data-slide-to="13" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Miten parannamme oppilaitoksen toimintaa</a></div>
        <div id="tab15" data-target="#carousel-custom" data-slide-to="14" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Miten osoitamme oppilaitoksen laadukkuuden</a></div>
        <div id="tab16" data-target="#carousel-custom" data-slide-to="15" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>OSA 3 Tuloksellisuus- ja vaikuttavuusmittarit</a></div>
        <div id="tab17" data-target="#carousel-custom" data-slide-to="16" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Tuloksellisuus- ja vaikuttavuusmittarit</a></div>
        <div id="tab18" data-target="#carousel-custom" data-slide-to="17" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Tiedon keruu ja analysointi</a></div>
        <div id="tab19" data-target="#carousel-custom" data-slide-to="18" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Näytöt tuloksellisuudesta ja vaikuttavuudesta</a></div>
        <div id="tab20" data-target="#carousel-custom" data-slide-to="19" class="inactive" onClick="window.setTimeout(checkActivity, 100);"><a href=#>Toteutus</a></div>
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
        <li id="indicator18" data-target="#carousel-custom" data-slide-to="17" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator19" data-target="#carousel-custom" data-slide-to="18" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
        <li id="indicator20" data-target="#carousel-custom" data-slide-to="19" onClick="window.setTimeout(checkActivity, 100);"><img src="pics/123.png"/></li>
      </ol>

      <!-- Sivut -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div>
            <p id="otsikko1" class="otsikko"></p>
            <img style="margin-left: 7%; width: 800px;" src="pics/Laatuympyra.gif"/>
          </div>
        </div>
        <div class="item">
          <p id="otsikko2" class="otsikko"></p>
          <p id="teksti1" class="teksti"></p>
        </div>
        <div class="item">
          <div>
            <p id="osaOtsikko1" class="otsikko">OSA 1 Suunnittelu ja toteutus</p>
            <img style="margin-left: 7%; width: 800px;" src="pics/Laatuympyra.gif"/>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko3" class="otsikko"></p>
            <p id="teksti2" class="teksti"></p>
          </div>
          <div class="rightside">
            <div style="height: 230px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko1"></h3>
              <div>
                <a id="hteksti1"></a>
              </div>
              <h3 id="hotsikko2"></h3>
              <div>
                <a id="hteksti2"></a>
              </div>
              <h3 id="hotsikko3"></h3>
              <div>
                <a id="hteksti3"></a>
              </div>
              <h3 id="hotsikko4"></h3>
              <div>
                <a id="hteksti4"></a>
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
            <div style="height: 400px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko5"></h3>
              <div>
                <a id="hteksti5"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="item">
          <p id="otsikko5" class="otsikko"></p>
          <p id="teksti4" class="teksti"></p>
          <div id="blocks">
            <a id="block5" class="draggable">Henkilöstösuunnitelma</a>
            <a id="block12" class="draggable">Oppimistulokset</a>
            <a id="block4" class="draggable">Opetussuunnitelma</a>
            <a id="block11" class="draggable">Asiakastulokset</a>
            <a id="block6" class="draggable">Opetus</a>
            <a id="block2" class="draggable">Hanketoiminta</a>
            <a id="block3" class="draggable">HEKS-keskustelut</a>
            <a id="block8" class="draggable">Työssäoppiminen</a>
            <a id="block10" class="draggable">Opiskelijapalautteet</a>
            <a id="block1" class="draggable">Oman työn kehittäminen</a>
            <a id="block9" class="draggable">Näyttötutkinto</a>
            <a id="block7" class="draggable">Ohjaus</a>
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
            <div style="height: 325px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko6"></h3>
              <div>
                <a id="hteksti6"></a>
              </div>
              <h3 id="hotsikko7"></h3>
              <div>
                <a id="hteksti7"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko7" class="otsikko"></p>
            <p id="teksti6" class="teksti"></p>
          </div>
          <div class="rightside">
            <div style="height: 300px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko8"></h3>
              <div>
                <a id="hteksti8"></a>
              </div>
              <h3 id="hotsikko9"></h3>
              <div>
                <a id="hteksti9"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko8" class="otsikko"></p>
            <p id="teksti7" class="teksti"></p>
            <div id="vastauksetDiv" class="hidden">
              <p id="vastaukset" class="teksti"></p>
            </div>
          </div>
          <div class="rightside" style="overflow-y: hidden;">
            <h2> Totta vai Tarua? </h2>
            <p id="tottatarua">Totta</p>
            <p id="tottatarua">Tarua</p>
            <div id="vastauswrapper">
              <table class="tableborderform">
                <form name="FORM" method="post">
                  <tr>
                    <td>
                      <p id="kysymys">Aikaisemman osaamisen tunnistamisen ja tunnustamisen prosessikuvauksen mukaan ohjauskeskustelun käyminen on opiskelijan vastuulla</p>
                      <fieldset id="group">
                        <input id="radionappi" type="radio" name="kysymys1" value="tarua">
                        <input id="radionappi" type="radio" name="kysymys1" value="totta"> <br>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p id="kysymys">Aikuiskoulutushaussa vastuuopettaja ja opintosihteeri vastaavat yhdessä mahdollisten hakijoiden informoinnista ja ohjaamisesta</p>
                      <fieldset id="group">
                        <input id="radionappi" type="radio" name="kysymys2" value="tarua">
                        <input id="radionappi" type="radio" name="kysymys2" value="totta"> <br>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p id="kysymys">Opettajan vastuulla on ohjata opiskelijat vastaamaan opiskelijapalautekyselyihin (nuorten tulo-, olo- ja päättökyselyt, aikuiskoulutus OPAL ja AIPAL sekä kummankin koulutusmuodon opettajan henkilökohtainen palaute)</p>
                      <fieldset id="group">
                        <input id="radionappi" type="radio" name="kysymys3" value="tarua">
                        <input id="radionappi" type="radio" name="kysymys3" value="totta"> <br>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p id="kysymys">Opiskelija tunnistaa olemassa olevan osaamisen</p>
                        <fieldset id="group">
                        <input id="radionappi" type="radio"  name="kysymys4" value="tarua">
                        <input id="radionappi" type="radio"  name="kysymys4" value="totta"> <br>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p id="kysymys">Oppisopimuskoordinaattori ja vastuuopettaja vastaavat yhdessä oppisopimuskoulutuksen tietopuolisen koulutuksen suunnittelusta</p>
                      <fieldset id="group">
                        <input id="radionappi" type="radio"  name="kysymys5" value="tarua">
                        <input id="radionappi" type="radio"  name="kysymys5" value="totta"> <br>
                      </fieldset>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php
                        $lista = simplexml_load_file('esimiehet.xml');
                        echo '
                        Nimi:<br>
                        <input type="text" name="nimi" id="nimi"><br>
                        <select name="esimiehet" id="esimies">
                        <option value="Tyhja"> Esimies </option>';
                        foreach ($lista->esimiehet->children() as $asia) {
                          echo '<option value="esimies" name="esimies">' .$asia. '</option>';
                        };
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" onClick="submitdata();">Submit</button>
                    </td>
                  </tr>
                </form>
              </table>
            </div>
          </div>
        </div>
        <div class="item">
          <div>
            <p id="osaOtsikko2" class="otsikko">OSA 2 Arvointi ja parantaminen</p>
            <img style="margin-left: 7%; width: 800px;" src="pics/Laatuympyra.gif"/>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko9" class="otsikko"></p>
            <p id="teksti8" class="teksti"></p>
          </div>
          <div class="rightside">
            <div style="height: 300px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko10"></h3>
              <div>
                <a id="hteksti10"></a>
              </div>
              <h3 id="hotsikko11"></h3>
              <div>
                <a id="hteksti11"></a>
              </div>
              <h3 id="hotsikko12"></h3>
              <div>
                <a id="hteksti12"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko10" class="otsikko"></p>
            <p id="teksti9" class="teksti"></p>
          </div>
          <div class="rightside">
            <div style="height: 350px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko13"></h3>
              <div>
                <a id="hteksti13"></a>
              </div>
              <h3 id="hotsikko14"></h3>
              <div>
                <a id="hteksti14"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div style="width: 975px; height: 450px; overflow-y: auto;">
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
            <div style="height: 350px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko15"></h3>
              <div>
                <a id="hteksti15"></a>
              </div>
              <h3 id="hotsikko16"></h3>
              <div>
                <a id="hteksti16"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="item">
          <p id="otsikko13" class="otsikko"></p>
          <p id="teksti12" class="teksti"></p>
        </div>
        <div class="item">
          <div>
            <p id="osaOtsikko3" class="otsikko">OSA 3 Tuloksellisuus- ja vaikuttavuusmittarit</p>
            <img style="margin-left: 7%; width: 800px;" src="pics/Laatuympyra.gif"/>
          </div>
        </div>
        <div class="item">
          <div class="leftside">
            <p id="otsikko14" class="otsikko"></p>
            <p id="teksti13" class="teksti"></p>
          </div>
          <div class="rightside">
            <div style="height: 350px;"> <!-- Nopea ratkaisu -->
            <div class="accordion">
              <h3 id="hotsikko17"></h3>
              <div>
                <a id="hteksti17"></a>
              </div>
              <h3 id="hotsikko18"></h3>
              <div>
                <a id="hteksti18"></a>
              </div>
            </div>
            </div>
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
        <div class="item">
          <p class="teksti"> Tekninen toteutus: Onni Heinonen</p>
          <p class="teksti"> Graafinen toteutus: Mitja Immonen </p>
          <p class="teksti"> Sisällöissä on hyödynnetty AMEO-verkoston Laatu-Katti vieköön!-koulutusta. </p>
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
