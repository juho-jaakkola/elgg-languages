<?php
/**
 * comment_tracker language extender
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version  1.0
 * @author Akhilesh @ Cubet Technologies
 */

$finnish = array(
	'comments' => "Kommentit",
	'comment:notification:settings' => 'Kommentti-ilmoitukset',
	'comment:notification:settings:description' => 'Valitse tavat, joilla haluat saada ilmoituksen, kun joku kommentoi seuraamiasi kohteita.',
	'comment:notification:settings:how' => 'Valitse ilmoitustavat',
	'comment:notification:settings:linktext' => 'Näytä kaikki kohteet, joista olet tilannut ilmoitukset',
	'comment:notification:settings:success' => 'Ilmoitusasetuksesi tallennettu.',
	'allow:comment:notification' => 'Haluatko ottaa käyttöön ilmoitukset? ',
	'email:content:type' => 'Haluatko ottaa käyttään HTML-sähköpostit? ',
	'text:email' => 'Ei',
	'html:email' => 'Kyllä',
	'comment:subscribe' => 'Seuraa',
	'comment:unsubscribe' => 'Älä seuraa',
	'show:subscribers' => 'Näytä seuraajat',
	'comment:subscribe:success' => 'Seuraat nyt tätä kohdetta ja saat jatkossa ilmoitukset uusista kommenteista.',
	'comment:subscribe:failed' => "Kohteen ilmoitusten tilaaminen epäonnistui!",
	'comment:subscribe:entity:not:access' => "Kohdetta ei löytynyt, joten et voi seurata sitä.",
	'comment:unsubscribe:success' => 'Tilaus peruttu. Jatkossa et saa ilmoituksia tästä kohteesta.',
	'comment:unsubscribe:failed' => "Tilauksen peruminen epäonnistui!",
	'comment:unsubscribe:not:valid:url' => 'Syötit virheellisen osoitteen tilauksen perumiseen.',
	'comment:unsubscribe:entity:not:access' => "Kohdetta ei löytynyt.",
	'comment:notify:subject' => 'Kohteessa "%s" on uusi kommentti',
	'comment:notify:group:subject' => 'Kohteessa "%s" on uusi kommentti',
	'comment:notify:body:web' => 'Hei %s,
<br/>Kohteessa "%s" on uusi kommentti
<br/>%s lisäsi kommentin:
<br />%s
<br/>%s
<br/>
<font color="#888888" size="2">
Sait tämän viestin, koska olet tilannut ilmoitukset viestissä mainitusta kohteesta.<br/>
Voit muuttaa viestiasetuksiasi täällä:
<br/>%s
<br/>Voit peruuttaa tilauksen täällä:
<br/>%s
</font>
		',
  	'comment:notify:group:body:web' => 'Hei %s,
<br/>Kohteessa "%s" on uusi viesti
<br/>%s lisäsi viestin:
<br />%s
<br/>%s
<br/>
<font color="#888888" size="2">
Sait tämän viestin, koska olet tilannut ilmoitukset viestissä mainitusta kohteesta.<br/>
Voit muuttaa viestiasetuksiasi täällä:
<br/>%s
<br/>Voit peruuttaa tilauksen täällä:
<br/>%s
</font>
		',
	'comment:notify:body:email:text' => 'Hei %s,

Kohteessa "%s" on uusi kommentti

%s lisäsi kommentin:

%s

%s

Terveisin
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Huomioi, että kohteen näkeminen saattaa vaatia kirjautumisen.

Sait tämän viestin, koska olet tilannut ilmoitukset viestissä mainitusta kohteesta.
Voit muuttaa viestiasetuksiasi täällä:
%s
Voit peruuttaa tilauksen täällä:
%s
</font>
		',
  	'comment:notify:group:body:email:text' => 'Hei %s,

Kohteessa "%s" on uusi viesti

%s lisäsi viestin:

%s

%s

Terveisin,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Huomioi, että kohteen näkeminen saattaa vaatia kirjautumisen.

Sait tämän viestin, koska olet tilannut ilmoitukset viestissä mainitusta kohteesta.
Voit muuttaa viestiasetuksiasi täällä:
%s
Voit peruuttaa tilauksen täällä:
%s
</font>
		',

'comment:notify:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>There is a new comment on %s</div>
	<div>%s wrote:</div>
	<div>%s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Regards,</div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Please note you may have to login before viewing the post or topic.</div>
		<div>You have received this notification because you have subscribed to it, or are involved in it.</div>
		<div>To change your notification preferences for all such messages, please click here: %s</div>
		<div>To unsubscribe from this particular post or topic, please click here: %s</div>
	</div>
</div>
		',
  	'comment:notify:group:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>There is a new post in the thread %s</div>
	<div>%s wrote: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Regards,</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Please note you may have to login before viewing the post or topic.</div>
		<div>You have received this notification because you have subscribed to it, or are involved in it.</div>
		<div>To change your notification preferences for all such messages, please click here: %s</div>
		<div>Or,to unsubscribe from this particular post or topic, please click here: %s</div>
	</div>
</div>
		',
);
				
add_translation("fi", $finnish);