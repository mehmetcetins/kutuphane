<?php

return [
    'resources' => [
        '/' => 'routes/Home@index',
        '/kitaplar' => 'routes/Books@index',
        '/kitaplar/detay' => 'routes/Books@detail',
        '/kitaplar/odunc' => 'routes/Books@borrow',
        '/kitaplar/ekle' => 'routes/Books@add',
        '/kitaplar/eklePost' => 'routes/Books@ekle',
        '/odunc' => 'routes/Borrow@index',
        '/odunc/teslim' => 'routes/Borrow@back',
    ]
];