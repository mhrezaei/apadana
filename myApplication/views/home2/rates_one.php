<?php
    if($row & 1)
    {
        $back = '#7ab3e5';
    }
else
{
    $back = '#6da0cd';
}
?>
<div class="row" id="currencyRow" style="min-width: 450px; background-color: <?php echo $back; ?>;">
	<div class="rates">
		<img class="currency" src="<?php echo base_url('assets/images/flags/'.$currency.'.png'); ?>" style="width: 40px;" >
	</div>
	<div class="rates ratesText" style="font-weight: bold; min-width: 120px;">
		<?php echo $rates[0]." (".$currency.") " ; ?>
	</div>
	<div class="rates ratesText" style="min-width: 125px;">
        <div style="text-align: center;">

        <?php if($rates[$idx] > 0){echo Strings::pd(number_format($rates[$idx]));}else{echo Strings::pd($rates[$idx]);} ?>
            <?php if($rates[$idx] > $rates[5]){ ?>
                <div class="glyphicon glyphicon-arrow-up" style="color: green; padding-top: 2px;"></div>
            <?php }elseif($rates[$idx] < $rates[5]){ ?>
                <div class="glyphicon glyphicon-arrow-down" style="color: red; padding-top: 2px;"></div>
            <?php }else{ ?>
                <div class="glyphicon glyphicon-resize-horizontal" style="color: #B00B2B; padding-top: 2px;"></div>
            <?php } ?>
        </div>

	</div>
	<div class="rates ratesText" style="min-width: 125px;">
        <div style="text-align: center;">

        <?php if($rates[$idx+1] > 0){echo Strings::pd(number_format($rates[$idx+1]));}else{echo Strings::pd($rates[$idx+1]);} ?>

        <?php if($rates[$idx+1] > $rates[6]){ ?>
            <div class="glyphicon glyphicon-arrow-up" style="color: green; padding-top: 2px;"></div>
        <?php }elseif($rates[$idx+1] < $rates[6]){ ?>
            <div class="glyphicon glyphicon-arrow-down" style="color: red; padding-top: 2px;"></div>
        <?php }else{ ?>
            <div class="glyphicon glyphicon-resize-horizontal" style="color: #B00B2B; padding-top: 2px;"></div>
        <?php } ?>

            </div>

	</div>
</div>

<input type="hidden" id="txtRate1-<?php echo $currency; ?>" value="<?php echo $rates[1] ?>" >
<input type="hidden" id="txtRate2-<?php echo $currency; ?>" value="<?php echo $rates[2] ?>">