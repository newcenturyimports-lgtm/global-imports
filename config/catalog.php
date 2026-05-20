<?php

/*
|--------------------------------------------------------------------------
| Global Market — Product Catalog
|--------------------------------------------------------------------------
|
| Single source of truth for the storefront. Edit this file to add, remove,
| or update products, brands, and categories. No database required.
|
| Add a product:
|   1. Drop the photo in: public/images/products/your-photo.jpg
|   2. Add a new entry under 'products' (slug must be unique)
|
| Add a brand:
|   1. (Optional) Drop a logo in: public/images/brand/brand-yourbrand.svg
|   2. Add a new entry under 'brands' (slug must be unique)
|
*/

return [

    'categories' => [
        ['slug' => 'grains-flours',     'name' => 'Grains & Flours',     'icon' => 'wheat',   'blurb' => 'Rice, fufu, ugali, corn meal — the staples of every kitchen.'],
        ['slug' => 'teas-beverages',    'name' => 'Teas & Beverages',    'icon' => 'cup',     'blurb' => 'Kenyan tea, sodas, juices, malt drinks and more.'],
        ['slug' => 'spices-seasonings', 'name' => 'Spices & Seasonings', 'icon' => 'pepper',  'blurb' => 'Mchuzi mixes, masalas, herbs and the warm flavors of home.'],
        ['slug' => 'canned-goods',      'name' => 'Canned Goods',        'icon' => 'can',     'blurb' => 'Tomato paste, sardines, vegetables — pantry-ready.'],
        ['slug' => 'specialty-foods',   'name' => 'Specialty Foods',     'icon' => 'leaf',    'blurb' => 'Oporo, baobab, traditional snacks and dried specialties.'],
    ],

    'brands' => [
        ['slug' => 'tembo',          'name' => 'Tembo',           'house' => true,  'country' => 'USA / Kenya', 'blurb' => "Global Market's own house brand. African grains and flours, sourced direct and packed for the American kitchen."],
        ['slug' => 'ketepa',         'name' => 'Ketepa Pride',    'country' => 'Kenya',   'blurb' => 'A heritage Kenyan tea blender — black tea and flavored infusions from the highlands.'],
        ['slug' => 'royco',          'name' => 'Royco',           'country' => 'Kenya',   'blurb' => 'Unmistakable Mchuzi Mix — the East-African seasoning that turns stew into a feast.'],
        ['slug' => 'zesta',          'name' => 'Zesta',           'country' => 'Kenya',   'blurb' => 'Tomatoes, jams and sauces — the pantry brand Kenyan kitchens trust.'],
        ['slug' => 'tropical-heat',  'name' => 'Tropical Heat',   'country' => 'Kenya',   'blurb' => 'Pure & natural masala seasonings — beef, chicken, fish and more.'],
        ['slug' => 'de-rica',        'name' => 'De Rica',         'country' => 'Italy',   'blurb' => 'Double-concentrated tomato paste from 100% fresh Italian tomatoes.'],
        ['slug' => 'gino',           'name' => 'Gino',            'country' => 'Italy',   'blurb' => 'A West-African favorite — rich tomato paste packed in Italy.'],
        ['slug' => 'salsa',          'name' => 'Salsa',           'country' => 'Italy',   'blurb' => 'Double-concentrated tomato paste — minimal ingredients, maximum flavor.'],
        ['slug' => 'tropiway',       'name' => 'Tropiway',        'country' => 'Ghana',   'blurb' => 'Cocoyam and plantain fufu flours — the West-African staple, kitchen-ready.'],
        ['slug' => 'mamas-choice',   'name' => "Mama's Choice",   'country' => 'Ghana',   'blurb' => 'Enriched fufu mixes that taste like home.'],
        ['slug' => 'golden-tropics', 'name' => 'Golden Tropics',  'country' => 'Ghana',   'blurb' => 'Pan-African flours and pantry staples.'],
        ['slug' => 'neat-foods',     'name' => 'Neat Foods',      'country' => 'Ghana',   'blurb' => 'Premium plantain fufu and meal mixes.'],
        ['slug' => 'goya',           'name' => 'Goya',            'country' => 'USA / Caribbean', 'blurb' => 'The Latin and Caribbean pantry — juices, sodas, malt drinks and more.'],
        ['slug' => 'vita-malt',      'name' => 'Vita Malt',       'country' => 'Caribbean', 'blurb' => 'Classic non-alcoholic malt beverage — a refreshment with deep flavor.'],
        ['slug' => 'malta-guinness', 'name' => 'Malta Guinness',  'country' => 'Nigeria', 'blurb' => 'The iconic non-alcoholic malt drink — rich, full-bodied and energizing.'],
        ['slug' => 'asli',           'name' => 'Asli',            'country' => 'Pakistan', 'blurb' => 'Authentic mango juice and South-Asian beverages.'],
        ['slug' => 'fahari',         'name' => 'Fahari ya Kenya', 'country' => 'Kenya',   'blurb' => 'Premium Kenyan black tea — the pride of the highlands.'],
        ['slug' => 'safari',         'name' => 'Safari Pure Tea', 'country' => 'Kenya',   'blurb' => 'The true taste of Kenya — pure tea, packed at origin.'],
        ['slug' => 'titus',          'name' => 'Titus',           'country' => 'Multi',   'blurb' => 'Sardines in tomato sauce — a pantry classic across West Africa.'],
        ['slug' => 'anny',           'name' => 'Anny',            'country' => 'Multi',   'blurb' => 'Canned sardines — quick, flavorful protein for any meal.'],
        ['slug' => 'traditional',    'name' => 'Traditional Foods', 'country' => 'West Africa', 'blurb' => 'Oporo, baobab and the traditional staples from the West African shelves.'],
    ],

    /*
     * Product entries.
     *
     * Fields:
     *   slug       — unique URL slug
     *   name       — display name
     *   brand      — brand slug
     *   category   — category slug
     *   image      — file path under public/images/products/ (or full URL)
     *   weight     — e.g. "5 lb (2.27 kg)"
     *   origin     — country of origin
     *   short      — 1-line teaser
     *   long       — full description
     *   badges     — array of small ribbon labels (optional)
     *   featured   — bool — surface on home page
     */
    'products' => [

        // === Tembo (own brand) ===
        [
            'slug' => 'tembo-njahi-black-beans',
            'name' => 'Tembo Njahi · Black Beans',
            'brand' => 'tembo', 'category' => 'grains-flours',
            'image' => 'tembo-njahi.jpg',
            'weight' => '2.2 lb (1 kg)', 'origin' => 'Kenya',
            'short' => 'Hand-cleaned heirloom black beans — the heart of njahi.',
            'long'  => 'Njahi, the prized black bean of the Kikuyu highlands. Slow-stewed with onions, coconut, and ripe banana, it becomes the iconic dish of celebration. Hand-cleaned at origin and shelf-stable for two years.',
            'badges' => ['Quality at its Best', 'Own brand'],
            'featured' => true,
        ],
        [
            'slug' => 'tembo-jasmine-rice',
            'name' => 'Tembo Jasmine Rice',
            'brand' => 'tembo', 'category' => 'grains-flours',
            'image' => 'tembo-jasmine.jpg',
            'weight' => '5 lb (2.27 kg)', 'origin' => 'Kenya / Thailand',
            'short' => 'Long-grain jasmine rice with a soft floral aroma.',
            'long'  => 'A fragrant long-grain jasmine — tender, slightly sticky, and ready to carry curries, stews and pilau. Packed in a resealable five-pound bag.',
            'badges' => ['Quality at its Best', 'Own brand'],
            'featured' => true,
        ],
        [
            'slug' => 'tembo-plain-uji',
            'name' => 'Tembo Plain Uji · Millet Porridge',
            'brand' => 'tembo', 'category' => 'grains-flours',
            'image' => 'tembo-uji.jpg',
            'weight' => '5 lb (2.27 kg)', 'origin' => 'Kenya',
            'short' => 'Smooth millet porridge flour — the East-African breakfast staple.',
            'long'  => 'Uji is the warm morning porridge that fuels East African families. Our plain millet blend cooks in minutes and pairs with milk, honey or lemon for a soothing breakfast.',
            'badges' => ['Quality at its Best'],
            'featured' => true,
        ],
        [
            'slug' => 'tembo-farina',
            'name' => 'Tembo Farina',
            'brand' => 'tembo', 'category' => 'grains-flours',
            'image' => 'tembo-farina.jpg',
            'weight' => '5 lb (2.27 kg)', 'origin' => 'Kenya',
            'short' => 'Wheat farina — a versatile pantry essential.',
            'long'  => 'A finely milled wheat farina that makes silky porridges, light dumplings, and the base for countless traditional dishes.',
            'badges' => ['Own brand'],
        ],
        [
            'slug' => 'tembo-white-corn-meal',
            'name' => 'Tembo White Corn Meal',
            'brand' => 'tembo', 'category' => 'grains-flours',
            'image' => 'tembo-corn-meal.jpg',
            'weight' => '5 lb (2.27 kg)', 'origin' => 'Kenya',
            'short' => 'Premium-grade white corn meal — the foundation of ugali.',
            'long'  => 'Stone-milled white maize, sifted and packaged for the perfect ugali — that smooth, comforting staple at the center of every East African plate.',
            'badges' => ['Premium Grade'],
            'featured' => true,
        ],

        // === Teas ===
        [
            'slug' => 'ketepa-pride-ginger',
            'name' => 'Ketepa Pride · Ginger Tea',
            'brand' => 'ketepa', 'category' => 'teas-beverages',
            'image' => 'ketepa-ginger.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Black tea infused with warming ginger.',
            'long'  => 'A Kenyan black tea blended with bold ginger root. Brews bright, copper-colored, and gently spicy — perfect with milk and a touch of honey.',
            'featured' => true,
        ],
        [
            'slug' => 'ketepa-pride-masala',
            'name' => 'Ketepa Pride · Masala Tea',
            'brand' => 'ketepa', 'category' => 'teas-beverages',
            'image' => 'ketepa-masala.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Warm-spiced masala chai blend.',
            'long'  => 'Black tea, cardamom, cinnamon, clove and pepper — Ketepa\'s celebrated masala chai blend, fragrant and full-bodied.',
        ],
        [
            'slug' => 'ketepa-pride-forest-fruit',
            'name' => 'Ketepa Pride · Forest Fruit',
            'brand' => 'ketepa', 'category' => 'teas-beverages',
            'image' => 'ketepa-forest-fruit.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Black tea with wild berry notes.',
            'long'  => 'A fruit-forward black tea with notes of wild forest berries. Drinks beautifully iced or hot.',
        ],
        [
            'slug' => 'ketepa-pride-strawberry',
            'name' => 'Ketepa Pride · Strawberry',
            'brand' => 'ketepa', 'category' => 'teas-beverages',
            'image' => 'ketepa-strawberry.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Black tea with bright strawberry flavor.',
            'long'  => 'A sweet, aromatic black tea — strawberry on the nose, smooth on the palate.',
        ],
        [
            'slug' => 'fahari-ya-kenya-black-tea',
            'name' => 'Fahari ya Kenya · Black Tea',
            'brand' => 'fahari', 'category' => 'teas-beverages',
            'image' => 'fahari-black.jpg',
            'weight' => '500 g', 'origin' => 'Kenya',
            'short' => 'Premium loose-leaf Kenyan black tea.',
            'long'  => '"Fahari" means pride in Swahili. A strong, brisk black tea — the kind brewed in every Kenyan home from sunrise to sundown.',
            'featured' => true,
        ],
        [
            'slug' => 'safari-pure-tea',
            'name' => 'Safari · Pure Tea, True Taste of Kenya',
            'brand' => 'safari', 'category' => 'teas-beverages',
            'image' => 'safari-tea.jpg',
            'weight' => '250 g tin', 'origin' => 'Kenya',
            'short' => 'Pure single-origin Kenyan tea in a collectible tin.',
            'long'  => 'Crafted at origin and sealed in a heritage tin — single-estate Kenyan black tea with the bright, full-bodied character the highlands are known for.',
        ],

        // === Seasonings ===
        [
            'slug' => 'royco-mchuzi-mix-beef',
            'name' => 'Royco Mchuzi Mix · Beef',
            'brand' => 'royco', 'category' => 'spices-seasonings',
            'image' => 'royco-beef.jpg',
            'weight' => '200 g', 'origin' => 'Kenya',
            'short' => 'The legendary beef-flavored stew seasoning.',
            'long'  => 'A blend of beef stock, onion, garlic and warm spices that transforms tomato-and-onion stews into the meals you grew up on.',
            'featured' => true,
        ],
        [
            'slug' => 'royco-mchuzi-mix-chicken',
            'name' => 'Royco Mchuzi Mix · Chicken Original',
            'brand' => 'royco', 'category' => 'spices-seasonings',
            'image' => 'royco-chicken.jpg',
            'weight' => '500 g', 'origin' => 'Kenya',
            'short' => 'Original chicken-flavored mchuzi mix.',
            'long'  => 'The full-flavored chicken variant — savory, slightly peppery, and the secret behind every great chicken stew in East Africa.',
        ],
        [
            'slug' => 'tropical-heat-beef-masala',
            'name' => 'Tropical Heat · Beef Masala',
            'brand' => 'tropical-heat', 'category' => 'spices-seasonings',
            'image' => 'th-beef-masala.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Pure & natural masala blend for beef.',
            'long'  => 'A robust, naturally seasoned masala — perfect for stews, kebabs and grilled beef. No artificial color, no MSG.',
        ],
        [
            'slug' => 'tropical-heat-chicken-masala',
            'name' => 'Tropical Heat · Chicken Masala',
            'brand' => 'tropical-heat', 'category' => 'spices-seasonings',
            'image' => 'th-chicken-masala.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Aromatic masala for chicken dishes.',
            'long'  => 'Tropical Heat\'s signature blend for chicken — bright, fragrant, and balanced.',
        ],
        [
            'slug' => 'tropical-heat-fish-masala',
            'name' => 'Tropical Heat · Fish Masala',
            'brand' => 'tropical-heat', 'category' => 'spices-seasonings',
            'image' => 'th-fish-masala.jpg',
            'weight' => '100 g', 'origin' => 'Kenya',
            'short' => 'Spice seasoning crafted for fish.',
            'long'  => 'A coastal blend designed for fish — lemon-bright, gently smoky, with just enough warmth.',
        ],

        // === Canned ===
        [
            'slug' => 'de-rica-tomato-paste-210g',
            'name' => 'De Rica · Double Concentrated Tomato Paste (210g)',
            'brand' => 'de-rica', 'category' => 'canned-goods',
            'image' => 'de-rica-210.jpg',
            'weight' => '7.4 oz (210 g)', 'origin' => 'Italy',
            'short' => 'Rich double-concentrated tomato paste from 100% Italian tomatoes.',
            'long'  => 'A pantry classic — bright, sweet, full-bodied tomato paste packed at the source from fresh Italian tomatoes. The base for jollof, stews and pasta sauces.',
            'badges' => ['100% Italian Tomatoes'],
        ],
        [
            'slug' => 'de-rica-tomato-paste-400g',
            'name' => 'De Rica · Double Concentrated Tomato Paste (400g)',
            'brand' => 'de-rica', 'category' => 'canned-goods',
            'image' => 'de-rica-400.jpg',
            'weight' => '14.1 oz (400 g)', 'origin' => 'Italy',
            'short' => 'The family-size De Rica tomato paste tin.',
            'long'  => 'For the cooks who go through tomato paste by the cupful — the same rich, bright paste in a bigger can.',
            'featured' => true,
        ],
        [
            'slug' => 'gino-tomato-paste-400g',
            'name' => 'Gino · Tomato Paste (400g)',
            'brand' => 'gino', 'category' => 'canned-goods',
            'image' => 'gino-400.jpg',
            'weight' => '14.11 oz (400 g)', 'origin' => 'Italy',
            'short' => 'West-African favorite tomato paste, packed in Italy.',
            'long'  => 'Gino\'s deep red paste is the secret behind countless jollof rice pots — concentrated, fragrant, and unmistakable.',
        ],
        [
            'slug' => 'salsa-tomato-paste-400g',
            'name' => 'Salsa · Tomato Paste (400g)',
            'brand' => 'salsa', 'category' => 'canned-goods',
            'image' => 'salsa-400.jpg',
            'weight' => '14.1 oz (400 g)', 'origin' => 'Italy',
            'short' => 'Double-concentrated tomato paste — minimal ingredients, max flavor.',
            'long'  => 'Just tomatoes and salt. Packed in Italy and built for everyday cooking.',
        ],
        [
            'slug' => 'titus-sardines',
            'name' => 'Titus · Sardines in Vegetable Oil',
            'brand' => 'titus', 'category' => 'canned-goods',
            'image' => 'titus.jpg',
            'weight' => '125 g', 'origin' => 'Morocco',
            'short' => 'The pantry classic across West Africa.',
            'long'  => 'Wild-caught sardines in vegetable oil — protein-rich, ready to eat, perfect on bread or stirred into jollof.',
        ],
        [
            'slug' => 'anny-sardines',
            'name' => 'Anny · Sardines',
            'brand' => 'anny', 'category' => 'canned-goods',
            'image' => 'anny.jpg',
            'weight' => '125 g', 'origin' => 'Morocco',
            'short' => 'Affordable, flavorful canned sardines.',
            'long'  => 'A reliable workhorse — sardines packed in oil, ready to elevate a sandwich, salad or stew.',
        ],

        // === Specialty / Fufu ===
        [
            'slug' => 'tropiway-cocoyam-fufu',
            'name' => 'Tropiway · Cocoyam Fufu Flour',
            'brand' => 'tropiway', 'category' => 'specialty-foods',
            'image' => 'tropiway-cocoyam.jpg',
            'weight' => '24 oz (680 g)', 'origin' => 'Ghana',
            'short' => 'Cocoyam fufu flour — soft, stretchy and traditional.',
            'long'  => 'Just add water — Tropiway\'s cocoyam fufu cooks to a smooth, pillowy dough perfect with light soup or palm-nut soup.',
        ],
        [
            'slug' => 'neat-plantain-fufu',
            'name' => 'Neat · Plantain Fufu',
            'brand' => 'neat-foods', 'category' => 'specialty-foods',
            'image' => 'neat-fufu.jpg',
            'weight' => '700 g', 'origin' => 'Ghana',
            'short' => 'Plantain fufu — bold flavor, traditional texture.',
            'long'  => 'A blend that highlights plantain\'s naturally sweet, earthy flavor — Neat Foods\' premium fufu mix.',
        ],
        [
            'slug' => 'golden-tropics-plantain-fufu',
            'name' => 'Golden Tropics · Plantain Fufu Flour',
            'brand' => 'golden-tropics', 'category' => 'specialty-foods',
            'image' => 'gt-plantain-fufu.jpg',
            'weight' => '24 oz (680 g)', 'origin' => 'Ghana',
            'short' => 'Pan-African plantain fufu flour.',
            'long'  => 'A pantry-ready plantain fufu — soft texture, deep flavor, ready in minutes.',
        ],
        [
            'slug' => 'mamas-choice-cocoyam-fufu',
            'name' => "Mama's Choice · Cocoyam Fufu (Enriched)",
            'brand' => 'mamas-choice', 'category' => 'specialty-foods',
            'image' => 'mc-cocoyam.jpg',
            'weight' => '22 oz (624 g)', 'origin' => 'Ghana',
            'short' => 'Enriched cocoyam fufu mix — soft, stretchy, satisfying.',
            'long'  => "Mama's Choice cocoyam fufu — enriched with real cocoyam, with the texture that only home knows.",
        ],
        [
            'slug' => 'traditional-foods-oporo',
            'name' => 'Traditional Foods · Ground Oporo (Crayfish)',
            'brand' => 'traditional', 'category' => 'specialty-foods',
            'image' => 'oporo.jpg',
            'weight' => '85 g pouch', 'origin' => 'Nigeria',
            'short' => 'Ground crayfish — the deep umami base of West-African soups.',
            'long'  => 'Sun-dried, ground crayfish — a teaspoon will deepen any soup, stew or pepper sauce. Indispensable in egusi, okra and ogbono.',
        ],
        [
            'slug' => 'traditional-foods-baobab',
            'name' => 'Traditional Foods · Baobab Powder',
            'brand' => 'traditional', 'category' => 'specialty-foods',
            'image' => 'baobab.jpg',
            'weight' => '85 g pouch', 'origin' => 'West Africa',
            'short' => 'Tart-sweet baobab powder — natural vitamin-C boost.',
            'long'  => 'The dried pulp of the African baobab — bright, citrussy, and naturally rich in vitamin C. Stir into water, smoothies or porridges.',
        ],

        // === Beverages ===
        [
            'slug' => 'goya-mango-nectar',
            'name' => 'Goya · Mango Nectar',
            'brand' => 'goya', 'category' => 'teas-beverages',
            'image' => 'goya-mango.jpg',
            'weight' => '1 L bottle', 'origin' => 'USA / Caribbean',
            'short' => 'Lush, golden mango nectar.',
            'long'  => 'Sun-ripened mango nectar — sweet, thick, refreshing. A Caribbean and Latin-American household name.',
        ],
        [
            'slug' => 'goya-guava-nectar',
            'name' => 'Goya · Guava Nectar',
            'brand' => 'goya', 'category' => 'teas-beverages',
            'image' => 'goya-guava.jpg',
            'weight' => '1 L bottle', 'origin' => 'USA / Caribbean',
            'short' => 'Smooth, tropical guava nectar.',
            'long'  => 'A pink, fragrant guava nectar — pour over ice and you\'re in the islands.',
        ],
        [
            'slug' => 'goya-pineapple-soda',
            'name' => 'Goya · Pineapple Soda',
            'brand' => 'goya', 'category' => 'teas-beverages',
            'image' => 'goya-pineapple-soda.jpg',
            'weight' => '2 L bottle', 'origin' => 'USA / Caribbean',
            'short' => 'Sparkling pineapple soda for any gathering.',
            'long'  => 'Crisp, fizzy pineapple soda — the family-table favorite.',
        ],
        [
            'slug' => 'malta-guinness',
            'name' => 'Malta Guinness',
            'brand' => 'malta-guinness', 'category' => 'teas-beverages',
            'image' => 'malta-guinness.jpg',
            'weight' => '330 ml bottle', 'origin' => 'Nigeria',
            'short' => 'Iconic non-alcoholic malt drink.',
            'long'  => 'Rich, full-bodied, deeply roasted — the classic non-alcoholic malt beverage Africa drinks at every celebration.',
            'featured' => true,
        ],
        [
            'slug' => 'vita-malt-classic',
            'name' => 'Vita Malt · Classic',
            'brand' => 'vita-malt', 'category' => 'teas-beverages',
            'image' => 'vita-malt.jpg',
            'weight' => '330 ml bottle', 'origin' => 'Denmark / Caribbean',
            'short' => 'A premium non-alcoholic malt — refreshment with character.',
            'long'  => 'Brewed in the European malt tradition and beloved across the Caribbean — Vita Malt is malt with personality.',
        ],
        [
            'slug' => 'asli-mango-juice',
            'name' => 'Asli · Mango Juice',
            'brand' => 'asli', 'category' => 'teas-beverages',
            'image' => 'asli-mango.jpg',
            'weight' => '250 ml', 'origin' => 'Pakistan',
            'short' => 'Pure, thick mango juice from South Asia.',
            'long'  => 'Asli — meaning "real" — and the name fits. Pure South-Asian mango juice in a single-serve carton.',
        ],
    ],

];
