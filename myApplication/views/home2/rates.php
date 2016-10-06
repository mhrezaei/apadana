<div class="row" style="color: #000000;">
    <div class="row" style="padding: 20px; color: #e1f9c2;">
        <div class="glyphicon glyphicon-time"></div>
        آخرین بروزرسانی در تاریخ:
        <?php echo Strings::pd(pdate('l، d F Y', $lastUpdate)); ?>
         ساعت:
        <?php echo Strings::pd(pdate('H:i', $lastUpdate)); ?>
    </div>
	<div class="col-sm-6">
		<div class="title" style="text-align: center;"><?=$stuff['title-banknote-rate']?>...</div>
        <div class="row" style="min-width: 450px;">
            <div class="rates" style="width: 50px;"></div>
            <div class="rates ratesText" style="font-weight: bold; min-width: 120px;">
                نوع ارز
            </div>
            <div class="rates ratesText" style="min-width: 125px;">
                <div style="text-align: center;">
                    خرید (ريال)
                </div>
            </div>
            <div class="rates ratesText" style="min-width: 125px;">
                <div style="text-align: center;">
                    فروش (ريال)
                </div>
            </div>
        </div>
        <hr>
		<?php
        $row = 1;
        foreach($currencies as $currency => $rates) {
			$idx = 1 ;
			if($rates[1] <0 OR $rates[2]<0) continue;
			?>
			<?php $this->load->view('home2/rates_one',compact('currency','rates','idx', 'row')); ?>
		<?php
		$row++;
        } ?>
        <div class="title" style="text-align: center;">آخرین اخبار...</div>
        <div class="row" style="min-width: 450px;">
                <ul style="list-style: circle;">
                <?php
                for($i = 0; $i < count($news); $i++)
                {
                    echo '<li style="padding-bottom: 5px;"><a style="color: #000000;" target="_blank" href="' . $news[$i]->link . '">' . htmlCoding(Strings::pd($news[$i]->title)) . '</a><br><span style="font-size: 10px; color: #486683; padding-right: 5px;">' . Strings::pd(pdate("d M Y", strtotime($news[$i]->date))) . '</span></span></li>';
                }
                ?>
                </ul>
            </div>
	</div>
	<div class="col-sm-6">

		<div class="title" style="text-align: center;"><?=$stuff['title-order-rate']?>...</div>
        <div class="row" style="min-width: 450px;">
            <div class="rates" style="width: 50px;"></div>
            <div class="rates ratesText" style="font-weight: bold; min-width: 120px;">
                نوع ارز
            </div>
            <div class="rates ratesText" style="min-width: 125px;">
                <div style="text-align: center;">
                    فروش (ريال)
                </div>
            </div>
        </div>
        <hr>
		<?php
        $row = 1;
        foreach($currencies as $currency => $rates) {
			$idx = 3 ;
			if($rates[3]<0) continue;
			?>
			<?php $this->load->view('home2/rates_one2',compact('currency','rates','idx', 'row')); ?>
		<?php
            $row++;
        } ?>

		<div class="title" style="text-align: center;"><?=$stuff['title-rates-table']?>...</div>
		<iframe src="http://www.foreignexchange.org.uk/widget/FE-FERT2-2.php?ws=http://www.mirdamadexchange.com/&os=-4.5&bc=Base%20Currency&mc=EUR&c1=GBP&c2=USD&c3=AUD&c4=JPY&c5=INR&c6=CAD&c7=ZAR&c8=NZD&c9=SGD&c10=CNY&t=&w=500&tz=userset&userhr=13" id="rateIf"></iframe>
	</div>

</div>

<?php
?>
