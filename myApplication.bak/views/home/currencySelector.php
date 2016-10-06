<select id="<?php echo $id; ?>" class="form-control">
		<option value="IRR">
			ریال ایران
		</option>
	<?php foreach($currencies as $currency => $rates) { ?>
		<option value="<?php echo $currency; ?>"><?php echo $rates[0]; ?></option>
	<?php } ?>
</select>