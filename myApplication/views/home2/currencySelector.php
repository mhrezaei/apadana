<select id="<?php echo $id; ?>" class="form-control">
		<option value="IRR">
			Iranian Rial (IRR)
		</option>
	<?php foreach($currencies as $currency => $rates) { ?>
		<?php if($rates[1]<0 OR $rates[2]<0) continue; ?>
		<option value="<?php echo $currency; ?>" ><?php echo $rates[4]; ?> (<?php echo $currency; ?>)</option>
	<?php } ?>
</select>