<?php

// FIRST USE
// Please copy this file as config.php

// To edit a config uncomment the line, otherwise
// defaults will be used for each variable.

// ----------- General Variables -----------

// To switch between monitoring Nano / Banano nodes,
// set $currency, $themeChoice, and $blockExplorer to
// corresponding Nano / Banano values.

// Currency 'nano' or 'banano'
// $currency = 'nano';

// Theme of your Node Monitor
// Nano Themes:   'dark' or 'light'
// Banano Themes: 'banano'
// $themeChoice = 'light';

// Choice of block explorer
// Nano Explorers:   'nanode', 'ninja', 'nanoexplorer', 'nanowatch', or 'meltingice'
// Banano Explorers: 'banano'
// $blockExplorer = 'nanode';


// Autorefresh interval for the status webpage in seconds
// $autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
// $nanoNodeName = '';

// Location of your node
// If left empty, we try to get it from Nano Node Ninja.
// $nodeLocation = '';

// A welcome message shown on top
// $welcomeMsg = 'Welcome to Nano Node Monitor';

// Coinmarketcap widget
// market data base and second currency e.g. USD, EUR, BTC, ETH
// $cmcBaseCurrency = 'USD';
// $cmcSecondaryCurrency = 'BTC';

// Other widget panels (TRUE / FALSE)
// $cmcTicker = FALSE;
// $cmcRank = FALSE;
// $cmcMarketcap = FALSE;
// $cmcVolume = FALSE;
// $cmcStatsticker = FALSE;

// ----------- Cache Engine -----------

// The cache engine allows for caching of RPC calls to reduce load on your Nano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
// $cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "redis" (Redis cache; requires extension; fast)
//      - Options:
//        - 'host' => optional; address of the Redis host (defaults to localhost)
//        - 'port' => optional; port for the Redis host (defaults to 6379)
//        - 'redis' => optional; an instantiated Redis instance (replaces use of host/port)
//        - 'ttl' => optional; cache time in seconds

// $cache = [
//   "engine" => "files",
//   "options" => ["ttl" => $cacheTimeToLive]
// ];

// ----------- Node Variables -----------

// IP address for RPC (default: [::1])
// $nanoNodeRPCIP   = '[::1]';

// IP address for RPC (default: 7076)
// Nano nodes typically use port 7076.
// Banano nodes typically use port 7072.
// $nanoNodeRPCPort = '7076';

// Account of this node
// $nanoNodeAccount = 'xrb_1f56swb9qtpy3yoxiscq9799nerek153w43yjc9atoaeg3e91cc9zfr89ehj';

// Donation account for maintaining this node
// $nanoDonationAccount = 'xrb_1f56swb9qtpy3yoxiscq9799nerek153w43yjc9atoaeg3e91cc9zfr89ehj';

// Number of decimal places to display Nano balances, i.e.
// $nanoNumDecimalPlaces = 2;

// ----------- Monitoring -----------

// Uptimerobot.com API key for external monitoring
// Tutorial: https://github.com/NanoTools/nanoNodeMonitor/wiki/Uptimerobot-Node-Monitoring
// If $uptimerobotApiKey is not set, monitoring via https://nanonode.ninja/ is used
// $uptimerobotApiKey = '';

// Google Analytics Tracking ID, leave blank to disable Google Analytics.
// $googleAnalyticsId = '';

// ----------- Social -----------

// Add your social accounts
// Tutorial: https://github.com/NanoTools/nanoNodeMonitor/wiki/Social-Accounts
// $socials['reddit'] = 'https://www.reddit.com/user/NANOFAN1337/';
