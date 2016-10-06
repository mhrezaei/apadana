<div style="width: 100%; height: 40px; margin: 0 auto; text-align: center; margin-top: 25px;">
    <span id="ajaxLoad" style="display: none;">
        شکیبا باشید...
        <br>
        <img src="<?php echo assets_url(); ?>images/load.gif" alt="load">
    </span>
</div>

<div class="contentModel" id="welcomeMsg">
    <h2>اطلاعات ورود</h2>

    <div class="mainDiv nazanin" style="text-align: right; min-height: 100px; font-size: 14px;">
        به بخش مدیریت خوش آمدید.
        <br>
        آخرین ورود موفق شما به سامانه: <span style="font-weight: bold;"><?php echo pdate('l، j F Y', time()); ?></span>
    </div>
</div>

<!-- setting start -->
<div class="contentModel" id="settingContent" style="display: none;">
    <h2>تنظیمات</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="settingProMsg">تنظیمات جدید با موفقیت ذخیره گردید.</span><br>
        </div>

        <div style="width: 100px; float: right;">
            <label for="txtSite" style="line-height: 28px;">عنوان سایت:</label>
        </div>
        <input type="text" class="fild" name="txtSite" id="txtSite" style="width: 500px; float: right;" placeholder="عنوان سایت"><small style="line-height: 30px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtEmail" style="line-height: 28px;">ایمیل سایت:</label>
        </div>
        <input type="text" class="fild" name="txtEmail" id="txtEmail" style="width: 500px; direction: ltr;" placeholder="E-mail"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtAdminEmail" style="line-height: 28px;">ایمیل مدیریت:</label>
        </div>
        <input type="text" class="fild" name="txtAdminEmail" id="txtAdminEmail" style="width: 500px; direction: ltr;" placeholder="E-mail"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtAddress" style="line-height: 28px;">آدرس:</label>
        </div>
        <input type="text" class="fild" name="txtAddress" id="txtAddress" style="width: 500px;" placeholder="آدرس"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtTel" style="line-height: 28px;">شماره تماس:</label>
        </div>
        <input type="text" class="fild" name="txtTel" id="txtTel" style="width: 500px;" placeholder="شماره تماس"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtFax" style="line-height: 28px;">شماره فکس:</label>
        </div>
        <input type="text" class="fild" name="txtFax" id="txtFax" style="width: 500px;" placeholder="شماره فکس"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtAbout" style="line-height: 28px;">درباره ما:</label>
        </div>
        <input type="text" class="fild" name="txtAbout" id="txtAbout" style="width: 500px;" placeholder="درباره ما"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtPass" style="line-height: 28px;">رمزعبور:</label>
        </div>
        <input type="password" class="fild" name="txtPass" id="txtPass" style="width: 500px;" placeholder="رمز عبور"><small style="line-height: 20px;">(درصورت وارد نمودن رمز، جایگزین رمز عبور قبلی می گردد.)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtPassA" style="line-height: 28px;">تکرار رمزعبور:</label>
        </div>
        <input type="password" class="fild" name="txtPassA" id="txtPassA" style="width: 500px;" placeholder="تکرار رمز عبور">

        <div style="clear: both;"></div>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>/admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" id="settingBtn">ذخیره تنظیمات</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- setting end -->

<!-- currency edit start -->
<div class="contentModel" id="currencyData" style="display: none;">
    <h2>ویرایش نرخ ارز و حواله جات</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="currencyEdit">اطلاعات مورد نظر با موفقیت ذخیره گردید.</span><br>
        </div>

        <form name="currencyEditForm" id="currencyEditForm">
        <table style="direction: rtl; font-size: 12px; margin: 0 auto; width: 900px;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="6">ویرایش نرخ ارز و حواله جات</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 10%;">ردیف</th>
                <th style="text-align: center; width: 15%;">نام ارز</th>
                <th style="text-align: center; width: 22%; direction: rtl;">خرید اسکناس</th>
                <th style="text-align: center; width: 22%; direction: rtl;">فروش اسکناس</th>
                <th style="text-align: center; width: 22%; direction: rtl;">فروش حواله</th>
                <th style="text-align: center; width: 9%; direction: rtl;">چیدمان</th>
            </tr>
            </thead>
            <tbody id="currencyList">

            </tbody>
        </table>
        </form>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>/admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" id="editCurrencyData">ویرایش اطلاعات</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- currency edit end -->

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
