<?php
    class MobileSnuff{

        private $userAgent;
        private $device;
        private $browser;
        private $deviceLength;
        private $browserLength;
        public function __construct(){
            $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
            $this->userAgent = strtolower($this->userAgent);

            $this->device = array('blackberry','samsung','nokia','sony','lg','htc','motorola','huawei','lenovo','xiaomi','oppo','vivo','oneplus','asus','acer','alcatel','amazon','apple','archos','bq','coolpad','dell','ericsson','fujitsu','garmin','gigabyte','google','hp','htc','huawei','i-mate','i-mobile','innostream','jolla','k-touch','kyocera','lava','leeco','lenovo','lg','maxwest','meizu','micromax','microsoft','mitac','modu','motorola','neonode','niu','nokia','nvidia','oneplus','oppo','orange','palm','panasonic','pantech','philips','plum','posh','qtek','sagem','samsung','sendo','sewon','sharp','siemens','sonim','sony','sonyericsson','spice','tcl','telit','thl','toshiba','unnecto','vertu','verykool','vivo','vk','vodafone','wiko','wnd','xcute','xiaomi','xolo','yota','yu','zte');

            $this->browser = array('mozilla','firefox','opera','chrome','safari','msie','edge','trident','konqueror','lynx','links','elinks','w3m','netscape','galeon','epiphany','skipstone','k-meleon','camino','chimera','phoenix','firebird','icab','konqueror','omniweb','webtv','icab','msn','avant','maxthon','nokia','netfront','teleca','obigo','semc','up.browser','up.link','mmp','symbian','smartphone','midp','wap','vodafone','o2','pocket','kindle','mobile','pda','psp','treo');

            $this->browserLength = count($this->browser);
            $this->deviceLength = count($this->device);
        }

        public function findDevice(){
            for($uaSniff=0; $uaSniff < $this->deviceLength; $uaSniff++){
                if(strstr($this->userAgent, $this->device[$uaSniff])){
                    return $this->device[$uaSniff];
                }
            }
        }

        public function findBrowser(){
            for($uaSniff=0; $uaSniff < $this->browserLength; $uaSniff++){
                if(strstr($this->userAgent, $this->browser[$uaSniff])){
                    return $this->browser[$uaSniff];
                }
            }
        }
    }

$newuser = new MobileSnuff();
$device = $newuser->findDevice();
$browser = $newuser->findBrowser();
?>