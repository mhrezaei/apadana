<!-- coins edit start -->
<div class="contentModel" id="coinsData" style="display: none;">
    <h2>ویرایش نرخ مسکوکات</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="coinsEdit">اطلاعات مورد نظر با موفقیت ذخیره گردید.</span><br>
        </div>

        <form name="coinsEditForm" id="coinsEditForm">
            <table style="direction: rtl; font-size: 12px; margin: 0 auto; width: 850px;" class="yekan">
                <thead>
                <tr>
                    <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="4">ویرایش نرخ مسکوکات</th>
                </tr>
                <tr>
                    <th style="text-align: center; width: 10%;">ردیف</th>
                    <th style="text-align: center; width: 20%;">نام کالا</th>
                    <th style="text-align: center; width: 35%; direction: rtl;">خرید سکه</th>
                    <th style="text-align: center; width: 35%; direction: rtl;">فروش سکه</th>
                </tr>
                </thead>
                <tbody id="coinsList">

                </tbody>
            </table>
        </form>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>/admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" id="editCoinsData">ویرایش اطلاعات</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- coins edit end -->