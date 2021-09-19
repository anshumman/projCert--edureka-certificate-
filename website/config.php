<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website belongs to AARAV',
        'nav_menu' => [
            '' => 'Home',
            'content/about-us.php' => 'About AARAV',
            'content/products.php' => 'Products of AARAV',
            'content/contact.php' => 'Contact AARAV',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
