<?php

return [
    'resources' => [
        '/' => 'routes/Home@index',
        '/kitaplar' => 'routes/Books@index',
        '/kitaplar/detay' => 'routes/Books@detail',
        '/kitaplar/odunc' => 'routes/Books@borrow',
        '/odunc' => 'routes/Borrow@index',
        '/odunc/teslim' => 'routes/Borrow@back',
        '/kitap' => 'routes/Book@index',
        '/kitap/ekle' => 'routes/Book@add',
    ]
];