<?php

return [
    'title' => 'รายการบันทึกบัญชี',

    'navigation' => [
        'title' => 'รายการบันทึกบัญชี',
    ],

    'record-sub-navigation' => [
        'payment' => 'การชำระเงิน',
    ],

    'global-search' => [
        'number'   => 'เลขที่',
        'partner'  => 'คู่ค้า',
        'date'     => 'วันที่ใบแจ้งหนี้',
        'due-date' => 'วันครบกำหนดใบแจ้งหนี้',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'ทั่วไป',

                'fields' => [
                    'reference'       => 'อ้างอิง',
                    'accounting-date' => 'วันที่ลงบัญชี',
                    'journal'         => 'สมุดรายวัน',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'รายการย่อยในสมุดรายวัน',

                'repeater' => [
                    'title'       => 'รายการ',
                    'add-item'    => 'เพิ่มรายการ',

                    'columns' => [
                        'account'                  => 'บัญชี',
                        'partner'                  => 'คู่ค้า',
                        'label'                    => 'ป้ายกำกับ',
                        'amount-currency'          => 'จำนวนเงิน (สกุลเงิน)',
                        'currency'                 => 'สกุลเงิน',
                        'taxes'                    => 'ภาษี',
                        'debit'                    => 'เดบิต',
                        'credit'                   => 'เครดิต',
                        'discount-amount-currency' => 'จำนวนส่วนลด (สกุลเงิน)',
                    ],

                    'fields' => [
                        'account'                  => 'บัญชี',
                        'partner'                  => 'คู่ค้า',
                        'label'                    => 'ป้ายกำกับ',
                        'amount-currency'          => 'จำนวนเงิน (สกุลเงิน)',
                        'currency'                 => 'สกุลเงิน',
                        'taxes'                    => 'ภาษี',
                        'debit'                    => 'เดบิต',
                        'credit'                   => 'เครดิต',
                        'discount-amount-currency' => 'จำนวนส่วนลด (สกุลเงิน)',
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'ข้อมูลอื่น',

                'fields' => [
                    'checked'                 => 'ตรวจสอบแล้ว',
                    'company'                 => 'บริษัท',
                    'fiscal-position'         => 'สถานะทางภาษี',
                    'fiscal-position-tooltip' => 'สถานะทางภาษีใช้ปรับภาษีและบัญชีตามที่ตั้งของลูกค้า',
                ],
            ],

            'term-and-conditions' => [
                'title' => 'ข้อกำหนดและเงื่อนไข',
            ],
        ],
    ],

    'table' => [
        'total'   => 'รวม',
        'columns' => [
            'invoice-date' => 'วันที่ใบแจ้งหนี้',
            'date'         => 'วันที่',
            'number'       => 'เลขที่',
            'partner'      => 'คู่ค้า',
            'reference'    => 'อ้างอิง',
            'journal'      => 'สมุดรายวัน',
            'company'      => 'บริษัท',
            'total'        => 'รวม',
            'state'        => 'สถานะ',
            'checked'      => 'ตรวจสอบแล้ว',
        ],

        'summarizers' => [
            'total' => 'รวม',
        ],

        'groups' => [
            'partner'        => 'คู่ค้า',
            'journal'        => 'สมุดรายวัน',
            'state'          => 'สถานะ',
            'payment-method' => 'วิธีการชำระเงิน',
            'date'           => 'วันที่',
            'invoice-date'   => 'วันที่ใบแจ้งหนี้',
            'company'        => 'บริษัท',
        ],

        'filters' => [
            'number'                       => 'เลขที่',
            'invoice-partner-display-name' => 'ชื่อคู่ค้าที่แสดงในใบแจ้งหนี้',
            'invoice-date'                 => 'วันที่ใบแจ้งหนี้',
            'invoice-due-date'             => 'วันครบกำหนดใบแจ้งหนี้',
            'invoice-origin'               => 'ที่มาของใบแจ้งหนี้',
            'reference'                    => 'อ้างอิง',
            'created-at'                   => 'สร้างเมื่อ',
            'updated-at'                   => 'อัปเดตเมื่อ',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบการชำระเงินแล้ว',
                    'body'  => 'ลบการชำระเงินเรียบร้อยแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบการชำระเงินแล้ว',
                    'body'  => 'ลบการชำระเงินเรียบร้อยแล้ว',
                ],
            ],
        ],

        'toolbar-actions' => [
            'export' => [
                'label' => 'ส่งออก',
            ],
        ],
    ],

    'infolist' => [
        'section' => [
            'general' => [
                'title'   => 'ทั่วไป',
                'entries' => [
                    'number'          => 'เลขที่',
                    'reference'       => 'อ้างอิง',
                    'accounting-date' => 'วันที่ลงบัญชี',
                    'journal'         => 'สมุดรายวัน',
                ],
            ],
        ],

        'tabs' => [
            'lines' => [
                'title' => 'รายการย่อยในสมุดรายวัน',

                'repeater' => [
                    'entries' => [
                        'account'  => 'บัญชี',
                        'partner'  => 'คู่ค้า',
                        'label'    => 'ป้ายกำกับ',
                        'currency' => 'สกุลเงิน',
                        'taxes'    => 'ภาษี',
                        'debit'    => 'เดบิต',
                        'credit'   => 'เครดิต',
                    ],
                ],
            ],

            'other-information' => [
                'title' => 'ข้อมูลอื่น',

                'fieldset' => [
                    'accounting' => [
                        'title' => 'บัญชี',

                        'entries' => [
                            'company'         => 'บริษัท',
                            'fiscal-position' => 'สถานะทางภาษี',
                            'checked'         => 'ตรวจสอบแล้ว',
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
