<?php
/**
* Elgg send a message action page
* 
* @package ElggMessages
*/

$finnish = array(
	/**
	* Menu items and titles
	*/

	'messages' => "Viestit",
	'messages:back' => "takaisin viesteihin",
	'messages:user' => "käyttäjän %s viestit",
	'messages:posttitle' => "%s's messages: %s",
	'messages:inbox' => "Saapuneet",
	'messages:send' => "Lähetä",
	'messages:sent' => "Lähetetyt",
	'messages:message' => "Viesti",
	'messages:title' => "Aihe",
	'messages:to' => "Vastaanottaja",
	'messages:from' => "Lähettäjä",
	'messages:fly' => "Lähetä",
	'messages:replying' => "Message replying to",
	'messages:inbox' => "Saapuneet",
	'messages:sendmessage' => "Lähetä viesti",
	'messages:compose' => "Kirjoita uusi viesti",
	'messages:add' => "Kirjoita uusi viesti",
	'messages:sentmessages' => "Lähetetyt",
	'messages:recent' => "Viimeisimmät viestit",
	'messages:original' => "Alkuperäinen viesti",
	'messages:yours' => "Sinun viestisi",
	'messages:answer' => "Vastaa",
	'messages:toggle' => 'Valitse kaikki',
	'messages:markread' => 'Merkitse luetuksi',
	'messages:recipient' => 'Choose a recipient&hellip;',
	'messages:to_user' => 'Käyttäjälle: %s',

	'messages:new' => 'Uusi viesti',

	'notification:method:site' => 'Viestit',

	'messages:error' => 'Viestisi tallentaminen epäonnistui. Yritä uudelleen.',

	'item:object:messages' => 'Viestit',

	/**
	* Status messages
	*/

	'messages:posted' => "Viesti lähetetty.",
	'messages:success:delete:single' => 'Viesti poistettu',
	'messages:success:delete' => 'Viestit poistettu',
	'messages:success:read' => 'Viestit merkitty luetuiksi',
	'messages:error:messages_not_selected' => 'Ei viestejä valittuna',
	'messages:error:delete:single' => 'Viestin poistaminen epäonnistui',

	/**
	* Email messages
	*/

	'messages:email:subject' => 'Sinulla on uusi viesti!',
	'messages:email:body' => "Olet saanut uuden viestin käyttäjältä %s.

Viestin sisältö:

%s


Kaikki viestisi:
%s

Vastaa käyttäjälle %s:
%s


Tähän sähköpostiviestiin ei voi vastata.",

	/**
	* Error messages
	*/

	'messages:blank' => "Syötä viestiin jotakin sisältöä ennen lähettämistä.",
	'messages:notfound' => "Hakemaasi viestiä ei löytynyt.",
	'messages:notdeleted' => "Viestin poistaminen epäonnistui.",
	'messages:nopermission' => "Sinulla ei ole tarvittavia oikeuksia viestin muokkaamiseen.",
	'messages:nomessages' => "Ei viestejä.",
	'messages:user:nonexist' => "Valitsemaasi vastaanottajaa ei löytynyt käyttäjärekisteristä.",
	'messages:user:blank' => "Et valinnut viestille vastaanottajaa.",

	'messages:deleted_sender' => 'Poistettu käyttäjä',

);
		
add_translation("fi", $finnish);