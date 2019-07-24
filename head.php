

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<title>ELMIS - <?php echo $PageTitle; ?></title>
<?php include("meta.php")?>
<meta name="description" content="<?php echo $m1["$PHP_SELF"]?>">
<meta name="keywords" content="<?php echo $m2["$PHP_SELF"]?>">
<?php
include("browser.php");
$bd=new BrowserDetector;
if($bd->BROWSER=="Netscape") include("css.nn.php"); 
else include("css.ie.php");
//include("jsmenu.php");
include("jsutil.php");
//include("jsspylog.php");
?>
<SCRIPT language=JavaScript src="generic_menus.js" type=text/javascript></SCRIPT>
</head>
<body bgcolor="#990000" text="#000000" link="#000000" alink="#000000" vlink="#000000" style="margin:0px" topmargin=0 bottommargin=0 rightmargin=0 leftmargin=0 marginwidth=0 marginheight=0>
<script type="text/javascript" language="JavaScript">
if (document.images && !ImagesPreloaded)
{
	home_on = new Image();
	home_on.src = "art/navi-home-h.gif";
	store_on = new Image();
	store_on.src = "art/navi-store-h.gif";
	search_on = new Image();
	search_on.src = "art/navi-search-h.gif";
	help_on = new Image();
	help_on.src = "art/navi-map-h.gif";
	contacts_on = new Image();
	contacts_on.src = "art/navi-contacts-h.gif";
	
	home_off = new Image();
	home_off.src = "art/navi-home.gif";
	store_off = new Image();
	store_off.src = "art/navi-store.gif";
	search_off = new Image();
	search_off.src = "art/navi-search.gif";
	help_off = new Image();
	help_off.src = "art/navi-map.gif";
	contacts_off = new Image();
	contacts_off.src = "art/navi-contacts.gif";

	products_on = new Image();
	products_on.src = "art/navi-products-h.gif";
	products_off = new Image();
	products_off.src = "art/navi-products.gif";
	services_on = new Image();
	services_on.src = "art/navi-services-h.gif";
	services_off = new Image();
	services_off.src = "art/navi-services.gif";
	support_on = new Image();
	support_on.src = "art/navi-support-h.gif";
	support_off = new Image();
	support_off.src = "art/navi-support.gif";
	company_on = new Image();
	company_on.src = "art/navi-company-h.gif";
	company_off = new Image();
	company_off.src = "art/navi-company.gif";
	contacts_on = new Image();
	contacts_on.src = "art/navi-contacts-h.gif";
	contacts_off = new Image();
	contacts_off.src = "art/navi-contacts.gif";
	ImagesPreloaded = 1;
}
</script>

 
 


