<?php

namespace Database\Seeders;

use App\Models\Cocktail;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $cocktails = [

            [
                "name" => "Margarita",

                "type" => "IBA,ContemporaryClassic",

                "alcoholic" => true,

                "glass" => "Cocktail glass",


                "instructions" => "Strofina il bordo del bicchiere con la fetta di lime per far aderire il sale.\r\nAvere cura di inumidire solo il bordo esterno e cospargere di sale.\r\nIl sale dovrebbe presentarsi alle labbra del bevitore e non mescolarsi mai al cocktail.\r\nShakerare gli altri ingredienti con ghiaccio, quindi versarli delicatamente nel bicchiere.",

                "drinkThumb" => "https=>//www.thecocktaildb.com/images/media/drink/5noda61589575158.jpg",

                'ingredients' => [
                    [
                        'name' => 'Tequila',
                        'measure' => '1 1/2 oz'
                    ],
                    [
                        'name' => 'Triple sec',
                        'measure' => '1/2 oz'
                    ],
                    [
                        'name' => 'Lime juice',
                        'measure' => '1 oz'
                    ],
                    [
                        'name' => 'Salt',
                        'measure' => null,
                    ],
                ],

            ],

            [
                "name" => "Whitecap Margarita",

                "type" => "IBA,NewEra",

                "alcoholic" => true,

                "glass" => "Margarita/Coupette glass",


                "instructions" => " Metti tutti gli ingredienti in un frullatore e frulla fino a che non diventa liscio.",

                "drinkThumb" => "https=>//www.thecocktaildb.com/images/media/drink/srpxxp1441209622.jpg",

                'ingredients' => [
                    [
                        'name' => 'Ice',
                        'measure' => null,
                    ],
                    [
                        'name' => 'Tequila',
                        'measure' => '1 cup'
                    ],
                    [
                        'name' => 'Lime juice',
                        'measure' => '2 oz'
                    ],
                    [
                        'name' => 'Cream of coconut',
                        'measure' => '1/4 cup'
                    ],

                ],

            ],

            [

                "name" => "Tommy's Margarita",

                "type" => "IBA,NewEra",

                "alcoholic" => true,

                "glass" => "Old-Fashioned glas",

                "instructions" => "Shakerare e filtrare in una coppetta da cocktail ghiacciata.",

                "drinkThumb" => "https =>//www.thecocktaildb.com/images/media/drink/loezxn1504373874.jpg",

                'ingredients' => [
                    [
                        'name' => 'Tequila',
                        'measure' => '4.5 cl"',
                    ],
                    [
                        'name' => 'Lime Juice',
                        'measure' => '1.5 cl'
                    ],
                    [
                        'name' => 'Agave syrup',
                        'measure' => '2 spoons'
                    ],

                ],

            ],
            [

                "name" => "Tommy's Margarita",

                "type" => "IBA,NewEra",

                "alcoholic" => true,

                "glass" => "Old-Fashioned glas",

                "instructions" => "Shakerare e filtrare in una coppetta da cocktail ghiacciata.",

                "drinkThumb" => "https =>//www.thecocktaildb.com/images/media/drink/loezxn1504373874.jpg",

                'ingredients' => [
                    [
                        'name' => 'Tequila',
                        'measure' => '4.5 cl"',
                    ],
                    [
                        'name' => 'Lime Juice',
                        'measure' => '1.5 cl'
                    ],
                    [
                        'name' => 'Agave syrup',
                        'measure' => '2 spoons'
                    ],

                ],

            ],

            [

                "name" => "Strawberry Margarita",

                "type" => "IBA,NewEra",

                "alcoholic" => true,

                "glass" => "Cocktail glass",

                "instructions" => "Strofinare il bordo del bicchiere da cocktail con succo di limone e immergerlo nel sale. Shakerare grappa, tequila, triple sec, succo di limone e fragole con ghiaccio, filtrare nel bicchiere bordato di sale e servire.",

                "drinkThumb" => "https =>//www.thecocktaildb.com/images/media/drink/tqyrpw1439905311.jpg",

                'ingredients' => [
                    [
                        'name' => 'Strawberry schnapps',
                        'measure' => '1 oz',
                    ],
                    [
                        'name' => 'Tequila',
                        'measure' => '1/2 oz'
                    ],
                    [
                        'name' => 'Triple sec',
                        'measure' => '1 oz',
                    ],
                    [
                        'name' => 'Lemon juice',
                        'measure' => '1 oz',
                    ],
                    [
                        'name' => 'Salt',
                        'measure' => null,
                    ],
                    [
                        'name' => 'Strawberries',
                        'measure' => null,

                    ],

                ],

            ],

            [

                "name" => "Smashed Watermelon Margarita",

                "type" => "IBA,NewEra",

                "alcoholic" => true,

                "glass" => "Collins glass",

                "instructions" => "In un barattolo di vetro pestare l'anguria e 5 foglie di menta insieme, filtrare il contenuto in un bicchiere. Quindi aggiungere il succo di pompelmo, il succo di mezzo lime, la tequila e un po 'di ghiaccio. Metti un coperchio sul barattolo e agita. Versare in un bicchiere e aggiungere altro ghiaccio. Guarnire con menta fresca e una fettina di anguria.",

                "drinkThumb" => "https =>//www.thecocktaildb.com/images/media/drink/dztcv51598717861.jpg",

                

                    'ingredients' => [
                        [
                            'name' => 'Watermelon',
                            'measure' => '1 oz',
                        ],
                        [
                            'name' => 'Mint',
                            'measure' => '5 oz'
                        ],
                        [
                            'name' => 'Grapefruit Juice',
                            'measure' => '1/3 Cup',
                        ],
                        [
                            'name' => 'Lime',
                            'measure' => '1 shot',
                        ],
                        [
                            'name' => 'Tequila',
                            'measure' => 'Garnish with',
                        ],
                        [
                            'name' => 'Watermelon',
                            'measure' => null,

                        ],
                        [
                            'name' => 'Mint',
                            'measure' => null,

                        ],

                    ],


            ],
        ];

        foreach ($cocktails as $cocktailData) {

            $newCocktail = new Cocktail();

            $newCocktail->name = $cocktailData['name'];

            $newCocktail->type = $cocktailData['type'];

            $newCocktail->alcoholic = $cocktailData['alcoholic'];

            $newCocktail->glass = $cocktailData['glass'];

            $newCocktail->instructions = $cocktailData['instructions'];

            $newCocktail->drinkThumb = $cocktailData['drinkThumb'];

            $newCocktail->ingredients = $cocktailData['ingredients'];

            $newCocktail->save();
        }
    }
}
