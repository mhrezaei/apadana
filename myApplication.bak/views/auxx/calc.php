<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Javascript Calculator</title>
	<script type="text/javascript" src="<?= base_url('assets/libs/calc/calculator.js') ?>"></script>
	<link rel="stylesheet" media="screen, print, handheld" type="text/css" href="<?= base_url('assets/libs/calc/calculator.css') ?>">
</head>
<body>
<table class="calculator" id="calc">
	<tbody><tr>
		<td colspan="4" class="calc_td_result">
			<input value="0" readonly="readonly" name="calc_result" id="calc_result" class="calc_result" onkeydown="javascript:key_detect_calc('calc',event);" type="text">
		</td>
	</tr>
	<tr>
		<td class="calc_td_btn">
			<input class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="←" onclick="javascript:f_calc('calc','nbs');" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" type="button">
		</td>
	</tr>
	<tr>
		<td class="calc_td_btn">
			<input class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" type="button">
		</td>
	</tr>
	<tr>
		<td class="calc_td_btn">
			<input class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" type="button">
		</td>
	</tr>
	<tr>
		<td class="calc_td_btn">
			<input class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="÷" onclick="javascript:f_calc('calc','/');" type="button">
		</td>
	</tr>
	<tr>
		<td class="calc_td_btn">
			<input class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="±" onclick="javascript:f_calc('calc','+-');" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" type="button">
		</td>
		<td class="calc_td_btn">
			<input class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" type="button">
		</td>
	</tr>
	</tbody></table>
<script type="text/javascript">
	document.getElementById('calc').onload=init_calc('calc');
</script>

</body></html>