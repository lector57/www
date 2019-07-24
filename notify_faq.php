<?php

if ($HTTP_POST_VARS["action"]=="Отправить") {
	$header='MIME-Version: 1.0'.chr(10).'Content-Type: text/plain;'.chr(10).'  charset="koi8-r"'.chr(10).'From: Elmis Website Visitor <guest@elmis.by>';
	$subj = convert_cyr_string('Вопросы и ответы','w','k');
	$body="Имя: ".$HTTP_POST_VARS["name"];
	$body=$body."\nE-mail: ".$HTTP_POST_VARS["email"];
	$body=$body."\nВопрос: ".$HTTP_POST_VARS["question"];
	$body=$body."\n\n";
	$body=convert_cyr_string($body,'w','k'); 
	mail('Elmis <design@elmis.by>', $subj, $body, $header);
}

$PageTitle = "Подтверждение";
include("header.php");
?>
<p>Ваш вопрос отправлен. Наши специалисты постараются дать на него исчерпывающий ответ.
<hr size="1" noshade><p>
<p><a href="supp.02.php"><img src="art/bull-link2.gif" width="6" height="7" alt="" border="0" hspace="5">Вернуться на страницу "Вопросы и ответы"</a><p>

<?php
include("footer.php");
?>
