<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$add_widgets_setting = $vars['entity']->add_widgets_setting;

echo elgg_view_input('select',[
    
    'label' => elgg_echo('add:widgets:setting'),
    'name' => 'params[add_widgets_setting]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('add:widgets:yes'),
                '2' => elgg_echo('add:widgets:no'),
                
                
        
	),
    'required' => true,
    'value' => $add_widgets_setting,
]);
