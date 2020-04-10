
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

function mostrar_tutorial(){
    Swal.fire({
        title: 'lorem inpsun',
        text: 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.',
        timer: '100000'
    });
}
