<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'อ้างอิง',
            'total-amount'      => 'ยอดรวม',
            'confirmation-date' => 'วันที่ยืนยัน',
            'status'            => 'สถานะ',
        ],
    ],

    'products' => [
        'columns' => [
            'product'    => 'สินค้า',
            'quantity'   => 'จำนวน',
            'unit-price' => 'ราคาต่อหน่วย',
            'taxes'      => 'ภาษี',
            'discount'   => 'ส่วนลด %',
            'amount'     => 'จำนวนเงิน',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'ผู้ซื้อ',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'ยอมรับ',

                    'notification' => [
                        'title' => 'ยอมรับใบเสนอราคาแล้ว',
                        'body'  => 'รับทราบใบขอราคาเรียบร้อยแล้ว',
                    ],

                    'message' => [
                        'body' => 'ผู้ขายรับทราบใบขอราคาแล้ว',
                    ],
                ],

                'decline' => [
                    'label' => 'ปฏิเสธ',

                    'notification' => [
                        'title' => 'ปฏิเสธใบเสนอราคาแล้ว',
                        'body'  => 'ปฏิเสธใบขอราคาเรียบร้อยแล้ว',
                    ],

                    'message' => [
                        'body' => 'ผู้ขายปฏิเสธใบขอราคาแล้ว',
                    ],
                ],

                'print' => [
                    'label' => 'ดาวน์โหลด/พิมพ์',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'ใบสั่งซื้อ #:id',
                'quotation'             => 'ใบขอราคา #:id',
                'order-date'            => 'วันที่สั่งซื้อ',
                'from'                  => 'จาก',
                'confirmation-date'     => 'วันที่ยืนยัน',
                'receipt-date'          => 'วันที่รับสินค้า',
                'products'              => 'สินค้า',
                'untaxed-amount'        => 'ยอดก่อนภาษี',
                'tax-amount'            => 'จำนวนภาษี',
                'total'                 => 'รวม',
                'communication-history' => 'ประวัติการสื่อสาร',
            ],
        ],
    ],
];
