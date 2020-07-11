<html>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form id="formCadastro">
                    <div class="panel panel-primary">

                        <div class="panel-heading">
                            <h4>Cadastro de usuários</h4>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-lg-6">
                                <label for="textNome" class="control-label">Usuário:</label>
                                <input name="usuario" id="usuario" class="form-control" placeholder="Digite seu Nome" onblur = "Verifica();" type="text" required>
                            </div>   
                            <div class="form-group col-lg-6">
                                <label for = "textUsuario" class="control-label">Tipo:</label>
                                <select name="cmb-tipo" id="cmb-tipo"
                                class="form-control selectpicker" data-container="body" data-width="100%" required>
                                    <option></option>
                                    <option>ADMINISTRADOR</option>
                                    <option>COMUM</option>
                                </select>
                            </div>                       
                            <div class="form-group col-lg-6">      
                                <label for="inputPassword" class="control-label">Senha</label>      
                                <input type="password" class="form-control" placeholder="Informe sua senha" 
                                      name="senha" id="senha" data-minlength="6" required>      
                            </div>
                            <div class="form-group col-lg-6">      
                                <label for="inputPassword" class="control-label">Confirmação</label>      
                                <input type="password" class="form-control" placeholder="Informe sua senha" 
                                      name="csenha" id="csenha" data-minlength="6" required>      
                            </div>      
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="btn-group pull-left">      
                                <button type="reset" class="btn btn-lg btn-danger" id = "btnlimpar">Limpar</button>
                            </div> 
                            <div class="btn-group pull-right">      
                                <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                            </div> 
                        </div>
                    </div>
                </form>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1 class="panel-title">Usuários cadastrados</h1>
                    </div>
                    <div class="panel-body margem">
                        <table id ="tableusu"
                            data-toggle ="table"
                            data-height ="205"
                            data-search ="true"
                            accesskey=""
                            data-side-pagination ="client"
                            data-pagination ="true"
                            data-page-list="[5,10,15]"
                            data-pagination-first-text="First"
                            data-pagination-pre-text="Previous"   
                            data-pagination-next-text="Next"
                            data-pagination-last-text="Last"
                            data-url= 'Usuario/listar'>  
                            <!--Endereço do Controller responsável em buscar os dados da lista -->
                            <thead>
                                <tr>
                                    <th data-field = 'user' class = "col-md-3 text-left">Usuario</th> 
                                    <!--campo que retornará do Contoller deverá ser incluídio no data-field -->
                                    <th data-field = 'senha' class = "col-md-6">Senha</th>                    
                                    <!--campo que retornará do Contoller deverá ser incluídio no data-field -->
                                    <th data-field = 'tipo' class="col-md-2 text-left">Tipo</th>
                                    <th data-field = 'statuss' class="col-md-2 text-left">Status</th>
                                    <th  class = "col-md-3" data-formatter="opcoes"  data-field = "user" >Ação</th>
                                    <!--colocaremos a função data-formatter que chamará a função JavaScript opcoes
                                        e não podemos esquecer de amarrar no data-field o campo que será o parâmetro 
                                        de busca -->
                                </tr>

                            </thead>                        
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#formCadastro").submit(function(){
                if($("#senha").val() != $("#csenha").val()){
                    swal({
                        title: "Atenção!",
                        text: "Senhas incompatíveis",
                        type: "error",
                    });
                    return false;
                }else{

                    $.ajax({ //abrindo o ajax onde estamos pegando o método os dados através de post, onde enviamos para a controller usuario na função cadastrar
                        type: "POST",
                        url: 'usuario/cadastrar',
                        data: $("#formCadastro").serialize(),
                        success: function(data){
                            if ($.trim(data) == 1 ) 
                            {
                                $('#formCadastro').trigger("reset");
                                swal({title:"OK!", text: "Dados salvos com sucesso", type:"success"});
                            }else{
                                swal({title:"Atenção!", text: "Erro ao inserir, verifique os dados", type:"error"});
                            }
                        },
                        beforeSend: function(){
                            swal({title:"Aguarde!", text: "Carregando...", imageUrl: "assets/img/gifs/preloader.gif", showConfirmButton: false});
                        },
                        error: function(){
                            alert('Erro inesperado.');
                        }
                    });
                    return false;
                }
            });
            
            //refresh na tabela, a cada 5 segundos
            setInterval(function(){
                var $table = $('#tableusu');
                $table.bootstrapTable('refresh');
            }, 5000);
        });
        //opcoes está demonstrando os dois botões um de lixeira e um para modificação de um usuario
        function opcoes(value){
                var opcoes = '<button class="btn btn-xs btn-primary text-center" type="button" onclick="busca_usuario('+"'"+value+"'"+');"><span class="glyphicon glyphicon-pencil"></span></button> \n\ <button class="btn btn-xs btn-danger text-center" type="button" onclick="desativa_usuario('+"'"+value+"'"+');"><span class="glyphicon glyphicon-trash"></span></button>';
                return opcoes;
            };
        // busca de usuario que realizará a alteração do usuario através da modal que abrirá para ele 
        function busca_usuario(user){
                //abrindo uma modal
                $('#alteracao').modal('show');
                $.ajax({
                    type: "post",
                    url: 'usuario/consalterar',
                    dataType: 'json',
                    data: {'usuario':user},
                    success: function (data) {
                        $('#musuario').val(data[0].user);
                        $('#senha').val(data[0].senha);
                        swal.close();
                    },
                    beforeSend: function (){
                        swal({
                            title: "Aguarde!",
                            text: "Carregando...",
                            imageUrl: "assets/img/gifs/preloader.gif",
                            showConfirmButton: false
                        });
                    },
                    error: function(){ 
                        alert('Erro')
                    ;}
                 })
            };
        //função para alterar senhas de users
        function alterar(){
            if($("#msenha").val() != $("#mcsenha").val()){
                swal({
                    title: "Atenção!",
                    text: "Senhas incompatíveis, verifique!",
                    type: "error",
                });
                return false;
            }else{
                $.ajax({
                    type: "POST",
                    url: 'usuario/alterar',
                    data:{'senha': $('#msenha').val(),
                            'usuario': $('#musuario').val(),
                            'tipo': $('#mcmb-tipo').val()},
                    success: function(data){
                        if ( data == 1){
                            swal({
                                title: "OK",
                                text: "DADOS ALTERADOS",
                                type:"success",
                                showCancelButton: false,
                                ConfirmButtonColor: "#54DD74",
                                ConfirmButtonText: "OK",
                                closeOnConfirm: true,
                                closeOnCancel: false,
                            },
                            function(isConfirm){
                                if (isConfirm) {
                                    $('#tableusu').bootstrapTable('refresh');
                                }
                            });
                            $('#alteracao').Modal('hidden=true');
                        }else{
                            swal({
                                title:"Atenção",
                                text: "Erro na alteração, verifique!",
                                showCancelButton: false,
                                ConfirmButtonColor: "#54DD74",
                                ConfirmButtonText: "OK",
                                closeOnConfirm: false,
                                closeOnCancel: false
                                
                            });
                        }

                    },
                    beforeSend: function(){
                        swal({
                             title: "Aguarde!",
                                text: "Carregando...",
                                showConfirmButton: false
                        });        
                    },
                    error: function(){
                        alert('erro');
                    }
                })
            }
        }
        function desativa_usuario(user){
            swal({
                title: 'Atenção',
                text: 'Gostaria de Desativar este usuario?',
                type: 'warning',
                showCancelButton: true,
                ConfirmButtonColor: "#DD6B55",
                ConfirmButtonText: "Sim",
                CancelButtonText: "Não",
                closeOnConfirm: false,
                closeOnCancel: true },

                function(isConfirm){
                    $.ajax({
                        url: base_url + "usuario/desativar",
                        type: "POST",
                        data: {'usuario' : user},
                        success: function(data){
                            if (data == 1) {
                                swal({
                                    title: "OK!",
                                    text: "Usuário DESATIVADO!",
                                    type: "success",
                                    showCancelButton: false,
                                    ConfirmButtonColor: "#54DD74",
                                    ConfirmButtonText: "OK!",
                                    CancelButtonText:"",
                                    closeOnConfirm: true,
                                    closeOnCancel: false},
                                    function(isConfirm){
                                        if (isConfirm){
                                        }
                                    }
                                );
                            }else{
                                swal({
                                     title: "OK!",
                                    text: "erro na desativação, verifique",
                                    type: "error",
                                    showCancelButton: false,
                                    ConfirmButtonColor: "#54DD74",
                                    ConfirmButtonText: "OK!",
                                    CancelButtonText:"",
                                    closeOnConfirm: false,
                                    closeOnCancel: false
                                });
                            }
                        },
                        beforeSend: function () {
                            swal({
                                title: "Aguarde!",
                                text: "Gravando dados...",
                                imageUrl: "assets/img/alertas/loading.gif",
                                showConfirmButton: false
                            });
                        },
                        error: function(data_error){
                            sweetAlert("Atenção", "Erro ao gravar os dados!", "error");
                        }
                    })
                }
            )
        };
        function Verifica(){
            $.ajax({
                type: "POST",
                url:'usuario/verusu',
                data: {'usuario': $('#usuario').val()},
                success: function (data){
                    if (data == 1) {
                       swal({
                        title: "OK",
                        text: "Usuário já cadastrado na base de dados, verifique!",
                        type: "error",
                        showCancelButton: false,
                        ConfirmButtonColor: "#54DD74",
                        ConfirmButtonText:"OK!",
                        closeOnConfirm: true,
                        closeOnCancel: false
                    });
                       $('#btnlimpar').click();
                       $('#usuario').focus();
                    }else{
                        swal.close();
                    }
                },
                beforeSend: function(){
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: "assets/img/gifs/preloader.gif",
                        showConfirmButton: false
                    });
                },
                error: function(){
                    alert('Unexpected error');
                }
            });
        }
    </script>

    <!-- Modal para alteração de usuarios será chamado em na função busca_usuario -->
    <div class="modal fade" id="alteracao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title" id="myModalLabel">Alterar dados do usuário</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-xs-6 col-md-6">
                            <label class="control-label">Usuario:</label>
                            <input  name = "musuario" id="musuario" class="form-control" placeholder="Usuário" type="text" readonly>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for = "textUsuario" class="control-label">Tipo:</label>
                            <select name="mcmb-tipo" id="mcmb-tipo"
                            class="form-control selectpicker" data-container="body" data-width="100%" required>
                                <option></option>
                                <option>ADMINISTRADOR</option>
                                <option>COMUM</option>
                            </select>
                        </div>
                        <div class="form-group col-xs-6 col-md-6">
                            <label class="control-label">Senha:</label>
                            <input type="password" class ="form-control" placeholder="Senha" name="msenha" id="msenha" required>
                        </div>
                        <div class="form-group col-xs-6 col-md-6">
                            <label class="control-label">Confirmação</label>
                            <input type="password" class ="form-control" placeholder="Senha" name="mcsenha" id="mcsenha" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #A9A9A9;">
                    <button type="submit" class="btn btn-lg btn-primary" onclick="alterar();">Alterar</button>
                    <button type="submit" class="btn btn-lg btn-info" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>
</html>