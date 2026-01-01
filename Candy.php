<?php

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'Candy 0.03' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Candy 0.03'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for Candy skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This version of the Candy skin requires MediaWiki 1.25+' );
}

$wgAutoloadClasses['SkinCandy']     = dirname(__FILE__).'/SkinCandy.php';

$wgAutoloadClasses['CandyTemplate']     = dirname(__FILE__).'/CandyTemplate.php';

$wgResourceModuleSkinStyles['skins.candy.styles'] = array(
  'candy' => 'Candy 0.03/main.css',
);
