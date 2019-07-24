<?php
include("head.php");
include("menutop.php");
include("seealso.php")
?>
<table border=0 cellpadding=0 cellspacing=0 width="100%" bgcolor="#990000"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 width="780">
<tr><td><img src="art/dot.gif" width="81" height="10" alt="" border="0" hspace="69" vspace="5"></td>
<td valign="top"><a href="javascript:void(0)" onmouseover="clearmenus()"><img src="art/dot.gif" width="2" height="21" alt="" border="0"></a></td>
<td valign="top" align="right"><?php include("menubtm.php"); ?><a href="javascript:void(0)" onmouseover="clearmenus()"><img src="art/dot.gif" alt="" width=2 height=21 border=0></a><img src="art/dot.gif" alt="" width=18 height=21 border=0></td></tr></table>
</td></tr></table>

<table border=0 cellpadding=0 cellspacing=0 width="100%" bgcolor="#fafafa"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 width="760">
<tr>
	<td>&nbsp;</td>
	<td><div class="headline"><?php echo $PageTitle; ?></div><img src="art/dot.gif" alt="" width=470 height=1></td>
</tr>
<tr>
	<td width="270" valign=top align="center"><img src="art/dot.gif" alt="" width=270 height=20><br>
<?php if(isset($Image)) {
	if (isset($ImAlignTop)) echo '<table width="100%" cellpadding="0" cellspacing="0" border="0">';
	else echo '<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">';
	foreach ($Image as $href => $tag) {
		echo '<tr><td valign="top" align="center">';
		$alt = substr(stristr($tag,'alt="'),5);
		$alt = substr($alt,0,strpos($alt,'"'));
		if (is_string($href)) {
			if (!strstr($href,"javascript:"))
				$href = "/".strtolower($href);
			echo '<a href="'.$href.'">'.$tag.'</a>
			<div class="caption"><a href="'.$href.'">'.$alt.'</a></div>';
		}
		else {
			echo $tag.'<div class="caption">'.$alt.'</div>';
		}
		echo "</td></tr>";
	}
	echo '</table>';
}
?>




	</td>
	<td width="490" valign=top rowspan="2"><div class="mc">