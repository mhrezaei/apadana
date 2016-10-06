<div class="row w100">
	<div class="col-md-3">
		<?php $this->load->view('home/clock' , [
			'city_id' => 'tehran',
			'city_cap'=> 'تهران',
			'offset'=>'+3.5',
		]) ?>
	</div>
	<div class="col-md-3">
		<?php $this->load->view('home/clock' , [
			'city_id' => 'london',
			'city_cap'=> 'لندن',
			'offset'=>'+1.0',
		]) ?>
	</div>
	<div class="col-md-3">
		<?php $this->load->view('home/clock' , [
			'city_id' => 'newYork',
			'city_cap'=> 'نیویورک',
			'offset'=>'-4.0',
		]) ?>
	</div>
	<div class="col-md-3">
		<?php $this->load->view('home/clock' , [
			'city_id' => 'uae',
			'city_cap'=> 'دوبی',
			'offset'=>'+4.0',
		]) ?>
	</div>
</div>

