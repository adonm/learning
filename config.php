<?php  // Moodle configuration file

include 'env.php';

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = $dbhost;
$CFG->dbname    = $dbname;
$CFG->dbuser    = $dbuser;
$CFG->dbpass    = $dbpass;
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = $wwwroot;
$CFG->dataroot  = $dataroot;
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

//define('FILTER_JWPLAYER_VIDEO_WIDTH', '100%');
//define('FILTER_JWPLAYER_VIDEO_APECTRATIO', '16:9');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
