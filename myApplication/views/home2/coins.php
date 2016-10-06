<div class="row">
	<div class="col col-sm-8 prices">
		<?php foreach($coins as $coin => $rates) {
			?>
			<div>
				<?php $this->load->view('home/coins_one',compact('coin','rates')); ?>
			</div>
		<?php
		} ?>
	</div>
	<div class="col col-sm-4">
		<img class="coin" src="<?php echo base_url('assets/images/gold.png') ?>" >
	</div>
</div>