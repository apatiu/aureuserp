<?php

return [
    'title' => 'จัดการบัญชีเริ่มต้น',

    'setup' => [
        'action'       => 'ตั้งค่าบัญชีสำหรับบริษัทนี้',
        'notice'       => 'บริษัทนี้ยังไม่ได้ตั้งค่าบัญชี ใช้ "ตั้งค่าบัญชี" ด้านบนเพื่อสร้างผังบัญชี สมุดรายวัน และการตั้งค่าเริ่มต้น',
        'notification' => [
            'title' => 'ตั้งค่าบัญชีแล้ว',
            'body'  => 'สร้างผังบัญชี สมุดรายวัน และการตั้งค่าเริ่มต้นให้บริษัทนี้แล้ว',
        ],
    ],

    'form' => [
        'exchange-difference-entries' => [
            'label' => 'รายการผลต่างอัตราแลกเปลี่ยน',

            'fields' => [
                'journal' => [
                    'label' => 'สมุดรายวัน',
                ],

                'gain' => [
                    'label' => 'กำไร',
                ],

                'loss' => [
                    'label' => 'ขาดทุน',
                ],
            ],
        ],

        'bank-transfer-and-payments' => [
            'label' => 'การโอนและการชำระเงินผ่านธนาคาร',

            'fields' => [
                'bank-suspense-account' => [
                    'label' => 'บัญชีพักธนาคาร',
                ],

                'transfer-account' => [
                    'label' => 'บัญชีโอน',
                ],
            ],
        ],

        'product-accounts' => [
            'label' => 'บัญชีสินค้า',

            'fields' => [
                'income-account' => [
                    'label' => 'บัญชีรายได้',
                ],

                'expense-account' => [
                    'label' => 'บัญชีค่าใช้จ่าย',
                ],
            ],
        ],
    ],
];
