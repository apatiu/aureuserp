<?php

return [
    'title' => 'จัดการภาษี',

    'form' => [
        'default-taxes' => [
            'label'       => 'ภาษีเริ่มต้น',
            'helper-text' => 'ค่าเริ่มต้นจะใช้กับสินค้าหากไม่ได้เลือกภาษี',
        ],

        'sales-tax' => [
            'label' => 'ภาษีขาย',
        ],

        'purchase-tax' => [
            'label' => 'ภาษีซื้อ',
        ],

        'prices' => [
            'label' => 'ราคา',
        ],

        'rounding-method' => [
            'label'       => 'วิธีการปัดเศษ',
            'helper-text' => 'วิธีปัดเศษจำนวนภาษี',

            'options' => [
                'round-per-line' => 'ปัดเศษต่อบรรทัด',
                'round-globally' => 'ปัดเศษรวม',
            ],
        ],

        'fiscal-country' => [
            'label' => 'ประเทศทางภาษี',
        ],
    ],
];
