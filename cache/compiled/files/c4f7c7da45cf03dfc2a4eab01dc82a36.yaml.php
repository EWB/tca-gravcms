<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/tca-grav/user/config/site.yaml',
    'modified' => 1472581974,
    'data' => [
        'title' => 'Tedra Cobb & Associates',
        'author' => [
            'name' => 'Tedra Cobb',
            'email' => 'ewilliamsbergen@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Tedra L. Cobb and Associates is a dynamic consulting firm dedicated to providing organizations with reliable, consistent and up to date training programs and other professional and development services.  Our clients include government and private sector corporations, educational institutions and not-for-profit companies.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'email' => 'your-email@domain.com',
        'description' => 'Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.',
        'social' => [
            0 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => '#',
                'icon' => 'twitter'
            ],
            2 => [
                'url' => '#',
                'icon' => 'google-plus'
            ]
        ],
        'menu' => [
            0 => [
                'text' => 'Services',
                'link' => '#features'
            ],
            1 => [
                'text' => 'Education',
                'link' => '#screenshots'
            ],
            2 => [
                'text' => 'Outcomes',
                'link' => '#testimonials'
            ],
            3 => [
                'text' => 'Subscribe',
                'link' => '#subscribe'
            ]
        ],
        'footer' => [
            'text' => 'Footer Text',
            'address' => [
                'title' => '',
                'lines' => [
                    0 => [
                        'line' => ''
                    ],
                    1 => [
                        'line' => ''
                    ],
                    2 => [
                        'line' => ''
                    ]
                ]
            ],
            'social_title' => 'Socialize',
            'contact' => [
                'title' => 'CONTACT US',
                'lines' => [
                    0 => [
                        'text' => '647.343.8234',
                        'url' => '#'
                    ],
                    1 => [
                        'text' => '123.456.7890',
                        'url' => '#'
                    ],
                    2 => [
                        'text' => 'tedra@tedracobb.com',
                        'url' => 'mailto:tedra@tedracobb.com'
                    ]
                ]
            ]
        ]
    ]
];
