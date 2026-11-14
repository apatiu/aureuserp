<?php

return [
    'title' => 'แม่แบบใบเสนอราคา',

    'navigation' => [
        'title'  => 'แม่แบบใบเสนอราคา',
        'group'  => 'คำสั่งขาย',
    ],

    'form' => [
        'tabs' => [
            'products' => [
                'title'  => 'สินค้า',
                'fields' => [
                    'products'     => 'สินค้า',
                    'name'         => 'ชื่อ',
                    'quantity'     => 'จำนวน',
                ],
            ],

            'terms-and-conditions' => [
                'title'  => 'ข้อกำหนดและเงื่อนไข',
                'fields' => [
                    'note-placeholder' => 'เขียนข้อกำหนดและเงื่อนไขสำหรับใบเสนอราคา',
                ],
            ],
        ],

        'sections' => [
            'general' => [
                'title' => 'ข้อมูลทั่วไป',

                'fields' => [
                    'name'               => 'ชื่อ',
                    'quotation-validity' => 'ระยะเวลาใช้ได้ของใบเสนอราคา',
                    'sale-journal'       => 'สมุดรายวันขาย',
                ],
            ],

            'signature-and-payment' => [
                'title' => 'ลายเซ็นและการชำระเงิน',

                'fields' => [
                    'online-signature'      => 'ลงนามออนไลน์',
                    'online-payment'        => 'ชำระเงินออนไลน์',
                    'prepayment-percentage' => 'เปอร์เซ็นต์การชำระล่วงหน้า',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'created-by'            => 'สร้างโดย',
            'company'               => 'บริษัท',
            'name'                  => 'ชื่อ',
            'number-of-days'        => 'จำนวนวัน',
            'journal'               => 'สมุดรายวันขาย',
            'signature-required'    => 'ต้องมีลายเซ็น',
            'payment-required'      => 'ต้องชำระเงิน',
            'prepayment-percentage' => 'เปอร์เซ็นต์การชำระล่วงหน้า',
        ],
        'groups'  => [
            'company' => 'บริษัท',
            'name'    => 'ชื่อ',
            'journal' => 'สมุดรายวัน',
        ],
        'filters' => [
            'created-by' => 'สร้างโดย',
            'company'    => 'บริษัท',
            'name'       => 'ชื่อ',
            'created-at' => 'สร้างเมื่อ',
            'updated-at' => 'อัปเดตเมื่อ',
        ],
        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบแม่แบบใบเสนอราคาแล้ว',
                    'body'  => 'ลบแม่แบบใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],

        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบแม่แบบใบเสนอราคาแล้ว',
                    'body'  => 'ลบแม่แบบใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'products' => [
                'title' => 'สินค้า',
            ],
            'terms-and-conditions' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
        'sections' => [
            'general' => [
                'title' => 'ข้อมูลทั่วไป',
            ],
            'signature_and_payment' => [
                'title' => 'ลายเซ็นและการชำระเงิน',
            ],
        ],
        'entries' => [
            'product'               => 'สินค้า',
            'description'           => 'รายละเอียด',
            'quantity'              => 'จำนวน',
            'unit-price'            => 'ราคาต่อหน่วย',
            'section-name'          => 'ชื่อส่วน',
            'note-title'            => 'หัวข้อหมายเหตุ',
            'name'                  => 'ชื่อแม่แบบ',
            'quotation-validity'    => 'ระยะเวลาใช้ได้ของใบเสนอราคา',
            'sale-journal'          => 'สมุดรายวันขาย',
            'online-signature'      => 'ลงนามออนไลน์',
            'online-payment'        => 'ชำระเงินออนไลน์',
            'prepayment-percentage' => 'เปอร์เซ็นต์การชำระล่วงหน้า',
        ],
    ],
];
