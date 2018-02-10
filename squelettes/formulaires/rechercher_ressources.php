<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) return;

include_spip('inc/config');

function formulaires_rechercher_ressources_saisies_dist($redirect, $options=array()){
	$saisies = array(
		array(
			'saisie' => 'input',
			'options' => array(
				'nom' => 'recherche',
				'label' => _T('info_rechercher'),
				'defaut' => _request('recherche'),
			),
		),
	);
	
	return $saisies;
}

function formulaires_rechercher_ressources_charger_dist($redirect, $options=array()){
	$contexte = array(
		'_rechercher_champs' => array(
			'recherche' => array(),
			'type' => array(),
			'date' => array(),
		),
	);
	
	return $contexte;
}
