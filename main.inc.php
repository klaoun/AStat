<?php
/*
Plugin Name: AStat.2
Version: 2.0.5
Description: Statistiques avancées / Advanced statistics
Plugin URI: http://phpwebgallery.net/ext/extension_view.php?eid=172
Author: grum@piwigo.org
Author URI: http://photos.grum.fr/
*/

/*
--------------------------------------------------------------------------------
  Author     : Grum
    email    : grum@piwigo.org
    website  : http://photos.grum.fr
    PWG user : http://forum.phpwebgallery.net/profile.php?id=3706

    << May the Little SpaceFrog be with you ! >>
--------------------------------------------------------------------------------

:: HISTORY

2.0.0       - 13/05/07  - release for piwigo 2.0
2.0.1       - 09/03/01  - bug corrected (can't open file because plugin directory
                          was hardcoded...)
2.0.2       - 09/03/08  - bug referenced
                            english forum : http://piwigo.org/forum/viewtopic.php?pid=105990#p105990
                            french forum  : http://fr.piwigo.org/forum/viewtopic.php?pid=107205#p107205
                          SQL request for stat by categories works with mySQL 4.1.22 and not with mySQL 5
2.0.3       - 28/03/08  - bug referenced
                            french forum  : http://fr.piwigo.org/forum/viewtopic.php?pid=107236#p107236
                          SQL request for stat by categories works with mySQL 4.1.22 and not with mySQL 5
2.0.4       - 21/05/09  - bug on tools 
                            it was not possible to use tools to manage deleted items
2.0.5       - 07/07/09  - bug in code - invalid character on line 2194

:: TO DO

--------------------------------------------------------------------------------

:: NFO
  AStat_AIM : classe to manage plugin integration into plugin menu
  AStat_AIP : classe to manage plugin admin pages

--------------------------------------------------------------------------------
*/

// pour faciliter le debug :o)
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', true);

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

define('ASTAT_DIR' , basename(dirname(__FILE__)));
define('ASTAT_PATH' , PHPWG_PLUGINS_PATH . ASTAT_DIR . '/');

define('ASTAT_VERSION' , '2.0.5'); // => ne pas oublier la version dans l'entête !!

global $prefixeTable;

//AStat loaded and active only if in admin page
if(basename($_SERVER["PHP_SELF"])=='admin.php')
{
  include_once("astat_aim.class.inc.php");

  $obj = new AStat_AIM($prefixeTable, __FILE__);
  $obj->init_events();
  set_plugin_data($plugin['id'], $obj);
}

?>
