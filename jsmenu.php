<script language="javascript" type="text/javascript">
<!--

if (document.images) {
	img1on = new Image();
	img1on.src = "art/navi-home-h.gif";
	img2on = new Image();
	img2on.src = "art/navi-store-h.gif";
	img3on = new Image();
	img3on.src = "art/navi-search-h.gif";
	img4on = new Image();
	img4on.src = "art/navi-map-h.gif";
	img5on = new Image();
	img5on.src = "art/navi-contacts-h.gif";
	
	img1off = new Image();
	img1off.src = "art/navi-home.gif";
	img2off = new Image();
	img2off.src = "art/navi-store.gif";
	img3off = new Image();
	img3off.src = "art/navi-search.gif";
	img4off = new Image();
	img4off.src = "art/navi-map.gif";
	img5off = new Image();
	img5off.src = "art/navi-contacts.gif";
}

function imgOn(imgName) {
	if (document.images) {
		document[imgName].src = eval(imgName + "on.src");
	}
	if (initialized) {
		clearmenus();
	}
}

function imgOff(imgName) {
	if (document.images) {
		document[imgName].src = eval(imgName + "off.src");
	}
}

window.onerror = null;
window.defaultStatus = '';

var isFour = (parseInt(navigator.appVersion) > 3);

var initialized = 0;
var menus = new Array();
var menustatus = new Array();
var menuovers = new Array();

function init(){
	if(isFour)
	{
		for (var i=0;i<=3;i++)
		{
			menustatus[i] = "closed";
			if (document.layers)
			{
				menuovers[i] = eval("window.document.menu"+i+"overs");
				menus[i] = eval("window.document.menu"+i);
				menuovers[i].onmouseout = menuhider;
			}
			else
			{
				var tmnov = (document.all)?eval("document.all.menu"+i+"overs"):document.getElementById("menu"+i+"overs");
				var tmn = (document.all)?eval("document.all.menu"+i):document.getElementById("menu"+i);
				menuovers[i] = tmnov.style;
				menus[i] = tmn.style;
				tmnov.onmouseout = menuhider;
			}
		}
	}
	initialized = true;
	spylog();
}

function change(Name,Image,No) {
	if (initialized)
	{
		document[Name].src = eval(Image + No + ".src");
		var menunumber = parseInt(Name.charAt(7));
		if((isFour)&&(No)&&(menustatus[menunumber] == 'closed'))
		{
			menuovers[menunumber].visibility = 'visible';
			menuovers[menunumber].zIndex = '310';
			menus[menunumber].visibility = 'visible';
			menus[menunumber].zIndex = '300';
			menustatus[menunumber] = 'open';
		}
	}
}	// function change

function clearmenus() {
	if (initialized) {
		change('imgmenu0','nav_prd',0);
		change('imgmenu1','nav_srv',0);
		change('imgmenu2','nav_sup',0);
		change('imgmenu3','nav_com',0);
		if(isFour) {
			for(i=0; i<menus.length; i++) {
				if(menustatus[i] == 'open') {
					menuovers[i].visibility = 'hidden';
					menuovers[i].zIndex = '110';
					menus[i].visibility = 'hidden';
					menus[i].zIndex = '100';
					menustatus[i] = 'closed';
				}
			}
		}
	}
}

function imagerep(imgname, divname){
	if(isFour){
		if (document.layers)
			eval("window.document."+divname+".document['"+imgname+"'].src="+imgname+"over.src");
		else
			eval("document['"+imgname+"'].src="+imgname+"over.src");
		if(divname=="menu0overs") document["imgmenu0"].src = eval("nav_prd2.src");
		if(divname=="menu1overs") document["imgmenu1"].src = eval("nav_srv2.src");
		if(divname=="menu2overs") document["imgmenu2"].src = eval("nav_sup2.src");
		if(divname=="menu3overs") document["imgmenu3"].src = eval("nav_com2.src");
	}
}

function eraseimage(imgname, divname){
	if(isFour) {
		if(document.layers)
			eval("window.document."+divname+".document['"+imgname+"'].src=blank.src");
		else
			eval("document['" + imgname + "'].src = blank.src");
	}
}

function menuhider(evnt) {
	if (initialized)
	{
		if (window.event)
		{
			if (window.event.toElement.className != "menu") clearmenus();
		}
		else if (evnt.target)
				{
					if(evnt.target.id || evnt.target.className != "menu") clearmenus();
				}
	}
}

if (document.images) {

	var pr1over=new Image();
	pr1over.src="art/drop-products-1.gif";
	var pr2over=new Image();
	pr2over.src="art/drop-products-2.gif";
	var pr3over=new Image();
	pr3over.src="art/drop-products-3.gif";
	var pr4over=new Image();
	pr4over.src="art/drop-products-4.gif";
	var pr5over=new Image();
	pr5over.src="art/drop-products-5.gif";
	var pr6over=new Image();
	pr6over.src="art/drop-products-6.gif";
	var pr7over=new Image();
	pr7over.src="art/drop-products-7.gif";
	var pr8over=new Image();
	pr8over.src="art/drop-products-8.gif";
	var pr9over=new Image();
	pr9over.src="art/drop-products-9.gif";

	var se1over=new Image();
	se1over.src="art/drop-services-1.gif";
	var se2over=new Image();
	se2over.src="art/drop-services-2.gif";
	var se3over=new Image();
	se3over.src="art/drop-services-3.gif";
	var se4over=new Image();
	se4over.src="art/drop-services-4.gif";
	var se5over=new Image();
	se5over.src="art/drop-services-5.gif";
	var se6over=new Image();
	se6over.src="art/drop-services-6.gif";
	var se7over=new Image();
	se7over.src="art/drop-services-7.gif";
	var se8over=new Image();
	se8over.src="art/drop-services-8.gif";
	var se9over=new Image();
	se9over.src="art/drop-services-9.gif";

	var su1over=new Image();
	su1over.src="art/drop-support-1.gif";
	var su2over=new Image();
	su2over.src="art/drop-support-2.gif";
	var su3over=new Image();
	su3over.src="art/drop-support-3.gif";
	var su4over=new Image();
	su4over.src="art/drop-support-4.gif";
	var su5over=new Image();
	su5over.src="art/drop-support-5.gif";

	var co1over=new Image();
	co1over.src="art/drop-company-1.gif";
	var co2over=new Image();
	co2over.src="art/drop-company-2.gif";
	var co3over=new Image();
	co3over.src="art/drop-company-3.gif";
	var co4over=new Image();
	co4over.src="art/drop-company-4.gif";
	var co5over=new Image();
	co5over.src="art/drop-company-5.gif";
	var co6over=new Image();
	co6over.src="art/drop-company-6.gif";
	var co7over=new Image();
	co7over.src="art/drop-company-7.gif";
	var co8over=new Image();
	co8over.src="art/drop-company-8.gif";

	var blank=new Image();
	blank.src="art/dot.gif";

	nav_prd0=new Image();
	nav_prd0.src="art/navi-products.gif";
	nav_prd1=new Image();
	nav_prd1.src="art/navi-products-h.gif";
	nav_prd2=new Image();
	nav_prd2.src="art/navi-products-h1.gif";
	nav_srv0=new Image();
	nav_srv0.src="art/navi-services.gif";
	nav_srv1=new Image();
	nav_srv1.src="art/navi-services-h.gif";
	nav_srv2=new Image();
	nav_srv2.src="art/navi-services-h1.gif";
	nav_sup0=new Image();
	nav_sup0.src="art/navi-support.gif";
	nav_sup1=new Image();
	nav_sup1.src="art/navi-support-h.gif";
	nav_sup2=new Image();
	nav_sup2.src="art/navi-support-h1.gif";
	nav_com0=new Image();
	nav_com0.src="art/navi-company.gif";
	nav_com1=new Image();
	nav_com1.src="art/navi-company-h.gif";
	nav_com2=new Image();
	nav_com2.src="art/navi-company-h1.gif";
}
//-->
</script>
