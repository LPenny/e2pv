<?php
define('VERBOSE', 0);        // 0: be silent, except for errors; 1: be verbose
define('IDCOUNT', 16);
define('APIKEY', '573d441162d2aebfdb93a5979e360f8d49f63355');
define('SYSTEMID', 'LP1');

define('LIFETIME', 1);       // see README.md
define('MODE', 'SPLIT'); // 'AGGREGATE' or 'SPLIT'
define('EXTENDED', 0);       // Send state data? Uses donation only feature
// AC is default 0. See README.md
define('AC', 0);             // Send DC data or AC (DC * Efficiency)

// If mode is SPLIT, define the Enecsys ID to PVOutput SystemID mapping for each
// inverter.
$systemid = array(
  110087366 => LP1,
  110087174 => LP1,
  110087243 => LP1,
  110087250 => LP1,
  110060744 => LP1,
  110061494 => LP1,
  110087360 => LP1,
  110087240 => LP1,
  110074612 => LP1,
  110087176 => LP1,
  110087191 => LP1,
  110087184 => LP1,
  110087219 => LP1,
  110087246 => LP1,
  110087169 => LP1,
  110087237 => LP1
);

// If mode is SPLIT, optionally define the Enecsys ID to APIKEY mappings
// If an id is not found, the default APIKEY from above is used.
//$apikey = array(
// NNNNNNNNN => 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh',
// NNNNNNNNN => 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh',
//);

// The following inverter ids are ignored (e.g. the neighbours' ones)
// $ignored = array(
// NNNNNNNNN,
// ...
// );


// Optional MySQL defs, uncomment to enable MySQL inserts, see README.md
//define('MYSQLHOST', 'localhost');
//define('MYSQLUSER', 'myuser');
//define('MYSQLPASSWORD', 'mypw');
//define('MYSQLDB', 'mydbname');
//define('MYSQLPORT', '3306');
?>
