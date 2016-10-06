<form id="frmConvertor" name="frmConvertor" class="form-inline">
	<input type="text" id="txtInput" class="form-control numeric" style="direction: ltr">
	<?php $id = 'cmbInput'; $this->load->view('home/currencySelector' , compact('currencies' , 'id')); ?>
	<span>
		دارم و می‌خواهم به
	</span>
	<?php $id = 'cmbOutput'; $this->load->view('home/currencySelector' , compact('currencies' , 'id')); ?>
	<span>
	تبدیلش کنم
	</span>
	<input type="hidden" id="txtOutput">
	<div id="divOutput" class="result"></div>
</form>

<?php
?>
