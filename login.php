<?php
	
	//Define PRIVATE KEY from private.pem
	define('PRIVATE_KEY','-----BEGIN RSA PRIVATE KEY-----
MIICXgIBAAKBgQDd8YBfKogFC9TGCP5roKHyJQmgvlq0QFsRvwkpHtZSCHz3U8kA
d3zJ8NfEChNpEYcCTLUMV7vhMQBe+dlgz0fCautkzhuw63IartLeTekoO9xprKus
y0tnsBbJcBcbAF6SQ1j02t8pvggYpJLZLmzUsfDLUohdr+mxp5FvQeg/EwIDAQAB
AoGBAIUAtrdRG5Y6ktXiieUhrCsaOvzTVjPy5SBrZSf5TOJ4J7tnwGrBME0sQYE/
sIYkdM3R/iVZZkP7Q4enHre/P/aKup6gw6E4nchLcRfHc5Cl5rNmmplWPmb6yTc6
IcaInadWwAn2y57attUDI0x4aASpSgi1lxkk/KSx/un2r7rBAkEA8ScqKIOTN9NM
A2cgsgBd7moZ8usTgSZffBZWaKoRJTt0q/QFl9LKfKFXHQtMfh0TbAD2YJn1vjDk
tpbkwapL8QJBAOubknPU7pKa50ZWxRNQ4xACW4c8RwyWY/XKLYWj0GNXrfTK6ld3
ZFZrIAGGK5S1uG0EHeZ/2crccdmvTpZXT0MCQQDKIV3A36hCHqWUJJjPGmehMuXV
Kx0KH7PhOofq6sG8R32fs8YMX+7BUCrIeXQAMTbaTGQ2zFWiuTC7qvbLLYbBAkEA
ppgGYij52Gf3iGDqUNIs+7DvDxysEFZ2r+EZdxlxzAy/UAv6z4X4SLLOmsVII4qq
sUrr6YQVd7+QMSAoLV3nCQJAPTOuUiwc/zXkIH7UN6bBg09z0fmJLHzNghS4u9Ap
YNPs4eKIPHyHLLaD5q7I8jM3TPE+zEUHnXaT5lhoEkRU3Q==
-----END RSA PRIVATE KEY-----');

	//Get encrypted data and declare decrypted
	$encrypted = $_POST['encrypted'];
	$decrypted = '';

	//Decryption process
	$privateKey = openssl_pkey_get_private(PRIVATE_KEY);
	openssl_private_decrypt(base64_decode($encrypted), $decrypted, $privateKey);

	//Extracting username and password from line string
	$data = explode("||",$decrypted);
	echo "username -> " . $data[0];
	echo "<br>";
	echo "password -> " . $data[1];

?>