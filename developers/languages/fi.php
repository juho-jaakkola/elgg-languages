<?php
/**
 * Elgg developer tools Finnish language file.
 *
 */

$finnish = array(
	// menu
	'admin:develop_tools' => 'Työkalut',
	'admin:develop_tools:preview' => 'Teemojen kehittäminen',
	'admin:develop_tools:inspect' => 'Tekninen rakenne',
	'admin:develop_tools:unit_tests' => 'Yksikkötestit',
	'admin:developers' => 'Kähittäjät',
	'admin:developers:settings' => 'Asetukset',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Määrittele kehitys- ja testausasetuksesesi tästä. Jotkin asetuksista löytyvät myös muilta hallintasivuilta.',
	'developers:label:simple_cache' => 'Käytä yksinkertaista välimuistia',
	'developers:help:simple_cache' => 'Ota tämä välimuisti pois käytöstä kehitysympäristössä. Muutoin css- ja javascript-tiedostoihin tekemäsi muutokset eivät tule voimaan.',
	'developers:label:system_cache' => 'Käytä järjestelmän välimuistia',
	'developers:help:system_cache' => 'Ota tämä pois päältä kehitysympäristössä. Muutoin plugineihin tekemiäsi muutoksia ei rekisteröidä.',
	'developers:label:debug_level' => "Käytettävä taso",
	'developers:help:debug_level' => "Tämä määrittää lokiin tallennettavan datan määrän. Tutustu elgg_log()-funktioon saadaksesi lisätietoa.",
	'developers:label:display_errors' => 'Näytä kriittiset virheet',
	'developers:help:display_errors' => "Oletuksena Elggin .htaccess-tiedosto piilottaa kriittiset virheet.",
	'developers:label:screen_log' => "Näytä loki näytöllä",
	'developers:help:screen_log' => "Tämä näyttää elgg_log() ja elgg_dump()-funktioiden ulosannin sivustolla.",
	'developers:label:show_strings' => "Näytä käännösten alkuperäiset merkkijonot",
	'developers:help:show_strings' => "Tämä näyttää merkkijonot, jotka syötetään elgg_echo()-käännösfunktiolle.",
	'developers:label:wrap_views' => "Lisää html-kommentit näkymiin",
	'developers:help:wrap_views' => "Tämä lisää lähes kaikkien näkymien alkuun ja loppuun HTML-kommentit. Tämä on hyödyllistä etsittäessä näkymää, joka on luonut jonkin tietyn HTML-koodin.",
	'developers:label:log_events' => "Merkite event ja plugin hook -toiminnot lokiin.",
	'developers:help:log_events' => " Merkite event ja plugin hook -toiminnot lokiin. Varoitus: näitä voi olla hyvinkin useita kutakin sivua kohden.",

	'developers:debug:off' => 'Pois päältä',
	'developers:debug:error' => 'Virheet',
	'developers:debug:warning' => 'Varoitukset',
	'developers:debug:notice' => 'Huomautukset',
	
	// inspection
	'developers:inspect:help' => 'Tarkastele sivuston teknistä rakennetta.',

	// event logging
	'developers:event_log_msg' => "%s: '%s, %s' in %s",

	// theme preview
	'theme_preview:general' => 'Ohjeet',
	'theme_preview:breakout' => 'Käytä koko näytön tilaa',
	'theme_preview:buttons' => 'Painikkeet',
	'theme_preview:components' => 'Komponentit',
	'theme_preview:forms' => 'Lomakkeet',
	'theme_preview:grid' => 'Palstat',
	'theme_preview:icons' => 'Ikonit',
	'theme_preview:modules' => 'Moduulit',
	'theme_preview:navigation' => 'Navigaatio',
	'theme_preview:typography' => 'Typografia',
	'theme_preview:miscellaneous' => 'Miscellaneous',

	// unit tests
	'developers:unit_tests:description' => 'Elgg sisältää yksikkö- ja integraatiotestejä, joiden avulla voidaan havaita virheitä sen ytimen luokissa ja funktioissa.',
	'developers:unit_tests:warning' => 'Varoitus: Älä aja testejä tuotantopalvelimella. Ne voivat korruptoita sivuston tietokannan.',
	'developers:unit_tests:run' => 'Aja testit',

	// status messages
	'developers:settings:success' => 'Asetukset tallennettu',
);

add_translation('fi', $finnish);
