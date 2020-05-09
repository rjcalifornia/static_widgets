<?php
/**
 * Button area for showing the add widgets panel
 */
?>
<div class="elgg-widget-add-control">
<?php

$add_widgets_setting = elgg_get_plugin_setting('add_widgets_setting', 'static_widgets');

if ($add_widgets_setting == 2 && !elgg_is_admin_logged_in())
{
    echo '';
}
else{

	echo elgg_view('output/url', array(
		'href' => '#',
		'text' => elgg_echo('widgets:add'),
		'class' => 'elgg-button elgg-button-action',
		'rel' => 'toggle',
		'is_trusted' => true,
		'data-toggle-selector' => '#widgets-add-panel, .elgg-widget-add-control > a',
		'data-toggle-slide' => 0,
	));
	echo elgg_view('output/url', array(
		'href' => '#',
		'text' => elgg_echo('widgets:panel:close'),
		'class' => 'elgg-button elgg-button-action hidden',
		'rel' => 'toggle',
		'is_trusted' => true,
		'data-toggle-selector' => '#widgets-add-panel, .elgg-widget-add-control > a',
		'data-toggle-slide' => 0,
	));
        
}
?>
</div>
