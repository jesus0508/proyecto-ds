"use strict";

//FETCH
/*var formularioBuscador=document.getElementById('producto');
var codigo=document.getElementById('id_producto');

if(formularioBuscador){
    
    formularioBuscador.addEventListener('submit', (e)=>{
        console.log(codigo.value);
        e.preventDefault();
        var form=new FormData(formularioBuscador);
        //console.log(form.get('DNI'));
        //fetch('https://mighty-ocean-96087.herokuapp.com/ClientesRokysController/filtrarFetch',{
        fetch('http://localhost:8080/Proyecto-Rokys-DSistemas/IngresoController/agregar_producto/'+codigo.value,{
            method: 'POST',
            body: form
        }).then(res => res.json())
            .then(data => {
                llenarTabla(data);
            });
    });
}

function llenarTabla(data){
    var tablaCuerpo=document.getElementById('tabla-productos-cuerpo');
    tablaCuerpo.innerHTML='';
    let i=0;
    console.log(data);
    for(let iterator of data){
        tablaCuerpo.innerHTML+=`
            <tr>
                <td>${i}</td>
                <td>${iterator.codigo}</td>
                <td>${iterator.nombre}</td>
                <td>${iterator.precio}</td>  
            </tr>
        `
        i++;
    }


}

/*
var formularioBuscador=document.getElementById('producto');
var codigo=document.getElementById('id_producto');

if(formularioBuscador){
    
    formularioBuscador.addEventListener('submit', (e)=>{
        console.log(codigo.value);
        e.preventDefault();
        var form=new FormData(formularioBuscador);
        //console.log(form.get('DNI'));
        //fetch('https://mighty-ocean-96087.herokuapp.com/ClientesRokysController/filtrarFetch',{
        fetch('http://localhost:8080/Proyecto-Rokys-DSistemas/IngresoController/agregar_producto/'+codigo.value,{
            method: 'POST',
            body: form
        }).then(res => res.json())
            .then(data => {
                llenarTabla(data);
            });
    });
}

*/






    /*                <td>${iterator.tarjeta}</td>
                <td>${iterator.estado}</td>*/