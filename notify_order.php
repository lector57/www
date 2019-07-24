<?php

if ($HTTP_POST_VARS["action"]=="Отправить") {
	$header='MIME-Version: 1.0'.chr(10).'Content-Type: text/plain;'.chr(10).'  charset="koi8-r"'.chr(10).'From: Elmis Website Visitor <guest@elmis.by>';
	$subj = convert_cyr_string('Заказ','w','k');
	$body="Предприятие: ".$HTTP_POST_VARS["company"];
	$body=$body."\nСтрана: ".$HTTP_POST_VARS["country"];
	$body=$body."\nПочтовый адрес: ".$HTTP_POST_VARS["address"];
	$body=$body."\nКонтактное лицо: ".$HTTP_POST_VARS["contact"];
	$body=$body."\nТелефон: ".$HTTP_POST_VARS["phone"];
	$body=$body."\nФакс: ".$HTTP_POST_VARS["fax"];
	$body=$body."\nE-mail: ".$HTTP_POST_VARS["email"];
	$body=$body."\n\nПросим выслать технико-коммерческое предложение на поставку следующих комплектующих изделий или оборудования:".$HTTP_POST_VARS["order"];
	$body=$body."\n\nПросим выслать подробную информацию о ценах, параметрах, гарантийных обязательствах и условиях поставки следующих комплектующих изделий или оборудования (наименование, тип и конкретные вопросы):".$HTTP_POST_VARS["info"];
	$body=$body."\n\n";
	$body=convert_cyr_string($body,'w','k'); 
	mail('Elmis <elmis@elmis.by>', $subj, $body, $header);
}

$PageTitle = "Подтверждение";
include("header.php");
?>
<p>Ваш заказ отправлен. Специалисты компании &laquo;Элмис&raquo; свяжутся с вами в ближайшее время.
<hr size="1" noshade><p>
<p><a href="order.php"><img src="art/bull-link2.gif" width="6" height="7" alt="" border="0" hspace="5">Вернуться на страницу "Заказ"</a><p>



<?php
include("footer.php");
?>
