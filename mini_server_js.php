// GEEK UNIVERSE MEDIA MINISERVER




window.addEventListener('DOMContentLoaded', function() {



//Declarations


//Arguments to the product object

var jumiaComputingCode = '<a rel=\"nofollow\" href=\"https://kol.jumia.com/api/click/banner/73381c8b-fe24-4f78-80c1-7b5c1a36b170/27adcbb3-1e9a-4fad-9037-28898c07c142\"><img src=\"https://kol.jumia.com/banners/yhBVu9dAUl5PGJUuht08kZcDiMSSbVQib6HDPSY1.jpeg\" alt=\"Computing Category\"/></a>';
var jumiaComputingCountries = ["NG"];

var jumiaMobileCode = '<a rel=\"nofollow\" href=\"https://kol.jumia.com/api/click/banner/73381c8b-fe24-4f78-80c1-7b5c1a36b170/00c4b505-4184-4e90-8005-e241064a8362\"><img src=\"https://kol.jumia.com/banners/boxngzj0nr26fTLg6eVhbLSYGbrWMUpFPucNePmo.gif\" alt=\"Mobile Category\"/></a>';
var jumiaMobileCountries = ["NG"];

var jumiaDealsCode = '<a rel=\"nofollow\" href=\"https://kol.jumia.com/api/click/banner/73381c8b-fe24-4f78-80c1-7b5c1a36b170/0501f890-9972-4837-ac84-e0f538776810\"><img src=\"https://kol.jumia.com/banners/LjdiHkT7pZeeCGhpO4chShlGFmAGhYC8TuhFcIJn.jpeg\" alt=\"Deal of the day\"/></a>';
var jumiaDealsCountries = ["NG"];

var betterWorldCode = '<a rel=\"nofollow\" href=\"https://www.kqzyfj.com/click-100222216-10860792\" target=\"_blank\"><img src=\"https://www.tqlkg.com/image-100222216-10860792\" width=\"468\" height=\"60\" alt=\"Great deals on used books.\" border=\"0\"/></a>';
var betterWorldCountries = ["worldwide"];

var curiosityStreamCode = '<a rel=\"nofollow\" href=\"https://www.dpbolvw.net/click-100222216-14504831\" target=\"_blank\"><img src=\"https://www.awltovhc.com/image-100222216-14504831\" width=\"160\" height=\"600\" alt=\"\" border=\"0\"/></a>';
var curiosityStreamCountries = ["AU", "CA", "SG", "GB", "US"];

var examEdgeCode = '<a rel=\"nofollow\" href=\"https://www.jdoqocy.com/click-100222216-13272867\" target=\"_blank\"><img src=\"https://www.lduhtrp.net/image-100222216-13272867\" width=\"300\" height=\"250\" alt=\"Exam Edge Home page\" border=\"0\"/></a>';
var examEdgeCountries = ["AU", "CA", "GU", "IN", "IL", "KR", "MX", "PH", "PR", "QA", "SA", "AE", "GB", "US", "VI"];

var gamersGateCode = '<a rel=\"nofollow\" href=\"https://www.dpbolvw.net/click-100222216-10715123\" target=\"_blank\"><img src=\"https://www.awltovhc.com/image-100222216-10715123\" width=\"180\" height=\"150\" alt=\"GamersGate - Buy and download games for PC and\" border=\"0\"/></a>';
var gamersGateCountries = ["worldwide"];

var greenManCode = '<a rel=\"nofollow\" href=\"https://www.dpbolvw.net/click-100222216-15036659\" target=\"_blank\"><img src=\"https://www.awltovhc.com/image-100222216-15036659\" width=\"640\" height=\"1136\" alt=\"Pre-Purchase Life is Strange: True Colors for PC at Green Man Gaming\" border=\"0\"/></a>';
var greenManCountries = ["worldwide"];

var hushedAppCode = '<a rel=\"nofollow\" href=\"https://www.anrdoezrs.net/click-100222216-14562722\" target=\"_blank\"><img src=\"https://www.ftjcfx.com/image-100222216-14562722\" width=\"1200\" height=\"628\" alt=\"\" border=\"0\"/></a>';
var hushedAppCountries = ["CA", "FR", "DE", "ES", "GB", "US"];

var kinguinSoftwareCode = '<a rel=\"nofollow\" href=\"https://www.anrdoezrs.net/click-100222216-15010517\" target=\"_blank\"><img src=\"https://www.awltovhc.com/image-100222216-15010517\" width=\"300\" height=\"300\" alt=\"Get New Games Cheaper Hottest Deals!\" border=\"0\"/></a>';
var kinguinSoftwareCountries = ["worldwide"];

var kinguinGameCode = '<a rel=\"nofollow\" href=\"https://www.kqzyfj.com/click-100222216-12193128\" target=\"_blank\"><img src=\"https://www.tqlkg.com/image-100222216-12193128\" width=\"300\" height=\"250\" alt=\"Kinguin.net - Save on Every Game!\" border=\"0\"/></a>';
var kinguinGameCountries = ["worldwide"];

var kiwiCoCode = '<a rel=\"nofollow\" href=\"https://www.anrdoezrs.net/click-100222216-14088604\" target=\"_blank\"><img src=\"https://www.ftjcfx.com/image-100222216-14088604\" width=\"301\" height=\"250\" alt=\"\" border=\"0\"/></a>';
var kiwiCoCountries = ["AU", "CA", "FR", "DE", "GB", "US"];

var restoroCode = '<a rel=\"nofollow\" href=\"https://www.jdoqocy.com/click-100222216-14102150\" target=\"_blank\"><img src=\"https://www.awltovhc.com/image-100222216-14102150\" width=\"300\" height=\"600\" alt=\"\" border=\"0\"/></a>';
var restoroCountries = ["AU", "AT", "BE", "CA", "DK", "FI", "FR", "DE", "IE", "IT", "JP", "NL", "NO", "ES", "SE", "CH", "GB", "US"];

var silverGoldCode = '<a rel=\"nofollow\" href=\"https://www.kqzyfj.com/click-100222216-11016257\" target=\"_blank\"><img src=\"https://www.tqlkg.com/image-100222216-11016257\" width=\"300\" height=\"250\" alt=\"Preserve your wealth! SilverGoldBull.com\" border=\"0\"/></a>';
var silverGoldCountries = ["CA", "US"];


//The product object
function product(name,code,countries) {
    this.name = name;
    this.code = code;
    this.countries = countries;
}


//The specific product instances

var jumiaComputing = new product("jumiaComputing", jumiaComputingCode, jumiaComputingCountries);

var jumiaMobile = new product("jumiaMobile", jumiaMobileCode, jumiaMobileCountries);

var jumiaDeals = new product("jumiaDeals", jumiaDealsCode, jumiaDealsCountries);

var betterWorld = new product("betterWorld", betterWorldCode, betterWorldCountries);

var curiosityStream = new product("curiosityStream", curiosityStreamCode, curiosityStreamCountries);

var examEdge = new product("examEdge", examEdgeCode, examEdgeCountries);

var gamersGate = new product("gamersGate", gamersGateCode, gamersGateCountries);

var greenMan = new product("greenMan", greenManCode, greenManCountries);

var hushedApp = new product("hushedApp", hushedAppCode, hushedAppCountries);

var kinguinSoftware = new product("kinguinSoftware", kinguinSoftwareCode, kinguinSoftwareCountries);

var kinguinGame = new product("kinguinGame", kinguinGameCode, kinguinGameCountries);

var kiwiCo = new product("kiwiCo", kiwiCoCode, kiwiCoCountries);

var restoro = new product("restoro", restoroCode, restoroCountries);

var silverGold = new product("silverGold", silverGoldCode, silverGoldCountries);


//Array of inserts
var miniServerInserts = [betterWorld, curiosityStream, examEdge, gamersGate, greenMan, hushedApp, kinguinSoftware, kinguinGame, kiwiCo, restoro, silverGold];


//Fuction that removes products from insert lists
function removeFromInserts(product) {
    miniServerInserts = miniServerInserts.filter(function(value, index, arr){ return value != product; });
}


<?php
// Extract and store IP  
function getVisIpAddr() { 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
$ip = getVisIPAddr(); 

// Get country from IP
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 

$country = $ipdat->geoplugin_countryCode;
$continent = $ipdat->geoplugin_continentCode;
?>

//Get country code from IP
var country = "<?php echo($country); ?>";
var continent = "<?php echo($continent); ?>";




//Logic


//Nigerian inserts
if (country == "NG") {
    miniServerInserts = [jumiaComputing, jumiaMobile, jumiaDeals, betterWorld, gamersGate, greenMan, kinguinSoftware, kinguinGame];
}

//American and Canadian inserts
else {
    if ((country != "US") || (country != "CA")) {
        removeFromInserts(silverGold);
        
        //Everyone else
        miniServerInserts.forEach(
            function(i) {
                if ((i.countries.indexOf(country) == -1) && (i.countries.indexOf("worldwide") != -1)) {
                    removeFromInserts(i);
                    
                }
                
            });
        
        //Make sure KiwiCo is included if user resides in Asia
        if ((miniServerInserts.indexOf(kiwiCo) == -1) && (continent == "AS")) {
            miniServerInserts.push(kiwiCo);
        }
    }
}



//Render inserts to screen


var paragraphs = document.getElementsByClassName("mini-server");

var noOfInserts = paragraphs.length;

for(p=0; p<noOfInserts; p++) {
    var insertCode = miniServerInserts[Math.floor(Math.random() * miniServerInserts.length)].code;
    paragraphs[p].innerHTML = insertCode;
    }
});