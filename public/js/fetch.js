"use strict";

//FETCH
var formularioBuscador=document.getElementById('buscador');

if(formularioBuscador){
    formularioBuscador.addEventListener('submit', (e)=>{
        e.preventDefault();
        var form=new FormData(formularioBuscador);
        console.log(form.get('DNI'));
    });
    
    formularioBuscador.addEventListener('keyup', (e)=>{
        e.preventDefault();
        var form=new FormData(formularioBuscador);
        //console.log(form.get('DNI'));
        //fetch('https://mighty-ocean-96087.herokuapp.com/ClientesRokysController/filtrarFetch',{
            fetch('http://localhost:8080/Proyecto-Rokys-DSistemas/ClientesRokysController/filtrarFetch',{
            method: 'POST',
            body: form
        }).then(res => res.json())
            .then(data => {
                llenarTabla(data);
            });
    });
}

function llenarTabla(data){
    var tablaCuerpo=document.getElementById('tbody');
    tablaCuerpo.innerHTML='';
    let i=0;
    //console.log(data);
    for(let iterator of data){
        tablaCuerpo.innerHTML+=`
            <tr>
                <td>${i}</td>
                <td>${iterator.nombres}</td>
                <td>${iterator.apellidos}</td>
                <td>${iterator.dni}</td>  
                <td>${iterator.tarjeta}</td>
                <td>${iterator.estado}</td>
            </tr>
        `
        i++;
    }
}
/*
var formularioLogin=document.getElementById('form-login');
if(formularioLogin){
    formularioLogin.addEventListener('submit', (e)=>{
        e.preventDefault();
        var form=new FormData(formularioLogin);
        //console.log(form.get('DNI'));
        //fetch('https://mighty-ocean-96087.herokuapp.com/ClientesRokysController/filtrarFetch',{
            fetch('http://localhost:8080/Proyecto-Rokys-DSistemas/LoginController/ingresar_codigo',{
            method: 'POST',
            body: form
        }).then(res => res.json())
            .then(data => {
                if(data===-1){
                    console.log("Usuario no registrado");
                }      
            });
    });
}
*/
