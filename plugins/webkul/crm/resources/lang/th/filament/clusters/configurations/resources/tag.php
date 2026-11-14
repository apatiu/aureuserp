<?php

return [
    'model-label'        => 'แท็ก',
    'plural-model-label' => 'แท็ก',

    'navigation' => [
        'title' => 'แท็ก',
        'group' => 'ไปป์ไลน์',
    ],

    'form' => [
        'fields' => [
            'name'  => 'ชื่อแท็ก',
            'color' => 'สี',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'ชื่อแท็ก',
            'color'      => 'สี',
            'created-by' => 'สร้างโดย',
            'created-at' => 'สร้างเมื่อ',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'อัปเดตแท็กแล้ว',
                    'body'  => 'อัปเดตแท็กเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบแท็กแล้ว',
                    'body'  => 'ลบแท็กเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'ชื่อแท็ก',
            'color' => 'สี',
        ],
    ],
];
