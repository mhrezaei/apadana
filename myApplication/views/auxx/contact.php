<div id="divContact">
    <div class="panel">
        <form id="frmContact" class="" method="post" action="<?php echo base_url() . 'contact/index'; ?>">
            <div class="form-group">
                <label class="control-label" for="name"><?php echo $name; ?>...</label>
                <input class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label class="control-label" for="email"><?php echo $email; ?>...</label>
                <input class="form-control" name="email" dir="ltr"/>
                <label class="help-block"><?php echo $emailHint; ?></label>
            </div>
            <div class="form-group">
                <label class="control-label" for="tel"><?php echo $telephone; ?>...</label>
                <input class="form-control" name="tel" dir="ltr"/>
            </div>
            <div class="form-group">
                <label class="control-label" form="text"><?php echo $text; ?>...</label>
                <textarea class="form-control" name="text" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="secQ"><?php echo $secQ; ?></label>
                <input class="form-control" name="secQ" />
                <input type="hidden" name="secA" value="<?php echo $secA; ?>" />
                <label class="help-block"><?php echo $secH; ?></label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-lg btn-success">
                    <?php echo $send; ?>
                </button>
            </div>
            <?php if($status == 2){ ?>
                <div class="text-center alert alert-warning" style="margin-top: 25px;">تمامی گزینه هارا به درستی وارد نمائید.</div>
            <?php }elseif($status == 1){ ?>
                <div class="text-center alert alert-success" style="margin-top: 25px;">پیام شما با موفقیت ارسال گردید.</div>
            <?php } ?>
        </form>
    </div>

    <div class="endNote">
        <div class="privacy"><?php echo $privacy; ?></div>
        <div class="tel"><?php echo $tel; ?></div>
    </div>
</div>