<form id="frmConvertor" name="frmConvertor" class="form-inline">
	<span>
		I have
	</span>
	<input type="text" id="txtInput" class="form-control numeric" style="direction: ltr">
	<?php $id = 'cmbInput'; $this->load->view('home2/currencySelector' , compact('currencies' , 'id')); ?>
	<span>
		and need it in
	</span>
	<?php $id = 'cmbOutput'; $this->load->view('home2/currencySelector' , compact('currencies' , 'id')); ?>
	<input type="hidden" id="txtOutput">
	<div id="divOutput" class="result"></div>
</form>

<?php
?>
