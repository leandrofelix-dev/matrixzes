
function verificar_resposta(){
    var respost = document.getElementById('valor_do_usuario').value;
    document.getElementById('valor_do_usuario').value = '';

    if(respost == valor_det){
        alert("elementar");
        window.location.reload()
    }else{
        alert("sinto muito");
        window.location.reload()
    }
}
