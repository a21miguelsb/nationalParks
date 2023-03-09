import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    connect() {
        var contador=0;
       const divImagen = document.getElementById("imagen");
       const boton=document.getElementById("btn-add");
       boton.addEventListener("click",()=>{
        if (contador%2==0) {
            divImagen.setAttribute("style","display:none;");
            contador++;
            boton.textContent="Mostrar Imaxen"

        }else{
            divImagen.setAttribute("style","display:block;");
            contador++;
            boton.textContent="Ocultar Imaxen"

        }
       });
        
    }
}
