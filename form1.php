<form method="POST" action="receiver.php">
	Digite seu email aqui e clique em enviar para ser redirecionado:<br>
	<input type="email" name="email">
	<input type="submit" name="send">
</form>
<hr>
<br>

<form method="POST">
	Digite seu email aqui e clique em enviar para continuar nesta página:<br>
	<input type="email" name="email">
	<input type="submit" name="send">
</form>
<hr>
<?php
require "receiver.php"; /*pode ser usado "include" no lugar de require porém 
é preferivel require pois se der um erro na execução do arquivo solicitado, com require
ele para comletamente a ação que está sendo executada.*/
?>

text for test purposes only