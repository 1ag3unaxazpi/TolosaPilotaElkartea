
function alerta(mezua, izenburua, ikonoa, akzioa){
    document.getElementById('alert-cont').style.display="flex";

    document.getElementById('alert-header-title').innerHTML=izenburua;
    document.getElementById('alert-body-text').innerHTML=mezua;
    document.getElementById('alert-body-icon').innerHTML=ikonoa;

    document.getElementById("alert-button").setAttribute("onclick", akzioa)
}

function closeAlerta(){
    document.getElementById('alert-cont').style.display="none";
}