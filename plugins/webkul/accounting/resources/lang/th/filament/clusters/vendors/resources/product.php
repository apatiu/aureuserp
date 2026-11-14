<?php

return [
    'navigation' => [
        'title' => 'สินค้า',
        'group' => 'คลังสินค้า',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'ทั่วไป',

                'fields' => [
                    'name'             => 'ชื่อ',
                    'name-placeholder' => 'เช่น เสื้อยืด',
                    'description'      => 'รายละเอียด',
                    'tags'             => 'แท็ก',
                    'sales'            => 'การขาย',
                    'purchase'         => 'จัดซื้อ',
                ],
            ],

            'invoice-policy' => [
                'title'            => 'นโยบายการออกใบแจ้งหนี้',
                'ordered-policy'   => 'คุณสามารถออกใบแจ้งหนี้สินค้าก่อนส่งมอบได้',
                'delivered-policy' => 'ออกใบแจ้งหนี้หลังส่งมอบ ตามจำนวนที่ส่งมอบจริง ไม่ใช่จำนวนที่สั่ง',
            ],

            'images' => [
                'title' => 'รูปภาพ',
            ],

            'settings' => [
                'title' => 'การตั้งค่า',

                'fields' => [
                    'type'      => 'ประเภท',
                    'reference' => 'อ้างอิง',
                    'barcode'   => 'บาร์โค้ด',
                    'category'  => 'หมวดหมู่',
                    'company'   => 'บริษัท',
                ],
            ],

            'category-and-tags' => [
                'title' => 'หมวดหมู่และแท็ก',

                'fields' => [
                    'category' => 'หมวดหมู่',
                    'tags'     => 'แท็ก',
                ],
            ],

            'pricing' => [
                'title' => 'การกำหนดราคา',

                'fields' => [
                    'price' => 'ราคา',
                    'cost'  => 'ต้นทุน',
                ],
            ],

            'additional' => [
                'title' => 'เพิ่มเติม',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'ชื่อ',
            'images'      => 'รูปภาพ',
            'type'        => 'ประเภท',
            'reference'   => 'อ้างอิง',
            'responsible' => 'ผู้รับผิดชอบ',
            'barcode'     => 'บาร์โค้ด',
            'category'    => 'หมวดหมู่',
            'company'     => 'บริษัท',
            'price'       => 'ราคา',
            'cost'        => 'ต้นทุน',
            'tags'        => 'แท็ก',
            'deleted-at'  => 'ลบเมื่อ',
            'created-at'  => 'สร้างเมื่อ',
            'updated-at'  => 'อัปเดตเมื่อ',
        ],

        'groups' => [
            'type'       => 'ประเภท',
            'category'   => 'หมวดหมู่',
            'created-at' => 'สร้างเมื่อ',
        ],

        'filters' => [
            'name'        => 'ชื่อ',
            'type'        => 'ประเภท',
            'reference'   => 'อ้างอิง',
            'barcode'     => 'บาร์โค้ด',
            'category'    => 'หมวดหมู่',
            'company'     => 'บริษัท',
            'price'       => 'ราคา',
            'cost'        => 'ต้นทุน',
            'is-favorite' => 'เป็นรายการโปรด',
            'weight'      => 'น้ำหนัก',
            'volume'      => 'ปริมาตร',
            'tags'        => 'แท็ก',
            'responsible' => 'ผู้รับผิดชอบ',
            'created-at'  => 'สร้างเมื่อ',
            'updated-at'  => 'อัปเดตเมื่อ',
            'creator'     => 'ผู้สร้าง',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนสินค้าแล้ว',
                    'body'  => 'กู้คืนสินค้าเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบสินค้าแล้ว',
                    'body'  => 'ลบสินค้าเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบสินค้าถาวรแล้ว',
                    'body'  => 'ลบสินค้าถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนสินค้าแล้ว',
                    'body'  => 'กู้คืนสินค้าเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบสินค้าแล้ว',
                    'body'  => 'ลบสินค้าเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบสินค้าถาวรแล้ว',
                    'body'  => 'ลบสินค้าถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'ทั่วไป',

                'entries' => [
                    'name'             => 'ชื่อ',
                    'name-placeholder' => 'เช่น เสื้อยืด',
                    'description'      => 'รายละเอียด',
                    'tags'             => 'แท็ก',
                ],
            ],

            'images' => [
                'title' => 'รูปภาพ',

                'entries' => [],
            ],

            'settings' => [
                'title' => 'การตั้งค่า',

                'entries' => [
                    'type'      => 'ประเภท',
                    'reference' => 'อ้างอิง',
                    'barcode'   => 'บาร์โค้ด',
                    'category'  => 'หมวดหมู่',
                    'company'   => 'บริษัท',
                ],
            ],

            'pricing' => [
                'title' => 'การกำหนดราคา',

                'entries' => [
                    'price' => 'ราคา',
                    'cost'  => 'ต้นทุน',
                ],
            ],

            'inventory' => [
                'title' => 'คลังสินค้า',

                'entries' => [],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'การติดตาม',

                        'entries' => [
                            'track-inventory' => 'ติดตามสินค้าคงคลัง',
                            'track-by'        => 'ติดตามตาม',
                            'expiration-date' => 'วันหมดอายุ',
                        ],
                    ],

                    'operation' => [
                        'title' => 'การดำเนินงาน',

                        'entries' => [
                            'routes' => 'เส้นทาง',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'โลจิสติกส์',

                        'entries' => [
                            'responsible' => 'ผู้รับผิดชอบ',
                            'weight'      => 'น้ำหนัก',
                            'volume'      => 'ปริมาตร',
                            'sale-delay'  => 'ระยะเวลานำส่งลูกค้า (วัน)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'การตรวจสอบย้อนกลับ',

                        'entries' => [
                            'expiration-date'  => 'วันหมดอายุ (วัน)',
                            'best-before-date' => 'ควรใช้ก่อนวันที่ (วัน)',
                            'removal-date'     => 'วันที่นำออก (วัน)',
                            'alert-date'       => 'วันที่แจ้งเตือน (วัน)',
                        ],
                    ],
                ],
            ],

            'record-information' => [
                'title' => 'ข้อมูลระเบียน',

                'entries' => [
                    'created-at' => 'สร้างเมื่อ',
                    'created-by' => 'สร้างโดย',
                    'updated-at' => 'อัปเดตเมื่อ',
                ],
            ],
        ],
    ],
];
