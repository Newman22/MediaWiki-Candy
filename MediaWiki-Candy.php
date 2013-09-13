<?php
/*
    Candy is a simple but complete MediaWiki skin.

    Copyright (c) 2013 Newman2 <pyronewman2@gmail.com>

    This file is part of Candy.

    Candy is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Candy is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Candy. If not, see <http://www.gnu.org/licenses/>.
*/

if (!defined('MEDIAWIKI'))
    die ('This is a skin extension to the MediaWiki package and cannot be run standalone.');

$wgExtensionCredits['skin'][] = array
(
    'path' => __FILE__
,   'name' => 'Candy'
,   'version' => '0.01'
,   'author' => '[community.wikia.com/wiki/User:James Newman Newman2]'
,   'descriptionmsg' => 'candyskin-descmsg'
);

$wgValidSkinNames['candy'] = 'Candy';

$wgAutoloadClasses['SkinCandy']     = dirname(__FILE__).'/Candy.skin.php';
$wgAutoloadClasses['CandyRenderer'] = dirname(__FILE__).'/Candy.renderer.php';
$wgExtensionMessagesFiles['Candy']  = dirname(__FILE__).'/Candy.i18n.php';

$wgResourceModules['skins.billabong'] = array
(
    'styles' => array
    (
        'Billabong/assets/css/MediaWiki.css' => array('media' => 'screen')
    ,   'Billabong/assets/css/Candy.css' => array('media' => 'screen')
    )
,   'remoteBasePath' => &$GLOBALS['wgStylePath']
,   'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);
?>
