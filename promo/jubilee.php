<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>ЭЛМИС. 10 лет</title>
<style type="text/css">
body {
	background-color: rgb(255, 241, 214);
	margin: 0px 0px 0px 0px;
}

body, table, p, input, textarea {
	font-family: Verdana;
	font-size: 7.5pt;
}

table.head { background-image: url(img/bg-head-home.gif); }
table.topline { background-image: url(img/bg-book-home.gif); }
table.bottomline {
	background-image: url(img/bg-icons-home.gif);
	background-repeat: repeat-x;
}
td.bookgradient { 
	background-color: rgb(255, 241, 214);
	background-image: url(img/bg-bookgradient-home.gif);
	background-repeat: repeat-y;
	border-bottom: 1px solid #DCC8A2;
}

a {
	color: rgb(140, 48, 33);
	text-decoration: none;
}

a:hover { text-decoration: underline; }
.linkz {
	vertical-align: top;
	padding: 10px 20px 10px 20px;
	border-left: 1px solid rgb(245, 220, 171);
	color: rgb(140, 48, 33)
}

.bookmark {
	background-image: url(img/bg-iconsbookmark-home.gif);
	background-repeat: no-repeat;
	height: 157px;
	vertical-align: top;
}

.footxt {
	vertical-align: top;
	padding: 9px 19px 33px 19px;
	border-left: 1px solid rgb(245,220,171);
}

.footxt a { color: rgb(151,128,83);}

.footer {
	background-color: rgb(140, 48, 33);
}

.footer, .footer a {
	font-family: tahoma;
	font-size: 8pt;
	color: rgb(245, 220, 171);
}
.light {
	background-color: rgb(245, 220, 171);
}

input {
	width: 210px;
	height: 19px;
	border: 1px solid rgb(189, 165, 117);
	padding: 2px 2px 2px 2px;
	margin-top: 100px;
	margin-left: 19px;
	background-color: white;
}

textarea {
	width: 352px;
	height: 112px;
	border: 1px solid rgb(189, 165, 117);
	padding: 2px 2px 2px 2px;
	margin-top: 40px;
	margin-left: 19px;
	background-color: white;
}
</style>
<script language="JavaScript" type="text/javascript">
<?php
if (!empty($HTTP_POST_VARS['email']) && !empty($HTTP_POST_VARS['body']))
{
			$body = $HTTP_POST_VARS['body'];
			$host = gethostbyaddr($HTTP_SERVER_VARS["REMOTE_ADDR"]);  // HTTP_X_FORWARDED_FOR
		
			$from = "=?koi8-r?b?".base64_encode(convert_cyr_string("Посетитель сайта","w","k"))."?=". " <jubilee@elmis.ltd.by>";
			$subj = "=?koi8-r?b?".base64_encode(convert_cyr_string("Поздравительная открытка","w","k"))."?=";
			
			$head = "From: ".$from."\n";
			$head .= "X-Mailer: Postcard 1.0 by Desight\n";
			$head .= "MIME-Version: 1.0\n";
			$head .= "Content-Type: text/plain; charset=koi8-r\n";
			$head .= "Content-Transfer-Encoding: base64\n\n";

			$plainbody = "\n

Посетитель сайта: $email\n

Текст поздравления:
$body
";

	$body = chunk_split(base64_encode(convert_cyr_string($plainbody,"w","k")));
	if (mail("design@elmis.ltd.by", $subj, $body, $head))
	{
		echo "alert('Ваше поздравление успешно отправлено.')";
	}
	else
	{
		echo "alert('К сожалению, ваше поздравление не удалось отправить.')";
	}
}
?>
</script>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-image: url(img/bg-head-home.gif); background-repeat: repeat-x;">
<tr>
<td><a href="contents.php"><img src="img/logo-head-home.gif" width="229" height="79" alt="" border="0" style="margin-left: 30px"></a></td>
<td align="right"><a href="index.html"><img src="img/logo2-head-home.gif" width="201" height="79" alt="" border="0" style="margin-right: 37px;"></a></td>
</tr>
<tr bgcolor="#343434">
<td><img src="img/dot.gif" width="291" height="1" alt="" border="0"></td>
<td width="65%"><img src="img/dot.gif" width="489" height="1" alt="" border="0"></td>
</tr>
<tr>
<td height="350">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td height="350" width="44"><img src="img/dot.gif" width="44" height="350" alt="" border="0"></td>
			<td style="background-image: url(img/bg-bookmark2-newyear.gif); background-repeat: no-repeat;" align="left" valign="top"><img src="img/icon-flowers-home.gif" width="95" height="97" alt="" border="0" style="margin: 60px 0px 0px 15px;"></a><br><img src="img/txt-wishes-home.gif" width="109" height="28" alt="" border="0" style="margin: 8px 0px 0px 19px;">
			<div class="footxt" style="border-left: none; margin-top: 15px; color: rgb(151,128,83)">Мы принимаем<br>
	ваши поздравления<br>
	с 10-тилетним<br>
	юбилеем компании</div>
			</td>
		</tr>
	</table>
	</td>
<td align="left" valign="top">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-image: url(img/bg-bookmark-jubilee.gif); background-repeat: no-repeat;" height="350">
	<tr><form action="jubilee.php" method="post" name="postcard">
		<td height="67" width="340"><input type="Text" name="email"></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" height="165"><textarea name="body"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><a href="javascript: document.postcard.submit();"><img src="img/txt-submit-jubilee.gif" width="64" height="14" alt="" border="0" style="margin: 7px 0px 0px 19px"></a></td>
	</tr>
	</table>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td bgcolor="#CC4C33"><img src="img/dot.gif" width="1" height="2" alt="" border="0"></td>
</tr>
<tr>
	<td bgcolor="black"><img src="img/dot.gif" width="1" height="1" alt="" border="0"></td>
</tr>
</table>
<table border="0" class="bottomline" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td rowspan="2" width="44"><img src="img/dot.gif" width="44" height="1" alt="" border="0"></td>
<td class="bookmark"><a href="contents.php"><img src="img/icon-book-home.gif" width="73" height="105" alt="" border="0" style="margin-left: 32px;"></a><br><a href="contents.php"><img src="img/txt-read-home.gif" width="121" height="30" alt="" border="0" style="margin: 7px 0px 0px 19px;"></a><br><img src="img/dot.gif" width="195" height="1" alt="" border="0"></td>
<td class="bookmark"><a href="newyear.php"><img src="img/icon-pine-home.gif" width="102" height="112" alt="" border="0" style="margin-left: 15px;"></a><br><a href="newyear.php"><img src="img/txt-newyear-home.gif" width="95" height="28" alt="" border="0" style="margin: 5px 0px 0px 19px;"></a><br><img src="img/dot.gif" width="195" height="1" alt="" border="0"></td>
<td class="bookmark"><a href="http://www.elmis.by/index.php"><img src="img/icon-laptop-home.gif" width="101" height="104" alt="" border="0" style="margin-left: 16px;"></a><br><a href="http://www.elmis.by/index.php"><img src="img/txt-site-home.gif" width="99" height="28" alt="" border="0" style="margin: 9px 0px 0px 19px;"></a><br><img src="img/dot.gif" width="195" height="1" alt="" border="0"></td>
<td rowspan="2"><img src="img/dot.gif" width="151" height="1" alt="" border="0"></td>
</tr>
<tr>
	<td class="footxt"><a href="contents.php">О людях, событиях,<br>
	и их последствиях,<br>
	изменивших мир<br>
	до неузнаваемости</a></td>
	<td class="footxt"><a href="newyear.php">Желаем партнерам<br>
	и клиентам нашей<br>
	компании успехов<br>
	в Новом году!</a></td>
	<td class="footxt"><a href="http://www.elmis.by/index.php">Сайт стал ближе.<br>
	В Новый год &mdash;<br>
	с новый именем:<br>
	www.elmis.by</a></td>
</tr>
<tr>
	<td colspan="8" bgcolor="#000000"><img src="img/dot.gif" width="1" height="1" alt="" border="0"></td>
</tr>
<tr bgcolor="#CBC0AA">
	<td><img src="img/dot.gif" width="1" height="16" alt="" border="0"></td>
	<td style="border-left: 1px solid #A79E8C"><img src="img/dot.gif" width="1" height="1" alt="" border="0"></td>
	<td style="border-left: 1px solid #A79E8C"><img src="img/dot.gif" width="1" height="1" alt="" border="0"></td>
	<td style="border-left: 1px solid #A79E8C"><img src="img/dot.gif" width="1" height="1" alt="" border="0"></td>
	<td><img src="img/dot.gif" width="1" height="1" alt="" border="0"></td>
</tr>
</table>
<table class="footer" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td width="44"><img src="img/dot.gif" width="44" height="40" alt="" border="0"></td>
	<td align="left"><a href="http://www.elmis.by"><img src="img/logo-foot-home.gif" width="59" height="15" alt="" border="0"></a></td>
	<td align="right"><a href="http://desight.com"><b>Created by Desight</b></a><b>&nbsp;&nbsp;&#0183;&nbsp;&nbsp;<a href="credits.php">Credits</a></b></td>
	<td width="16"><img src="img/dot.gif" width="16" height="1" alt="" border="0"></td>
</tr>
</table>
<div style="position: absolute; top: 92px; right: 15px;"><img src="img/img-01-jubilee.gif" width="132" height="95" alt="" border="0"></div>
</body>
</html>
