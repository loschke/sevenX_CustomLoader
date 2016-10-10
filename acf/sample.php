<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_57f3c401ee51a',
        'title' => 'WiA Partner',
        'fields' => array (
            array (
                'key' => 'field_57f3c40bc15f7',
                'label' => 'Partner Website',
                'name' => 'partner_website',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array (
                'key' => 'field_57f3c43dc15f8',
                'label' => 'Top Partner',
                'name' => 'top_partner',
                'type' => 'checkbox',
                'instructions' => 'Mit Top markierte Partner werden in der Seitenleiste und auf der Startseite dargestellt',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array (
                    1 => 'JA',
                ),
                'default_value' => array (
                ),
                'layout' => 'horizontal',
                'toggle' => 0,
                'return_format' => 'value',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'wia_partner',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

endif;