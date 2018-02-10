<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) return;

// Activer HTML5 depuis le squelette
$GLOBALS['meta']['version_html_max'] = 'html5';

if (!isset($GLOBALS['z_blocs'])){
	$GLOBALS['z_blocs'] = array('content','aside','head','head_js','header','footer','breadcrumb');
}

define('_ZENGARDEN_FILTRE_THEMES','upb');
define('_ALBUMS_INSERT_HEAD_CSS',false);
define('_INTRODUCTION_SUITE', '…');

