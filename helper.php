<?php
/**
 * Helper class for Menu for selecting year in archive
 * 
 * @package    SOR.archivemenu
 * @subpackage Modules
 * @license    Copyright Stiftelsen SOR
 * @link       https://stiftelsensor.no
 * mod_archivemenu is not free software.
 */

 class ModArchiveMenuHelper
{
    /**
     * Retrieves the menu
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getMenu($params)
    {
        return '<button class="uk-button uk-button-default" type="button">Velg år <span uk-icon="icon: chevron-down"></span></button>
        <div uk-dropdown>
            <ul class="uk-nav uk-dropdown-nav">
            <li><a href="index.php?option=com_content&view=article&id=205&catid=2">2023</a></li>
            <li><a href="index.php?option=com_content&view=article&id=188&catid=2">2022</a></li>
            <li><a href="index.php?option=com_content&view=article&id=169&catid=2">2021</a></li>
                <li><a href="index.php?option=com_content&view=article&id=161&catid=2">2020</a></li>
                <li><a href="index.php?option=com_content&view=article&id=14&catid=2">2019</a></li>
                <li><a href="index.php?option=com_content&view=article&id=15&catid=2">2018</a></li>
                <li><a href="index.php?option=com_content&view=article&id=16&catid=2">2017</a></li>
                <li><a href="index.php?option=com_content&view=article&id=17&catid=2">2016</a></li>
                <li><a href="index.php?option=com_content&view=article&id=18&catid=2">2015</a></li>
                <li><a href="index.php?option=com_content&view=article&id=19&catid=2">2014</a></li>
                <li><a href="index.php?option=com_content&view=article&id=20&catid=2">2013</a></li>
                <li><a href="index.php?option=com_content&view=article&id=21&catid=2">2012</a></li>
                <li><a href="index.php?option=com_content&view=article&id=22&catid=2">2011</a></li>
                <li><a href="index.php?option=com_content&view=article&id=23&catid=2">2010</a></li>
                <li><a href="index.php?option=com_content&view=article&id=24&catid=2">2009</a></li>
                <li><a href="index.php?option=com_content&view=article&id=25&catid=2">2008</a></li>
                <li><a href="index.php?option=com_content&view=article&id=26&catid=2">2007</a></li>
                <li><a href="index.php?option=com_content&view=article&id=27&catid=2">2006</a></li>
                <li><a href="index.php?option=com_content&view=article&id=28&catid=2">2005</a></li>
                <li><a href="index.php?option=com_content&view=article&id=29&catid=2">2004</a></li>
                <li><a href="index.php?option=com_content&view=article&id=30&catid=2">2003</a></li>
                <li><a href="index.php?option=com_content&view=article&id=31&catid=2">2002</a></li>
                <li><a href="index.php?option=com_content&view=article&id=32&catid=2">2001</a></li>
                <li><a href="index.php?option=com_content&view=article&id=168&catid=2">Eldre</a></li>
            </ul>
        </div>';
    }
}

