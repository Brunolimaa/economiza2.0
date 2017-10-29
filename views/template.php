<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Economiza+</title>

    <!-- Bootstrap -->
    <link href="<?= URL?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= URL?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= URL?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= URL?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= URL?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= URL?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= URL?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= URL?>assets/css/custom.min.css" rel="stylesheet">

    <link href="<?= URL?>assets/css/sweetalert.css" rel="stylesheet">

</head>
<body class="nav-md">

        <?= $this->loadViewInTemplate($viewName, $viewData);?>

        <!-- footer content -->
    <footer>
        <div class="pull-right">
            Administração - Economiza +
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="<?= URL?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= URL?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= URL?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= URL?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= URL?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= URL?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= URL?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= URL?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= URL?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= URL?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?= URL?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= URL?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= URL?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= URL?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= URL?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= URL?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= URL?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= URL?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= URL?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= URL?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= URL?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= URL?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= URL?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- sweetalert -->
    <script src="<?= URL?>assets/js/sweetalert.min.js"></script>
    <script src="<?= URL?>assets/js/sweetalert-dev.js"></script>

        <!-- AJAX -->
    <script src="<?= URL?>assets/js/script.js"></script>

        <!-- Custom Theme Scripts -->
    <script src="<?= URL?>assets/js/custom.min.js"></script>

    <script src="<?= URL?>assets/js/jquery.maskMoney.js"></script>

        <script type="text/javascript">
            $('#salvar').click(function () {
                swal("Bom trabalho!", "Alteracoes realizadas com sucesso!", "success");
                $('.swal-button--confirm').click(function() {
                    location.href = "<?= URL?>painel";
                });
            });

            $('#cancelar').click(function(){

            //Envia o código via Ajax pelo método Get
            $.getJSON("urlBase", function (data, textStatus) {
                if (textStatus == 'success') { //verifica se o status está tudo ok!
                    montarFormulario(data.tadid);
                    $('#adiid').val(data.adiid);
                    $('#tadid').val(data.tadid);
                    $('#aux_tadid').val(data.tadid);
                    montarFormularioAteracaoAreaQualidadeAlterar(data.talid);
                    $('#tadid').trigger("chosen:updated");
                    $('#adidenominacao').val(data.adidenominacao);
                    $('#adidtassinatura').val(data.adidtassinatura);
                    $('#adiprazovigencia').val(data.adiprazovigencia);
                    $('#adidtterminovigencia').val(data.adidtterminovigencia);
                    $('#adiprazoexecucaoobra').val(data.adiprazoexecucaoobra);
                    $('#adidtterminoexecucaoobra').val(data.adidtterminoexecucaoobra);
                    $('#adivlraditivo').val(data.adivlraditivo.replace(/\s/g, ''));
                    $('#adivlrsupressao').val(data.adivlrsupressao.replace(/\s/g, ''));
                    $('#adivlrfinalobraaditivo').val(data.adivlrfinalobraaditivo.replace(/\s/g, ''));
                    $('#adivlracrescareaqtd').val(data.adivlracrescareaqtd.replace(/\s/g, ''));
                    $('#adivlrareaqtdaposaditivo').val(data.adivlrareaqtdaposaditivo.replace(/\s/g, ''));
                    $('#adisupressaoareaqtd').val(data.adisupressaoareaqtd.replace(/\s/g, ''));
                    $('#adijustificativa').val(data.adijustificativa);

                }
            });

        </script>

</body>
</html>