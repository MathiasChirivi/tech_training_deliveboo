<?php

return [
    [
        'name' => 'Giuliano',
        'lastname' => 'Gostinfini',
        'email' => 'user1@gmail.com',
        'rest_name' => 'Pizzeria Romana Bassa e Scrocchiarella',
        'rest_address' => 'Via Roma 36, Torino',
        'rest_piva' => '1545262584452',
        'rest_photo' => 'https://media-assets.lacucinaitaliana.it/photos/61fac9aebe6f37f54cf8d0de/16:9/w_2560%2Cc_limit/pizzeria-popolare.jpg',
        'typologies' => ['pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8
            ],
            [
                'name' => 'Pizza Capricciosa',
                'visible' => true,
                'price' => 10
            ],
            [
                'name' => 'Pizza Marinara',
                'visible' => true,
                'price' => 7
            ],
            [
                'name' => 'Pizza Special',
                'visible' => false,
                'price' => 15
            ],
        ]
    ],
    [
        'name' => 'Giuseppe',
        'lastname' => 'Funicello',
        'email' => 'user2@gmail.com',
        'rest_name' => 'Sushi nomade digitale',
        'rest_address' => 'Via firenze 45, Torino',
        'rest_piva' => '1545267884452',
        'rest_photo' => 'https://www.sushienoodles.it/wp-content/uploads/2018/07/corridoio-tavoli-ristorante-sushi.jpg',
        'typologies' => ['sushi'],
        'dishes' => [
            [
                'name' => 'Sushi Misto',
                'visible' => true,
                'price' => 23
            ],
            [
                'name' => 'Sashimi Salmone',
                'visible' => true,
                'price' => 15
            ],
            [
                'name' => 'Sashimi Tonno',
                'visible' => true,
                'price' => 14
            ],
            [
                'name' => 'Barca 2 persone',
                'visible' => false,
                'price' => 45
            ],
        ]
    ],
    [
        'name' => 'Luca',
        'lastname' => 'Formicola',
        'email' => 'user2@gmail.com',
        'rest_name' => 'Ristorante Pizzeria Sushi',
        'rest_address' => 'Via firenze 45, Torino',
        'rest_piva' => '1545267884452',
        'rest_photo' => 'https://www.sushienoodles.it/wp-content/uploads/2018/07/corridoio-tavoli-ristorante-sushi.jpg',
        'typologies' => ['sushi', 'pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Onigiri',
                'visible' => true,
                'price' => 32
            ],
            [
                'name' => 'Pizza Sashimi',
                'visible' => true,
                'price' => 30
            ],
            [
                'name' => 'Sashimi Tonno',
                'visible' => true,
                'price' => 14
            ],
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8
            ],
            [
                'name' => 'Barca 2 persone',
                'visible' => false,
                'price' => 45
            ],
        ]
    ],

];
