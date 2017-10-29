<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><span>ECONOMIZA +</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="assets/images/user.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem vindo,</span>
                        <h2>Administrador</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="http://localhost/economiza2.0/admin">Estabelecimentos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- Button to trigger modal -->
        <!-- Modal -->
        <div class="container">
            <!-- Trigger the modal with a button -->
            <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content col-md-12">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Editar produtos - Economiza +</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal form-label-left col-md-12">
                                <!-- Produto -->
                                <div class="form-group col-md-6">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" name="produto" id="produtoEdit" placeholder="produto" class="form-control">
                                        <span class="fa fa-briefcase form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <!-- Marca -->
                                <div class="form-group col-md-6">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" name="marca" id="marcaEdit" placeholder="marca" class="form-control">
                                        <span class="fa fa-cubes form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <!--Descricao -->
                                <div class="form-group col-md-6">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="descricao" id="descricaoEdit" placeholder="descricao" data-inputmask="'mask' : '(99) 99999-9999'">
                                        <span class="fa fa-archive form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <!--Valor -->
                                <div class="form-group col-md-6">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="valor" id="valorEdit" placeholder="R$" data-inputmask="'mask' : '99.999.999/9999-99'">
                                        <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <!--Vencimento -->
                                <div class="form-group col-md-6">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <input type="date" class="form-control has-feedback-left" id="single_cal1Edit" placeholder="Vencimento" aria-describedby="inputSuccess2Status">
                                        <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="cancelar" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success" id="salvar" data-dismiss="modal"><i class="glyphicon glyphicon-floppy-disk"></i></button>

                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/user.png" alt="">Administrador
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;">Meu perfil</a></li>
                                <!--<li>
                                  <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                  </a>
                                </li>-->
                                <!--<li><a href="javascript:;">Help</a></li>-->
                                <li><a href="login"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- Modal Importa excel -->
        <div class="modal fade" id="excelModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Importar - Excel</h4>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form3" method="POST" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <input type="file" name="arq" class="btn btn-default"/>
                                <input type="submit" id="import" name="last-name" class="btn btn-primary" value="Enviar"/>
                                <input type="submit" class="btn btn-success" id="salvarXls" value="Cadastrar"/>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action" id="importeExcel">
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim modal -->


        <!-- Modal Aviso da importacao Excel -->
        <div class="modal fade" id="avisoModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Atenção</h4>
                    </div>
                    <strong> OBS.: </strong> <p style="color:red; text-align: center;">A planilha no qual deseja importa, deve conter as seguintes colunas:</p>
                    <div class="modal-body">
                        <img style="margin: 0px 190px;" src="public/anexo/img1.png">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#excelModal" data-dismiss="modal">ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim modal -->



        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <!-- /top tiles -->
            <div class="x_content">

                <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input type="text" id="produto" name="produto" onkeydown="autoload();" required="required" placeholder="produtos" class="form-control col-md-7 col-xs-12">
                        </div>


                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input type="text" id="marca" name="marca"  onkeydown="autoload();" placeholder="marca" required="required" class="form-control col-md-7 col-xs-12">
                        </div>


                        <div class="col-md-2 col-sm-2 col-xs-8">
                            <input type="text" id="descricao" name="descricao" placeholder="descrição" required="required" class="form-control col-md-7 col-xs-12">
                        </div>


                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input type="text" id="valor" name="valor" required="required" placeholder="R$" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-8">
                            <input type="date" id="data" name="data" required="required" class="form-control col-md-7 col-xs-12">

                            <!--<div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>
                                                        <fieldset>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                                        <input type="text" name="data" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                                                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>-->
                            <div id="remove_data" style="width: 13px; display:none;"><input type="checkbox"  value="1" >Desmarcar</div>
                            <div id="data_validade" ><input type="checkbox"  value="1"  style="width: 13px;"> Data (Definir p/ todos os produtos.)</div>

                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input type="button" id="cadastrar" onclick="atualizaLista();" name="last-name" class="btn btn-success" value="Cadastrar"/>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <input type="button" data-toggle="modal" data-target="#avisoModal" class="btn btn-warning" value="Excel"/>
                        </div>
                    </div>
                </form>
                <div>
                    <ul id="autocomplete" style=" width: 400px;
    margin: -56px 25px;
    position: absolute;
    font-size: 12pt;
    color: #0f2d49;
    list-style: none;
    z-index: 99;">

                    </ul>
                </div>
            <!-- Fim modal -->

                <select class="form-control" id="seleMercado" style="margin-bottom: 45px;">
                    <option default="">--selecione--</option>
                    <?php
                    foreach($mercados as $mercado){
                        echo'<option value="'.$mercado['id_mercado'].'">'.utf8_encode($mercado['razao_social']).'</option>';
                    }
                    ?>
                </select>

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <!--<th>
                                Promoção --><!--<br/><input type="checkbox" id="check-all" class="flat">-->
                            <th class="column-title">Produto </th>
                            <th class="column-title">Marca</th>
                            <th class="column-title">Descrição</th>
                            <th class="column-title">Valor</th>
                            <th class="column-title">Imagem</th>
                            <th class="column-title">Validade</th>
                            <th class="column-title">&nbsp</th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">selecionados ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody id="tableCadastro">

                        </tbody>
                    </table>
                </div>



            </div>