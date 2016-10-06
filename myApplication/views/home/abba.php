<div id="divIndex">
	<div class="top">
		<?php $this->load->view('home/top'); ?>
	</div>

	<div class="convert">
		<?php $this->load->view('home/convert', compact('currencies')); ?>
	</div>

	<div class="rates">
		<?php $this->load->view('home/rates' , compact('currencies')); ?>
	</div>

	<div class="clocks">
		<?php $this->load->view('home/clocks' ); ?>
	</div>

	<div class="coins">
		<?php $this->load->view('home/coins' , compact('coins')); ?>
	</div>

	<div class="footer">
		<?php $this->load->view('home/footer' , compact('stats')); ?>
	</div>
</div>

<script language="javascript">
	homeInit();
</script>