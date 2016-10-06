<div class="row w100 p5">
	<div class="col col-sm-4 p10" style="font-weight: bold">
		<?php echo $rates[0] ; ?>
	</div>
	<div class="col col-sm-4 p10">
        <div style="float: right;">
		خرید
		<?php if($rates[1] > 0){echo Strings::pd(number_format($rates[1]));}else{echo Strings::pd($rates[1]);} ?>
		ریال
        </div>
        <?php if($rates[1] > $rates[3]){ ?>
            <div class="glyphicon glyphicon-arrow-up" style="color: green; float: left; padding-top: 2px;"></div>
        <?php }elseif($rates[1] < $rates[3]){ ?>
            <div class="glyphicon glyphicon-arrow-down" style="color: red; float: left; padding-top: 2px;"></div>
        <?php }else{ ?>
            <div class="glyphicon glyphicon-resize-horizontal" style="color: #B00B2B; float: left; padding-top: 2px;"></div>
        <?php } ?>
	</div>
	<div class="col col-sm-4 p10">
        <div style="float: right;">
		فروش
        <?php if(is_numeric($rates[2])){echo Strings::pd(number_format($rates[2]));}else{echo Strings::pd($rates[2]);} ?>
		ریال
        </div>
        <?php if($rates[2] > $rates[4]){ ?>
            <div class="glyphicon glyphicon-arrow-up" style="color: green; float: left; padding-top: 2px;"></div>
        <?php }elseif($rates[2] < $rates[4]){ ?>
            <div class="glyphicon glyphicon-arrow-down" style="color: red; float: left; padding-top: 2px;"></div>
        <?php }else{ ?>
            <div class="glyphicon glyphicon-resize-horizontal" style="color: #B00B2B; float: left; padding-top: 2px;"></div>
        <?php } ?>
	</div>
</div>
