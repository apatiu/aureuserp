<?php

return [
    'title' => 'โอกาสการขาย',

    'chatter' => [
        'won'      => 'ทำเครื่องหมาย :model ว่าชนะ',
        'lost'     => 'ทำเครื่องหมาย :model ว่าแพ้',
        'restored' => 'ย้าย :model กลับไปที่ไปป์ไลน์แล้ว',
    ],

    'log-attributes' => [
        'name'             => 'โอกาสการขาย',
        'stage'            => 'ขั้นตอน',
        'customer'         => 'ลูกค้า',
        'salesperson'      => 'พนักงานขาย',
        'team'             => 'ทีมขาย',
        'expected-revenue' => 'รายได้ที่คาดหวัง',
        'probability'      => 'ความน่าจะเป็น',
        'lost-reason'      => 'เหตุผลที่แพ้',
    ],
];
