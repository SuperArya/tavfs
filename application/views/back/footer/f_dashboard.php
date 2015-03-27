<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/back/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/back/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/back/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/back/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo base_url(); ?>assets/back/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/js/dashboard-v2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			DashboardV2.init();
		});
	</script>
</body>
</html>