<?php
$PageTitle = "Новые изделия СКБ ИС";
include("header.php");
$SeeAlso = $prod05;
?>

<table class="s" border="0" cellspacing="1" cellpadding="5">
<tr valign="top">
	<td class="s">ЛИР-458</td>
	<td class="s">12 разрядный датчик углового положения.
	<br>На выходной шине ЛИР-458 после включения питания устанавливается код, соответствующий угловому положению вала датчика в пределах 360&deg;.</td>
</tr>
<tr valign="top">
	<td class="s">ЛИР-437</td>
	<td class="s">13 разрядный квазиабсолютный датчик угла.
	<br>Отличие от ЛИР-458 в необходимости поворота на угол 1,8&deg; для считывания кода положения вала датчика после включения питания.</td>
</tr>
<tr valign="top">
	<td class="s">ЛИР-7К<br>ЛИР-9К</td>
	<td class="s">квазиабсолютные линейные датчики.
	<br>Для считывания кода положения необходимо смещение на 0,48 мм.</td>
</tr>
<tr valign="top">
	<td class="s" nowrap>ЛИР-160А</td>
	<td class="s">двухосевой преобразователь для робототехнических систем.</td>
</tr>
<tr valign="top">
	<td class="s">ЛИР-8</td>
	<td class="s">для замены преобразователей фирмы Iskra TGM-111.</td>
</tr>
</table>

<?php
include("prod.05.comment.php");
include("footer.php");
?>