//"button" rollovers
function MM_swapImgRestore() //v3.0
{ 
  var i,x,a=document.MM_sr;
	for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() //v3.0
{ 
  var d=document;
	if(d.images)
	{
		if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments;
		for(i=0; i<a.length; i++)
			if (a[i].indexOf("#")!=0)
			{ 
				d.MM_p[j]=new Image;
				d.MM_p[j++].src=a[i];
			}
	}
}

function MM_findObj(n, d) //v3.0
{ 
  var p,i,x;
	if(!d) d=document;
	if((p=n.indexOf("?"))>0&&parent.frames.length) 
	{
  	d=parent.frames[n.substring(p+1)].document;
		n=n.substring(0,p);
	}
  if(!(x=d[n])&&d.all) x=d.all[n];
	for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	return x;
}

function MM_swapImage()//v3.0
{ 
  var i,j=0,x,a=MM_swapImage.arguments;
	document.MM_sr=new Array;
	for(i=0;i<(a.length-2);i+=3)
	if ((x=MM_findObj(a[i]))!=null)
	{
		document.MM_sr[j++]=x;
		if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];
	}
}

//end

//popup windows
function NewWindow(pageurl,wide,tall,scroll)
{ 
	window.open(pageurl,"popup","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=" + scroll + ",resizable=0,width=" + wide + ",height=" + tall + ",left=25,top=25");
}	
//end

//navigation from pull-down menus
function forward (whichItem)
{
	var whichDest = whichItem[whichItem.selectedIndex].value;
  if (whichDest == "nothing") 
	{
  	whichItem.selectedIndex = 0;
  }
	else 
	{
  	document.location = whichDest; 
  }
} 
//end

HM_DOM = (document.getElementById) ? true : false;
HM_NS4 = (document.layers) ? true : false;
HM_IE = (document.all) ? true : false;
HM_IE4 = HM_IE && !HM_DOM;
HM_Mac = (navigator.appVersion.indexOf("Mac") != -1);
HM_IE4M = HM_IE4 && HM_Mac;
HM_IsMenu = (HM_DOM || HM_NS4 || (HM_IE4 && !HM_IE4M));

HM_BrowserString = HM_NS4 ? "ns4" : HM_DOM ? "dom" : "ie4";

if(window.event + "" == "undefined") event = null;
function HM_f_PopUp(){return false};
function HM_f_PopDown(){return false};
popUp = HM_f_PopUp;
popDown = HM_f_PopDown;

if(HM_IsMenu)
{
	document.write("<SCR" + "IPT LANGUAGE='JavaScript1.2' SRC='menu_arrays.js' TYPE='text/javascript'><\/SCR" + "IPT>");
	document.write("<SCR" + "IPT LANGUAGE='JavaScript1.2' SRC='menu_script_"+ HM_BrowserString +".js' TYPE='text/javascript'><\/SCR" + "IPT>");
}

var ImagesPreloaded = 0;

function ImgOn(menu)
{
	if (document.images && ImagesPreloaded)
	{
		//document.getElementById(menu).src = eval("" + menu + "_on.src");
		eval("document['"+menu+"'].src="+menu+"_on.src")
	}	
}

function ImgOff(menu)
{
	if (document.images && ImagesPreloaded)
	{
		//document.getElementById(menu).src = eval("" + menu + "_on.src");
		eval("document['"+menu+"'].src="+menu+"_off.src")
	}	
}
//end