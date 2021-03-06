<?php
/*
   Usage:
   include("browser.php");
   $bd = new BrowserDetector;

   Variables:
   $bd->BROWSER         // Netscape, MSIE, Opera
   $bd->PLATFORM        // Win,Mac,Unix
   $bd->VERSION         // MajorVersion.MinorVersion
   $bd->MAJORVER        // Major Version (before . in version string)
   $bd->MINORVER        // Minor Version (after . in version string)
*/ 

class BrowserDetector
{  var $UA         =   "";
   var $BROWSER    =   "Unknown";
   var $PLATFORM   =   "Unknown";
   var $VERSION    =   "";
   var $MAJORVER   =   "";
   var $MINORVER   =   "";

    /* START CONSTRUCTOR */ 
   function BrowserDetector()
   {  $this->UA   =  getenv('HTTP_USER_AGENT');
      $preparens  =   "";
      $parens     =   "";
      $postparens =   "";
      $i = strpos($this->UA, "(");
      if ($i >= 0)
      {  $preparens  = trim(substr($this->UA,0,$i));
         $parensTMP     = substr($this->UA,$i+1,strlen($this->UA));
         $j = strpos($parensTMP, ")");
         if($j>=0)
         {  $parens     = substr($parensTMP,0,$j);
            $postparens = trim(substr($parensTMP,$j+1,strlen($parensTMP)));
         }
      }
      else
      {  $preparens = $this->UA;
      }
      $browVer =  $preparens;
      $token  =  trim(strtok($parens, ";"));
      while($token)
      {  if($token== "compatible")
         {
         }
         elseif(eregi( "MSIE", "$token"))
         {  $browVer = $token;
         }
         elseif(eregi( "Opera", "$token"))
         {  $browVer = $token;
         }
         elseif(eregi( "X11", "$token") || eregi( "SunOS", "$token") || eregi( "Linux", "$token"))
         {  $this->PLATFORM   =   "Unix";
         }
         elseif(eregi( "Win", "$token"))
         {  $this->PLATFORM   =  $token;
         }
         elseif(eregi( "Mac", "$token") || eregi( "PPC", "$token"))
         {  $this->PLATFORM   =  $token;
         }
         $token = strtok( ";");
      }
      $msieIndex  =  strpos($browVer, "MSIE");
      if($msieIndex >= 0)
      {  $browVer =  substr($browVer,$msieIndex,strlen($browVer));
      }
      $leftover   =   "";
      if(substr($browVer,0,strlen( "Mozilla")) ==  "Mozilla")
      {  $this->BROWSER =   "Netscape";
         $leftover=substr($browVer,strlen( "Mozilla")+1,strlen($browVer));
      }
      elseif(substr($browVer,0,strlen( "Lynx")) ==  "Lynx")
      {  $this->BROWSER =   "Lynx";
         $leftover=substr($browVer,strlen( "Lynx")+1,strlen($browVer));
      }
      elseif(substr($browVer,0,strlen( "MSIE")) ==  "MSIE")
      {  $this->BROWSER =   "IE";
         $leftover=substr($browVer,strlen( "MSIE")+1,strlen($browVer));
      }
      elseif(substr($browVer,0,strlen( "Microsoft Internet Explorer")) ==  "Microsoft Internet Explorer")
      {  $this->BROWSER =   "IE";
         $leftover=substr($browVer,strlen( "Microsoft Internet Explorer")+1,strlen($browVer));
      }
      elseif(substr($browVer,0,strlen( "Opera")) ==  "Opera")
      {  $this->BROWSER =   "Opera";
         $leftover=substr($browVer,strlen( "Opera")+1,strlen($browVer));
      }
      elseif(substr($browVer,0,strlen( "iCab")) ==  "iCab")
      {  $this->BROWSER =   "iCab";
         $leftover=substr($browVer,strlen( "iCab")+1,strlen($browVer));
      }
      $leftover = trim($leftover);
       /* CHECK FOR OPERA BROWSERS BELOW VERSION 4.0 */ 
      if(!empty($postparens))
      {  if(substr($postparens,0,strlen( "Opera")) ==  "Opera")
         {  $this->BROWSER =  "Opera";
            $v  = trim(substr($postparens,strlen( "Opera")+1,strlen($postparens)));
            $v  = trim(substr($v,0,strpos($v, " ")));
            $leftover = $v;
         }
      }
       /* CHECK FOR NETSCAPE 6 PREVIEW RELEASES */ 
      if(!empty($postparens))
      {  if(eregi( "Netscape6",$postparens))
         {  $this->BROWSER =  "Netscape";
            $i = strpos($postparens, "Netscape6");
            if($i >= 0)
            {  $v  = trim(substr($postparens,$i+strlen( "Netscape6")+1,strlen($postparens)));
               $leftover = $v;
            }
         }
      }
      $i=strpos($leftover, " ");
      if($i > 0)
      {  $this->VERSION = substr($leftover,0,$i);
      }
      else
      {  $this->VERSION = $leftover;
      }
      $j = strpos($this->VERSION, ".");
      if($j >= 0)
      {  $this->MAJORVER = substr($this->VERSION,0,$j);
         $this->MINORVER = substr($this->VERSION,$j+1,strlen($this->VERSION));
      }
      else
      {  $this->MAJORVER = $this->VERSION;
      }
   }
}
?> 