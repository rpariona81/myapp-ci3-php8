<?php
$this->load->view('layout/dashboard/01header_view');
$this->load->view('layout/dashboard/02menu_view');
?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">

	<!-- Start Content-->
	<div class="container-fluid">
	<?php $this->load->view($content); ?>
	</div>

</div>
<?php
$this->load->view('layout/dashboard/03footer_view');
?>
