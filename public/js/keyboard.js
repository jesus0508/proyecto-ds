"use strict";

var keyboard=document.getElementById('keyboard');
var txtPassword=document.getElementById('password');
var codigo="";

if(keyboard){
    keyboard.addEventListener('click',(event)=>{
        let target= event.target;
        if(target){
            let id=target.id;
            let classN=target.className;
            if(classN!='button-ok'){
                if(classN=='number' && id!=='c'){
                    codigo+=id;
                }else{
                    if(classN=='button-back'){
                        codigo=codigo.slice(0,-1);
                    }else{
                        codigo="";
                    }
                }
                txtPassword.value=codigo;
            }
        }
    });
}


var button_ok=document.getElementById('ok');
var div_mesas=document.getElementById('mesas');
var id=0;
if(div_mesas){
    div_mesas.addEventListener('click',(e)=>{
        let target=e.target;
        if(target){
            let className=target.className;
            if(className=='btn btn-mesa'){
                id=target.textContent;
                console.log(id);
            }
        }
    });
}

if(button_ok){
    button_ok.addEventListener('click',(e)=>{
        if(buscarMesa(codigo)){
            console.log('abrir mesa');
        }else{
            console.log('crear nueva mesa');
        }
        console.log(codigo);
        codigo='';
    });
}

function buscarMesa(codigo){
    var buttons_mesa=document.getElementsByClassName('btn-mesa');
    var encontrado=false;
    var mesa;
    var i=0;
    //console.log(buttons_mesa[5].innerText);
    while(!encontrado && i<buttons_mesa.length){
        if((buttons_mesa[i]).innerText==codigo){
            mesa=buttons_mesa[i];
            encontrado=true;
        }
        i++;
    }
    return encontrado;
}
