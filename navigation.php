<?php

return [
    'Getting Started' => [
        'url' => 'docs/getting-started',
        'children' => [
            'Customization' => 'docs/customization',
            'Extending' => 'docs/extending',
        ],
    ],
    'Components' => [
        'url' => 'docs/components',
        'children' => [
            'Primitives' => [
                'children' => [
                    'Page' => 'docs/components/page',
                    'Container' => 'docs/components/container',
                    'Divider' => 'docs/components/divider',
                    'Col' => 'docs/components/col',
                    'Row' => 'docs/components/row',
                    'Text' => 'docs/components/text',
                ]
            ],
            'UI Elements' => [
                'children' => [
                    'Alert' => 'docs/components/alert',
                    'Badge' => 'docs/components/badge',
                    'Button' => 'docs/components/button',
                    'Card' => 'docs/components/card',
                    'Loading' => 'docs/components/loading',
                ]
            ],
            'Interactive Elements' => [
                'children' => [
                    'List' => [
                        'url' => 'docs/components/list',
                        'children' => [
                            'Item' => 'docs/components/list/item',
                            'Accordion Item' => 'docs/components/list/accordion-item',
                            'Collapsible Item' => 'docs/components/list/collapsible-item',
                        ],
                    ],
                    'Modal' => 'docs/components/modal',
                    'Popover' => 'docs/components/popover',
                    'Slide-out' => 'docs/components/slide-out',
                    'Tabs' => [
                        'url' => 'docs/components/tabs',
                        'children' => [
                            'Content' => 'docs/components/tabs/content',
                            'Handle' => 'docs/components/tabs/handle',
                        ],
                    ],
                ]
            ],
        ],
    ],
    'Examples' => [
        'children' => [],
    ],
    'GitHub' => 'https://github.com/ambitionworks/hui',
];
