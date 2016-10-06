<?php
$s1 = "نرخ اسکناس";
$s2 = "نرخ حواله‌جات";
$s3 = "جدول برابری نرخ ارز";

?>
<ul id="tabRates" class="nav nav-tabs" role="tablist" style="margin-bottom: 30px">
	<li class="active"><a href="#t1" aria-controls="t1" data-toggle="tab"><?= $s1; ?></a></li>
	<li><a href="#t2" aria-controls="t2" data-toggle="tab"><?= $s2; ?></a></li>
	<li><a href="#t3" aria-controls="t3" data-toggle="tab"><?= $s3; ?></a></li>
</ul>

<div class="tab-content">

	<div role="tabpanel" class="tab-pane active" id="t1" aria-labelledby="t1-tab">
		<div class="row">
			<?php foreach($currencies as $currency => $rates) {
				$idx = 1 ;
				?>
				<div class="col col-md-6">
					<?php $this->load->view('home/rates_one',compact('currency','rates','idx')); ?>
				</div>
			<?php
			} ?>
		</div>
	</div>

	<div role="tabpanel" class="tab-pane" id="t2" aria-labelledby="t2-tab">
		<div class="row">
			<?php foreach($currencies as $currency => $rates) {
				$idx = 3 ;
				?>
				<div class="col col-md-6">
					<?php $this->load->view('home/rates_one2',compact('currency','rates','idx')); ?>
				</div>
			<?php
			} ?>
		</div>
	</div>

	<div role="tabpanel" class="tab-pane text-center" id="t3" aria-labelledby="t3-tab">
		<iframe src="http://webcharts.fxserver.com/pairs/activePairs.php"></iframe>
	</div>
</div>
