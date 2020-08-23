
var sobre=document.getElementById('carrifalso');
var form=document.getElementById('formu');
var pedido=document.getElementById('idpedido');
console.log(carrifalso.innerHTML);
console.log(sobre.innerHTML);
var mensaje=sobre.innerHTML;
var asunto;
function leer(){
    //asunto=pedido.value;
    //console.log(asunto);
    //pedido.value="lo que quiera";
    var datos=new FormData(form);
    datos.get('nombre');
    datos.get('pedido');

    fetch('../src/message/php.php',{
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(datos => {
        console.log(datos)
    })
}


function mostrar(){
    console.log('toque boton tog');
}