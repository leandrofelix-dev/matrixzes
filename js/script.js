
function verificar_resposta(){
    var respost = document.getElementById('valor_do_usuario').value;
    document.getElementById('valor_do_usuario').value = '';

    if(respost == ""){
        Swal.fire({
            title: 'Vazio',
            icon: 'info',
            text: 'Insira o valor da matriz!',
            showConfirmButton: false,
            timer: 1800
            });
    }
    else if(respost == valor_det){
        Swal.fire({
            title: 'Parabéns! =)',
            icon: 'success',
            text: 'Resposta correta!',
            showConfirmButton: false,
            timer: 1800
            });
        
    }else{
        Swal.fire({
            title: 'Oops... =(',
            text: 'Resposta errada!',
            icon: 'error',
            showConfirmButton: false,
            timer: 1800
            });
    }
}
