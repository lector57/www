
</div>
<a href="#"><img src="art/bull-top3.gif" width="17" height="17" alt="к началу страницы" border="0" align="right" class="btop"></a>
</td>

</tr>
<tr>
<td width="270" valign=bottom align="center">
<?php if(isset($SeeAlso)) { ?>
<div class="seealso">
<table border="0" cellpadding="1" cellspacing=0 bgcolor="#808080" width="202">
<tr><td>
<table border="0" cellpadding="0" cellspacing=0 width="200">
<tr>
	<td bgcolor="#eeeeee" colspan="2" align="left"><div class="contexthead">СМОТРИТЕ ТАКЖЕ</div></td>
</tr>
<tr>
	<td bgcolor="#808080" colspan="2"><img src="art/dot.gif" alt="" width=200 height=1></td>
</tr>
<?php
foreach ($SeeAlso as $href => $desc) {
	if ("/".$href<>$SCRIPT_NAME) {
?>
<tr><td bgcolor="#fafafa" valign="top" width="1%"><img src="art/bull-link2.gif" width="6" height="7" alt="" border="0" hspace="5" vspace="5"></td><td bgcolor="#fafafa" valign="top" width="99%" align="left">
<div class="contextlinks"><a href="<?php echo $href; ?>"><?php echo $desc; ?></a></div></td></tr>
<?
	}
}
?>

</table>
</td></tr></table>
</div>
<?php } ?>
</td></tr></table>
</td></tr></table>

<?php include("foot.php") ?>

