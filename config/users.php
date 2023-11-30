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
        'typologies' => ['Pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8,
                'description' => 'Pizza classica con pomodoro, mozzarella e basilico fresco.',
                'ingredients' => 'Pomodoro, Mozzarella, Basilico',
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
        'name' => 'Alessia',
        'lastname' => 'Rossi',
        'email' => 'user5@gmail.com',
        'rest_name' => 'Ristorante della Costa',
        'rest_address' => 'Via della Spiaggia 10, Genova',
        'rest_piva' => '1545263998765',
        'rest_photo' => 'https://www.ristorantedellacosta.it/images/ristorante-vista-mare.jpg',
        'typologies' => ['Seafood', 'Italiana'],
        'dishes' => [
            [
                'name' => 'Spaghetti alle Vongole',
                'visible' => true,
                'price' => 18,
                'description' => 'Fresh clams served with perfectly cooked spaghetti in a garlic and white wine sauce.',
                'ingredients' => 'Vongole fresche, spaghetti, aglio, vino bianco, sale, pepe, olio d\'oliva.'

            ],
            [
                'name' => 'Grilled Calamari',
                'visible' => true,
                'price' => 20,
                'description' => 'Tender calamari, marinated and grilled to perfection.',
                'ingredients' => 'Calamari, marinata, sale, pepe.'

            ],
            [
                'name' => 'Tiramisu',
                'visible' => true,
                'price' => 8,
                'description' => 'A classic Italian dessert with layers of coffee-soaked ladyfingers and mascarpone cream.',
                'ingredients' => 'Savoiardi, caffè, mascarpone, zucchero, cacao.'

            ],
            [
                'name' => 'Lobster Risotto',
                'visible' => false,
                'price' => 35,
                'description' => 'Luxurious risotto made with lobster meat and saffron.',
                'ingredients' => 'Carne di aragosta, riso, zafferano, brodo, formaggio Parmigiano, burro.'

            ],
        ]
    ],

    [
        'name' => 'Marco',
        'lastname' => 'Bianchi',
        'email' => 'user6@gmail.com',
        'rest_name' => 'Osteria del Gusto',
        'rest_address' => 'Piazza della Repubblica 8, Milano',
        'rest_piva' => '1545264554321',
        'rest_photo' => 'https://www.osteriadelgusto.it/images/osteria-interno.jpg',
        'typologies' => ['Italiana'],
        'dishes' => [
            [
                'name' => 'Ravioli di Zucca',
                'visible' => true,
                'price' => 14,
                'description' => 'Ravioli ripieni di zucca serviti con burro e salvia.',
                'ingredients' => 'Ravioli, zucca, burro, salvia, sale, pepe.'

            ],
            [
                'name' => 'Bistecca alla Fiorentina',
                'visible' => true,
                'price' => 30,
                'description' => 'Una succulenta bistecca alla griglia alla fiorentina.',
                'ingredients' => 'Bistecca, sale, pepe, olio d\'oliva.'

            ],
            [
                'name' => 'Panna Cotta',
                'visible' => true,
                'price' => 7,
                'description' => 'Dolce cremoso con salsa al caramello e frutti di bosco.',
                'ingredients' => 'Panna, zucchero, gelatina, caramello, frutti di bosco.'

            ],
            [
                'name' => 'Filetto di Manzo al Pepe Verde',
                'visible' => false,
                'price' => 25,
                'description' => 'Filetto di manzo con salsa al pepe verde.',
                'ingredients' => 'Filetto di manzo, pepe verde, sale, burro.'

            ],
        ]
    ],

    [
        'name' => 'Simone',
        'lastname' => 'Martini',
        'email' => 'user8@gmail.com',
        'rest_name' => 'Ristorante del Mare',
        'rest_address' => 'Via dei Pescatori 25, Napoli',
        'rest_piva' => '1545265123456',
        'rest_photo' => 'https://www.ristorantedelmare.it/images/ristorante-vista-mare.jpg',
        'typologies' => ['Frutti di Mare', 'Italiana'],
        'dishes' => [
            [
                'name' => 'Spaghetti alle Cozze',
                'visible' => true,
                'price' => 16,
                'description' => 'Spaghetti con sugo di pomodoro e cozze fresche.',
                'ingredients' => 'Spaghetti, pomodoro, cozze, aglio, olio d\'oliva, prezzemolo.'

            ],
            [
                'name' => 'Frittura di Paranza',
                'visible' => true,
                'price' => 22,
                'description' => 'Assortimento di pesce fritto di piccole dimensioni.',
                'ingredients' => 'Pesce misto (piccole dimensioni), farina, olio per friggere, sale, limone.'

            ],
            [
                'name' => 'Sformato di Pesce',
                'visible' => true,
                'price' => 12,
                'description' => 'Sformato leggero a base di pesce misto e patate.',
                'ingredients' => 'Pesce misto, patate, uova, latte, formaggio, sale, pepe.'

            ],
            [
                'name' => 'Risotto ai Frutti di Mare',
                'visible' => false,
                'price' => 28,
                'description' => 'Risotto ricco con frutti di mare assortiti.',
                'ingredients' => 'Riso, frutti di mare (assortiti), brodo di pesce, cipolla, vino bianco, olio d\'oliva.'

            ],
        ]
    ],

    [
        'nome' => 'Giulia',
        'cognome' => 'Bianchi',
        'email' => 'giulia.bianchi@example.com',
        'nome_ristorante' => 'Osteria della Nonna',
        'indirizzo_ristorante' => 'Via delle Rose 10, Firenze',
        'piva_ristorante' => '9876543210123',
        'foto_ristorante' => 'https://www.osteriadellanonna.it/images/osteria.jpg',
        'tipologie' => ['Toscana', 'Carne'],
        'piatti' => [
            [
                'nome' => 'Ribollita',
                'visibile' => true,
                'prezzo' => 12,
                'description' => 'Zuppa toscana con pane raffermo, verdure e fagioli.',
                'ingredients' => 'Pane raffermo, verdure miste, fagioli, brodo di verdure.'

            ],
            [
                'nome' => 'Bistecca alla Fiorentina',
                'visibile' => true,
                'prezzo' => 25,
                'description' => 'Tagliata di carne di manzo grigliata.',
                'ingredients' => 'Carne di manzo, sale, pepe, olio d\'oliva.'

            ],
            [
                'nome' => 'Pappa al Pomodoro',
                'visibile' => true,
                'prezzo' => 10,
                'description' => 'Piatto toscano a base di pane, pomodoro e basilico.',
                'ingredients' => 'Pane, pomodoro, basilico, aglio, olio d\'oliva.'

            ],
            [
                'nome' => 'Risotto al Nero di Seppia',
                'visibile' => false,
                'prezzo' => 18,
                'description' => 'Risotto con il nero di seppia e frutti di mare.',
                'ingredients' => 'Riso, nero di seppia, frutti di mare misti, brodo di pesce.'

            ],
        ]
    ],

    [
        'nome' => 'Luca',
        'cognome' => 'Verdi',
        'email' => 'luca.verdi@example.com',
        'nome_ristorante' => 'Trattoria della Piazza',
        'indirizzo_ristorante' => 'Piazza Garibaldi 8, Milano',
        'piva_ristorante' => '8765432109876',
        'foto_ristorante' => 'https://www.trattoriadellapiazza.it/images/trattoria.jpg',
        'tipologie' => ['Italiana', 'Pesce'],
        'piatti' => [
            [
                'nome' => 'Risotto ai Frutti di Mare',
                'visibile' => true,
                'prezzo' => 20,
                'description' => 'Risotto con una selezione di frutti di mare freschi.',
                'ingredients' => 'Riso, frutti di mare misti, brodo di pesce, cipolla, vino bianco, burro.'

            ],
            [
                'nome' => 'Ossobuco alla Milanese',
                'visibile' => true,
                'prezzo' => 22,
                'description' => 'Ossobuco di vitello cotto lentamente con zafferano.',
                'ingredients' => 'Uova, zucchero, mascarpone, caffè, savoiardi, cacao.'

            ],
            [
                'nome' => 'Tiramisu della Casa',
                'visibile' => true,
                'prezzo' => 10,
                'description' => 'Tiramisu fatto in casa con ingredienti freschi.',
                'ingredients' => 'Uova, zucchero, mascarpone, caffè, savoiardi, cacao.'

            ],
            [
                'nome' => 'Pasta al Nero di Seppia',
                'visibile' => false,
                'prezzo' => 16,
                'description' => 'Pasta con il nero di seppia e pomodorini.',
                'ingredients' => 'Pasta, nero di seppia, pomodorini, aglio, olio d\'oliva.'

            ],
        ]
    ],

    [
        'nome' => 'Giovanni',
        'cognome' => 'Bianchi',
        'email' => 'giovanni.bianchi@example.com',
        'nome_ristorante' => 'Ristorante Buon Gusto',
        'indirizzo_ristorante' => 'Via Roma 15, Napoli',
        'piva_ristorante' => '1234567890123',
        'foto_ristorante' => 'https://www.ristorantebuongusto.it/images/ristorante.jpg',
        'tipologie' => ['Italiana', 'Pizza'],
        'piatti' => [
            [
                'nome' => 'Pizza Margherita',
                'visibile' => true,
                'prezzo' => 12,
                'description' => 'Classica pizza con pomodoro, mozzarella e basilico fresco.',
                'ingredients' => 'Pomodoro, mozzarella, basilico.'

            ],
            [
                'nome' => 'Melanzane alla Parmigiana',
                'visibile' => true,
                'prezzo' => 18,
                'description' => 'Melanzane grigliate con salsa di pomodoro e formaggio.',
                'ingredients' => 'Melanzane, pomodoro, formaggio.'

            ],
            [
                'nome' => 'Panna Cotta al Cioccolato',
                'visibile' => true,
                'prezzo' => 8,
                'description' => 'Deliziosa panna cotta al cioccolato con salsa alle fragole.',
                'ingredients' => 'Panna, cioccolato, salsa alle fragole.'

            ],
            [
                'nome' => 'Linguine allo Scoglio',
                'visibile' => false,
                'prezzo' => 20,
                'descrizione' => 'Linguine con una varietà di frutti di mare freschi.',
                'ingredients' => 'Linguine, frutti di mare misti, pomodoro.'

            ],
        ]
    ],



];
