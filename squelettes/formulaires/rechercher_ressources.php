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
				'label' => 'Recherche libre',
				'defaut' => _request('recherche'),
			),
		),
		array(
			'saisie' => 'selection',
			'options' => array(
				'nom' => 'media',
				'label' => 'Média',
				'data' => array(
					'audio' => 'Audio',
					'video' => 'Vidéo',
					'file' => 'Texte',
				),
				'option_intro' => 'Tout',
				'defaut' => _request('media'),
			),
		),
		'options' => array(
			'texte_submit' => _T('info_rechercher'),
		),
	);
	
	return $saisies;
}

function formulaires_rechercher_ressources_charger_dist($redirect, $options=array()){
	$contexte = array(
		'_rechercher_champs' => array(
			'recherche' => array(),
			'media' => array(),
			'date' => array(),
		),
	);
	
	return $contexte;
}
