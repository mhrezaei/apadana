<div class="row">
	<div class="col-sm-5" style="min-width: 410px !important;">
		<div class="lines">
			<div class="line"><?= $stuff['line1'] ?></div>
			<div class="line"><?= $stuff['line2'] ?></div>
			<div class="line"><?= $stuff['line3'] ?></div>
		</div>
		<div class="tels">
			<div class="line">
				<span class="fa fa-phone-square"></span>
				<?= $stuff['tel'] ?>
			</div>
            <div class="line">
                <span class="fa fa-phone-square"></span>
                <?= $stuff['fax'] ?> (Fax)
            </div>
			<div class="line">
				<img src="<?= base_url('assets/images/telegram.png') ?>" class="social" />
				<img src="<?= base_url('assets/images/whatsApp.png') ?>" class="social" />
				<?= $stuff['mob'] ?>
			</div>
		</div>
		<div class="buttons" style="padding: 0px; padding-top: 30px; text-align: center;">
			<div class="row">
				<div class="col-sm-6">
					<a href="http://www.paymentsuk.org.uk/consumers/iban-checker" target="_blank" class="btn btn-default" style="font-family: 'Tahoma'; width: 130px;">Check IBAN</a>
				</div>
				<div class="col-sm-6">
                    <a href="http://www.swift.com/bsl/facelets/bicsearch.faces" target="_blank" class="btn btn-default" style="font-family: 'Tahoma'; width: 130px;">Check Swift</a>
                </div>
			</div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-6">
                    <a href="<?php echo assets_url() . 'uploads/form.doc'; ?>" target="_blank" class="btn btn-default" style="font-family: 'Tahoma'; width: 130px;">Remittance Form</a>
                </div>
                <div class="col-sm-6">
                    <a href="index.php/calc" target="_blank" class="btn btn-default" style="font-family: 'Tahoma'; width: 130px;">Calculator</a>
                </div>
            </div>
		</div>
	</div>
	<div class="col-sm-7" style="min-width: 550px !important;">
		<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="500">
			<div class="cycle-prev"></div>
			<div class="cycle-next"></div>
			<?php foreach($stuff['slides'] as $idx => $slide) { ?>
				<img id="imgSlide-<?=$idx?>" class="slide" src="<?=base_url('assets/images/'.$slide)?>">
			<?php } ?>
		</div>
	</div>

</div>

<?php
?>
