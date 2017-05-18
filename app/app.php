<?php

return [
    'resources' => [
        '/' => 'routes/Home@index',
        '/kitaplar' => 'routes/Books@index',
        '/kitaplar/detay' => 'routes/Books@detail',
    ]
];