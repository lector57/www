<script language="javascript1.2" type="text/javascript">
<!--

function openwin(lnk,sx,sy) {
	dx=(screen.width-sx)/2;
	dy=(screen.height-sy)/2;
	myWin=window.open(lnk, "View", "width="+sx+",height="+sy+",status=no,toolbar=no,menubar=no,resizable=no,directories=no,location=no,scrollbars=no,dependent,top="+dy+",left="+dx);
}

function submit_search()
{
	strBuf = document.frm_search.elements["sp-q2"].value;
	re = / +/g;
	strBuf = strBuf.replace(re, " ");
	str1 = "*";
	strBuf = str1.concat(strBuf);
	strBuf = strBuf.concat("*");
	re = / /g;
	strBuf = strBuf.replace(re, "* *");
	re = /\*\* \*/g;
	strBuf = strBuf.replace(re, "*");
	re = /\* \*\*/g;
	strBuf = strBuf.replace(re, "*");
	document.frm_search.elements["sp-q"].value = strBuf;
	document.frm_search.submit();
	return;
}
//-->
</script>
