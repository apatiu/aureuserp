<?php

return [
    'title' => 'ใบแจ้งหนี้',

    'navigation' => [
        'title' => 'ใบแจ้งหนี้',
    ],

    'global-search' => [
        'customer' => 'ลูกค้า',
        'date'     => 'วันที่',
        'due-date' => 'วันครบกำหนด',
        'amount'   => 'จำนวนเงิน',
    ],

    'form' => [
        'tabs' => [
            'invoice-lines' => [
                'repeater' => [
                    'products' => [
                        'actions' => [
                            'open-product' => [
                                'tooltip' => 'เปิดสินค้า',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
