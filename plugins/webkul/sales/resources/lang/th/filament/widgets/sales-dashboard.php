<?php

return [
    'unknown'             => 'ไม่ทราบ',
    'other'               => 'อื่น ๆ',
    'share'               => 'แชร์',
    'status'              => 'สถานะ',
    'delivery-status'     => 'สถานะการส่งมอบ',
    'billing'             => 'การเรียกเก็บเงิน',
    'stats'               => [
        'heading'            => 'ตัวชี้วัดสำคัญ',
        'total-quotations'   => 'ใบเสนอราคาทั้งหมด',
        'total-sales-orders' => 'คำสั่งขายทั้งหมด',
        'total-revenue'      => 'รายได้รวม',
        'average-revenue'    => 'รายได้เฉลี่ย',
        'increase'           => 'เพิ่ม',
        'decrease'           => 'ลด',
    ],

    'monthly-sales'       => [
        'heading' => 'ยอดขายรายเดือน',
        'revenue' => 'รายได้',
    ],

    'revenue-by-category' => [
        'heading' => 'รายได้ตามหมวดหมู่',
        'revenue' => 'รายได้',
    ],

    'sales-persons'       => [
        'heading' => 'ผลงานพนักงานขาย',
        'revenue' => 'รายได้',
    ],

    'top-products'        => [
        'heading' => 'สินค้าอันดับต้น',
        'columns' => [
            'name'     => 'สินค้า',
            'quantity' => 'จำนวนที่ขาย',
            'revenue'  => 'รายได้',
        ],
    ],

    'top-customers'       => [
        'heading' => 'ลูกค้าอันดับต้น',
        'columns' => [
            'name'    => 'ลูกค้า',
            'orders'  => 'คำสั่งขาย',
            'revenue' => 'รายได้',
        ],
    ],

    'top-sales-orders'    => [
        'heading' => 'คำสั่งขายอันดับต้น',
        'columns' => [
            'reference'      => 'เลขที่คำสั่งขาย',
            'customer'       => 'ลูกค้า',
            'amount'         => 'ยอดรวม',
            'invoice-status' => 'สถานะใบแจ้งหนี้',
        ],
    ],

    'top-quotations'      => [
        'heading' => 'ใบเสนอราคาอันดับต้น',
        'columns' => [
            'reference' => 'อ้างอิง',
            'customer'  => 'ลูกค้า',
            'amount'    => 'จำนวนเงิน',
        ],
    ],
];
