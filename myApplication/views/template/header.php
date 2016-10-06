<?php

	thml_opener(); 
	
	thtml_meta("Expires"		,"Fri, Jan 01 2020 00:00:00 GMT"	,"equiv"	);
	thtml_meta("Pragma"			,"no-cache"					,"equiv"	);
	thtml_meta("Cache-Control"	,"no-cache"					,"equiv"	);
	thtml_meta("Content-Type"	,"text/html; charset=utf-8"		,"equiv"	);
	thtml_meta("Lang"			,"fa"						,"equiv"	);

	thtml_meta("author"			,"Taha Kamkar"					,"name"	);
	thtml_meta("Reply-to"		,"@.com"						,"equiv"	);
	thtml_meta("keywords"		,$siteKeywords					,"name"	);
	thtml_meta("creation-date"	,"09/01/2015"					,"name"	);
	thtml_meta("revisit-after"	,"15 days"					,"name"	);
	
	thtml_title($siteTitle) ;
	
	// JQuery...
	thtml_javascript("libs/jquery-1.11.3.min"								);
	thtml_javascript("libs/jquery.form.min"							);
	
	//bootstrap...
	thtml_stylesheet("libs/bootstrap-3.3.2/css/bootstrap.min"		); 
	thtml_stylesheet("libs/bootstrap-3.3.2/css/bootstrap-rtl.min"	);
	thtml_javascript("libs/bootstrap-3.3.2/js/bootstrap.min"		);
	
	//font-awesome
	thtml_stylesheet("libs/font-awesome/css/font-awesome"			);

	// Persian...

	//Clocks...
	thtml_javascript('libs/jClocksGMT/js/jClocksGMT');
	thtml_stylesheet('libs/jClocksGMT/css/jClocksGMT');

	//numbers...
	thtml_javascript('libs/jquery.numeric.min');


	//particular things...
	thtml_javascript("js/formEffects"								);
	thtml_stylesheet("css/home"									);
	thtml_javascript("js/".$jsHandler								);
	
	thtml_headClose();
?>
