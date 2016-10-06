<div class="row w100 p5 rowCoins">
	<div class="col col-md-4 p10" style="font-weight: bold">
		<?php echo $rates[0] ; ?>
	</div>
	<div class="col col-md-4 p10">
		خرید
        <?php
        if(is_numeric($rates[1]))
        {
            echo Strings::pd(number_format($rates[1])) ;
        }
        else
        {
            echo Strings::pd($rates[1]);
        }
        ?>
        <span style="font-size: 11px; color: #000000;">تومان</span>
	</div>
	<div class="col col-md-4 p10">
		فروش
        <?php
        if(is_numeric($rates[2]))
        {
            echo Strings::pd(number_format($rates[2])) ;
        }
        else
        {
            echo Strings::pd($rates[2]);
        }
        ?>
        <span style="font-size: 11px; color: #000000;">تومان</span>
	</div>
</div>