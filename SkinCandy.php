<?php
/*
    Candy is a MediaWiki skin that can be used as your VERY own fairy tale resort on an URL!

    Copyright (c) 2013 Newman22 <pyronewman2@gmail.com>

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

class SkinCandy extends SkinTemplate
{
    var $skinname  = 'candy'
      , $stylename = 'candy'
      , $template  = 'CandyTemplate'
      , $useHeadElement = true;

    public function initPage(OutputPage $out)
    {
        parent::initPage($out);
        $out->addMeta('author', 'newman22');
    }

    function setupSkinUserCss(OutputPage $out)
    {
        parent::setupSkinUserCss($out);
        $out->addModuleStyles('skins.candy');
    }
}

class BillabongTemplate extends BaseTemplate
{
    public function execute()
    {
        if (!isset($this->data['sitename']))
        {
            global $wgSitename;
            $this->set( 'sitename', $wgSitename );
        }

        $renderer = new CandyRenderer($this, $this->data);

        wfSuppressWarnings();
        $this->html('headelement'); ?>
        <?php $renderer->renderDocument(); ?>
        <?php $this->printTrail(); ?>
        </body>
        </html>
        <?php wfRestoreWarnings();
    }
}
?>
