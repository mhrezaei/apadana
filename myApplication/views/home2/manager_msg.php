<?php if (strlen(trim($manager_msg)) > 10){ ?>

<div class="row" style="color: #000000;">
    <div class="row" style="padding: 20px; color: #000000;">
        <div class="glyphicon glyphicon-envelope"></div>
پیام مدیریت
    </div>
    <div class="col-sm-12" style="padding: 20px;">
        <?php echo $manager_msg; ?>
    </div>

</div>

<?php
}
?>
