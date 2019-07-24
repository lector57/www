<?php

$PageTitle = "Заказ";
include("header.php");

?>

<form method="post" action="notify_order.php">
<table width="1">
<tr>
	<td>Предприятие:</td>
	<td><input type="text" name="company" size="40" maxlength="250"></td>
</tr>
<tr>
	<td>Страна:</td>
	<td><input type="text" name="country" size="40" maxlength="250"></td>
</tr>
<tr>
	<td>Почтовый адрес:</td>
	<td><textarea cols="40" rows="3" name="address"></textarea></td>
</tr>
<tr>
	<td>Контактное лицо:</td>
	<td><input type="text" name="contact" size="40" maxlength="250"></td>
</tr>
<tr>
	<td>Телефон:</td>
	<td><input type="text" name="phone" size="20" maxlength="250"></td>
</tr>
<tr>
	<td>Факс:</td>
	<td><input type="text" name="fax" size="20" maxlength="250"></td>
</tr>
<tr>
	<td>E-mail:</td>
	<td><input type="text" name="email" size="20" maxlength="250"></td>
</tr>
<tr>
	<td colspan="2"><br><br>Просим выслать технико-коммерческое предложение на поставку следующих комплектующих изделий или оборудования (наименование, тип и количество):<br>
<textarea cols="70" rows="5" name="order"></textarea></td>
</tr>
<tr>
	<td colspan="2"><br><br>Просим выслать подробную информацию о ценах, параметрах, гарантийных обязательствах и условиях поставки следующих комплектующих изделий или оборудования (наименование, тип и конкретные вопросы):<br>
<textarea cols="70" rows="5" name="info"></textarea></td>
</tr>
</table>
<p>
<input type="submit" name="action" value="Отправить">
</form>
 
<?php
include("footer.php");
?>

