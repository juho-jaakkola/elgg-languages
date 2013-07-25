<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$finnish = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Sivut",
	'pages:owner' => "Käyttäjän %s sivut",
	'pages:friends' => "Ystävien sivut",
	'pages:all' => "Kaikki sivut",
	'pages:add' => "Luo uusi sivu",

	'pages:group' => "Ryhmän sivut",
	'groups:enablepages' => 'Ota käyttöön ryhmän sivut',

	'pages:edit' => "Muokkaa sivua",
	'pages:delete' => "Poista tämä sivu",
	'pages:history' => "Historia",
	'pages:view' => "Näytä sivu",
	'pages:revision' => "Versio",

	'pages:navigation' => "Navigaatio",
	'pages:new' => "Uusi sivu",
	'pages:notification' =>
'%s lisäsi uuden sivun:

%s
%s

Lue ja kommentoi sivua:
%s
',
	'item:object:page_top' => 'Päätason sivut',
	'item:object:page' => 'Sivut',
	'pages:nogroup' => 'Tässä ryhmällä ei ole vielä sivuja',
	'pages:more' => 'Lisää sivuja',
	'pages:none' => 'Sivuja ei vielä ole luotu',

	/**
	* River
	**/

	'river:create:object:page' => '%s loi sivun %s',
	'river:create:object:page_top' => '%s loi sivun %s',
	'river:update:object:page' => '%s päivitti sivua %s',
	'river:update:object:page_top' => '%s päivitti sivua %s',
	'river:comment:object:page' => '%s kommentoi sivua %s',
	'river:comment:object:page_top' => '%s kommentoi sivua %s',

	/**
	 * Form fields
	 */

	'pages:title' => 'Sivun otsikko',
	'pages:description' => 'Sivun sisältö',
	'pages:tags' => 'Tagit',
	'pages:parent_guid' => 'Yläsivu',
	'pages:access_id' => 'Lukuoikeus',
	'pages:write_access_id' => 'Kirjoitusoikeus',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'Sinulla ei ole oikeuksia tälle sivulle',
	'pages:cantedit' => 'Sinulla ei ole oikeuksia muokata tätä sivua',
	'pages:saved' => 'Sivu tallennettu',
	'pages:notsaved' => 'Sivun tallentaminen epäonnistui',
	'pages:error:no_title' => 'Syötä sivulle otsikko.',
	'pages:delete:success' => 'Sivu poistettiin.',
	'pages:delete:failure' => 'Sivun poistaminen epäonnistui.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Viimeisin päivitys %s käyttäjältä %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Versio luotu %s, käyttäjä %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Näytettävien sivujen määrä',
	'pages:widget:description' => "Näyttää listan omistamistasi sivuista.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Näytä sivu",
	'pages:label:edit' => "Muokkaa sivua",
	'pages:label:history' => "Sivun historia",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Tämä sivu",
	'pages:sidebar:children' => "Alasivut",
	'pages:sidebar:parent' => "Yläsivu",

	'pages:newchild' => "Luo alasivu",
	'pages:backtoparent' => "Takaisin sivulle '%s'",
);

add_translation("fi", $finnish);