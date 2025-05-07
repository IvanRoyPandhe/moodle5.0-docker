<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('MOODLE_DATABASE_TYPE') ?: 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('MOODLE_DATABASE_HOST') ?: 'localhost';
$CFG->dbname    = getenv('MOODLE_DATABASE_NAME') ?: 'moodle';
$CFG->dbuser    = getenv('MOODLE_DATABASE_USER') ?: 'moodle';
$CFG->dbpass    = getenv('MOODLE_DATABASE_PASSWORD') ?: 'password';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbport' => getenv('MOODLE_DATABASE_PORT') ?: '',
    'dbsocket' => false,
);

$CFG->wwwroot   = getenv('MOODLE_WWWROOT') ?: 'http://localhost:8080';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->directorypermissions = 02777;
$CFG->admin     = 'admin';

$CFG->passwordsaltmain = getenv('MOODLE_PASSWORD_SALT') ?: 'your-salt-here';

// Debug options - set these to false in production
$CFG->debug = (getenv('MOODLE_DEBUG') === 'true') ? (E_ALL | E_STRICT) : 0;
$CFG->debugdisplay = (getenv('MOODLE_DEBUG_DISPLAY') === 'true') ? true : false;

// Performance optimization
$CFG->cachejs = true;
$CFG->langstringcache = true;
$CFG->themedesignermode = false;

// Security recommendations
$CFG->cronclionly = true;
$CFG->passwordpolicy = true;
$CFG->sslproxy = (getenv('MOODLE_SSL_PROXY') === 'true') ? true : false;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!