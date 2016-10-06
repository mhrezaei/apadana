<div class="row w100 p5">
	<div class="col col-md-2">
		<img class="currency" src="<?php echo base_url('assets/images/flags/'.$currency.'.png'); ?>" >
	</div>
	<div class="col col-md-4 p10" style="font-weight: bold">
		<?php echo $rates[0] ; ?>
	</div>
	<div class="col col-md-3 p10">
		خرید
		<?php echo Strings::pd($rates[$idx]) ; ?>
	</div>
	<div class="col col-md-3 p10">
		فروش
		<?php echo Strings::pd($rates[$idx+1]) ; ?>
	</div>
</div>

<input type="hidden" id="txtRate1-<?php echo $currency; ?>" value="<?php echo $rates[1] ?>" >
<input type="hidden" id="txtRate2-<?php echo $currency; ?>" value="<?php echo $rates[2] ?>">