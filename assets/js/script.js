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
    var id_mercado = null;
    id_mercado = $("#seleMercado").val();
    $.ajax({
        url:'http://localhost/economiza2.0/ajax',
        type:'POST',
        data:{id_mercado:id_mercado},
        success:function(r){
            $('#tableCadastro').html(r);
        }
    });
}
//Preenche o formulario de editar produtos
function edit(id){
    var id_mercado = null;
    id_mercado = $("#seleMercado").val();

    $.ajax({
        url:'http://localhost/economiza2.0/ajax/editar',
        type:'POST',
        data:{id:id, id_mercado:id_mercado},
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
        var id_mercado = null;
        id_mercado = $("#seleMercado").val();
        var prod = $('#produtoEdit').val();
        var marca = $('#marcaEdit').val();
        var desc = $('#descricaoEdit').val();
        var valor = $('#valorEdit').val();
        var validade = $('#single_cal1Edit').val();
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
                id_mercado:id_mercado,
            },
            success:function(id){
                atualizaLista();
                //alert(id);
            }
        });
    });
}
var checked = false;
//Realiza um novo cadastro na table cad_produto
$('#cadastrar').click(function() {
    var id_mercado = null;
    id_mercado = $("#seleMercado").val();

    var produto = $('#produto').val();
    var marca = $('#marca').val();
    var descricao = $('#descricao').val();
    var valor = $('#valor').val();
    var data = $('#data').val();

    $.ajax({
        url:'http://localhost/economiza2.0/ajax/cadastro',
        type:'POST',
        data:{prod:produto,marca:marca,desc:descricao,valor:valor,validade:data, id_mercado:id_mercado},
        success:function(valor){
            atualizaLista();
            $('#produto').val("");
            $('#marca').val("");
            $('#descricao').val("");
            $('#valor').val("");

            if(checked == false) {
                $('#data').val("");
            }
            //var data = $('#single_cal1').val();
            //alert(valor);
        }
    });
});
//Exclui produtos da table cad_preco
function excluir(id){
    var id_mercado = null;
    id_mercado = $("#seleMercado").val();
    swal({
            title: "Você tem certeza?",
            text: "Seu produto sera excluido!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Não, excluir!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                //excluir(id_prod);
                swal("Excluido!", "Seu produto foi excluido.. :(", "success");

                $.ajax({
                    url:'http://localhost/economiza2.0/ajax/excluir',
                    type:'POST',
                    data:{id:id, id_mercado:id_mercado},
                    success:function(){
                        atualizaLista();
                    }
                });

            } else {
                swal("Cancelado", "Seu produto está protegido :)", "error");
            }
        });
}
//Adiciona os produtos para promocao
function promocao(id){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax/promocao',
        type: 'POST',
        data:{id:id},
        success:function(r){
            atualizaLista();
            //location.href="http://localhost/economiza2.0/painel"
        }
    });
}
//Remove os produtos da promocao
function removerPromo(id){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax/removepromo',
        type:'POST',
        data:{id:id},
        success:function(r){
            location.href="http://localhost/economiza2.0/painel/promocao"
        }
    });

}

$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});

//Bloqueia o campo data para utilizar em todos os cadastrados
$('#data_validade').click(function(){
    $("#data").prop('disabled', true);
    $("#data_validade").css('display', 'none');
    $("#remove_data").css('display', 'block');
    checked = true;
});

//Permite a mudanca do campo data
$('#remove_data').click(function(){
    $("#data").prop('disabled', false);
    $("#data_validade").css('display', 'block');
    $("#remove_data").css('display', 'none');
    checked = false;
});

//Realiza o autoload dos produtos
function autoload(){
    var produto = $('#produto').val();
    $.ajax({
        url:'http://localhost/economiza2.0/ajax/autoload',
        type:'POST',
        data:{prod:produto},
        //dataType: 'json',
        success:function(json){
            $("#autocomplete").show();
            $("#autocomplete").html(json);

        }
    });
}

//busca o produto selecionado no autoload e preenche os campos
function idAutoload(id){
    $.ajax({
        url:'http://localhost/economiza2.0/ajax/seleautoload',
        type:'POST',
        data:{id_prod:id},
        dataType: 'json',
        success:function(json){
            //alert(json.nome);
            $("#produto").val(json.nome);
            $("#marca").val(json.marca);
            $("#descricao").val(json.descricao);
        }
    });
    $("#autocomplete").hide();
}

//upload de arquivos Excel

$("#import").click(function(){
   $('#demo-form3').on('submit', function(e){
       e.preventDefault();

       var form = $('#demo-form3')[0];
       var data = new FormData(form);

       $.ajax({
           type: 'POST',
           url: 'http://localhost/economiza2.0/ajax/importe/false',
           data: data,
           contentType:false,
           processData:false,
           success:function(msg){
               $("#importeExcel").html(msg);
           }

       });
   }) ;
});

$("#salvarXls").click(function(){
    $('#demo-form3').on('submit', function(e){
        e.preventDefault();

        var form = $('#demo-form3')[0];
        var data = new FormData(form);

            swal(
                'Salvo!',
                'Cadastro realizado com sucesso.',
                'success'
            );



        $.ajax({
            type: 'POST',
            url: 'http://localhost/economiza2.0/ajax/importe/true',
            data: data,
            contentType:false,
            processData:false,
            success:function(msg){
                $("#importeExcel").html(msg);
                atualizaLista();

            }

        });
    }) ;
});

function detalhes(r){
    $.ajax({
        url: 'http://localhost/economiza2.0/ajaxMercado/listar',
        type: 'POST',
        data: {id:r},
        //dataType: 'json',
        success:function(json){
            $("#detalhesMercado").html(json);
            //alert(json);
        }
    });
}

function acaoMercado(r){

    swal({
            title: "Você tem certeza?",
            text: "Essa alteração impactará no perfil do usuário!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, alterar!",
            cancelButtonText: "Não, alterar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                //excluir(id_prod);
                swal("Alterado!", "Usuário alterado.. :)", "success");

                $.ajax({
                    url: 'http://localhost/economiza2.0/ajaxMercado/ativar',
                    type: 'POST',
                    data: {id:r},
                    //dataType: 'json',
                    success:function(json){
                        $(".confirm").click(function(){
                            location.href="http://localhost/economiza2.0/admin";
                        });
                    }
                });

            } else {
                swal("Cancelado", "Usuário não foi alterado :(", "error");
            }
        });
}

$("#seleMercado").click(function(){
    var id = $("#seleMercado").val();

    $.ajax({
        url: 'http://localhost/economiza2.0/ajaxMercado/listaProdMercado',
        type: 'POST',
        data:{id:id},
        success:function(r){tableCadastro
           $("#tableCadastro").html(r);
        }
    });
});

$("#salvar_lista").click(function(){

    swal({
            title: "Você tem certeza?",
            text: "Sua lista será enviada para análise!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, enviar!",
            cancelButtonText: "Não, enviar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                //excluir(id_prod);
                swal("Enviado!", "Sua lista foi enviada.. :)", "success");

                $.ajax({
                    url: 'http://localhost/economiza2.0/ajax/salvaListaPdf',
                    type: 'POST',
                    //data:{id:id},
                    success:function(r){
                        $(".confirm").click(function(){
                            location.href="http://localhost/economiza2.0/painel";
                        });
                        //$("#tableCadastro").html(r);
                    }
                });

            } else {
                swal("Cancelado", "Sua lista não foi enviada :(", "error");
            }
        });
});

$("#excluir_lista").click(function(){

    swal({
            title: "Você tem certeza?",
            text: "Você poderá recuperar esta lista!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Não, cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                //excluir(id_prod);
                swal("Excluido!", "Seu produto foi excluído..", "success");

                $.ajax({
                    url: 'http://localhost/economiza2.0/ajax/excluirLista',
                    type: 'POST',
                    //data:{id:id},
                    success:function(r){

                    }
                });
            } else {
                swal("Cancelado", "Seu produto está seguro :)", "error");
            }
            $(".confirm").click(function(){
                location.href="http://localhost/economiza2.0/painel";
            });
        });
});

$("#dataListaExcluido").click(function(){
    var dataDelete = $("#dataListaExcluido").val();
    $.ajax({
        url: 'http://localhost/economiza2.0/painel/listarExcluido',
        type: 'POST',
        data:{dataDel:dataDelete},
        success:function(r){
            $("#lista_excluida").html(r);
        }
    });
});

$("#recuperar_lista").click(function(){
    var dataDelete = $("#dataListaExcluido").val();

    swal({
            title: "Você tem certeza?",
            text: "Sua lista atual sera perdida!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, recuperar!",
            cancelButtonText: "Não, recuperar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                //excluir(id_prod);
                swal("Recuperado!", "Sua lista foi recuperada.. :)", "success");

                $.ajax({
                    url: 'http://localhost/economiza2.0/painel/recuperar',
                    type: 'POST',
                    data:{dataDel:dataDelete},
                    success:function(r){
                        $(".swal-button--confirm").click(function(){
                            location.href="http://localhost/economiza2.0/painel";
                        });
                        $("#lista_excluida").html(r);
                    }
                });

            } else {
                swal("Cancelado", "Sua lista não foi recuperada :(", "error");
            }
        });
});

function atualizaListaApp(r){
    $("#id_mercado").val(r);
    $.ajax({
        url: 'http://localhost/economiza2.0/ajaxMercado/listarApp',
        type: 'POST',
        data:{id:r},
        success:function(r){
            $("#produtoApp").html(r);
        }
    });
}

$("#salvar_listaApp").click(function(){
    var id = $("#id_mercado").val();

    swal({
            title: "Você tem certeza?",
            text: "Sua lista será enviada para análise!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, enviar!",
            cancelButtonText: "Não, enviar!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                //excluir(id_prod);
                swal("Enviado!", "Sua lista foi enviada.. :)", "success");

                $.ajax({
                    url: 'http://localhost/economiza2.0/ajaxMercado/salvaListaApp',
                    type: 'POST',
                    data:{id:id},
                    success:function(r){
                        $(".confirm").click(function(){
                            location.href="http://localhost/economiza2.0/admin";
                        });
                    }
                });

            } else {
                swal("Cancelado", "Sua lista não foi enviada :(", "error");
            }
        });
});

$("#logof").click(function(){
    var sair = true;
    $.ajax({
        url: 'http://localhost/economiza2.0/login/logof',
        type: 'POST',
        data:{log:sair},
        success:function(){
            location.href="http://localhost/economiza2.0/login";
        }
    });
});
