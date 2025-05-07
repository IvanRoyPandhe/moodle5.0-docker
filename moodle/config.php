<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'moodle_password';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbport' => 5432,
    'dbsocket' => false,
);

$CFG->wwwroot   = 'http://localhost:8080';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->directorypermissions = 02777;
$CFG->admin     = 'admin';

// Debug options - set these to false in production
$CFG->debug = 0;
$CFG->debugdisplay = false;

// Performance optimization
$CFG->cachejs = true;
$CFG->langstringcache = true;
$CFG->themedesignermode = false;

// Security recommendations
$CFG->cronclionly = true;
$CFG->passwordpolicy = true;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!