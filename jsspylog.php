<?php if(strtolower($HTTP_SERVER_VARS["SCRIPT_NAME"])=="/index.php"){ ?>
<!-- SpyLOG f:0211 modified by desight (for smart UAs)-->
<script language="javascript">
<!--
Mu="u3081.81.spylog.com";
Md=document;
Mnv=navigator;
Mp=0;
Md.cookie="b=b";
Mc=0;
if(Md.cookie)
	Mc=1;
Mrn=Math.random();
Mn=(Mnv.appName.substring(0,2)=="Mi")?0:1;
Mt=(new Date()).getTimezoneOffset();
Mz="p="+Mp+"&rn="+Mrn+"&c="+Mc+"&t="+Mt;
if(self!=top)
	{Mfr=1;}
else
	{Mfr=0;}
Msl="1.0";
//-->
</script>
<script language="javascript1.1">
<!--
Mpl="";
Msl="1.1";
Mj = (Mnv.javaEnabled()?"Y":"N");
Mz+='&j='+Mj;
//-->
</script>
<script language="javascript1.2">
<!-- 
Msl="1.2";
Ms=screen;
Mpx=(Mn==0)?Ms.colorDepth:Ms.pixelDepth;
Mz+="&wh="+Ms.width+'x'+Ms.height+"&px="+Mpx;
//-->
</script>
<script language="javascript1.3">
<!--
Msl="1.3";
//-->
</script>
<script language="javascript">
<!--
function spylog() {
	spyurl="http://"+Mu+"/cnt?cid=308181&"+Mz+"&sl="+Msl+"&r="+escape(Md.referrer)+"&fr="+Mfr+"&pg="+escape(window.location.href);
	
	if (document.images) {
		spy=new Image();
		spy.src=spyurl;
	}
	else {
		My="<img src='"+spyurl+"' border=0 width=1 height=1 alt='' style='display:none'>";
		Md.write(My);
	}
}
//-->
</script>
<!-- SpyLOG -->
<?php } else { ?>
<!-- SpyLOG f:0211 modified by desight (for smart UAs) -->
<script language="javascript">
<!--
Mu="u3081.81.spylog.com";
Md=document;
Mnv=navigator;
Mp=1;
Mn=(Mnv.appName.substring(0,2)=="Mi")?0:1;
Mrn=Math.random();
Mt=(new Date()).getTimezoneOffset();
Mz="p="+Mp+"&rn="+Mrn+"&t="+Mt;
function spylog() {
	spyurl="http://"+Mu+"/cnt?cid=308181&"+Mz+"&r="+escape(Md.referrer)+"&pg="+escape(window.location.href);
	if (document.images) {
		spy=new Image();
		spy.src=spyurl;
	}
	else {
		My="<img src='"+spyurl+"' border=0 width=1 height=1 alt='' style='display:none'>";
		Md.write(My);
	}
}
//-->
</script>
<!-- SpyLOG -->
<?php } ?>