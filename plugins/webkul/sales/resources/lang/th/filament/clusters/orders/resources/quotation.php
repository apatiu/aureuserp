<?php

return [
    'title' => 'ใบเสนอราคา',

    'navigation' => [
        'title' => 'ใบเสนอราคา',
    ],

    'global-search' => [
        'customer'  => 'ลูกค้า',
        'reference' => 'อ้างอิง',
        'amount'    => 'จำนวนเงิน',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'ทั่วไป',
                'fields' => [
                    'customer'       => 'ลูกค้า',
                    'expiration'     => 'วันหมดอายุ',
                    'quotation-date' => 'วันที่ใบเสนอราคา',
                    'order-date'     => 'วันที่สั่งซื้อ',
                    'payment-term'   => 'เงื่อนไขการชำระเงิน',
                    'price-list'     => 'รายการราคา',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'รายการสินค้าในคำสั่ง',

                'repeater' => [
                    'products' => [
                        'title'       => 'สินค้า',
                        'add-product' => 'เพิ่มสินค้า',

                        'columns'     => [
                            'product'                    => 'สินค้า',
                            'product-variants'           => 'ตัวเลือกสินค้า',
                            'product-simple'             => 'สินค้าแบบเดี่ยว',
                            'quantity'                   => 'จำนวน',
                            'insufficient-stock-tooltip' => 'สต็อกไม่เพียงพอสำหรับความต้องการนี้',
                            'uom'                        => 'หน่วยวัด',
                            'lead-time'                  => 'ระยะเวลานำส่ง',
                            'qty-delivered'              => 'ส่งมอบแล้ว',
                            'qty-invoiced'               => 'ออกใบแจ้งหนี้แล้ว',
                            'packaging-qty'              => 'จำนวนบรรจุภัณฑ์',
                            'packaging'                  => 'บรรจุภัณฑ์',
                            'unit-price'                 => 'ราคาต่อหน่วย',
                            'cost'                       => 'ต้นทุน',
                            'margin'                     => 'กำไรขั้นต้น',
                            'taxes'                      => 'ภาษี',
                            'amount'                     => 'จำนวนเงิน',
                            'margin-percentage'          => 'กำไรขั้นต้น (%)',
                            'discount-percentage'        => 'ส่วนลด (%)',
                        ],

                        'fields'      => [
                            'product'             => 'สินค้า',
                            'product-variants'    => 'ตัวเลือกสินค้า',
                            'product-simple'      => 'สินค้าแบบเดี่ยว',
                            'quantity'            => 'จำนวน',
                            'uom'                 => 'หน่วยวัด',
                            'lead-time'           => 'ระยะเวลานำส่ง',
                            'qty-delivered'       => 'จำนวนที่ส่งมอบ',
                            'qty-invoiced'        => 'จำนวนที่ออกใบแจ้งหนี้',
                            'packaging-qty'       => 'จำนวนบรรจุภัณฑ์',
                            'packaging'           => 'บรรจุภัณฑ์',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'cost'                => 'ต้นทุน',
                            'margin'              => 'กำไรขั้นต้น',
                            'taxes'               => 'ภาษี',
                            'amount'              => 'จำนวนเงิน',
                            'margin-percentage'   => 'กำไรขั้นต้น (%)',
                            'discount-percentage' => 'ส่วนลด (%)',
                        ],

                        'notifications' => [
                            'quantity-below-delivered' => [
                                'title' => 'ไม่สามารถลดจำนวน',
                                'body'  => 'คุณไม่สามารถลดจำนวนต่ำกว่าจำนวนที่ส่งมอบแล้ว (:qty)',
                            ],
                        ],

                        'delete-action' => [
                            'error' => [
                                'title' => 'ไม่สามารถลบสินค้า',
                                'body'  => 'ไม่สามารถลบสินค้าออกจากคำสั่งขายที่ยืนยันแล้ว',
                            ],
                        ],

                        'actions' => [
                            'open-product' => [
                                'tooltip' => 'เปิดสินค้า',
                            ],
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'สินค้าทางเลือก',
                        'add-product' => 'เพิ่มสินค้า',

                        'columns' => [
                            'product'             => 'สินค้า',
                            'description'         => 'รายละเอียด',
                            'quantity'            => 'จำนวน',
                            'uom'                 => 'หน่วยวัด',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'discount-percentage' => 'ส่วนลด (%)',
                        ],

                        'fields'      => [
                            'product'             => 'สินค้า',
                            'description'         => 'รายละเอียด',
                            'quantity'            => 'จำนวน',
                            'uom'                 => 'หน่วยวัด',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'discount-percentage' => 'ส่วนลด (%)',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'เพิ่มรายการสินค้าในคำสั่ง',
                                    'already-added'  => 'เพิ่มในคำสั่งแล้ว',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'เพิ่มสินค้าแล้ว',
                                        'body'  => 'เพิ่มสินค้าเรียบร้อยแล้ว',
                                    ],

                                    'product-not-found' => [
                                        'title' => 'ไม่พบสินค้า',
                                    ],

                                    'product-already-exists' => [
                                        'title' => 'มีสินค้านี้อยู่แล้ว',
                                        'body'  => 'สินค้านี้อยู่ในรายการคำสั่งอยู่แล้ว โปรดแก้ไขรายการเดิมแทน',
                                    ],

                                    'missing-product-data' => [
                                        'title' => 'ข้อมูลสินค้าไม่ครบ',
                                        'body'  => 'ประมวลผลสินค้าที่เลือกไม่ได้',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'ข้อมูลอื่น',

                'fieldset' => [
                    'sales' => [
                        'title' => 'การขาย',

                        'fields' => [
                            'sales-person'       => 'พนักงานขาย',
                            'customer-reference' => 'เลขอ้างอิงลูกค้า',
                            'tags'               => 'แท็ก',
                        ],
                    ],

                    'shipping' => [
                        'title'  => 'การจัดส่ง',
                        'fields' => [
                            'warehouse'       => 'คลังสินค้า',
                            'commitment-date' => 'วันที่ส่งมอบ',
                        ],
                    ],

                    'tracking' => [
                        'title'  => 'การติดตาม',
                        'fields' => [
                            'source-document' => 'เอกสารต้นทาง',
                            'medium'          => 'ปานกลาง',
                            'source'          => 'แหล่งที่มา',
                            'campaign'        => 'แคมเปญ',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'ข้อมูลเพิ่มเติม',

                        'fields' => [
                            'company'    => 'บริษัท',
                            'currency'   => 'สกุลเงิน',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'number'             => 'เลขที่',
            'status'             => 'สถานะ',
            'delivery-status'    => 'สถานะการส่งมอบ',
            'invoice-status'     => 'สถานะใบแจ้งหนี้',
            'creation-date'      => 'วันที่สร้าง',
            'commitment-date'    => 'วันที่ตกลงส่งมอบ',
            'expected-date'      => 'วันที่คาดว่าจะได้รับ',
            'customer'           => 'ลูกค้า',
            'sales-person'       => 'พนักงานขาย',
            'sales-team'         => 'ทีมขาย',
            'untaxed-amount'     => 'ยอดก่อนภาษี',
            'amount-tax'         => 'ภาษี',
            'amount-total'       => 'ยอดรวม',
            'customer-reference' => 'เลขอ้างอิงลูกค้า',
        ],

        'summarizers' => [
            'total'        => 'รวม',
            'taxes'        => 'ภาษี',
            'total-amount' => 'ยอดรวม',
        ],

        'filters' => [
            'sales-person'     => 'พนักงานขาย',
            'utm-source'       => 'แหล่ง UTM',
            'company'          => 'บริษัท',
            'customer'         => 'ลูกค้า',
            'journal'          => 'สมุดรายวัน',
            'invoice-address'  => 'ที่อยู่ใบแจ้งหนี้',
            'shipping-address' => 'ที่อยู่จัดส่ง',
            'fiscal-position'  => 'สถานะทางภาษี',
            'payment-term'     => 'เงื่อนไขการชำระเงิน',
            'currency'         => 'สกุลเงิน',
            'created-at'       => 'สร้างเมื่อ',
            'updated-at'       => 'อัปเดตเมื่อ',
        ],

        'groups' => [
            'medium'          => 'ปานกลาง',
            'source'          => 'แหล่งที่มา',
            'team'            => 'ทีม',
            'sales-person'    => 'พนักงานขาย',
            'currency'        => 'สกุลเงิน',
            'company'         => 'บริษัท',
            'customer'        => 'ลูกค้า',
            'quotation-date'  => 'วันที่ใบเสนอราคา',
            'commitment-date' => 'วันที่ตกลงส่งมอบ',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนใบเสนอราคาแล้ว',
                    'body'  => 'กู้คืนใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบใบเสนอราคาแล้ว',
                    'body'  => 'ลบใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบใบเสนอราคาถาวรแล้ว',
                    'body'  => 'ลบใบเสนอราคาถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนใบเสนอราคาแล้ว',
                    'body'  => 'กู้คืนใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบใบเสนอราคาแล้ว',
                    'body'  => 'ลบใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบใบเสนอราคาถาวรแล้ว',
                    'body'  => 'ลบใบเสนอราคาถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'สร้างใบเสนอราคาแล้ว',
                    'body'  => 'สร้างใบเสนอราคาเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'ทั่วไป',
                'entries' => [
                    'sale-order'     => 'คำสั่งขาย',
                    'customer'       => 'ลูกค้า',
                    'expiration'     => 'วันหมดอายุ',
                    'quotation-date' => 'วันที่ใบเสนอราคา',
                    'payment-term'   => 'เงื่อนไขการชำระเงิน',
                ],
            ],
        ],

        'tabs' => [
            'order-line' => [
                'title' => 'รายการสินค้าในคำสั่ง',

                'repeater' => [
                    'products' => [
                        'title'       => 'สินค้า',
                        'add-product' => 'เพิ่มสินค้า',
                        'entries'     => [
                            'product'             => 'สินค้า',
                            'product-variants'    => 'ตัวเลือกสินค้า',
                            'product-simple'      => 'สินค้าแบบเดี่ยว',
                            'quantity'            => 'จำนวน',
                            'qty-delivered'       => 'ส่งมอบแล้ว',
                            'qty-invoiced'        => 'ออกใบแจ้งหนี้แล้ว',
                            'uom'                 => 'หน่วยวัด',
                            'lead-time'           => 'ระยะเวลานำส่ง',
                            'packaging-qty'       => 'จำนวนบรรจุภัณฑ์',
                            'packaging'           => 'บรรจุภัณฑ์',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'cost'                => 'ต้นทุน',
                            'margin'              => 'กำไรขั้นต้น',
                            'taxes'               => 'ภาษี',
                            'amount'              => 'จำนวนเงิน',
                            'margin-percentage'   => 'กำไรขั้นต้น (%)',
                            'discount-percentage' => 'ส่วนลด (%)',
                            'sub-total'           => 'ยอดรวมย่อย',
                        ],
                    ],

                    'product-optional' => [
                        'title'       => 'สินค้าทางเลือก',
                        'add-product' => 'เพิ่มสินค้า',
                        'entries'     => [
                            'product'             => 'สินค้า',
                            'description'         => 'รายละเอียด',
                            'quantity'            => 'จำนวน',
                            'uom'                 => 'หน่วยวัด',
                            'unit-price'          => 'ราคาต่อหน่วย',
                            'discount-percentage' => 'ส่วนลด (%)',
                            'sub-total'           => 'ยอดรวมย่อย',

                            'actions' => [
                                'tooltip' => [
                                    'add-order-line' => 'เพิ่มรายการสินค้าในคำสั่ง',
                                ],

                                'notifications' => [
                                    'product-added' => [
                                        'title' => 'เพิ่มสินค้าแล้ว',
                                        'body'  => 'เพิ่มสินค้าเรียบร้อยแล้ว',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'other-information' => [
                'title' => 'ข้อมูลอื่น',

                'fieldset' => [
                    'sales' => [
                        'title' => 'การขาย',

                        'entries' => [
                            'sales-person'       => 'พนักงานขาย',
                            'customer-reference' => 'เลขอ้างอิงลูกค้า',
                            'tags'               => 'แท็ก',
                        ],
                    ],

                    'shipping' => [
                        'title'   => 'การจัดส่ง',
                        'entries' => [
                            'commitment-date' => 'วันที่ส่งมอบ',
                        ],
                    ],

                    'tracking' => [
                        'title'   => 'การติดตาม',
                        'entries' => [
                            'source-document' => 'เอกสารต้นทาง',
                            'medium'          => 'ปานกลาง',
                            'source'          => 'แหล่งที่มา',
                            'campaign'        => 'แคมเปญ',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'ข้อมูลเพิ่มเติม',

                        'entries' => [
                            'company'  => 'บริษัท',
                            'currency' => 'สกุลเงิน',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],
];
