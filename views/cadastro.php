<body>
<h3 style="color: #fff; text-align: center; padding: 50px;">Economiza +</h3>

<div class="x_panel container">

    <div class="row">
        <div class="x_title">
            <h2>Cadastro</h2>

            <div class="clearfix"></div>
        </div>

        <form class="form-horizontal form-label-left col-md-12" action="http://localhost/economiza2.0/cadastro/registro" method="POST">
            <!-- E-mail -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-6 col-sm-3 col-xs-3">E-mail</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="mail" name="mail" class="form-control" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!-- Razão social -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-2 col-sm-2 col-xs-2">Razão Social</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="razao" class="form-control" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Telefone -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-6 col-sm-3 col-xs-2">Telefone</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" name="telefone" data-inputmask="'mask' : '(99) 99999-9999'" required>
                    <span class="glyphicon glyphicon-phone-alt form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--CNPJ -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-2 col-sm-2 col-xs-2">CNPJ</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" name="cnpj" data-inputmask="'mask' : '99.999.999/9999-99'" required>
                    <span class="glyphicon glyphicon-list-alt form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Senha -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-6 col-sm-3 col-xs-2">Senha</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="password" name="pass" class="form-control" required>
                    <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>

            <div class="x_title">

                <div class="clearfix"></div>
            </div>


            <!--Endereço -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-6 col-sm-3 col-xs-3">Endereço</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="endereco" class="form-control" required>
                    <span class="glyphicon glyphicon-home form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!-- Numero -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-2 col-sm-2 col-xs-2">Número</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="numero" class="form-control" required>
                    <span class="glyphicon glyphicon-home form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Complemento -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-6 col-sm-3 col-xs-3">Complemento</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="complemento" class="form-control" required>
                    <span class="glyphicon glyphicon-home form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Bairro -->
            <div class="form-group col-md-6">
                <label class="control-label col-md-2 col-sm-2 col-xs-2">Bairro</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="bairro" class="form-control" required>
                    <span class="glyphicon glyphicon-home form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Bairro -->
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">CEP</label>
                <div class="col-md-2 col-sm-9 col-xs-9">
                    <input type="text" name="cep" class="form-control" data-inputmask="'mask': '99999-999'" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Cidade -->
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Cidade</label>
                <div class="col-md-2 col-sm-9 col-xs-9">
                    <input type="text" name="cidade" class="form-control" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
            <!--Estado -->
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Estado</label>
                <div class="col-md-2 col-sm-9 col-xs-9">
                    <input type="text" name="estado" class="form-control" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>


            <div class="ln_solid"></div>

            <div class="form-group col-md-12">
                <div class="col-md-12 col-md-offset-5">
                    <button type="submit" class="btn btn-default">Limpar</button>
                    <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>