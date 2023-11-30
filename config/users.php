<?php

return [
    [
        'name' => 'Giuliano',
        'lastname' => 'Gostinfini',
        'email' => 'user1@gmail.com',
        'rest_name' => 'Pizzeria Romana Bassa e Scrocchiarella',
        'rest_address' => 'Via Roma 36, Torino',
        'rest_piva' => '1545262584451',
        'rest_photo' => 'https://media-assets.lacucinaitaliana.it/photos/61fac9aebe6f37f54cf8d0de/16:9/w_2560%2Cc_limit/pizzeria-popolare.jpg',
        'typologies' => ['Pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8,
                'ingredients' => 'Farina, acqua, olio, sale, pepe, pomodoro, mozzarella, basilico',
                'description' => 'Classica pizza romana fatta secondo tradizione, bassa e scrocchiarella'
            ],
            [
                'name' => 'Pizza Capricciosa',
                'visible' => true,
                'price' => 10,
                'description' => 'Pizza con pomodoro, mozzarella, funghi, olive, prosciutto cotto e carciofi.',
                'ingredients' => 'Pomodoro, mozzarella, funghi, olive, prosciutto cotto e carciofi'

            ],
            [
                'name' => 'Pizza Marinara',
                'visible' => true,
                'price' => 7,
                'description' => 'Pizza con pomodoro, aglio, origano e olio d\'oliva.',
                'ingredients' => 'pomodoro, aglio, origano e olio di oliva'
            ],
            [
                'name' => 'Pizza Special',
                'visible' => false,
                'price' => 15,
                'description' => 'Pizza speciale della casa con ingredienti segreti.',
                'ingredients' => 'Ingredienti segreti'
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
        'typologies' => ['Giapponese'],
        'dishes' => [
            [
                'name' => 'Sushi Misto',
                'visible' => true,
                'price' => 23,
                'ingredients' => 'Riso, salmone, tonno, gamberetti, alga nori',
                'description' => 'Assortimento di sushi tradizionale'
            ],
            [
                'name' => 'Sashimi Salmone',
                'visible' => true,
                'price' => 15,
                'ingredients' => 'Salmone fresco tagliato a fette sottili',
                'description' => 'Fette di salmone fresco'
            ],
            [
                'name' => 'Sashimi Tonno',
                'visible' => true,
                'price' => 14,
                'ingredients' => 'Tonno fresco tagliato a fette sottili',
                'description' => 'Fette di tonno fresco'
            ],
            [
                'name' => 'Barca 2 persone',
                'visible' => false,
                'price' => 45,
                'ingredients' => 'Assortimento di sushi e sashimi per 2 persone',
                'description' => 'Una barca con varietà di sushi e sashimi'
            ],
        ]
    ],
    [
        'name' => 'Luca',
        'lastname' => 'Formicola',
        'email' => 'user3@gmail.com',
        'rest_name' => 'Ristorante Pizzeria Sushi',
        'rest_address' => 'Via firenze 45, Torino',
        'rest_piva' => '1545267884453',
        'rest_photo' => 'https://www.sushienoodles.it/wp-content/uploads/2018/07/corridoio-tavoli-ristorante-sushi.jpg',
        'typologies' => ['Giapponese', 'Pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Onigiri',
                'visible' => true,
                'price' => 32,
                'ingredients' => 'Riso, alghe, tonno, avocado, salsa di soia',
                'description' => 'Pizza con base di riso e topping giapponesi'
            ],
            [
                'name' => 'Pizza Sashimi',
                'visible' => true,
                'price' => 30,
                'ingredients' => 'Pesce crudo tagliato a fette sottili',
                'description' => 'Pizza con topping di pesce crudo'
            ],
            [
                'name' => 'Sashimi Tonno',
                'visible' => true,
                'price' => 14,
                'ingredients' => 'Tonno fresco tagliato a fette sottili',
                'description' => 'Fette di tonno fresco'
            ],
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8,
                'ingredients' => 'Farina, acqua, olio, sale, pomodoro, mozzarella, basilico',
                'description' => 'Classica pizza margherita'
            ],
            [
                'name' => 'Barca 2 persone',
                'visible' => false,
                'price' => 45,
                'ingredients' => 'Assortimento di sushi e sashimi per 2 persone',
                'description' => 'Una barca con varietà di sushi e sashimi'
            ],
        ]
    ],
];
