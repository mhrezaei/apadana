<!-- currency edit start -->
<div class="contentModel" id="currencyData" style="display: none;">
    <h2>ویرایش نرخ ارز و حواله جات</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="currencyEdit">اطلاعات مورد نظر با موفقیت ذخیره گردید.</span><br>
        </div>

        <form name="currencyEditForm" id="currencyEditForm">
            <table style="direction: rtl; font-size: 12px; margin: 0 auto; width: 1000px;" class="yekan">
                <thead>
                <tr>
                    <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="9">ویرایش نرخ ارز و حواله جات</th>
                </tr>
                <tr>
                    <th style="text-align: center; width: 5%;">ردیف</th>
                    <th style="text-align: center; width: 13%;">نام ارز</th>
                    <th style="text-align: center; width: 5%;">کد ارز</th>
                    <th style="text-align: center; width: 18%; direction: rtl;">خرید اسکناس</th>
                    <th style="text-align: center; width: 18%; direction: rtl;">فروش اسکناس</th>
                    <th style="text-align: center; width: 18%; direction: rtl;">فروش حواله</th>
                    <th style="text-align: center; width: 9%; direction: rtl;">چیدمان</th>
                    <th style="text-align: center; width: 9%; direction: rtl;">تصویر</th>
                    <th style="text-align: center; width: 5%; direction: rtl;">عملیات</th>
                </tr>
                </thead>
                <tbody id="currencyList">

                </tbody>
            </table>
        </form>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>/admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" id="editCurrencyData">ویرایش اطلاعات</button>
        <button class="btn b5" style="float: left;" xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" href="<?php echo site_url() . 'admin/uploadImages'; ?>">افزودن تصویر</button>
        <div style="clear: both;"></div>
    </div>
</div>
<!-- currency edit end -->