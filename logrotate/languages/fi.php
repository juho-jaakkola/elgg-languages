<?php
/**
 * Elgg log rotator language pack.
 *
 * @package ElggLogRotate
 */

$finnish = array(
	'logrotate:period' => 'Kuinka usein järjestelmän loki tulisi arkistoida?',

	'logrotate:weekly' => 'Kerran viikossa',
	'logrotate:monthly' => 'Kerran kuukaudessa',
	'logrotate:yearly' => 'Kerran vuodessa',

	'logrotate:logrotated' => "Loki arkistoitu\n",
	'logrotate:lognotrotated' => "Virhe lokin arkistoimisessa\n",
	
	'logrotate:delete' => 'Poista arkistoidut lokit, joiden ikä on enemmän kuin ',

	'logrotate:week' => 'viikko',
	'logrotate:month' => 'kuukausi',
	'logrotate:year' => 'vuosi',
		
	'logrotate:logdeleted' => "Loki poistettu\n",
	'logrotate:lognotdeleted' => "Lokin poistaminen epäonnistui\n",
);

add_translation("fi", $finnish);
