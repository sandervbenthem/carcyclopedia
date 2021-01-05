<?php

return [
    // Name of the scheme
    'table_name' => 'manufacturers',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `manufacturers`",

    // The scheme
    'scheme' => "CREATE TABLE `manufacturers` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(80) NOT NULL,
        `country` int(11),
        `date_of_founding` date,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'array',
        'data' => array(
        [
            'name' => "Mercedes",
            'country'    => 80,
            'birthday'   => "1926"
        ],

        [
           'name' => "BMW",
           'country' => 80,
           'birthday' => "1916"
        ],

        [
            'name' => "Chevrolet",
            'country' => 226,
            'birthday' => "1911"

        ],

        [
            'name' => "Toyota",
            'country' => 107,
            'birthday' => "1937"

        ]),
    ],
];