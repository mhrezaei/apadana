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
                            data: {site: site, email: email, aEmail: aEmail, address: address, tel: tel, about: about, pass: pass, passV: passV, fax: fax}
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

function currencyList() // ok
{
    var load = $('#ajaxLoad');
    load.show();
    $('.contentModel').slideUp();
    $('#currencyEdit').hide();
    var dataNo = '<tr><td style="text-align: center; width: 100%;" colspan="5" class="orang">هیچ ارزی جهت نمایش یافت نشد.</td></tr>';

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
                    ht += '<td style="text-align: center; width: 10%;">' + a + '</td>';
                    ht += '<td style="text-align: center; width: 15%;">' + obj.title + '</td>';
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtBuy' + obj.id + '" id="txtBuy' + obj.id + '" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.buy + '"></td>';
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtSales' + obj.id + '" id="txtSales' + obj.id + '" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.sales + '"></td>';
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtDraft' + obj.id + '" id="txtDraft' + obj.id + '" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.draft + '"><input type="hidden" class="fild currencyID" name="txtID[]" id="txtID[]" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.id + '"></td>';
                    ht += '</tr>';
                    a++;
                });
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
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtBuy' + obj.id + '" id="txtBuy' + obj.id + '" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.buy + '"></td>';
                    ht += '<td style="text-align: center; width: 25%; direction: rtl;"><input type="text" class="fild" name="txtSales' + obj.id + '" id="txtSales' + obj.id + '" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.sales + '"><input type="hidden" class="fild currencyID" name="txtID[]" id="txtID[]" style="width: 90%; float: right;" placeholder="تومان" value="' + obj.id + '"></td>';
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
