<?php
/**
 * Menu for selecting year in archive
 * 
 * @package    SOR.archivemenu
 * @subpackage Modules
 * @license    Copyright Stiftelsen SOR
 * @link       https://stiftelsensor.no
 * mod_archivemenu is not free software.
 */

    // No direct access
    defined('_JEXEC') or die;
    // Include the syndicate functions only once
    require_once dirname(__FILE__) . '/helper.php';

    $meny = modArchiveMenuHelper::getMenu($params);
    require JModuleHelper::getLayoutPath('mod_archivemenu');
    