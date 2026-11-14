<?php

return [
    'title' => 'สินค้าในแม่แบบคำสั่งขาย',

    'navigation' => [
        'title' => 'สินค้าในแม่แบบคำสั่งขาย',
        'group' => 'คำสั่งขาย',
    ],

    'global-search' => [
        'name'    => 'ชื่อ',
    ],

    'form' => [
        'fields' => [
            'sort'           => 'เรียง',
            'order-template' => 'แม่แบบคำสั่งขาย',
            'company'        => 'บริษัท',
            'product'        => 'สินค้า',
            'product-uom'    => 'หน่วยวัดสินค้า',
            'creator'        => 'ผู้สร้าง',
            'display-type'   => 'ประเภทการแสดงผล',
            'name'           => 'ชื่อ',
            'quantity'       => 'จำนวน',
        ],
    ],

    'table' => [
        'columns' => [
            'sort'           => 'เรียง',
            'order-template' => 'แม่แบบคำสั่งขาย',
            'company'        => 'บริษัท',
            'product'        => 'สินค้า',
            'product-uom'    => 'หน่วยวัดสินค้า',
            'created-by'     => 'สร้างโดย',
            'display-type'   => 'ประเภทการแสดงผล',
            'name'           => 'ชื่อ',
            'quantity'       => 'จำนวน',
            'created-at'     => 'สร้างเมื่อ',
            'updated-at'     => 'อัปเดตเมื่อ',

        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'อัปเดตสินค้าในแม่แบบคำสั่งขายแล้ว',
                    'body'  => 'อัปเดตสินค้าในแม่แบบคำสั่งขายเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบสินค้าในแม่แบบคำสั่งขายแล้ว',
                    'body'  => 'ลบสินค้าในแม่แบบคำสั่งขายเรียบร้อยแล้ว',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบสินค้าในแม่แบบคำสั่งขายแล้ว',
                    'body'  => 'ลบสินค้าในแม่แบบคำสั่งขายเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sort'           => 'ลำดับการเรียง',
            'order-template' => 'แม่แบบคำสั่งขาย',
            'company'        => 'บริษัท',
            'product'        => 'สินค้า',
            'product-uom'    => 'หน่วยวัดสินค้า',
            'display-type'   => 'ประเภทการแสดงผล',
            'name'           => 'ชื่อ',
            'quantity'       => 'จำนวน',
        ],
    ],
];
