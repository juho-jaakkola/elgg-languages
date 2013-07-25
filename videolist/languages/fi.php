<?php
/**
 * Elgg videolist finnish language pack.
 *
 * @package ElggVideolist
 */
 
$finnish = array(

	/**
	 * Menu items and titles
	 */

	'videolist' => "Videot",
	'videolist:owner' => "Käyttäjän %s videot",
	'videolist:friends' => "Ystävien videot",
	'videolist:all' => "Kaikki sivuston videot",
	'videolist:add' => "Lisää video",

	'videolist:group' => "Ryhmän videot",
	'groups:enablevideolist' => 'Ota käyttöön ryhmän videot',

	'videolist:edit' => "Muokkaa videota",
	'videolist:delete' => "Poista video",

	'videolist:new' => "Uusi video",
	'videolist:notification' =>
'%s lisäsi uuden videon:

%s
%s

Pääset näkemään videon tästä:
%s
',
	'videolist:delete:confirm' => 'Haluatko varmasti poistaa tämän videon?',
	'item:object:videolist_item' => 'Video',
	'videolist:nogroup' => 'Ei videoita',
	'videolist:more' => 'Lisää videoita',
	'videolist:none' => 'Ei videoita.',

	/**
	* River
	**/

	'river:create:object:videolist_item' => '%s lisäsi videon %s',
	'river:update:object:videolist_item' => '%s päivitti videota %s',
	'river:comment:object:videolist_item' => '%s kommentoi videota %s',

	/**
	 * Form fields
	 */

	'videolist:title' => 'Otsikko',
	'videolist:description' => 'Kuvaus',
	'videolist:video_url' => 'Videon URL',
	'videolist:access_id' => 'Kuka voi nähdä tämän videon?',
	'videolist:tags' => 'Lisää tageja',

	/**
	 * Status and error messages
	 */
	'videolist:error:no_save' => 'Videon tallentamisessa tapahtui virhe.',
	'videolist:saved' => 'Video tallennettu',
	'videolist:deleted' => 'Video poistettu',
	'videolist:deletefailed' => 'Videon poistaminen epäonnistui',
	

	/**
	 * Widget
	 **/

	'videolist:num_videos' => 'Näytettävien kohteiden määrä',
	'videolist:widget:description' => 'Henkilökohtainen videolistasi.',
	
);

add_translation("fi", $finnish);
