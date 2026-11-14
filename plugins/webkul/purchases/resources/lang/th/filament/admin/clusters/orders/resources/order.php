<?php

return [
    'global-search' => [
        'vendor'    => 'ผู้ขาย',
        'reference' => 'อ้างอิง',
        'amount'    => 'จำนวนเงิน',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'ทั่วไป',

                'fields' => [
                    'vendor'                   => 'ผู้ขาย',
                    'vendor-reference'         => 'เลขอ้างอิงของผู้ขาย',
                    'vendor-reference-tooltip' => 'เลขอ้างอิงของคำสั่งขายหรือใบเสนอราคาที่ผู้ขายให้มา ใช้จับคู่ตอนรับสินค้า เพราะเลขนี้มักอยู่ในใบส่งของของผู้ขาย',
                    'agreement'                => 'ข้อตกลง',
                    'currency'                 => 'สกุลเงิน',
                    'confirmation-date'        => 'วันที่ยืนยัน',
                    'order-deadline'           => 'กำหนดส่งใบสั่งซื้อ',
                    'expected-arrival'         => 'วันที่คาดว่าจะมาถึง',
                    'confirmed-by-vendor'      => 'ผู้ขายยืนยันแล้ว',
                    'deliver-to'               => 'ส่งมอบที่',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'สินค้า',

                'repeater' => [
                    'products' => [
                        'title'            => 'สินค้า',
                        'add-product-line' => 'เพิ่มสินค้า',

                        'fields' => [
                            'product'             => 'สินค้า',
                            'expected-arrival'    => 'วันที่คาดว่าจะมาถึง',
                            'quantity'            => 'จำนวน',
                            'received'            => 'รับแล้ว',
                            'billed'              => 'เรียกเก็บแล้ว',
                            'unit'                => 'หน่วย',
                            'packaging-qty'       => 'จำนวนบรรจุภัณฑ์',
                            'packaging'           => 'บรรจุภัณฑ์',
                            'taxes'               => 'ภาษี',
                            'discount-percentage' => 'ส่วนลด (%)',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'amount'              => 'จำนวนเงิน',
                        ],

                        'notifications' => [
                            'quantity-below-received' => [
                                'title' => 'ไม่สามารถลดจำนวน',
                                'body'  => 'คุณไม่สามารถลดจำนวนต่ำกว่าจำนวนที่รับแล้ว (:qty)',
                            ],

                            'blanket-order-qty-limit' => [
                                'title' => 'จำนวนเกินวงเงินของใบสั่งซื้อแบบกรอบ',
                                'body'  => 'จำนวนสินค้า (:product_qty) เกินจำนวนคงเหลือ (:available_qty) จากใบสั่งซื้อแบบกรอบ',
                            ],
                        ],

                        'columns' => [
                            'product'             => 'สินค้า',
                            'expected-arrival'    => 'วันที่คาดว่าจะมาถึง',
                            'quantity'            => 'จำนวน',
                            'received'            => 'รับแล้ว',
                            'billed'              => 'เรียกเก็บแล้ว',
                            'unit'                => 'หน่วย',
                            'packaging-qty'       => 'จำนวนบรรจุภัณฑ์',
                            'packaging'           => 'บรรจุภัณฑ์',
                            'taxes'               => 'ภาษี',
                            'discount-percentage' => 'ส่วนลด (%)',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'amount'              => 'จำนวนเงิน',
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'ไม่สามารถลบสินค้า',
                                'body'  => 'ไม่สามารถลบสินค้าออกจากใบสั่งซื้อที่ยืนยันแล้ว',
                            ],
                        ],

                        'actions' => [
                            'open-product' => [
                                'tooltip' => 'เปิดสินค้า',
                            ],
                        ],
                    ],

                    'section' => [
                        'title' => 'เพิ่มส่วน',

                        'fields' => [],
                    ],

                    'note' => [
                        'title' => 'เพิ่มหมายเหตุ',

                        'fields' => [],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'ข้อมูลเพิ่มเติม',

                'fields' => [
                    'buyer'             => 'ผู้ซื้อ',
                    'company'           => 'บริษัท',
                    'source-document'   => 'เอกสารต้นทาง',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'เงื่อนไขการค้าระหว่างประเทศ (Incoterms) คือชุดเงื่อนไขการค้ามาตรฐานที่ใช้ในธุรกรรมระดับโลกเพื่อกำหนดความรับผิดชอบระหว่างผู้ซื้อและผู้ขาย',
                    'incoterm-location' => 'สถานที่ตาม Incoterm',
                    'payment-term'      => 'เงื่อนไขการชำระเงิน',
                    'fiscal-position'   => 'สถานะทางภาษี',
                ],
            ],

            'terms' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => 'รายการโปรด',
            'priority'         => 'ลำดับความสำคัญ',
            'vendor-reference' => 'เลขอ้างอิงของผู้ขาย',
            'reference'        => 'อ้างอิง',
            'vendor'           => 'ผู้ขาย',
            'buyer'            => 'ผู้ซื้อ',
            'company'          => 'บริษัท',
            'order-deadline'   => 'กำหนดส่งใบสั่งซื้อ',
            'source-document'  => 'เอกสารต้นทาง',
            'untaxed-amount'   => 'ยอดก่อนภาษี',
            'total-amount'     => 'ยอดรวม',
            'status'           => 'สถานะ',
            'billing-status'   => 'สถานะการเรียกเก็บเงิน',
            'receipt-status'   => 'สถานะการรับสินค้า',
            'currency'         => 'สกุลเงิน',
        ],

        'groups' => [
            'vendor'     => 'ผู้ขาย',
            'buyer'      => 'ผู้ซื้อ',
            'state'      => 'จังหวัด/รัฐ',
            'created-at' => 'สร้างเมื่อ',
            'updated-at' => 'อัปเดตเมื่อ',
        ],

        'filters' => [
            'status'           => 'สถานะ',
            'vendor-reference' => 'เลขอ้างอิงของผู้ขาย',
            'reference'        => 'อ้างอิง',
            'untaxed-amount'   => 'ยอดก่อนภาษี',
            'total-amount'     => 'ยอดรวม',
            'order-deadline'   => 'กำหนดส่งใบสั่งซื้อ',
            'vendor'           => 'ผู้ขาย',
            'buyer'            => 'ผู้ซื้อ',
            'company'          => 'บริษัท',
            'payment-term'     => 'เงื่อนไขการชำระเงิน',
            'incoterm'         => 'Incoterm',
            'status'           => 'สถานะ',
            'created-at'       => 'สร้างเมื่อ',
            'updated-at'       => 'อัปเดตเมื่อ',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ลบใบสั่งซื้อแล้ว',
                        'body'  => 'ลบใบสั่งซื้อเรียบร้อยแล้ว',
                    ],

                    'error' => [
                        'title' => 'ลบใบสั่งซื้อไม่ได้',
                        'body'  => 'ลบใบสั่งซื้อไม่ได้เพราะกำลังถูกใช้งานอยู่',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'ลบใบสั่งซื้อแล้ว',
                        'body'  => 'ลบใบสั่งซื้อเรียบร้อยแล้ว',
                    ],

                    'error' => [
                        'title' => 'ลบใบสั่งซื้อไม่ได้',
                        'body'  => 'ลบใบสั่งซื้อไม่ได้เพราะกำลังถูกใช้งานอยู่',
                    ],
                ],
            ],
        ],
    ],

    'summary' => [
        'tax' => 'ภาษี',
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'ทั่วไป',

                'entries' => [
                    'purchase-order'           => 'ใบสั่งซื้อ',
                    'vendor'                   => 'ผู้ขาย',
                    'vendor-reference'         => 'เลขอ้างอิงของผู้ขาย',
                    'vendor-reference-tooltip' => 'เลขอ้างอิงของคำสั่งขายหรือใบเสนอราคาที่ผู้ขายให้มา ใช้จับคู่ตอนรับสินค้า เพราะเลขนี้มักอยู่ในใบส่งของของผู้ขาย',
                    'agreement'                => 'ข้อตกลง',
                    'currency'                 => 'สกุลเงิน',
                    'confirmation-date'        => 'วันที่ยืนยัน',
                    'order-deadline'           => 'กำหนดส่งใบสั่งซื้อ',
                    'expected-arrival'         => 'วันที่คาดว่าจะมาถึง',
                    'confirmed-by-vendor'      => 'ผู้ขายยืนยันแล้ว',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'สินค้า',

                'repeater' => [
                    'products' => [
                        'title'            => 'สินค้า',
                        'add-product-line' => 'เพิ่มสินค้า',

                        'entries' => [
                            'product'             => 'สินค้า',
                            'expected-arrival'    => 'วันที่คาดว่าจะมาถึง',
                            'quantity'            => 'จำนวน',
                            'received'            => 'รับแล้ว',
                            'billed'              => 'เรียกเก็บแล้ว',
                            'unit'                => 'หน่วย',
                            'packaging-qty'       => 'จำนวนบรรจุภัณฑ์',
                            'packaging'           => 'บรรจุภัณฑ์',
                            'taxes'               => 'ภาษี',
                            'discount-percentage' => 'ส่วนลด (%)',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'amount'              => 'จำนวนเงิน',
                        ],
                    ],

                    'section' => [
                        'title' => 'เพิ่มส่วน',
                    ],

                    'note' => [
                        'title' => 'เพิ่มหมายเหตุ',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'ข้อมูลเพิ่มเติม',

                'entries' => [
                    'buyer'             => 'ผู้ซื้อ',
                    'company'           => 'บริษัท',
                    'source-document'   => 'เอกสารต้นทาง',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'เงื่อนไขการค้าระหว่างประเทศ (Incoterms) คือชุดเงื่อนไขการค้ามาตรฐานที่ใช้ในธุรกรรมระดับโลกเพื่อกำหนดความรับผิดชอบระหว่างผู้ซื้อและผู้ขาย',
                    'incoterm-location' => 'สถานที่ตาม Incoterm',
                    'payment-term'      => 'เงื่อนไขการชำระเงิน',
                    'fiscal-position'   => 'สถานะทางภาษี',
                ],
            ],

            'terms' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],
];
