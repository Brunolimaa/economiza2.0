
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
                        <img src="../assets/images/user.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem vindo,</span>
                        <h2><?= utf8_encode($_SESSION['razao_social']); ?></h2>
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
                                    <li><a href="http://localhost/economiza2.0/painel">Dashboard</a></li>
                                    <li><a href="http://localhost/economiza2.0/painel/promocao">Promocao</a></li>
                                    <li><a href="http://localhost/economiza2.0/painel/lixo">Lixeira</a></li>

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
                                <img src="../assets/images/user.png" alt=""><?= utf8_encode($_SESSION['razao_social']); ?>
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
                                <li><a href="<?php URL?>login"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
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
        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <!-- /top tiles -->
            <div class="x_content">


                <div>
                    <ul id="autocomplete" style=" width: 400px; margin: -56px 25px; position: absolute; font-size: 12pt; color: #0f2d49; list-style: none; z-index: 99;">

                    </ul>
                </div>
                <!-- Fim modal -->
                <input type="button" class="btn btn-success" value="Recuperar" id="recuperar_lista">
                <select class="form-control" id="dataListaExcluido" style="margin-bottom: 45px;">
                    <option default="">--Selecione uma data de lista excluida--</option>
                    <?php
                    foreach($data_del as $data){
                        echo'<option value="'.$data['data_delete'].'">'.$data['data_delete'].'</option>';
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
                            <th class="column-title">Validade</th>
                        </tr>
                        </thead>

                        <tbody id="lista_excluida">

                        </tbody>
                    </table>
                </div>



            </div>





        <!-- /page content -->