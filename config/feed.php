<?php

return [
    'feeds' => [
        'main' => [
            'items' => [\App\Models\Post::class, 'getFeedItems'],
            'url' => '/feed',
            'title' => 'My feed',
            'description' => 'The description of the feed.',
            'language' => 'en-US',
            'image' => '',
            'format' => 'atom',
            'view' => 'feed::atom',
            'type' => '',
            'contentType' => '',
        ],
    ],
];
