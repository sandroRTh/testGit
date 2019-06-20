<?php
	$passwd = "~u34JNzz!Aw%m3-)";
	$crpt_passwd = md5("$passwd");

	echo "Senha digitada: ".$passwd."<br/>";
	echo "Senha acima, criptografada com md5: ".$crpt_passwd."<br/>";