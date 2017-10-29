<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Economiza+ </title>

    <!-- Bootstrap -->
    <link href="<?= URL?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= URL?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= URL?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= URL?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= URL?>assets/css/custom.min.css" rel="stylesheet">
    <link href="<?= URL?>assets/css/sweetalert.css" rel="stylesheet">

</head>



<?= $this->loadViewInTemplate($viewName, $viewData);?>

<!-- jQuery -->
<script src="<?= URL?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= URL?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= URL?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= URL?>vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= URL?>vendors/moment/min/moment.min.js"></script>
<script src="<?= URL?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="<?= URL?>vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Ion.RangeSlider -->
<script src="<?= URL?>vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap Colorpicker -->
<script src="<?= URL?>vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- jquery.inputmask -->
<script src="<?= URL?>vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- jQuery Knob -->
<script src="<?= URL?>vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Cropper -->
<script src="<?= URL?>vendors/cropper/dist/cropper.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= URL?>assets/js/custom.min.js"></script>
<script src="<?= URL?>assets/js/sweetalert.min.js"></script>
<script src="<?= URL?>assets/js/sweetalert-dev.js"></script>



<!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker).datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });

    $("#cadastrar").click(function(){
       location.href="<?= URL?>cadastro/registro";
    });
</script>
</body>
</html>
