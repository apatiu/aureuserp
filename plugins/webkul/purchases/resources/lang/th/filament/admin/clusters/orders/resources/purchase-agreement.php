<?php

return [
    'navigation' => [
        'title' => 'ข้อตกลงการจัดซื้อ',
        'group' => 'การจัดซื้อ',
    ],

    'global-search' => [
        'vendor' => 'ผู้ขาย',
        'type'   => 'ประเภท',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'ทั่วไป',

                'fields' => [
                    'vendor'                => 'ผู้ขาย',
                    'valid-from'            => 'มีผลตั้งแต่',
                    'valid-to'              => 'มีผลถึง',
                    'buyer'                 => 'ผู้ซื้อ',
                    'reference'             => 'อ้างอิง',
                    'reference-placeholder' => 'เช่น PO/123',
                    'agreement-type'        => 'ประเภทข้อตกลง',
                    'company'               => 'บริษัท',
                    'currency'              => 'สกุลเงิน',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'สินค้า',

                'columns' => [
                    'product'    => 'สินค้า',
                    'quantity'   => 'จำนวน',
                    'ordered'    => 'สั่งซื้อแล้ว',
                    'uom'        => 'หน่วยวัด',
                    'unit-price' => 'ราคาต่อหน่วย',
                ],

                'fields' => [
                    'product'    => 'สินค้า',
                    'quantity'   => 'จำนวน',
                    'ordered'    => 'สั่งซื้อแล้ว',
                    'uom'        => 'หน่วยวัด',
                    'unit-price' => 'ราคาต่อหน่วย',
                ],
            ],

            'additional' => [
                'title' => 'ข้อมูลเพิ่มเติม',
            ],

            'terms' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'ข้อตกลง',
            'vendor'         => 'ผู้ขาย',
            'agreement-type' => 'ประเภทข้อตกลง',
            'buyer'          => 'ผู้ซื้อ',
            'company'        => 'บริษัท',
            'valid-from'     => 'มีผลตั้งแต่',
            'valid-to'       => 'มีผลถึง',
            'reference'      => 'อ้างอิง',
            'status'         => 'สถานะ',
        ],

        'groups' => [
            'agreement-type' => 'ประเภทข้อตกลง',
            'vendor'         => 'ผู้ขาย',
            'state'          => 'จังหวัด/รัฐ',
            'created-at'     => 'สร้างเมื่อ',
            'updated-at'     => 'อัปเดตเมื่อ',
        ],

        'filters' => [
            'agreement'      => 'ข้อตกลง',
            'vendor'         => 'ผู้ขาย',
            'agreement-type' => 'ประเภทข้อตกลง',
            'buyer'          => 'ผู้ซื้อ',
            'company'        => 'บริษัท',
            'valid-from'     => 'มีผลตั้งแต่',
            'valid-to'       => 'มีผลถึง',
            'reference'      => 'อ้างอิง',
            'status'         => 'สถานะ',
            'created-at'     => 'สร้างเมื่อ',
            'updated-at'     => 'อัปเดตเมื่อ',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบข้อตกลงการจัดซื้อแล้ว',
                    'body'  => 'ลบข้อตกลงการจัดซื้อเรียบร้อยแล้ว',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนข้อตกลงการจัดซื้อแล้ว',
                    'body'  => 'กู้คืนข้อตกลงการจัดซื้อเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ลบข้อตกลงการจัดซื้อถาวรแล้ว',
                        'body'  => 'ลบข้อตกลงการจัดซื้อถาวรเรียบร้อยแล้ว',
                    ],

                    'error' => [
                        'title' => 'ลบข้อตกลงการจัดซื้อไม่ได้',
                        'body'  => 'ลบข้อตกลงการจัดซื้อไม่ได้เพราะกำลังถูกใช้งานอยู่',
                    ],

                    'warning' => [
                        'title' => 'ลบข้อตกลงการจัดซื้อไม่ได้',
                        'body'  => 'ลบได้เฉพาะข้อตกลงการจัดซื้อที่อยู่ในสถานะฉบับร่างหรือยกเลิกเท่านั้น',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบข้อตกลงการจัดซื้อแล้ว',
                    'body'  => 'ลบข้อตกลงการจัดซื้อเรียบร้อยแล้ว',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนข้อตกลงการจัดซื้อแล้ว',
                    'body'  => 'กู้คืนข้อตกลงการจัดซื้อเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ลบข้อตกลงการจัดซื้อถาวรแล้ว',
                        'body'  => 'ลบข้อตกลงการจัดซื้อถาวรเรียบร้อยแล้ว',
                    ],

                    'error' => [
                        'title' => 'ลบข้อตกลงการจัดซื้อไม่ได้',
                        'body'  => 'ลบข้อตกลงการจัดซื้อไม่ได้เพราะกำลังถูกใช้งานอยู่',
                    ],

                    'warning' => [
                        'title' => 'ลบข้อตกลงการจัดซื้อไม่ได้',
                        'body'  => 'ลบได้เฉพาะข้อตกลงการจัดซื้อที่อยู่ในสถานะฉบับร่างหรือยกเลิกเท่านั้น',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'ทั่วไป',

                'entries' => [
                    'vendor'                => 'ผู้ขาย',
                    'valid-from'            => 'มีผลตั้งแต่',
                    'valid-to'              => 'มีผลถึง',
                    'buyer'                 => 'ผู้ซื้อ',
                    'reference'             => 'อ้างอิง',
                    'reference-placeholder' => 'เช่น PO/123',
                    'agreement-type'        => 'ประเภทข้อตกลง',
                    'company'               => 'บริษัท',
                    'currency'              => 'สกุลเงิน',
                ],
            ],

            'metadata' => [
                'title' => 'เมทาดาตา',

                'entries' => [
                    'created-at' => 'สร้างเมื่อ',
                    'created-by' => 'สร้างโดย',
                    'updated-at' => 'อัปเดตเมื่อ',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'สินค้า',

                'entries' => [
                    'product'    => 'สินค้า',
                    'quantity'   => 'จำนวน',
                    'ordered'    => 'สั่งซื้อแล้ว',
                    'uom'        => 'หน่วยวัด',
                    'unit-price' => 'ราคาต่อหน่วย',
                ],
            ],

            'additional' => [
                'title' => 'ข้อมูลเพิ่มเติม',
            ],

            'terms' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],
];
