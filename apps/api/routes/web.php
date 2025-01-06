<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            ['id' => 1, 'title' => 'Post 1', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid1'],
            ['id' => 2, 'title' => 'Post 2', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid2'],
            ['id' => 3, 'title' => 'Post 3', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid3'],
            ['id' => 4, 'title' => 'Post 4', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid4'],
            ['id' => 5, 'title' => 'Post 5', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid5'],
            ['id' => 6, 'title' => 'Post 6', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid6'],
            ['id' => 7, 'title' => 'Post 7', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid7'],
            ['id' => 8, 'title' => 'Post 8', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid8'],
            ['id' => 9, 'title' => 'Post 9', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid9'],
            ['id' => 10, 'title' => 'Post 10', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid10'],
            ['id' => 11, 'title' => 'Post 11', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid11'],
            ['id' => 12, 'title' => 'Post 12', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid12'],
            ['id' => 13, 'title' => 'Post 13', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid13'],
            ['id' => 14, 'title' => 'Post 14', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid14'],
            ['id' => 15, 'title' => 'Post 15', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.', 'uuid' => 'uuid15'],
        ]
    ]);
});

require __DIR__.'/auth.php';
