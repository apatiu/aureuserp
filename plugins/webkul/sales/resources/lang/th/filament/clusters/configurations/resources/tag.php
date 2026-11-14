<?php

return [
    'title' => 'แท็ก',

    'navigation' => [
        'title' => 'แท็ก',
        'group' => 'คำสั่งขาย',
    ],

    'form' => [
        'fields' => [
            'name'  => 'ชื่อ',
            'color' => 'สี',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => 'สร้างโดย',
            'name'       => 'ชื่อ',
            'color'      => 'สี',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'อัปเดตแท็กสินค้าแล้ว',
                    'body'  => 'อัปเดตแท็กสินค้าเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบแท็กสินค้าแล้ว',
                    'body'  => 'ลบแท็กสินค้าเรียบร้อยแล้ว',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบแท็กสินค้าแล้ว',
                    'body'  => 'ลบแท็กสินค้าเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'ชื่อ',
            'color' => 'สี',
        ],
    ],
];
