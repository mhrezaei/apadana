<div id="divIndex">
	<div id="divIndex-top" class="section">
		<?php $this->load->view('home2/top'); ?>
	</div>
    <div class="clear"></div>
	<div id="divIndex-slide" class="section">
		<?php $this->load->view('home2/slide'); ?>
	</div>
    <div class="clear"></div>
	<div id="divIndex-clocks" class="section">
		<?php $this->load->view('home/clocks' ); ?>
	</div>

    <!-- manager msg-->
    <?php if (strlen(trim($manager_msg)) > 10){ ?>
    <div class="clear"></div>
    <div id="divIndex-rates" class="section" style="background-color: #9dcef9">
        <?php $this->load->view('home2/manager_msg' , compact('currencies')); ?>
    </div>
    <?php } ?>

    <div class="clear"></div>
	<div id="divIndex-rates" class="section">
		<?php $this->load->view('home2/rates' , compact('currencies')); ?>
	</div>
    <div class="clear"></div>
	<div id="divIndex-coins" class="section">
		<?php $this->load->view('home2/coins' , compact('coins')); ?>
	</div>
    <div class="clear"></div>
	<div id="divIndex-convert" class="section">
		<?php $this->load->view('home2/convert', compact('currencies')); ?>
	</div>
    <div class="clear"></div>
	<div id="divIndex-footer" class="">
		<?php $this->load->view('home2/footer' , compact('stats')); ?>
	</div>
</div>

<script language="javascript">
	homeInit();
</script>