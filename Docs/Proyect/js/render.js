var RequestObject = false;
   //directorio donde tenemos el archivo ajax.php
  var Archivo = 'localhost:8080/DAR/Proyect/Views/index.php';

  // el tiempo X que tardará en actualizarse 
  window.setInterval("actualizacion_reloj()", 2000);

  if (window.XMLHttpRequest) RequestObject = new XMLHttpRequest();
  if (window.ActiveXObject) RequestObject = new ActiveXObject("Microsoft.XMLHTTP");

  function ReqChange() { 
  // Si se ha recibido la información correctamente
    if (RequestObject.readyState==4) {
     // si la información es válida 
     if (RequestObject.responseText.indexOf('invalid') == -1) {
     // Buscamos la div con id online 
       document.getElementById("online").innerHTML = RequestObject.responseText;
     } else { 
      // Por si hay algun error document.getElementById("online").innerHTML = "Error llamando"; 
     }
    } 
  }

  function llamadaAjax() {
        // Mensaje a mostrar mientras se obtiene la información remota...
    document.getElementById("online").innerHTML = ""; 
    // Preparamos la obtención de datos
    RequestObject.open("GET", Archivo+"?"+Math.random() , true);
    RequestObject.onreadystatechange = ReqChange; 
    // Enviamos
    RequestObject.send(null);
  }

  function actualizacion_reloj() {
   llamadaAjax();
 }