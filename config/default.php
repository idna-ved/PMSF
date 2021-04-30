<?php

//======================================================================
// DO NOT EDIT THIS FILE!
//======================================================================

//======================================================================
// PMSF - DEFAULT CONFIG FILE
// https://github.com/pmsf/PMSF
//======================================================================
if (!isset($_SESSION)) {
    session_start();
}
require 'vendor/autoload.php';
require_once(__DIR__ . '/../utils.php');


$libs[] = "Scanner.php";
$libs[] = "RDM.php";
$libs[] = "RocketMap.php";
$libs[] = "RocketMap_MAD.php";
$libs[] = "search/Search.php";
$libs[] = "search/Search.rdm.php";
$libs[] = "search/Search.rocketmap_mad.php";
$libs[] = "submit/Submit.php";
$libs[] = "submit/Manual.php";
$libs[] = "submit/Submit.rdm.php";
$libs[] = "submit/Submit.rocketmap_mad.php";
$libs[] = "Manual.php";

// Include libraries
foreach ($libs as $file) {
    include(__DIR__ . '/../lib/' . $file);
}
setSessionCsrfToken();

//-----------------------------------------------------
// MAP SETTINGS
//-----------------------------------------------------

/* Location Settings */

$startingLat = 52.084992;                                           // Starting latitude
$startingLng = 5.302366;                                            // Starting longitude

/* Zoom and Cluster Settings */

$maxLatLng = 1;                                                     // Max latitude and longitude size (1 = ~110km, 0 to disable)
$defaultZoom = 16;                                                  // Default zoom level for first time users.
$maxZoomOut = 0;                                                    // Max zoom out level (11 ~= $maxLatLng = 1, 0 to disable, lower = the further you can zoom out)
$maxZoomIn = 18;                                                    // Max zoom in level 18, higher values will be loaded from level 18 and auto-scaled
$disableClusteringAtZoom = 15;                                      // Disable clustering above this value. 0 to disable
$zoomToBoundsOnClick = 15;                                          // Zoomlevel on clusterClick
$maxClusterRadius = 30;                                             // The maximum radius that a cluster will cover from the central marker (in pixels).
$spiderfyOnMaxZoom = 'true';                                        // Spiderfy cluster markers on click

/* Boundaries */
$noBoundaries = true;                                               // Enable/Disable boundaries to pull data from. Requires $boundaries to be set.
$showPokemonsOutsideBoundaries = false;
$showGymsOutsideBoundaries = false;
$showSpawnsOutsideBoundaries = false;
$showStopsOutsideBoundaries = false;
$boundaries = '51.9258236369112 5.4520494625403,
               51.8982915107015 5.4808885738685,
               51.8715904160174 5.4630357906653,
               51.8525084938523 5.4211504146888,
               51.8427523855973 5.3504259273841,
               51.8448734585841 5.2645952389075,
               51.8635345916882 5.1952440426185,
               51.9033756353006 5.2254564449622,
               51.9304812498708 5.4032976314857,
               51.9258236369112 5.4520494625403';

/* Anti scrape Settings */
$enableCsrf = true;                                                 // Don't disable this unless you know why you need to :)
$sessionLifetime = 43200;                                           // Session lifetime, in seconds
$blockIframe = true;                                                // Block your map being loaded in an iframe

/* Map Title + Language */

$title = "PMSF Alt";                                                // Title to display in title bar
$headerTitle = "POGOmap";                                           // Title to display in header
$locale = "en";                                                     // Display language
$noLocaleSelection = false;
$enLocaleFlag = "us";                                               // Change country flag for english in the language changer

/* Info Modal */
$noInfoModal = true;                                                // Hide infomodal and button
$infoModalTitle = 'Info';                                           // Infomodal title
$infoModalContent = 'Your text info here';                          // HTML markup allowed (external html file load $infoModalContent = file_get_contents('custom/modal.html');

/* Loading screen */

$noLoadingScreen = false;                                           // show loading animation while main page loads.
$loadingStyle = '';                                                 // Leave blank for default loading icon. Use '<IMG SRC=static/images/pokeball2.gif>'
                                                                    // for pokeball or custom gif for animated gif; or use your own html.
/* Google Maps key is ONLY USED FOR TILE LAYERS */

$gmapsKey = "";

/* Favicon */
$faviconPath = '';                                                  // Upload favicon.ico to custom folder, leave '' for empty ( $faviconPath = 'custom/favicon.ico'; )
$appIconPath = 'static/appicons/';

/* Custom Overlay */
$letItSnow = true;                                                  // Show snow overlay at 24, 25 and 26 December
$makeItBang = true;                                                 // Show fireworks overlay at 31 December and 1 January
$showYourLove = true;

/* Google Analytics */

$gAnalyticsId = "";                                                 // "" for empty, "UA-XXXXX-Y" add your Google Analytics tracking ID

/* Piwik Analytics */

$piwikUrl = "";
$piwikSiteId = "";

/* Cookie Disclamer */
$noCookie = true;                                                   // Display a Cookie Disclamer

/* header urls */
$paypalUrl = "";                                                    // PayPal donation URL, leave "" for empty
$discordUrl = "https://discord.gg/INVITE_LINK";                     // Discord URL, leave "" for empty
$whatsAppUrl = "";                                                  // WhatsApp URL, leave "" for empty
$telegramUrl = "";                                                  // Telegram URL, leave "" for empty
$patreonUrl = "";                                                   // Patreon URL, leave "" for empty
$customUrl = "";                                                    // Custom URL, leave "" for empty
$customUrlFontIcon = "far fa-smile-beam";                           // Choose a custom icon on: https://fontawesome.com/icons?d=gallery&m=free

/* Worldopole */

$worldopoleUrl = "";                                                // Link to Worldopole, leave "" for empty

/* StatsToggle */
$noStatsToggle = false;                                             // Enables or disables the stats button in the header.

/* MOTD */
$noMotd = true;
$showMotdOnlyOnce = false;
$motdTitle = "";
$motdContent = "";

/* Share links */
$noWhatsappLink = true;

/* IMGBB API */
$imgurCID = "";

/* Counts */
$numberOfPokemon = 721;
$numberOfItem = 1600;
$numberOfGrunt = 510;
$numberOfEgg = 12;

/* UserTimezone */
$userTimezone = date_default_timezone_get();
//-----------------------------------------------------
// Login  - You need to create the two tables referenced in sql.sql
//-----------------------------------------------------
$monologPath = 'php://stdout';
$useLoginCookie = false;                                            // Use cookie to restore session after browser is closed.
$forcedLogin = false;                                               // Users will be forced to login before entering the map.
$allowMultiLogin = false;                                           // Allow users to login with multiple devices simulteously.
$noNativeLogin = true;                                              // true/false - This will enable the built in login system.
$domainName = '';                                                   // If this is empty, reset-password emails will use the domain name taken from the URL.

$noDiscordLogin = true;                                             // true/false - This will enable login through discord.
                                                                    // 1. Create a discord bot here -> https://discordapp.com/developers/applications/me
                                                                    // 2. Install composer with "apt-get install composer".
                                                                    // 3. Navigate to your website's root folder and type "composer install" to install the dependencies.
                                                                    // 4. Add your callback-page as a REDIRECT URI to your discord bot. Should be the same as $discordBotRedirectUri.
                                                                    // 5. Enter Client ID, Client Secret and Redirect URI below.
$discordBotClientId = 0;
$discordBotClientSecret = "";
$discordBotRedirectUri = "https://Yourdomain.com/login?callback=discord";
$discordBotToken = "";
$discordLogLevel = "INFO";                                          // Do NOT change unless asked

$guildRoles = [];

$noFacebookLogin = true;
$facebookAppId = '';                                                          // Facebook App ID
$facebookAppSecret = '';                                                      // Facebook App Secret
$facebookAppRedirectUri = 'https://Yourdomain.com/login?callback=facebook';   // Callback url make sure this is the same as set in Facebook app config
$facebookAccessLevel = '1';                                                   // Accesslevel used in access-config.php

$noGroupmeLogin = true;
$groupmeClientId = '';
$groupmeCallbackUri = 'https://Yourdomain.com/login?callback=groupme';
$groupmeAccessLevel = '1';

$noPatreonLogin = true;
$patreonClientId = '';
$patreonCreatorAccessToken = '';
$patreonClientSecret = '';
$patreonCallbackUri = 'https://Yourdomain.com/login?callback=patreon';

$patreonTierRequired = true;                                                  // Member must have pledged set to false to allow any patreon user to log in.
$patreonTiers = [];                                                           // Tier ids can be obtained by clicking the join tier button on patreon and the URL will show you checkout?rid=<NUMBER>

$adminUsers = array('admin@example.com', 'Superadmin#13337');                 // You can add multiple admins by adding them to the array.

/* Blacklist Settings - Only available with Discord login */
$userBlacklist = [''];                                                        // Array of user ID's that are always blocked from accessing the map
$userWhitelist = [''];                                                        // Array of user ID's that's allowed to bypass the server blacklist
$serverBlacklist = [''];                                                      // Array of server ID's. A user that's a member of any of these and not in your user whitelist will be blocked
$logFailedLogin = '';                                                         // File location of where to store a log file of blocked users

//-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noExcludeMinIV = true;                                        // true/false
$noMinIV = true;                                               // true/false
$noMinLevel = true;                                            // true/false
$noHighLevelData = true;                                       // true/false
$noCatchRates = false;
$noRarityDisplay = false;                                      // true/false
$noWeatherIcons = true;
$no100IvShadow = false;
$noHideSingleMarker = false;

/* Notification Settings */
$noNotifyPokemon = false;                                      // true/false
$noNotifyRarity = false;                                       // true/false
$noNotifyIv = false;                                           // true/false
$noNotifyLevel = false;                                        // true/false
$noNotifyRaid = false;                                         // true/false
$noNotifySound = false;                                        // true/false
$noCriesSound = false;                                         // true/false
$noNotifyBounce = false;                                       // true/false
$noNotifyNotification = false;                                 // true/false

/* Style Settings */
$iconNotifySizeModifier = 15;                                  // 0, 15, 30, 45

/* Marker Settings */

$noPokemon = false;                                            // true/false
$enablePokemon = 'true';                                       // true/false
$noPokemonNumbers = false;                                     // true/false
$noHidePokemon = false;                                        // true/false
$hidePokemon = '[]';                                           // [] for empty
$hidePokemonCoords = false;                                    // true/false

$excludeMinIV = '[]';                                          // [] for empty

$minIV = '0';                                                  // "0" for empty or a number
$minLevel = '0';                                               // "0" for empty or a number

$noBigKarp = false;
$noTinyRat = false;

$noGyms = false;                                               // true/false
$enableGyms = 'false';                                         // true/false
$hideGymCoords = false;
$noExEligible = false;                                         // true/false
$exEligible = 'false';                                         // true/false
$noTeams = false;
$noInBattle = false;
$noOpenSpot = false;
$noMinMaxFreeSlots = false;
$noLastScan = false;

$noRaids = false;                                              // true/false
$enableRaids = 'false';                                        // true/false
$noActiveRaids = true;
$activeRaids = 'false';                                        // true/false
$noMinMaxRaidLevel = true;
$minRaidLevel = 1;
$maxRaidLevel = 6;
$noRaidTimer = false;                                          // true/false
$enableRaidTimer = 'false';                                    // true/false
$noRaidbossNumbers = false;
$hideRaidboss = '[]';
$excludeRaidboss = [];
$noRaideggNumbers = false;
$hideRaidegg = '[]';
$excludeRaidegg = [];
$generateExcludeRaidboss = true;

$noPokestops = false;                                          // true/false
$enablePokestops = 'false';                                    // true/false
$hidePokestopCoords = false;
$noAllPokestops = false;
$enableAllPokestops = 'false';

$noLures = false;                                              // true/false
$enableLured = 'false';                                        // true/false

$noTeamRocket = false;
$noTeamRocketTimer = false;                                    // true/false
$enableTeamRocketTimer = 'false';                              // true/false
$enableTeamRocket = 'false';
$noTeamRocketEncounterData = true;
$noGrunts = false;
$noGruntNumbers = false;
$hideGrunts = '[]';
$excludeGrunts = [];
$generateExcludeGrunts = true;

$noQuests = true;                                              // true/false
$enableQuests = 'false';                                       // true/false
$noQuestsItems = false;
$noQuestsPokemon = false;
$noQuestsEnergy = false;
$hideQuestsPokemon = '[]';                                     // Pokemon ids
$generateExcludeQuestsPokemon = true;
$generateExcludeQuestsItem = true;
$generateExcludeQuestsEnergy = true;
$excludeQuestsPokemon = [];                                    // Pokemon ids
$hideQuestsItem = '[4, 5, 301, 401, 402, 403, 404, 501, 602, 603, 604, 702, 704, 708, 801, 901, 902, 903, 1001, 1002, 1401, 1402, 1403, 1404, 1405]';
                                                               // Item ids "See protos https://github.com/Furtif/POGOProtos/blob/master/src/POGOProtos/Inventory/Item/ItemId.proto"
$excludeQuestsItem = [4, 5, 301, 401, 402, 403, 404, 501, 602, 603, 604, 702, 704, 708, 801, 901, 902, 903, 1001, 1002, 1401, 1402, 1403, 1404, 1405];
$noItemNumbers = true;                                         // true/false
$defaultDustAmount = 500;
$hideQuestsEnergy = '[]';
$excludeQuestsEnergy = [];

/* Manual quest hide options */
$hideQuestTypes = [0, 1, 2, 3, 12, 18, 19, 22, 24, 25];
$hideRewardTypes = [0, 1, 4, 5, 6];
$hideConditionTypes = [0, 4, 5, 11, 12, 13, 16, 17, 19, 20];

/* Manual quest show options */
$showEncounters = [201];
$showItems = [1, 2, 3, 101, 102, 103, 104, 201, 202, 701, 703, 705, 706, 707, 1301];

$noSpawnPoints = true;                                         // true/false
$enableSpawnPoints = 'false';                                  // true/false

$noRanges = false;                                             // true/false
$enableRanges = 'false';                                       // true/false

$noScanPolygon = true;
$enableScanPolygon = 'false';
$geoJSONfile = 'custom/scannerarea.json';                      // path to geoJSON file create your own on http://geojson.io/ adjust filename

$noLiveScanLocation = true;                                    // Show scan devices on the map
$enableLiveScan = 'false';
$hideDeviceAfterMinutes = 0;                                   // Hide scan devices from map after x amount of minutes not being updated in database. 0 to disable.
$deviceOfflineAfterSeconds = 300;                              // Mark scan devices offline (red color) after x amount of seconds not being updated in database.

$hideDeleted = true;
/* Location & Search Settings */

$noSearchLocation = false;                                     // true/false

$noStartMe = false;                                            // true/false
$enableStartMe = 'false';                                      // true/false

$noStartLast = false;                                          // true/false
$enableStartLast = 'false';                                    // true/false

$noFollowMe = false;                                           // true/false
$enableFollowMe = 'false';                                     // true/false

$noSpawnArea = false;                                          // true/false
$enableSpawnArea = 'false';                                    // true/false

/* Notification Settings */

$notifyPokemon = '[]';                                         // [] for empty
$notifyRarity = '[]';                                          // "Common", "Uncommon", "Rare", "Very Rare", "Ultra Rare"
$notifyIv = '""';                                              // "" for empty or a number
$notifyLevel = '""';                                           // "" for empty or a number
$notifyRaid = 5;                                               // O to disable
$notifySound = 'false';                                        // true/false
$criesSound = 'false';                                         // true/false
$notifyBounce = 'true';                                        // true/false
$notifyNotification = 'true';                                  // true/false

/* Style Settings */
$noDarkMode = false;

$copyrightSafe = true;
$noCostumeIcons = true;                                        // Set to true if you $iconRepository doesnt support costume icons. true/false
$iconRepository = 'https://raw.githubusercontent.com/whitewillem/PogoAssets/resized/icons_large/';
$noMultipleRepos = true;
$iconRepos = [["Standard","$iconRepository"]];

/* Custom Tileserver. Only tested with https://github.com/123FLO321/SwiftTileserverCache */

$noCustomTileServer = true;                                         // Enable/Disable Custom TileServer
$customTileServerAddress = "";                                      // TileServer URL: http://ipAddress:port/tile/klokantech-basic/{z}/{x}/{y}/1/png

$noMapStyle = false;                                           // true/false
$mapStyle = 'openstreetmap';                                   // Set default Map Style
$forcedTileServer = false;

$mapStyleList = [
    "openstreetmap" => [
        "name" => "OpenStreetMap",
        "url" => "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "darkmatter" => [
        "name" => "Dark Matter",
        "url" => "https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png",
        "key" => "",
        "attribution" => "&copy; <a href='https://carto.com/'>Carto</a>",
        "maxnativezoom" => 18
    ],
    "styletopo" => [
        "name" => "ToPo Map",
        "url" => "https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "stylesatellite" => [
        "name" => "Satellite",
        "url" => "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
        "key" => "",
        "attribution" => "Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community",
        "maxnativezoom" => 18
    ],
    "googlemapssat" => [       // DO NOT CHANGE
        "name" => "Google Maps Satellite",
        "url" => "",
        "key" => "",
        "attribution" => "",
        "maxnativezoom" => null
    ],
    "googlemapsroad" => [      // DO NOT CHANGE
        "name" => "Google Maps Roadmap",
        "url" => "",
        "key" => "",
        "attribution" => "",
        "maxnativezoom" => null
    ],
    "mapbox" => [
        "name" => "Mapbox Streets",
        "url" => "https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/256/{z}/{x}/{y}?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "mapboxDark" => [
        "name" => "Mapbox Dark",
        "url" => "https://api.mapbox.com/styles/v1/mapbox/dark-v10/tiles/256/{z}/{x}/{y}?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "mapboxPogoDynamic" => [
        "name" => "Mapbox Pokémon Go Dynamic",
        "url" => "",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => null
    ],
    "mapboxPogo" => [
        "name" => "Mapbox Pokémon Go",
        "url" => "https://api.mapbox.com/styles/v1/anonymous89/ck2uz9d5t09qm1cl66b9giwun/tiles/256/{z}/{x}/{y}@2x?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "mapboxPogoDark" => [
        "name" => "Mapbox Pokémon Go Dark",
        "url" => "https://api.mapbox.com/styles/v1/anonymous89/ck2xw3j6h0e0v1dqtlcx9c4od/tiles/256/{z}/{x}/{y}@2x?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "tileserver" => [
        "name" => "Tileserver",
        "url" => "",
        "key" => "",
        "attribution" => "Tileserver",
        "maxnativezoom" => 18
    ],
];


$noDirectionProvider = false;                                  // true/false
$directionProvider = 'google';                                 // google, waze, apple, bing, google_pin

$noIconSize = false;                                           // true/false
$iconSize = 0;                                                 // -8, 0, 10, 20

$noIconNotifySizeModifier = false;                             // true/false | Increase size of notified Pokemon

$noGymStyle = false;                                           // true/false
$gymStyle = 'ingame';                                          // ingame, shield

$noLocationStyle = false;                                      // true/false
$locationStyle = 'none';                                       // none, google, red, red_animated, blue, blue_animated, yellow, yellow_animated, pokesition, pokeball

$triggerGyms = '[]';                                           // Add Gyms that the OSM-Query doesn't take care of like '["gym_id", "gym_id"]'
$onlyTriggerGyms = false;                                      // Only show EX-Gyms that are defined in $triggerGyms
$noExGyms = false;                                             // Do not display EX-Gyms on the map

//-----------------------------------------------------
// Manual Submissions
//-----------------------------------------------------
$noSubmit = true;
$hideIfManual = false;
$noManualRaids = true;
$noManualPokemon = true;
$pokemonTimer = 900;                                           // Time in seconds before a submitted Pokémon despawns.
$noManualGyms = true;
$noRenameGyms = true;
$noManualPokestops = true;
$noRenamePokestops = true;
$noConvertPokestops = true;
$noManualQuests = true;

//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------
$enablePortals = 'false';
$enableNewPortals = 0;                                         // O: all, 1: new portals only
$noPortals = true;
$noDeletePortal = true;
$noConvertPortal = true;
$markPortalsAsNew = 86400;                                     // Time in seconds to mark new imported portals as new ( 86400 for 1 day )
//-----------------------------------------------------
// s2 cells
//-----------------------------------------------------
$noS2Cells = true;
$enableS2Cells = 'false';
$enableLevel13Cells = 'false';
$enableLevel14Cells = 'false';
$enableLevel17Cells = 'false';

$s2Colors = [
    'red',          // pokestop placement cell with a marker
    'green',        // 1 more until new gym
    'orange',       // 2 more until new gym
    'black'         // Max amount of gyms reached
];
//-----------------------------------------------------
// POI
//-----------------------------------------------------
$noPoi = true;
$noAddPoi = true;
$enablePoi = 'false';
$noDeletePoi = true;
$noEditPoi = true;
$noMarkPoi = true;

$noDiscordSubmitLogChannel = true;                             // Send webhooks to discord channel upon submission

$pokemonReportTime = false;
$pokemonToExclude = [];

$noDeleteGyms = true;
$noToggleExGyms = true;
$noDeletePokestops = true;

$raidBosses = [];

$sendWebhook = false;
$webhookUrl = null;                                            //['url-1','url-2']
//---------------------------------------------------
// Quest Webhooks
//---------------------------------------------------
$sendQuestWebhook = false;                                     // Experimental use only
$questWebhookUrl = null;                                       // Experimental use only
$webhookSystem = [''];                                         // Supported are either 'pokealarm' or 'poracle'

$manualFiveStar = [
    'webhook' => false,
    'pokemon_id' => 391,
    'cp' => 0,
    'move_1' => null,
    'move_2' => null,
    'form' => 0
];

//-----------------------------------------------------
// Search
//-----------------------------------------------------

$noSearch = false;
$noSearchPokestops = true;
$noSearchGyms = false;
$noSearchManualQuests = false;
$noSearchNests = true;
$noSearchPortals = true;
$noSearchPokemon = true;
$defaultUnit = "km";                                           // mi/km
$maxSearchResults = 10;
$maxSearchNameLength = 0;                                      // 0 = Unlimited. Shorten pokestop names in reward search results if longer than this value to prevent UI layout issues
//-----------------------------------------------------
// Community
//-----------------------------------------------------
$noCommunity = true;
$enableCommunities = 'false';
$noAddNewCommunity = true;
$noDeleteCommunity = true;
$noEditCommunity = true;
//-----------------------------------------------------
// Nests
//-----------------------------------------------------
$noNests = true;                                               // true/false
$noNestsAvg = true;                                            // true/false
$nestAvgMax = 50;
$nestAvgDefault = 5;
$enableNests = 'false';                                        // true/false
$hideNestCoords = false;
$noManualNests = true;
$noDeleteNests = true;
$deleteNestsOlderThan = 42;                                    // days after not updated nests are removed from database by nest cron
$nestBotName = "NestBot";
$migrationDay = strtotime('5 April 2018');                     // Adjust day value after non consitent 14 day migration
$noAddNewNests = false;
$excludeNestMons = [2,3,5,6,8,9,11,12,14,15,17,18,20,22,24,26,28,29,30,31,32,33,34,36,38,40,42,44,45,49,51,53,55,57,59,61,62,64,65,67,68,70,71,73,75,76,78,80,82,83,85,87,88,89,91,93,94,97,99,101,103,105,106,107,108,109,110,112,113,114,115,117,119,121,122,128,130,131,132,134,135,136,137,139,142,143,144,145,146,147,148,149,150,151,153,154,156,157,159,160,161,162,163,164,165,166,167,168,169,171,172,173,174,175,176,177,178,179,180,181,182,183,184,186,187,188,189,191,192,194,195,196,197,199,201,204,205,207,208,210,212,214,217,218,219,221,222,223,224,225,228,229,230,232,233,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,253,254,256,257,259,260,262,263,264,265,266,267,268,269,270,271,272,274,275,276,277,279,280,281,282,284,286,287,288,289,290,291,292,293,294,295,297,298,301,303,304,305,306,308,310,313,314,316,317,319,321,323,324,326,327,328,329,330,331,332,334,335,336,337,338,339,340,342,344,346,348,349,350,351,352,354,356,357,358,359,360,361,362,363,364,365,366,367,368,369,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386];

$noNestPolygon = true;
$enableNestPolygon = 'false';
$nestGeoJSONfile = '';                                         // path to geoJSON file provided by https://github.com/M4d40/PMSFnestScript

//-----------------------------------------------------
// Areas
//-----------------------------------------------------

$noAreas = true;
$quickAreas = [
    "Newyork" => [
        "Manhattan" => "lat,lon,zoom",
        "Brooklyn" => "lat,lon,zoom",
        "Queens" => "lat,lon,zoom"
    ],
    "Los Angeles" => [
        "Pasadena" => "lat,lon,zoom",
        "Glendale" => "lat,lon,zoom",
        "Montebello" => "lat,lon,zoom",
        "Inglewood" => "lat,lon,zoom",
        "Santa Monica" => "lat,lon,zoom"
    ],
    "Las Vegas" => "lat,lon,zoom",
    "Albuquerque" => "lat,lon,zoom",
    "Dallas" => "lat,lon,zoom",
    "Chicago" => "lat,lon,zoom",
    "Sacramento" => "lat,lon,zoom",
    "Denver" => "lat,lon,zoom"
];
//-----------------------------------------------------
// Weather Config
//-----------------------------------------------------
$noHeaderWeatherIcon = true;
$noWeatherOverlay = true;                                      // true/false
$enableWeatherOverlay = 'false';                               // true/false

$weather = [
    0 => null,
    1 => 'clear',
    2 => 'rain',
    3 => 'partly_cloudy',
    4 => 'cloudy',
    5 => 'windy',
    6 => 'snow',
    7 => 'fog'
];

$weatherColors = [
    'grey',
    '#fdfd96',
    'darkblue',
    'grey',
    'darkgrey',
    'purple',
    'white',
    'black'
];

//-----------------------------------------------------
// DEBUGGING
//-----------------------------------------------------

// Do not enable unless requested

$enableDebug = false;

//-----------------------------------------------------
// DATABASE CONFIG
//-----------------------------------------------------
$map = "rdm";                                                  // rdm, rocketmap
$fork = "default";                                             // default, mad
$queryInterval = '5000';                                       // Interval between raw_data requests.
