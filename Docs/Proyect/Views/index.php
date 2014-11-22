<?php 
  $res=$db->ejecutar("SELECT Nombre FROM Abogado");
  $abo=$db->num_rows($res);
  
  $resu=$db->ejecutar("SELECT Nombre FROM Cliente");
  $clientes=$db->num_rows($resu);


  $result=$db->ejecutar("SELECT Tipo FROM Materia");
  $materias=$db->num_rows($result);

  $resul=$db->ejecutar("SELECT Estado FROM Caso WHERE Estado='P'");
  $casosP=$db->num_rows($resul);

  $resulta=$db->ejecutar("SELECT Estado FROM Caso WHERE Estado='T'");
  $term=$db->num_rows($resulta);
?>

<div id="main-content">
        <div id="F-info" class="fireSans13">
                <a name="somos"></a>
                <label data-magellan-destination="somos" class="fireSans30 small-4 small-centered large-4 large-centered large-offset-4 columns row centered-text">¿QUIENES SOMOS?</label>
                <hr class="splitter fireSans30 small-3 small-centered medium-3 medium-centered large-2 large-centered large-offset-5 columns">
            
             <div class="row centered-text">
                <div class="small-12 large-4  medium-4  columns">
                    <h3 class="fireSans14 ">FEI Abogados, S. C.</h3>
                    <p>
                    Bufete jurídico mexicano que con más de 30 años de existencia,
                    ha llegado a ser la primera y más grande sociedad civil especializada en litigio a nivel nacional.
                    Tenemos el compromiso de ofrecer a sus clientes un servicio personalizado que cumpla con estrictos estándares de calidad conforme a los más altos principios de ética y profesionalismo 
                    </p>
                </div>
                <div class="small-12 large-4  medium-4  columns">
                    <h3 class="fireSans14 ">El valor de una idea</h3>
                    <p>
                    Cada empresa tiene como parte de sus activos lo correspondiente a los asuntos de Propiedad Industrial, los cuales se constituyen por marcas, 
                    nombres comerciales, avisos comerciales y patentes; aspecto que es atendido y protegido adecuada y especialmente por FEI Abogados quien ofrece a sus clientes un servicio integral de protección en éste ámbito. 
                    </p>
                </div>
                <div class="small-12 large-4  medium-4  columns">
                    <h3 class="fireSans14 ">Ley de datos personales</h3>
                    <p>
                    Hoy en día el uso de medios electrónicos es indispensable para todo lo que hacemos a diario,
                    ya sea profesional o en el ámbito particular. Asimismo, mucha de la actividad que realizamos en medios electrónicos y off line viene precedida de la entrega y divulgación de información personal.
                    </p>
                </div>
            </div>
        </div>
        <hr class="separador">
       
            <a name="clientes"></a> 
            <label data-magellan-destination="clientes" class="fireSans30 small-4 small-centered large-4 large-centered large-offset-4 columns row centered-text">NUESTROS CLIENTES</label>
            <hr class="splitter fireSans30 small-3 small-centered medium-3 medium-centered large-2 large-centered large-offset-5 columns">

        <div class="row ">
        </div>
        <div id="G-clientes"> 
            <div>
                 <div id="slider3_container" style="position: relative; top: 0px; left: 0px; width:1400px; height: 320px; overflow: hidden; margin-top:5px;">
                        <!-- Contenedor de slides -->
                         <div u="slides" style="cursor: pointer; position: absolute; left: 0px; top: 0px; width: 1400px; height:320px; overflow: hidden;">
                            <div><a href="#"><img  u="image" src="images/P1.jpg"/></a></div>
                            <div><a href="#"><img  u="image" src="images/P2.jpg"/></a></div>
                            <div><a href="#"><img  u="image" src="images/P3.jpg"/></a></div>
                            <div><a href="#"><img  u="image" src="images/P4.jpg"/></a></div>
                            <div><a href="#"><img  u="image" src="images/P1.jpg"/></a></div>  
                            <div><a href="#"><img  u="image" src="images/P3.jpg"/></a></div>
                            <div><a href="#"><img  u="image" src="images/P4.jpg"/></a></div>
                            <div><a href="#"><img  u="image" src="images/P1.jpg"/></a></div>   
                        </div>
                </div> 
             </div>
        </div> 
        <hr class="separador">
            <a name="servicios"></a>
            <label data-magellan-destination="servicios" class="fireSans30 small-4 small-centered large-4 large-centered large-offset-4 columns row centered-text">NUESTROS SERVICIOS</label>
            <hr class="splitter fireSans30 small-3 small-centered medium-3 medium-centered large-2 large-centered large-offset-5 columns">
       
        <div id="H-servicio">
           <!--  <div class="row centered-text" >
                <a name="servicios"></a>
                <label data-magellan-destination="servicios" style="border-bottom:red;" class="fireSans30 small-4 small-centered large-4 large-centered large-offset-4 columns">NUESTROS SERVICIOS</label>
                <hr class="splitter fireSans30 small-3 small-centered medium-3 medium-centered large-2 large-centered large-offset-5 columns">
            </div> -->
            <div class="row centered-text">
                <div class="cuadro small-12 medium-4 large-4 columns supporticons">
                        <img src="images/D3.png">
                </div>
                <div class="cuadro small-12 medium-4 large-4 columns supporticons">
                        <img src="images/D1.png">
                </div>
                <div class="cuadro small-12 medium-4 large-4 columns supporticons">
                        <img src="images/D2.png">
                </div>
                
                <hr class="separador">
            </div>
            <div class="row centered-text">
                <div class="cuadro small-12 medium-4 large-4 columns supporticons">
                        <img src="images/D6.png">
                </div>
                <div class="cuadro small-12 medium-4 large-4 columns supporticons">
                        <img src="images/D5.png">
                </div>
                <div class="cuadro small-12 medium-4 large-4 columns supporticons">
                        <img src="images/D4.png">
                </div>
            </div>
        </div>
       <hr class="separador">
            <a name="numeros"></a>
            <label data-magellan-destination="numeros" class="fireSans30 small-4 small-centered large-4 large-centered large-offset-4 columns row centered-text">NUESTROS NÚMEROS</label>
            <hr class="splitter small-3 small-centered medium-3 medium-centered large-2 large-centered large-offset-5 columns">
        <div class="row centered-text">
        </div>
        <div class="the-numbers">
            <div class="row">
                <div class="small-12 large-10 medium-12 columns ">
                    <h2 class="centered-text bottom40">Nuestros números</h2>
                    <div class="row stats centered-text">
                        <div class="medium-4 columns">
                            <h2><?=$clientes?></h2>
                            <h6>Clientes</h6>
                        </div>

                        <div class="medium-4 columns">
                            <h2><?=$abo?></h2>
                            <h6>Abogados</h6>
                        </div>
                        <div class="medium-4 columns">
                            <h2>30</h2>
                            <h6>Años</h6>
                        </div>
                    </div>
                    <div class="row stats centered-text">
                        <div class="medium-4 columns">
                            <h2><?=$materias?></h2>
                            <h6>Especialidades</h6>
                        </div>

                        <div class="medium-4 columns">
                            <h2><?=$casosP?></h2>
                            <h6>Casos en Proceso</h6>
                        </div>
                        <div class="medium-4 columns">
                            <h2><?=$term?></h2>
                            <h6>Casos Terminados</h6>
                        </div>
                    </div>
                </div>     
            </div>  
        </div>
       
    <hr class="separador">
    <a name="info"></a> 
    <label  data-magellan-destination="info" class="fireSans30 small-4 small-centered large-4 large-centered large-offset-4 columns row centered-text">INFORMACIÓN</label>
    <hr class="splitter small-3 small-centered medium-3 medium-centered large-2 large-centered large-offset-5 columns">

    <div class="row">
        <div class="small-12 medium-6 large-6  columns">
            <a class="twitter-timeline" href="https://twitter.com/Xavier920529" data-widget-id="532732542969843712">Tweets por el @Xavier920529.</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="small-12 medium-6 large-6   columns">
            <iframe src="https://mapsengine.google.com/map/embed?mid=zYLsjErm0hSc.kmohNM983Gr8" width="" height="450"></iframe>       
        </div>
    </div>
</div>
 <hr class="separador">
  <hr class="separador">
        <?php require('Pie.php');?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/foundation/foundation.magellan.js"></script>  
    <script src="js/foundation/foundation.abide.js"></script>
    <script src="js/menu.js"></script>
    
</body>
</html>