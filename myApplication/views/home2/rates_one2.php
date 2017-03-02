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
        <img class="currency" src="<?php echo base_url('assets/images/flags/' . $rates[8]); ?>" style="width: 40px;" >
    </div>
    <div class="rates ratesText" style="font-weight: bold; min-width: 120px;">
        <?php echo $rates[0]." (".$currency.") " ; ?>
    </div>
    <div class="rates ratesText" style="min-width: 135px;">
        <div style="text-align: center;">
            <?php if($rates[$idx] > 0){echo Strings::pd(number_format($rates[$idx]));}else{echo Strings::pd($rates[$idx]);} ?>
            <?php if($rates[$idx] > $rates[6]){ ?>
                <div class="glyphicon glyphicon-arrow-up" style="color: green; padding-top: 2px;"></div>
            <?php }elseif($rates[$idx] < $rates[6]){ ?>
                <div class="glyphicon glyphicon-arrow-down" style="color: red; padding-top: 2px;"></div>
            <?php }else{ ?>
                <div class="glyphicon glyphicon-resize-horizontal" style="color: #B00B2B; padding-top: 2px;"></div>
            <?php } ?>
        </div>

    </div>
</div>