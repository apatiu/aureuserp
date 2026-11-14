<?php

return [
    'model-label'        => 'เหตุผลที่แพ้',
    'plural-model-label' => 'เหตุผลที่แพ้',

    'navigation' => [
        'title' => 'เหตุผลที่แพ้',
        'group' => 'ไปป์ไลน์',
    ],

    'form' => [
        'fields' => [
            'name' => 'รายละเอียด',
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'รายละเอียด',
            'created-by' => 'สร้างโดย',
            'created-at' => 'สร้างเมื่อ',
            'updated-at' => 'อัปเดตเมื่อ',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'อัปเดตเหตุผลที่แพ้แล้ว',
                    'body'  => 'อัปเดตเหตุผลที่แพ้เรียบร้อยแล้ว',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนเหตุผลที่แพ้แล้ว',
                    'body'  => 'กู้คืนเหตุผลที่แพ้เรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบเหตุผลที่แพ้แล้ว',
                    'body'  => 'ลบเหตุผลที่แพ้ถาวรแล้ว',
                ],
            ],
        ],
    ],
];
