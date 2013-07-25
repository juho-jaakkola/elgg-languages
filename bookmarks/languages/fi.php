<?php
/**
 * Bookmarks Finnish language file
 */

$finnish = array(

	/**
	 * Menu items and titles
	 */
	'bookmarks' => "Kirjanmerkit",
	'bookmarks:add' => "Lisää kirjanmerkki",
	'bookmarks:edit' => "Muokkaa kirjanmerkkiä",
	'bookmarks:owner' => "Käyttäjän %s kirjanmerkit",
	'bookmarks:friends' => "Ystävien kirjanmerkit",
	'bookmarks:everyone' => "Kaikki sivuston kirjanmerkit",
	'bookmarks:this' => "Tallenna sivu kirjanmerkkeihin",
	'bookmarks:this:group' => "Kirjanmerkki ryhmässä %s",
	'bookmarks:bookmarklet' => "Hanki sovelluskirjanmerkki",
	'bookmarks:bookmarklet:group' => "Hanki ryhmän sovelluskirjanmerkki",
	'bookmarks:inbox' => "Bookmarks inbox",
	'bookmarks:morebookmarks' => "Lisää kirjanmerkkejä",
	'bookmarks:more' => "Lisää",
	'bookmarks:with' => "Share with",
	'bookmarks:new' => "Uusi kirjanmerkki",
	'bookmarks:address' => "Kirjanmerkin osoite",
	'bookmarks:none' => 'Ei kirjanmerkkejä',

	'bookmarks:notification' =>
'%s lisäsi uuden kirjanmerkin:

%s - %s
%s

Lue ja kommentoi kirjanmerkkiä:
%s
',

	'bookmarks:delete:confirm' => "Haluatko varmasti poistaa tämän kohteen?",

	'bookmarks:numbertodisplay' => 'Näytettävien kohteiden määrä',

	'bookmarks:shared' => "Bookmarked",
	'bookmarks:visit' => "Visit resource",
	'bookmarks:recent' => "Viimeisimmät kirjanmerkit",

	'river:create:object:bookmarks' => '%s lisäsi kirjanmerkin kohteelle %s',
	'river:comment:object:bookmarks' => '%s kommentoi kirjanmerkkiä %s',
	'bookmarks:river:annotate' => 'kommentin kirjanmerkille',
	'bookmarks:river:item' => 'kohde',

	'item:object:bookmarks' => 'Kirjanmerkit',

	'bookmarks:group' => 'Ryhmän kirjanmerkit',
	'bookmarks:enablebookmarks' => 'Ota käyttöön ryhmän kirjanmerkit',
	'bookmarks:nogroup' => 'Tällä ryhmällä ei vielä ole kirjanmerkkejä',
	'bookmarks:more' => 'Lisää kirjanmerkkejä',

	'bookmarks:no_title' => 'Ei otsikkoa',

	/**
	 * Widget and bookmarklet
	 */
	'bookmarks:widget:description' => "Näytä viimeisimmät kirjanmerkkisi.",

	'bookmarks:bookmarklet:description' =>
			"Sovelluskirjanmerkin avulla voit jakaa mitä tahansa internetistä löytyvää sisältöä ystäviesi kanssa tai tallentaa sen vain omiin kirjanmerkkeihisi. Käyttääksesi toimintoa, raahaa painike selaimesi kirjanmerkkiriville:",
	'bookmarks:bookmarklet:descriptionie' =>
			"Jos käytät Internet Explorer -selainta, klikkaa painiketta hiiren oikealla painikkeella, valitse \"Lisää Suosikit-kansioon...\" ja lisää painike suosikkeihisi.",
			
	'bookmarks:bookmarklet:description:conclusion' =>
			"Tämän jälkeen voit nappulaa painamalla tallentaa kirjanmerkkeihisi minkä tahansa sivun, jolla vierailet.",

	/**
	 * Status messages
	 */

	'bookmarks:save:success' => "Kohde tallennettiin kirjanmerkkeihin.",
	'bookmarks:delete:success' => "Kirjanmerkki poistettu.",

	/**
	 * Error messages
	 */

	'bookmarks:save:failed' => "Kirjanmerkkiä ei voitu tallentaa. Tarkista, että syötit sekä otsikon että osoitteen ja yritä uudelleen.",
	'bookmarks:save:invalid' => "Kirjanmerkin osoite oli virheellinen, joten sitä ei voitu tallentaa.",
	'bookmarks:delete:failed' => "Kirjanmerkin poistaminen epäonnistui. Yritä uudelleen.",
);

add_translation('fi', $finnish);