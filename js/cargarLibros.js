// creamos una variable donde vamos a almacenar los datos de la conexion
var myRequest = getXMLHTTPRequest();
// creamos la funcion que nos validara el navegador
function getXMLHTTPRequest(){
var request = false;
if(window.XMLHttpRequest)
{
  request = new XMLHttpRequest();
} else {
  if(window.ActiveXObject)
  {
    try
    {
      request = new ActiveXObject("Msml2.XMLHTTP");
    }
    catch(err1)
    {
      try
      {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(err2)
      {
        request = false;
      }
   }
  }
}
return request;
}
// creamos la funcion que validara nuestro formulario
function cargarLibrosAjax(categoria, pagina=0) {
document.getElementById('cargarLibros').innerHTML="puto";

var url = "../contenido/listaDeLibros.php?categoria="+categoria+"&pag="+pagina;
myRequest.open("GET", url, true);
myRequest.onreadystatechange = respuestaAJAX;
myRequest.send(null);
}


function respuestaAJAX() {
    if(myRequest.readyState == 4) {
           if(myRequest.status == 200) {
             document.getElementById('cargarLibros').innerHTML= myRequest.responseText;
        } else {
            document.getElementById('cargarLibros').innerHTML= myRequest.status;
        }
    }else{
      document.getElementById('cargarLibros').innerHTML="Cargando";
    }
 
} 