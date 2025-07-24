<?php
if (function_exists('acf_add_local_field_group')):

    // Navigation Bar Fields
    acf_add_local_field_group([
        'key' => 'group_navigation_bar',
        'title' => 'Navigation Bar',
        'fields' => [
            [
                'key' => 'field_logo',
                'label' => 'Logo',
                'name' => 'logo',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ],
            [
                'key' => 'field_nav_links',
                'label' => 'Nav Links',
                'name' => 'nav_links',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Link',
                'sub_fields' => [
                    [
                        'key' => 'field_nav_label',
                        'label' => 'Label',
                        'name' => 'label',
                        'type' => 'text',
                        'default_value' => 'Menu Item',
                    ],
                    [
                        'key' => 'field_nav_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'return_format' => 'array',
                    ]
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/nav-bar',
                ],
            ],
        ],
    ]);

    // Hero Section Fields
    acf_add_local_field_group([
        'key' => 'group_hero_section',
        'title' => 'Hero Section',
        'fields' => [
            [
                'key' => 'field_hero_headline',
                'label' => 'Headline',
                'name' => 'headline',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero_supporting_text',
                'label' => 'Supporting Text',
                'name' => 'supporting_text',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_hero_button_text',
                'label' => 'Button Text',
                'name' => 'button_text',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero_button_link',
                'label' => 'Button Link',
                'name' => 'button_link',
                'type' => 'link',
                'return_format' => 'array',
            ],
            [
                'key' => 'field_hero_image',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/hero',
                ],
            ],
        ],
    ]);

    // Feature Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_feature_section',
        'title' => 'Feature Section',
        'fields' => array(
            array(
                'key' => 'field_features_heading',
                'label' => 'Section Heading',
                'name' => 'features_heading',
                'type' => 'text',
            ),
            array(
                'key' => 'field_features_description',
                'label' => 'Section Description',
                'name' => 'features_description',
                'type' => 'text',
            ),
            array(
                'key' => 'field_features',
                'label' => 'Features',
                'name' => 'features',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_feature_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_feature_heading',
                        'label' => 'Heading',
                        'name' => 'heading',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_feature_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/features-section',
                ),
            ),
        ),
    ));

    // Contact Us Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_contact_us_section',
        'title' => 'Contact Us Section',
        'fields' => array(
            array(
                'key' => 'field_contact_title',
                'label' => 'Section Title',
                'name' => 'contact_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_heading',
                'label' => 'Heading',
                'name' => 'contact_heading',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_description',
                'label' => 'Description',
                'name' => 'contact_description',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_contact_address',
                'label' => 'Address',
                'name' => 'contact_address',
                'type' => 'text',
            ),
            array(
                'key' => 'field_contact_email',
                'label' => 'Email Address',
                'name' => 'contact_email',
                'type' => 'email',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/contact-form',
                ),
            ),
        ),
    ));

    // Testimonials Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_testimonials_section',
        'title' => 'Testimonials Section',
        'fields' => array(
            array(
                'key' => 'field_testimonial_heading',
                'label' => 'Section Heading',
                'name' => 'testimonial_heading',
                'type' => 'text',
            ),
            array(
                'key' => 'field_testimonials',
                'label' => 'Testimonials',
                'name' => 'testimonials',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_testimonial_quote',
                        'label' => 'Quote',
                        'name' => 'quote',
                        'type' => 'text',
                        'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...',
                    ),
                    array(
                        'key' => 'field_testimonial_name',
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text',
                        'default_value' => 'John Vick',
                    ),
                    array(
                        'key' => 'field_testimonial_designation',
                        'label' => 'Designation',
                        'name' => 'designation',
                        'type' => 'text',
                        'default_value' => 'CEO',
                    ),
                    array(
                        'key' => 'field_testimonial_photo',
                        'label' => 'Photo',
                        'name' => 'photo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/testimonial',
                ),
            ),
        ),
    ));

endif;




