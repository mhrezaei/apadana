// base url find for use in ajax
function base_url(ext) // ok
{
    var url     = window.location.href,
    base    = url.substring(0, url.indexOf('/', 14)),
    ret_url = base + "/apadana/";
    //ret_url = base + "/";

    if(ext !== undefined && ext !== '') {
        ret_url += ext;
    }

    return ret_url;
}

function changeUrl(url) // ok
{
    window.location = url;
}

function setting() // ok
{
    var load = $('#ajaxLoad');
    load.show();
    $('#settingProMsg').hide();
    $('.contentModel').slideUp();

    for(name in CKEDITOR.instances)
    {
        CKEDITOR.instances[name].destroy()
    }

    // ajax
    var j = 1;
    if(j > 0)
    {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url() + "ajax/setting",
            cache: false,
            data: {ld: 1}
        }).done(function(Data){
            if(Data.success == 1)
            {
                $('#txtSite').val(Data.setting.site_title);
                $('#txtEmail').val(Data.setting.site_email);
                $('#txtAdminEmail').val(Data.setting.admin_email);
                $('#txtAddress').val(Data.setting.address);
                $('#txtTel').val(Data.setting.tel);
                $('#txtFax').val(Data.setting.fax);
                $('#txtAbout').val(Data.setting.about_us);
                CKEDITOR.config.height = 400;
                CKEDITOR.config.contentsLangDirection = 'rtl';
                CKEDITOR.replace('managerMsg');
                CKEDITOR.instances.managerMsg.setData(Data.setting.manager_msg);
                $('#settingContent').slideDown();
            }
            else
            {
                alert('خطایی رخ داده است، دوباره تلاش کنید.');
            }
            load.hide();

        });
        j--;
    }

    $('#settingBtn').unbind('click').bind('click', function(){
        var x = 1;
        load.show();
        if(x > 0)
        {
            var site = $('#txtSite').val();
            var email = $('#txtEmail').val();
            var aEmail = $('#txtAdminEmail').val();
            var address = $('#txtAddress').val();
            var tel = $('#txtTel').val();
            var fax = $('#txtFax').val();
            var about = $('#txtAbout').val();
            var pass = $('#txtPass').val();
            var passV = $('#txtPassA').val();
            var msg = CKEDITOR.instances.managerMsg.getData();
            if(site.length > 3 && email.length > 3 && aEmail.length > 3 && address.length > 3 && tel.length > 3 && about.length > 3 && fax.length > 3)
            {
                var con;
                if(pass.length > 0)
                {
                    if(pass.length > 5 && pass == passV)
                    {
                        con = 1;
                    }
                    else
                    {
                        con = 2;
                        alert('رمزعبور و تکرار آن صحیح نمی باشد.')
                        load.hide();
                    }
                }
                else
                {
                    con = 1;
                }
                if(con == 1)
                {
                    // ajax
                    var j = 1;
                    if(j > 0)
                    {
                        $.ajax({
                            dataType: "json",
                            type: "POST",
                            url: base_url() + "ajax/editSetting",
                            cache: false,
                            data: {
                                site: site,
                                email: email,
                                aEmail: aEmail,
                                address: address,
                                tel: tel,
                                about: about,
                                pass: pass,
                                passV: passV,
                                fax: fax,
                                msg: msg
                            }
                        }).done(function(Data){
                            if(Data.success == 1)
                            {
                                $('#settingProMsg').show();
                                setTimeout(function(){
                                    $('#settingProMsg').hide();
                                    setting();
                                }, 3000);
                            }
                            else
                            {
                                alert('خطایی رخ داده است، دوباره تلاش کنید.');
                            }
                            load.hide();

                        });
                        j--;
                    }
                }
            }
            else
            {
                alert('تمامی گزینه ها را تکمیل نمائید.');
            }
            x--;
        }
    });
}

function remove_currency(id) {
    if (confirm('آیا از حذف این ارز اطمینان دارید؟'))
    {
        var load = $('#ajaxLoad');
        load.show();
        $('.contentModel').slideUp();
        $('#currencyEdit').hide();
        if (id + 0 > 0)
        {
            // ajax
            var j = 1;
            if (j > 0) {
                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: base_url() + "ajax/remove_currency",
                    cache: false,
                    data: {cid: id}
                }).done(function (Data) {
                    currencyList();
                });
                j--;
            }
        }
    }
}

function currencyList() // ok
{
    var load = $('#ajaxLoad');
    load.show();
    $('.contentModel').slideUp();
    $('#currencyEdit').hide();
    var dataNo = '<tr><td style="text-align: center; width: 100%;" colspan="9" class="orang">هیچ ارزی جهت نمایش یافت نشد.</td></tr>';

    // ajax
    var j = 1;
    if(j > 0)
    {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url() + "ajax/currencyList",
            cache: false,
            data: {ld: 1}
        }).done(function(Data){
            if(Data.status == 1)
            {
                var ht = '';
                var a = 1; //
                $.each(Data.currency, function(i, obj) {
                    ht += '<tr>';
                    ht += '<td>' + a + '</td>';
                    ht += '<td><input type="text" class="fild" name="txtTitle' + obj.id + '" id="txtTitle' + obj.id + '" style="width: 90%; float: right;" placeholder="عنوان" value="' + obj.title + '"></td>';
                    ht += '<td><input type="text" class="fild" name="txtCode' + obj.id + '" id="txtCode' + obj.id + '" style="width: 90%; float: right;" placeholder="CODE" value="' + obj.code + '"></td>';
                    ht += '<td><input type="text" class="fild" name="txtBuy' + obj.id + '" id="txtBuy' + obj.id + '" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.buy + '"><input type="hidden" class="fild" name="txtBuyOld' + obj.id + '" id="txtBuyOld' + obj.id + '" value="' + obj.buy + '"></td>';
                    ht += '<td><input type="text" class="fild" name="txtSales' + obj.id + '" id="txtSales' + obj.id + '" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.sales + '"><input type="hidden" class="fild" name="txtSalesOld' + obj.id + '" id="txtSalesOld' + obj.id + '" value="' + obj.sales + '"></td>';
                    ht += '<td><input type="text" class="fild" name="txtDraft' + obj.id + '" id="txtDraft' + obj.id + '" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.draft + '"><input type="hidden" class="fild" name="txtDraftOld' + obj.id + '" id="txtDraftOld' + obj.id + '" value="' + obj.draft + '"><input type="hidden" class="fild currencyID" name="txtID[]" id="txtID[]" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.id + '"></td>';
                    ht += '<td><input type="text" class="fild" name="txtArrange' + obj.id + '" id="txtArrange' + obj.id + '" style="width: 90%; float: right;" value="' + obj.arrangement + '"></td>';
                    ht += '<td><input type="text" class="fild" name="txtImages' + obj.id + '" id="txtImages' + obj.id + '" style="width: 90%; float: right;" value="' + obj.featured_image + '"></td>';
                    ht += '<td style="color: #8a6d3b; cursor: pointer;" onclick="remove_currency(' + obj.id + ')">حذف</td>';
                    ht += '</tr>';
                    a++;
                });

                // add new
                ht += '<tr>';
                ht += '<td>' + a + '</td>';
                ht += '<td><input type="text" class="fild" name="txtTitle" id="txtTitle" style="width: 90%; float: right;" placeholder="عنوان ارز جدید" value=""></td>';
                ht += '<td><input type="text" class="fild" name="txtCode" id="txtCode" style="width: 90%; float: right;" placeholder="CODE" value=""></td>';
                ht += '<td><input type="text" class="fild" name="txtBuy" id="txtBuy" style="width: 90%; float: right;" placeholder="ريال" value=""><input type="hidden" class="fild" name="txtBuyOld" id="txtBuyOld" value="0"></td>';
                ht += '<td><input type="text" class="fild" name="txtSales" id="txtSales" style="width: 90%; float: right;" placeholder="ريال" value=""><input type="hidden" class="fild" name="txtSalesOld" id="txtSalesOld" value="0"></td>';
                ht += '<td><input type="text" class="fild" name="txtDraft" id="txtDraft" style="width: 90%; float: right;" placeholder="ريال" value=""><input type="hidden" class="fild" name="txtDraftOld" id="txtDraftOld" value="0"><input type="hidden" class="fild currencyID" name="txtID[]" id="txtID[]" style="width: 90%; float: right;" value="new"></td>';
                ht += '<td><input type="text" class="fild" name="txtArrange" id="txtArrange" style="width: 90%; float: right;" placeholder="چیدمان"></td>';
                ht += '<td><input type="text" class="fild" name="txtImages" id="txtImages" style="width: 90%; float: right;" placeholder="تصویر"></td>';
                ht += '<td><span style="color: #00CC00;">جدید</span> </td>';
                ht += '</tr>';
                a++;

                $('#currencyList').html(ht);
            }
            else
            {
                $('#currencyList').html(dataNo);
            }
            load.hide();
            $('#currencyData').slideToggle();

        });
        j--;
    }

    // currencyID
    $('#editCurrencyData').unbind('click').bind('click', function(){
        load.show();
        var x = 1;
        if(x > 0)
        {
            $.ajax({
                dataType: "json",
                type: "POST",
                url: base_url() + "ajax/currencyEdit",
                cache: false,
                data: $('#currencyEditForm').serialize()
            }).done(function(Data){
                load.hide();
                if(Data.status == 2)
                {
                    $('#currencyEdit').show();
                    setTimeout(function(){
                        currencyList();
                    }, 3000);
                }
                else
                {
                    alert('خطای یستمی رخ داده است، دوباره تلاش نمائید.');
                }
            });
            x--;
        }
    });
}

function coinsList() // ok
{
    var load = $('#ajaxLoad');
    load.show();
    $('.contentModel').slideUp();
    $('#coinsEdit').hide();
    var dataNo = '<tr><td style="text-align: center; width: 100%;" colspan="4" class="orang">هیچ سکه ای جهت نمایش یافت نشد.</td></tr>';

    // ajax
    var j = 1;
    if(j > 0)
    {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url() + "ajax/coinsList",
            cache: false,
            data: {ld: 1}
        }).done(function(Data){
            if(Data.status == 1)
            {
                var ht = '';
                var a = 1; //
                $.each(Data.coins, function(i, obj) {
                    ht += '<tr>';
                    ht += '<td style="text-align: center; width: 10%;">' + a + '</td>';
                    ht += '<td style="text-align: center; width: 15%;">' + obj.title + '</td>';
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtBuy' + obj.id + '" id="txtBuy' + obj.id + '" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.buy + '"><input type="hidden" class="fild" name="txtBuyOld' + obj.id + '" id="txtBuyOld' + obj.id + '" value="' + obj.buy + '"></td>';
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtSales' + obj.id + '" id="txtSales' + obj.id + '" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.sales + '"><input type="hidden" class="fild" name="txtSalesOld' + obj.id + '" id="txtSalesOld' + obj.id + '" value="' + obj.sales + '"><input type="hidden" class="fild currencyID" name="txtID[]" id="txtID[]" style="width: 90%; float: right;" placeholder="ريال" value="' + obj.id + '"></td>';
                    ht += '</tr>';
                    a++;
                });
                $('#coinsList').html(ht);
            }
            else
            {
                $('#coinsList').html(dataNo);
            }
            load.hide();
            $('#coinsData').slideToggle();

        });
        j--;
    }

    // currencyID
    $('#editCoinsData').unbind('click').bind('click', function(){
        load.show();
        var x = 1;
        if(x > 0)
        {
            $.ajax({
                dataType: "json",
                type: "POST",
                url: base_url() + "ajax/coinsEdit",
                cache: false,
                data: $('#coinsEditForm').serialize()
            }).done(function(Data){
                load.hide();
                if(Data.status == 2)
                {
                    $('#coinsEdit').show();
                    setTimeout(function(){
                        coinsList();
                    }, 3000);
                }
                else
                {
                    alert('خطای یستمی رخ داده است، دوباره تلاش نمائید.');
                }
            });
            x--;
        }
    });
}
