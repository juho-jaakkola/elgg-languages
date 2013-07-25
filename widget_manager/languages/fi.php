<?php 

	$finnish = array(
		
		// special access level
		'LOGGED_OUT' => "Kirjautumattomat käyttäjät",
		'access:admin_only' => "Vain ylläpitäjät",

		// admin menu items
		'admin:widgets' => "Vimpaimet",
		'admin:widgets:manage' => "Manage",
		'admin:widgets:manage:index' => "Manage Index",
		'admin:statistics:widgets' => "Widget Usage",

		// widget edit wrapper
		'widget_manager:widgets:edit:custom_title' => "Vimpaimen otsikko",
		'widget_manager:widgets:edit:custom_url' => "Vimpaimen otsikon linkki",
		'widget_manager:widgets:edit:hide_header' => "Hide header",
		'widget_manager:widgets:edit:custom_class' => "Custom CSS class",
		'widget_manager:widgets:edit:disable_widget_content_style' => "No widget style",

		// group
		'widget_manager:groups:enable_widget_manager' => "Ota käyttöön ryhmän widgetit",
	
		// admin settings
		'widget_manager:settings:index' => "Index",
		'widget_manager:settings:group' => "Group",

		'widget_manager:settings:custom_index' => "Use Widget Manager custom index?",
		'widget_manager:settings:custom_index:non_loggedin' => "For non-loggedin users only",
		'widget_manager:settings:custom_index:loggedin' => "For loggedin users only",
		'widget_manager:settings:custom_index:all' => "For all users",

		'widget_manager:settings:widget_layout' => "Choose a widget layout",
		'widget_manager:settings:widget_layout:33|33|33' => "Default layout (33% per column)",
		'widget_manager:settings:widget_layout:50|25|25' => "Wide left column (50%, 25%, 25%)",
		'widget_manager:settings:widget_layout:25|50|25' => "Wide middle column (25%, 50%, 25%)",
		'widget_manager:settings:widget_layout:25|25|50' => "Wide right column (25%, 25%, 50%)",
		'widget_manager:settings:widget_layout:75|25' => "Two column (75%, 25%)",
		'widget_manager:settings:widget_layout:60|40' => "Two column (60%, 40%)",
		'widget_manager:settings:widget_layout:50|50' => "Two column (50%, 50%)",
		'widget_manager:settings:widget_layout:40|60' => "Two column (40%, 60%)",
		'widget_manager:settings:widget_layout:25|75' => "Two column (25%, 75%)",

		'widget_manager:settings:index_top_row' => "Show a top row on the index page",
		'widget_manager:settings:index_top_row:none' => "No top row",
		'widget_manager:settings:index_top_row:full_row' => "Full width row",
		'widget_manager:settings:index_top_row:two_column_left' => "Two column aligned left",

		'widget_manager:settings:disable_free_html_filter' => "Disable HTML filtering for Free HTML widgets on index (ADMIN ONLY)",

		'widget_manager:settings:group:enable' => "Enable Widget Manager for groups",
		'widget_manager:settings:group:option_default_enabled' => "Widget management for groups default enabled",
		'widget_manager:settings:group:option_admin_only' => "Only administrator can enable group widgets",

		'widget_manager:settings:multi_dashboard' => "Multi Dashboard",
		'widget_manager:settings:multi_dashboard:enable' => "Enable multiple dashboards",

		// views
		// settings
		'widget_manager:forms:settings:no_widgets' => "No widgets to manage",
		'widget_manager:forms:settings:can_add' => "Can be added",
		'widget_manager:forms:settings:hide' => "Hide",

		// lightbox
		'widget_manager:button:add' => "Lisää vimpain",
		'widget_manager:widgets:lightbox:title:dashboard' => "Add widgets to your personal dashboard",
		'widget_manager:widgets:lightbox:title:profile' => "Add widgets to your public profile",
		'widget_manager:widgets:lightbox:title:index' => "Add widgets to the index",
		'widget_manager:widgets:lightbox:title:groups' => "Hallinnoi ryhmän vimpaimia",
		'widget_manager:widgets:lightbox:title:admin' => "Add widgets to your admin dashboard",

		// multi dashboard
		'widget_manager:multi_dashboard:add' => "New Tab",
		'widget_manager:multi_dashboard:extras' => "Add as dashboard tab",

		// multi dashboard - edit
		'widget_manager:multi_dashboard:new' => "Create a new dashboard",
		'widget_manager:multi_dashboard:edit' => "Edit dashboard: %s",

		'widget_manager:multi_dashboard:types:title' => "Select a dashboard type",
		'widget_manager:multi_dashboard:types:widgets' => "Widgets",
		'widget_manager:multi_dashboard:types:iframe' => "iFrame",

		'widget_manager:multi_dashboard:num_columns:title' => "Number of columns",
		'widget_manager:multi_dashboard:iframe_url:title' => "iFrame URL",
		'widget_manager:multi_dashboard:iframe_url:description' => "Note: please make sure the URL begins with http:// or https://. Not all sites may support the use of iFrames",
		'widget_manager:multi_dashboard:iframe_height:title' => "iFrame height",

		'widget_manager:multi_dashboard:required' => "Items marked with a * are required",

		// actions
		// manage
		'widget_manager:action:manage:error:context' => "Invalid context to save widget configuration",
		'widget_manager:action:manage:error:save_setting' => "Error while saving the setting %s for widget %s",
		'widget_manager:action:manage:success' => "Widget configuration saved successfully",

		// multi dashboard - edit
		'widget_manager:actions:multi_dashboard:edit:error:input' => "Invalid input, please submit a title",
		'widget_manager:actions:multi_dashboard:edit:success' => "Succesfully created/edited a dashboard",

		// multi dashboard - delete
		'widget_manager:actions:multi_dashboard:delete:error:delete' => "Unable to remove dashboard %s",
		'widget_manager:actions:multi_dashboard:delete:success' => "Dashboard %s succesfully removed",

		// multi dashboard - drop
		'widget_manager:actions:multi_dashboard:drop:success' => "The widget has successfully been moved the the new dashboard",

		// multi dashboard - reorder
		'widget_manager:actions:multi_dashboard:reorder:error:order' => "Please supply a new order",
		'widget_manager:actions:multi_dashboard:reorder:success' => "Dashboard reordered successfully",

		// widgets
		'widget_manager:widgets:edit:advanced' => "Lisäasetukset",
		'widget_manager:widgets:fix' => "Fix this widget on the dashboard/profile",

		// index_login
		'widget_manager:widgets:index_login:description' => "Show a login box",
		'widget_manager:widgets:index_login:welcome' => "<b>%s</b> welcome on the <b>%s</b> community",

		// index_members
		'widget_manager:widgets:index_members:name' => "Members",
		'widget_manager:widgets:index_members:description' => "Show the members of your site",
		'widget_manager:widgets:index_members:user_icon' => "Must the users have a profileicon",
		'widget_manager:widgets:index_members:no_result' => "No users found",

		// index_memebers_online
		'widget_manager:widgets:index_members_online:name' => "Online members",
		'widget_manager:widgets:index_members_online:description' => "Show the online members of your site",
		'widget_manager:widgets:index_members_online:member_count' => "How many members to show",
		'widget_manager:widgets:index_members_online:user_icon' => "Must the users have a profileicon",
		'widget_manager:widgets:index_members_online:no_result' => "No users found",

		// index_bookmarks
		'widget_manager:widgets:index_bookmarks:description' => "Show the latest bookmarks on your community",

		// index_activity
		'widget_manager:widgets:index_activity:description' => "Show the latest activity on your site",

		// image_slider
		'widget_manager:widgets:image_slider:name' => "Diaesitys",
		'widget_manager:widgets:image_slider:description' => "Näyttää kuvia ja tekstiä diaesityksenä",
		'widget_manager:widgets:image_slider:slider_type' => "Ulkoasu",
		'widget_manager:widgets:image_slider:slider_type:s3slider' => "s3Slider",
		'widget_manager:widgets:image_slider:slider_type:flexslider' => "FlexSlider",
		'widget_manager:widgets:image_slider:seconds_per_slide' => "Montako sekuntia dia näytetään",
		'widget_manager:widgets:image_slider:slider_height' => "Dian korkeus (pikseleinä)",
		'widget_manager:widgets:image_slider:overlay_color' => "Tekstin taustaväri (heksademimaalina)",
		'widget_manager:widgets:image_slider:title' => "Dia",
		'widget_manager:widgets:image_slider:label:url' => "Kuvan url",
		'widget_manager:widgets:image_slider:label:text' => "Kuvateksti",
		'widget_manager:widgets:image_slider:label:link' => "Linkki",
		'widget_manager:widgets:image_slider:label:direction' => "Kuvatekstin sijainti (s3Slider)",
		'widget_manager:widgets:image_slider:direction:top' => "Ylhäällä",
		'widget_manager:widgets:image_slider:direction:right' => "Oikealla",
		'widget_manager:widgets:image_slider:direction:bottom' => "Alhaalla",
		'widget_manager:widgets:image_slider:direction:left' => "Vasemmalla",
	);
	add_translation("fi", $finnish);

	$twitter_search = array(
		// twitter_search
		'widgets:twitter_search:name' => "Twitter-haku",
		'widgets:twitter_search:description' => "Näyttää vapaavalintaisen Twitter-haun",
		
		'widgets:twitter_search:query' => "Hakumääritykset",
		'widgets:twitter_search:query:help' => "ohjeet hakujen tekemiseen",
		'widgets:twitter_search:title' => "Otsikko (vapaaehtoinen)",
		'widgets:twitter_search:subtitle' => "Alaotsikko (vapaaehtoinen)",
		'widgets:twitter_search:height' => "Vimpaimen korkeus (pikseleinä)",
		'widgets:twitter_search:background' => "Vimpaimen taustaväri (heksadesimaalina, esim. 4690d6)",
		'widgets:twitter_search:not_configured' => "Tälle vimpaimelle ei ole vielä määritetty asetuksia",
	);
	add_translation("fi", $twitter_search);

	$content_by_tag = array(
		// content_by_tag
		'widgets:content_by_tag:name' => "Sisällöt tageittain",
		'widgets:content_by_tag:description' => "Näyttää kohteita tagien perusteella",

		'widgets:content_by_tag:owner_guids' => "Käyttäjät, joiden sisällöt näytetään",
		'widgets:content_by_tag:group_only' => "Näytä vain tämän ryhmän sisällöt",
		'widgets:content_by_tag:entities' => "Näytettävät sisältötyypit",
		'widgets:content_by_tag:tags' => "Tagit (pilkulla eroteltuina)",
		'widgets:content_by_tag:tags_option' => "Tagien välissä käytettävä operaattori",
		'widgets:content_by_tag:tags_option:and' => "ja",
		'widgets:content_by_tag:tags_option:or' => "tai",
		'widgets:content_by_tag:display_option' => "Listan kohteiden ulkoasu",
		'widgets:content_by_tag:display_option:normal' => "Normaali",
		'widgets:content_by_tag:display_option:simple' => "Karsittu",
		'widgets:content_by_tag:display_option:slim' => "Minimaalinen (vain yksi rivi)",
		'widgets:content_by_tag:highlight_first' => "Korostettavien kohteiden määrä (minimaalisessa näkymässä)",
	);
	add_translation("fi", $content_by_tag);

	$rss = array(
		// RSS widget (based on SimplePie)
		'widgets:rss:title' => "RSS-syöte",
		'widgets:rss:description' => "Näyttää RSS-syötteen (SimplePie)",
		'widgets:rss:error:notset' => "Syötteen osoitetta ei ole määritetty",

		'widgets:rss:settings:rss_count' => "Näytettävien kohteiden määrä",
		'widgets:rss:settings:rssfeed' => "Syötteen URL-osoite",
		'widgets:rss:settings:show_feed_title' => "Näytä syötteen otsikko",
		'widgets:rss:settings:excerpt' => "Näytä lyhennelmä syötteen sisällöstä",
		'widgets:rss:settings:show_item_icon' => "Näytä kohteen ikoni (jos lisättynä)",
		'widgets:rss:settings:post_date' => "Näytä luontiaika",
		'widgets:rss:settings:post_date:option:friendly' => "X päivää sitten",
		'widgets:rss:settings:post_date:option:date' => "Päivämäärä",
	);
	add_translation("fi", $rss);

	$free_html = array(
		// Free HTML
		'widgets:free_html:title' => "HTML",
		'widgets:free_html:description' => "Näyttää vapaavalintaisen HTML-koodin",
		'widgets:free_html:settings:html_content' => "Syötä haluamasi HTML-koodi",
		'widgets:free_html:no_content' => "Tämän vimpaimen sisältöä ei ole vielä määritetty",
		
	);
	add_translation("fi", $free_html);

	$tagcloud = array(
		'widgets:tagcloud:description' => "Näyttää tagipilven kontekstista riippuen joko käyttäjän, ryhmän tai koko sivuston tageista.",
		'widgets:tagcloud:no_data' => "Tageja ei ole vielä lisätty",
	);
	add_translation("fi", $tagcloud);

	$entity_statistics = array(
		// entity_statistics widget
		"widgets:entity_statistics:title" => "Statistics", 
		"widgets:entity_statistics:description" => "Shows site statistics", 
		"widgets:entity_statistics:settings:selected_entities" => "Select the entities you wish to show", 
	
	);
	add_translation("fi", $entity_statistics);

	$messages = array(
		// messages widget
		"widgets:messages:description" => "Näyttää viimeisimmät viestisi", 
		"widgets:messages:not_logged_in" => "Sinun pitää olla sisäänkirjautuneena käyttääksesi tätä vimpainta", 
		"widgets:messages:settings:only_unread" => "Näytä vain lukemattomat viestit",
	);
	add_translation("fi", $messages);

	$favorites = array(
		// favorites widget
		"widgets:favorites:title" => "Community Favorites", 
		"widgets:favorites:description" => "Shows your favorite community pages",
		 
		"widgets:favorites:delete:success" => "Favorite removed", 
		"widgets:favorites:delete:failed" => "Failed to remove favorite", 
		"widgets:favorites:save:success" => "Favorite created", 
		"widgets:favorites:save:failed" => "Failed to create favorite", 
		"widgets:favorites:toggle:missing_input" => "Missing input for this action", 
		"widgets:favorites:content:more_info" => "Add your favorite community pages to this widget by clicking on the star icon in the sidebar menu.", 

		"widgets:favorites:menu:add" => "Add this page to your favorites widget", 
		"widgets:favorites:menu:remove" => "Remove this page from your favorites widget", 
			
	);
	add_translation("fi", $favorites);
