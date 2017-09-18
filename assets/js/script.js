//Carrega a table ajax
$(window).ready(function(){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax',
        type:'POST',
        data:{nome:'Bruno Lima'},
        success:function(r){
            $('#tableCadastro').html(r);
        }
    });
});
//Atualiza a table via criada por ajax
function atualizaLista(){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax',
        type:'POST',
        data:{nome:'Bruno Lima'},
        success:function(r){
            $('#tableCadastro').html(r);
        }
    });
}
//Preenche o formulario de editar produtos
function edit(id){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax/editar',
        type:'POST',
        data:{id:id},
        dataType: 'json',
        success:function(json){
            //alert(json.nome);
            $('#produtoEdit').val(json.nome);
            $('#marcaEdit').val(json.marca);
            $('#descricaoEdit').val(json.descricao);
            $('#valorEdit').val(json.preco);
            $('#single_cal1Edit').val(json.validade);
        }
    });
    $('#myModal').modal();
    $('#salvar').click(function(){
        var prod = $('#produtoEdit').val();
        var marca = $('#marcaEdit').val();
        var desc = $('#descricaoEdit').val();
        var valor = $('#valorEdit').val();
        var validade = $('#single_calEdit').val();
        $.ajax({
            url:'http://localhost/economiza2.0/ajax/update',
            type:'POST',
            data:{
                id:id,
                prod:prod,
                marca:marca,
                desc:desc,
                valor:valor,
                validade:validade,
            },
            success:function(id){
                alert(id);
                location.href = "http://localhost/economiza2.0/painel";
            }
        });
    });
}

//Realiza um novo cadastro na table cad_produto
$('#cadastrar').click(function() {
    var produto = $('#produto').val();
    var marca = $('#marca').val();
    var descricao = $('#descricao').val();
    var valor = $('#valor').val();
    var data = $('#single_cal1').val();

    $.ajax({
        url:'http://localhost/economiza2.0/ajax/cadastro',
        type:'POST',
        data:{prod:produto,marca:marca,desc:descricao,valor:valor,validade:data},
        success:function(valor){
            atualizaLista();
            //alert(valor);
        }
    });
});
//Exclui produtos da table cad_preco
function excluir(id){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax/excluir',
        type:'POST',
        data:{id:id},
        success:function(){
            atualizaLista();
        }
    });
}


