//$(document).on( 'scroll', function(){
//	pageNavi();
//});

$(document).ready(function(){
    // http://webcharts.fxserver.com/pairs/activePairs.php
    $('#rateIframe').delay(2000).attr('src', 'http://webcharts.fxserver.com/pairs/activePairs.php').show();
});

String.prototype.replaceAll = function(
	strTarget, // The substring you want to replace
	strSubString // The string you want to replace in.
	){
	var strText = this;
	var intIndexOfMatch = strText.indexOf( strTarget );

	// Keep looping while an instance of the target string
	// still exists in the string.
	while (intIndexOfMatch != -1){
		// Relace out the current instance.
		strText = strText.replace( strTarget, strSubString )

		// Get the index of any next matching substring.
		intIndexOfMatch = strText.indexOf( strTarget );
	}

	// Return the updated string with ALL the target strings
	// replaced out with the new substring.
	return( strText );
};

function initSize()
{
	var windowHeight = Math.min($( window ).height() , 700) ;

	$("#divHome1").height(windowHeight - $("#divHome-nav").height()) ; 
//	$("#divHome-leitner").height(windowHeight) ; 
}

function pageNavi()
{
 
	if ($(window).scrollTop() > $("#divHome1").height()) {
		$('#navBar').addClass('navbar-fixed-top') ; 
		$('body').css("padding-top" , 60);
	} else {
		$('#navBar').removeClass('navbar-fixed-top') ; 
		$('body').css("padding-top" , 0);
	}
	
}

function homeInit()
{
//	initSize();

	convertor_init();

	$('#frmContact').ajaxForm({
		dataType:  	'json',
		beforeSubmit: 	contact_validate,
		success:   	contact_feed
	});
	$('input[name=txtEmail]').focus();

	$('#tabRates a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})

	var analogclock = new analogClock();
	window.setInterval(function(){
		analogclock.run();
	}, 1000);

	autoCommafy('input.numeric');
	$("input.numeric").numeric(",");
	$("input.numeric").on('keyup', function () {
		autoCommafy('input.numeric');
	});

}

function convertor_init()
{
	$("#txtInput").val('10000000')
	$('#cmbInput').val('IRR');
	$('#cmbOutput').val('USD');

	$("#txtInput,#cmbInput,#cmbOutput").on('change',function() {convertor_do();}).on('keyup',function() {convertor_do();});

	convertor_do();
}

function convertor_do()
{
	//Rate...
	if($('#cmbInput').val()=="IRR")
		$rate1 = 1 ;
	else {
		var $rate1 = parseFloat($('#txtRate1-' + $('#cmbInput').val()).val());
	}
	if($('#cmbOutput').val()=="IRR")
		$rate2 = 1 ;
	else {
		var $rate2 = parseFloat($('#txtRate2-' + $('#cmbOutput').val()).val());
	}

	//Calculation...
	$input  = parseFloat($("#txtInput").val().replaceAll(',' , "")) ;
	$output = Math.round($input * $rate1 / $rate2 *100)/100 ;

	//Separation...
	var $str = $output.toString().split('.');
	if ($str[0].length >= 4) {
		$str[0] = $str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1'+ ',');
	}
	if ($str[1] && $str[1].length >= 4) {
		$str[1] = $str[1].replace(/(\d{3})/g, '$1 ');
	}
	$output = $str.join('.');


	//Showing...
	$('#divOutput').html($('#cmbOutput').val() + " " + $output) ;

	//Exceptions...
	if(!$output)
		$('#divOutput').html('صرافی آپادانا');

	if($output==0)
		$('#divOutput').html('هیچ!');

	if($('#cmbInput').val()==$('#cmbOutput').val())
		$('#divOutput').html($('#cmbOutput').val() + " " + $input);
}

function contact_validate()
{
	//Preparetions...
	var errored     = 0                  	;
	var feedArea    = ".form-feed"            ;
	var errorFeed	= ""				;

	$(feedArea).slideDown().removeClass("alert-danger").html("اندکی صبر...");

	//Process...
	errored += formEffect_errorIfEmpty('[name=name]'	);
	errored += formEffect_errorIfEmpty('[name=email]'	);
	errored += formEffect_errorIfEmpty('[name=text]'	);
	errored += formEffect_errorIfEmpty('[name=secQ]'	);

	if(errored)
		errorFeed += "تکمیل تمام بخش‌ها الزامی‌ست <br />";

	//return...
	if(errored) {
		$(feedArea).addClass("alert-danger").html(errorFeed);
		return false ;
	}
	else {
		return true;
	}

	return false ; //safety!
}

function contact_feed(data)
{
	if(data.ok==1) {
		var cl    = "alert-success"     ;
		var me    = "پیام شما ثبت شد" ;
	}
	else {
		var cl    = "alert-danger"     ;
		var me    = data.message ;
		formEffect_markError(data.fields);
		$(data.fields).focus();
	}

	$(".form-feed").addClass(cl).html(me).show();
	if(data.refresh==1) formEffect_delaiedPageRefresh(1);
	if(data.redirect)  {setTimeout(function(){
		window.location = data.redirect ;
	},1000)}
}

function analogClock(){
}

analogClock.prototype.run = function() {

	$('.clock-circle').each(function() {
		var id = $(this).attr('id') ;
		var date = calcTime($('#' + id + ' .offset').val());
		var second = date.getSeconds()* 6;
		var minute = date.getMinutes()* 6 + second / 60;
		var hour = ((date.getHours() % 12) / 12) * 360 + 90 + minute / 12;
		jQuery('#' + id + ' .clock-hour').css("transform", "rotate(" + hour + "deg)");
		jQuery('#' + id + ' .clock-minute').css("transform", "rotate(" + minute + "deg)");
		jQuery('#' + id + ' .clock-second').css("transform", "rotate(" + second + "deg)");

	});


};

function calcTime(offset)
{
	d = new Date();
	utc = d.getTime() + (d.getTimezoneOffset() * 60000);
	nd = new Date(utc + (3600000*offset));
	return nd ;
}

function autoCommafy($selector , $separator)
{
	//Preparetions...
	var $object    = $($selector)    ;
	var $string    = $object.val() ;

	if(!$separator) $separator = "," ;

	$num = $string.replaceAll($separator , "") ;

	//safety interlock...
	if($object.hasClass('formsInputError')) {
		$object.val($num);
		return;
	}

	//Actions...
	var $str = $num.toString().split('.');
	if ($str[0].length >= 4) {
		$str[0] = $str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1'+$separator);
	}
	if ($str[1] && $str[1].length >= 4) {
		$str[1] = $str[1].replace(/(\d{3})/g, '$1 ');
	}
	$object.val($str.join('.')) ;

}
