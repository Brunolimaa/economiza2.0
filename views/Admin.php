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
                                    <li><a href="http://localhost/economiza2.0/produtoApp">Produtos</a></li>
                                    <!--<li><a href="http://localhost/economiza2.0/painel/promocao">Lista - Promocao</a></li>
                                    <li><a href="index.html">Dashboard3</a></li>-->
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
                                <img src="assets/images/user.png" alt="">Administrador
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;">Meu perfil</a></li>
                                <li><button type="button" id="logof"><i class="fa fa-sign-out pull-right">Sair</i></button></li>
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

        <!-- page content -->
        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <!-- /top tiles -->
            <!-- Modal Aviso da importacao Excel -->
            <div class="modal fade" id="avisoModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detalhes</h4>
                        </div>
                        <div class="modal-body">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">

                                        <th class="column-title">Nome</th>
                                        <th class="column-title">Contato</th>
                                        <th class="column-title">E-mail</th>
                                        <th class="column-title">Cnpj</th>
                                        <th class="column-title">Usuario</th>
                                        <th class="column-title">Situação</th>
                                        <th class="column-title">Ação</th>

                                    </tr>
                                    </thead>
                                    <tbody id="detalhesMercado">
                                    </tbody>
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#excelModal" data-dismiss="modal">close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim modal -->




            <div class="x_content">


            <div class="table-responsive">
                <h1>Cadastros</h1>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">

                        <th class="column-title">Estabelecimento</th>
                        <th class="column-title">Ação</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($mercados as $mercado){
                        $id = $mercado['id_mercado'];
                    ?>
                        <tr>
                            <td><?= utf8_encode($mercado['razao_social']);?></td>

                    <?php
                        if($mercado['cadastro'] == null){
                            echo "
                            
                                <td><a href='#' data-toggle='modal' data-target='#avisoModal' style='color:red;' onclick='detalhes($id)'>Pendente</a></td>
                            </tr>
                            ";
                        }else{
                            echo "<td><a href='#' data-toggle='modal' data-target='#avisoModal'  onclick='detalhes($id)'>Ativado</a></td>";
                        }
                    }
                    ?>
                    </tbody>
                </table>

            </div>
            </div>