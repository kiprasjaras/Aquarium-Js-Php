<!--Jquery.min js-->
		<script src="../assets/jss/jquery.min.js"></script>

		<!--popper js-->
		<script src="../assets/jss/popper.js"></script>

		<!--Tooltip js-->
		<script src="../assets/jss/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="../assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="../assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="../assets/plugins/toggle-menu/sidemenu.js"></script>
        <!--Toastr js-->
        <script src="../assets/plugins/toastr/build/toastr.min.js"></script>
        <script src="../assets/plugins/toaster/garessi-notif.js"></script>
		<!--Select2 js-->
		<script src="../assets/plugins/select2/select2.full.js"></script>

		<!--Inputmask js-->
		<script src="../assets/plugins/inputmask/jquery.inputmask.js"></script>

		<!--Moment js-->
		<script src="../assets/plugins/moment/moment.min.js"></script>

		<!--Bootstrap-daterangepicker js-->
		<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!--Bootstrap-datepicker js-->
<!--Fullcalendar js-->
        <script src="../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="../assets/plugins/fullcalendar/calendar.min.js"></script>
		<script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!--Bootstrap-colorpicker js-->
		<script src="../assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

		<!--Bootstrap-timepicker js-->
		<script src="../assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>

		<!--mCustomScrollbar js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Othercharts js-->
		<script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--iCheck js-->
		<script src="../assets/plugins/iCheck/icheck.min.js"></script>

		<!--forms js-->
		<script src="../assets/jss/forms.js"></script>
        <!--ckeditor js-->
        <script src="../assets/plugins/tinymce/tinymce.min.js"></script>

        <!--Scripts js-->
        <script src="../assets/jss/formeditor.js"></script>
		<!--Scripts js-->
		<script src="../assets/jss/scripts.js"></script>
<!--Calender js-->
        <script src="../assets/jss/calender.js"></script>
		<!--DataTables js-->
		<script src="../assets/plugins/Datatable/js/jquery.dataTables.js"></script>
		<script src="../assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>


        <script>

			$(function(e) {
				$('#example').DataTable();
				window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 3000);

$(function () {
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });
});
			} );
            jQuery('.datepicker-leftpannel').datepicker();
            var events = [{start: '2017/09/30', end: '2017/10/07', summary: "Example Event", mask: true}, {start: '2017/10/08', end: '2017/10/13', summary: "Example Event #3", mask: true}];
            $('#calendar-1').calendar({'events': events});
		</script>