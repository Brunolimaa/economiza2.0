
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
                        <img src="<?= URL?>assets/images/user.png" alt="..." class="img-circle profile_img">
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
                                <img src="<?= URL?>assets/images/user.png" alt=""><?= utf8_encode($_SESSION['razao_social']); ?>
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
                                        <span class="image"><img src="<?php URL?>images/img.jpg" alt="Profile Image" /></span>
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
                                        <span class="image"><img src="<?php URL?>images/img.jpg" alt="Profile Image" /></span>
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
        <div class="right_col" role="main">
            <!-- top tiles -->
            <!-- /top tiles -->
            <div class="x_content">

                <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->


                <div class="table-responsive">
                    <h1>Promoções</h1>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">

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
                        <tbody>
                    <?php
                            foreach($promocoes as $col){

//                                echo '<tr>';
//                                echo "<td class='a-center'>
//                                    <input type='checkbox' onclick='promocao($col[id_prod])' class='flat' id='selePromocao' name='table_records'>
//                                  </td>";
                                echo '<td>'.$col['nome'].'</td>';
                                echo '<td>'.$col['marca'].'</td>';
                                echo '<td>'.$col['descricao'].'</td>';
                                echo '<td>'.$col['preco'].'</td>';
                                echo '<td><img src="'.URL.'public/image/'.$col['foto'].'" style="width: 30px; margin: 0px 15px;"></td>';
                                echo '<td>'.$col['validade'].'</td>';
                                echo "<td>
                                     <!--<button type='button' value='$col[id_prod]' class='btn btn-primary'  onclick='edit($col[id_prod])' name='editar' id='editar' ><i class='glyphicon glyphicon-pencil'></i></button>-->
                                     <button type='button' value='$col[id_prod]' class='btn btn-danger'  onclick='removerPromo($col[id_prod])' name='excluir' id='excluir' ><i class='glyphicon glyphicon-trash'></i></button>
                                  </td>";
                                echo '</tr>';
                            }
                    ?>
                        </tbody>
                    </table>

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





            <!-- /page content -->