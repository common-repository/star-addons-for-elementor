<?php

/**
 * Add custom icon into elementor icon field
 */
function star_addons_icons() {
    return [
        // Box Icons
        'bx bx-share-alt'           => esc_html__( 'Share Alt', 'star-addons-for-elementor' ),
        'bx bxs-map'                => esc_html__( 'Map', 'star-addons-for-elementor' ),
        'bx bx-cube'                => esc_html__( 'Cube', 'star-addons-for-elementor' ),
        'bx bx-diamond'             => esc_html__( 'Diamond', 'star-addons-for-elementor' ),
        'bx bxs-user'               => esc_html__( 'User', 'star-addons-for-elementor' ),
        'bx bx-user-pin'            => esc_html__( 'User Pin', 'star-addons-for-elementor' ),
        'bx bxs-user-pin'           => esc_html__( 'User Pin Alt', 'star-addons-for-elementor' ),
        'bx bx-support'             => esc_html__( 'Support', 'star-addons-for-elementor' ),
        'bx bx-atom'                => esc_html__( 'Atom', 'star-addons-for-elementor' ),
        'bx bxs-file-doc'           => esc_html__( 'File Doc', 'star-addons-for-elementor' ),
        'bx bx-anchor'              => esc_html__( 'Anchor', 'star-addons-for-elementor' ),
        'bx bx-category'            => esc_html__( 'Category', 'star-addons-for-elementor' ),
        'bx bxs-shapes'             => esc_html__( 'Shapes', 'star-addons-for-elementor' ),
        'bx bx-message-alt-edit'    => esc_html__( 'Message Edit', 'star-addons-for-elementor' ),
        'bx bx-toggle-left'         => esc_html__( 'Toggle Left', 'star-addons-for-elementor' ),
        'bx bx-toggle-right'        => esc_html__( 'Toggle Right', 'star-addons-for-elementor' ),
        'bx bx-news'                => esc_html__( 'News', 'star-addons-for-elementor' ),
        'bx bx-box'                 => esc_html__( 'Box', 'star-addons-for-elementor' ),
        'bx bx-brush-alt'           => esc_html__( 'Brush', 'star-addons-for-elementor' ),
        'bx bx-extension'           => esc_html__( 'Extension', 'star-addons-for-elementor' ),
        'bx bx-gift'                => esc_html__( 'Gift', 'star-addons-for-elementor' ),
        'bx bx-table'               => esc_html__( 'Table', 'star-addons-for-elementor' ),
        'bx bx-abacus'              => esc_html__( 'Abacus', 'star-addons-for-elementor' ),
        'bx bx-group'               => esc_html__( 'Group', 'star-addons-for-elementor' ),
        'bx bx-folder-plus'         => esc_html__( 'Folder', 'star-addons-for-elementor' ),
        'bx bx-rocket'              => esc_html__( 'Rocket', 'star-addons-for-elementor' ),
        'bx bxs-hot'                => esc_html__( 'Hot', 'star-addons-for-elementor' ),
        'bx bx-download'            => esc_html__( 'Download', 'star-addons-for-elementor' ),
        'bx bx-grid-alt'            => esc_html__( 'Grid', 'star-addons-for-elementor' ),
        'bx bx-credit-card-front'   => esc_html__( 'Credit Card Front', 'star-addons-for-elementor' ),
        'bx bx-refresh'             => esc_html__( 'Refresh', 'star-addons-for-elementor' ),
        'bx bxs-truck'              => esc_html__( 'Truck', 'star-addons-for-elementor' ),
        'bx bx-time-five'           => esc_html__( 'Time Five', 'star-addons-for-elementor' ),
        'bx bx-phone-call'          => esc_html__( 'Phone Call', 'star-addons-for-elementor' ),
        'bx bx-map'                 => esc_html__( 'Map', 'star-addons-for-elementor' ),
        'bx bx-globe'               => esc_html__( 'Globe', 'star-addons-for-elementor' ),
        'bx bx-plus'                => esc_html__( 'Plus', 'star-addons-for-elementor' ),
        'bx bx-play'                => esc_html__( 'Play', 'star-addons-for-elementor' ),
        'bx bx-chevron-right'       => esc_html__( 'Chevron Right', 'star-addons-for-elementor' ),
        'bx bx-donate-blood'        => esc_html__( 'Donate Blood', 'star-addons-for-elementor' ),
        'bx bxs-bank'               => esc_html__( 'Bank', 'star-addons-for-elementor' ),
        'bx bx-cog'                 => esc_html__( 'Cog', 'star-addons-for-elementor' ),
        'bx bx-layer'               => esc_html__( 'Layer', 'star-addons-for-elementor' ),
        'bx bx-brain'               => esc_html__( 'Brain', 'star-addons-for-elementor' ),
        'bx bxl-google'             => esc_html__( 'Google', 'star-addons-for-elementor' ),
        'bx bxl-twitter'            => esc_html__( 'Twitter', 'star-addons-for-elementor' ),
        'bx bxl-linkedin'           => esc_html__( 'Linkedin', 'star-addons-for-elementor' ),
        'bx bxl-instagram'          => esc_html__( 'Instagram', 'star-addons-for-elementor' ),
        'bx bxl-instagram-alt'      => esc_html__( 'Instagram Alt', 'star-addons-for-elementor' ),
        'bx bxl-facebook'           => esc_html__( 'facebook', 'star-addons-for-elementor' ),
        'bx bxl-pinterest-alt'      => esc_html__( 'Pinterest', 'star-addons-for-elementor' ),
        'bx bxl-youtube'            => esc_html__( 'YouTube', 'star-addons-for-elementor' ),
        'bx bxl-skype'              => esc_html__( 'Skype', 'star-addons-for-elementor' ),
        'bx bxl-vimeo'              => esc_html__( 'Vimeo', 'star-addons-for-elementor' ),
        'bx bxl-messenger'          => esc_html__( 'Messenger', 'star-addons-for-elementor' ), 
        'bx bx-info-circle'         => esc_html__( 'Info Circle', 'star-addons-for-elementor' ),
        'bx bx-book-open'           => esc_html__( 'Book Open', 'star-addons-for-elementor' ),
        'bx bx-shopping-bag'        => esc_html__( 'Shopping', 'star-addons-for-elementor' ),
        'bx bxs-badge-dollar'       => esc_html__( 'Dollar', 'star-addons-for-elementor' ),
        'bx bx-copy-alt'            => esc_html__( 'Copy', 'star-addons-for-elementor' ),
        'bx bx-code-alt'            => esc_html__( 'Code', 'star-addons-for-elementor' ),
        'bx bx-flag'                => esc_html__( 'Flag', 'star-addons-for-elementor' ),
        'bx bx-camera'              => esc_html__( 'Camera', 'star-addons-for-elementor' ),
        'bx bxs-flag-checkered'     => esc_html__( 'Flag Checkered', 'star-addons-for-elementor' ),
        'bx bx-health'              => esc_html__( 'Health', 'star-addons-for-elementor' ),
        'bx bxs-lock-open'          => esc_html__( 'Lock Open', 'star-addons-for-elementor' ),
        'bx bx-line-chart'          => esc_html__( 'Line Chart', 'star-addons-for-elementor' ),
        'bx bx-book-reader'         => esc_html__( 'Book Reader', 'star-addons-for-elementor' ),
        'bx bx-target-lock'         => esc_html__( 'Target Lock', 'star-addons-for-elementor' ),
        'bx bxs-thermometer'        => esc_html__( 'Thermometer', 'star-addons-for-elementor' ),
        'bx bx-shape-triangle'      => esc_html__( 'Triangle', 'star-addons-for-elementor' ),
        'bx bx-font-family'         => esc_html__( 'Font Family', 'star-addons-for-elementor' ),
        'bx bxs-drink'              => esc_html__( 'Drink', 'star-addons-for-elementor' ),
        'bx bx-first-aid'           => esc_html__( 'First Aid', 'star-addons-for-elementor' ),
        'bx bx-bar-chart-alt-2'     => esc_html__( 'Chart', 'star-addons-for-elementor' ),
        'bx bx-briefcase-alt-2'     => esc_html__( 'Briefcase', 'star-addons-for-elementor' ),
        'bx bx-book-reader'         => esc_html__( 'Book Reader', 'star-addons-for-elementor' ),
        'bx bx-user-circle'         => esc_html__( 'User Circle', 'star-addons-for-elementor' ),
        'bx bx-check'               => esc_html__( 'Check', 'star-addons-for-elementor' ),
        'bx bx-check-circle'        => esc_html__( 'Check Circle', 'star-addons-for-elementor' ),
        'bx bx-cake'                => esc_html__( 'Cake', 'star-addons-for-elementor' ),
        'bx bx-paper-plane'         => esc_html__( 'Paper Plane', 'star-addons-for-elementor' ),
        'bx bx-laptop'              => esc_html__( 'Laptop', 'star-addons-for-elementor' ),
        'bx bx-mobile-vibration'    => esc_html__( 'Mobile Vibration', 'star-addons-for-elementor' ),
        'bx bxs-paper-plane'        => esc_html__( 'Paper Plane Alt', 'star-addons-for-elementor' ),
        'bx bx-file'                => esc_html__( 'File', 'star-addons-for-elementor' ),
        'bx bx-user-voice'          => esc_html__( 'User Voice', 'star-addons-for-elementor' ),
        'bx bxs-quote-alt-right'    => esc_html__( 'Quote Right', 'star-addons-for-elementor' ),
        'bx bxs-quote-alt-left'     => esc_html__( 'Quote Left', 'star-addons-for-elementor' ),
        'bx bx-chevron-down'        => esc_html__( 'Chevron Down', 'star-addons-for-elementor' ),
        'bx bx-chevron-up'          => esc_html__( 'Chevron Up', 'star-addons-for-elementor' ),
        'bx bxs-send'               => esc_html__( 'Send', 'star-addons-for-elementor' ),
        'bx bx-right-arrow-alt'     => esc_html__( 'Right Arrow Alt', 'star-addons-for-elementor' ),
        'bx bxs-phone-call'         => esc_html__( 'Phone Call 2', 'star-addons-for-elementor' ),
        'bx bx-location-plus'       => esc_html__( 'Location Plus', 'star-addons-for-elementor' ),
        'bx bx-envelope'            => esc_html__( 'Envelope', 'star-addons-for-elementor' ),    
        'bx bx-area'                => esc_html__( 'Area', 'star-addons-for-elementor' ), 
        'bx bxs-widget'             => esc_html__( 'Widget', 'star-addons-for-elementor' ),
        'bx bx-calendar-event'      => esc_html__( 'Calendar Event', 'star-addons-for-elementor' ), 
        'bx bx-id-card'             => esc_html__( 'Id Card', 'star-addons-for-elementor' ), 
        'bx bxs-widget'             => esc_html__( 'Widget', 'star-addons-for-elementor' ),
        'bx bx-trophy'              => esc_html__( 'Trophy', 'star-addons-for-elementor' ),
        'bx bx-certification'       => esc_html__( 'Certification', 'star-addons-for-elementor' ) 
    ];
}

function star_addons_include_icons() {
    return array_keys(star_addons_icons() );
}
