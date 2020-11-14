<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Escuelita.dev',
    'description' => 'Escuela de Programación para Niños.',
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|d-m-Y}/{-filename}',
        ]
    ],
    'language' => 'es'
];
