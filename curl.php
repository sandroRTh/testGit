<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://alunos.b7web.com.br/api/ping");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "Nome=Sandro&Idade=28");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$answer = curl_exec($curl);
curl_close($curl);

print_r($answer);
?>