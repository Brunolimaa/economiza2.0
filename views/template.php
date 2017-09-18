<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>economiza+ | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- sweetalert -->
    <script src="assets/js/sweetalert.min.js"></script>
    <!-- AJAX -->
    <script src="assets/js/script.js"></script>

        <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
        <script type="text/javascript">
            $('#salvar').click(function () {
                swal("Bom trabalho!", "Alteracoes realizadas com sucesso!", "success");
            });

            $('#cancelar').click(function(){
//                swal({
//                    title:"Você tem certeza?",
//                    text: "Suas alteracoes nao serao salvas",
//                    icon: "warning",
//                    buttons: true,
//                    dangerMode: true,
//
//                });
            });

            $('#excluir').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function () {
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }, function (dismiss) {
                    // dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                    if (dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
            });

            $('#data_validade').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function () {
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }, function (dismiss) {
                    // dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                    if (dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })

            });

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