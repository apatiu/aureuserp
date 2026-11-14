<?php

return [
    'unknown'       => 'ไม่ทราบ',
    'other'         => 'อื่น ๆ',
    'share'         => 'แชร์',
    'status'        => 'สถานะ',
    'receipt-status'=> 'สถานะการรับสินค้า',
    'stats'         => [
        'heading'              => 'ตัวชี้วัดสำคัญ',
        'draft-rfqs'           => 'ใบขอราคาฉบับร่าง',
        'sent-rfqs'            => 'ใบขอราคาที่ส่งแล้ว',
        'confirmed-orders'     => 'ใบสั่งซื้อที่ยืนยันแล้ว',
        'total-purchase-value' => 'มูลค่าการจัดซื้อรวม',
        'increase'             => 'เพิ่ม :percent%',
        'decrease'             => 'ลด :percent%',
        'no-change'            => 'ไม่เปลี่ยนแปลง',
    ],

    'trend'        => [
        'heading' => 'แนวโน้มใบสั่งซื้อตามสถานะ',
        'states'  => [
            'draft'    => 'ฉบับร่าง',
            'sent'     => 'ส่งแล้ว',
            'purchase' => 'การจัดซื้อ',
            'done'     => 'เสร็จแล้ว',
            'canceled' => 'ยกเลิกแล้ว',
        ],
    ],

    'vendor-spend' => [
        'heading'         => 'สัดส่วนยอดใช้จ่ายตามผู้ขาย',
        'total-purchased' => 'ยอดซื้อรวม',
    ],

    'top-orders'   => [
        'heading' => 'ใบสั่งซื้ออันดับต้น',
        'columns' => [
            'reference'      => 'เลขที่ใบสั่งซื้อ',
            'vendor'         => 'ผู้ขาย',
            'billing-status' => 'สถานะการเรียกเก็บเงิน',
            'amount'         => 'ยอดรวม',
        ],
    ],

    'top-products' => [
        'heading' => 'สินค้าที่ซื้อมากที่สุด',
        'columns' => [
            'name'     => 'สินค้า',
            'quantity' => 'จำนวนรวม',
            'value'    => 'มูลค่ารวม',
        ],
    ],
    'top-rfqs'     => [
        'heading' => 'ใบขอราคาอันดับต้น',
        'columns' => [
            'reference' => 'เลขที่ใบขอราคา',
            'status'    => 'สถานะ',
            'amount'    => 'ยอดรวม',
        ],
    ],

    'top-vendors'  => [
        'heading' => 'ผู้ขายอันดับต้น',
        'columns' => [
            'vendor' => 'ผู้ขาย',
            'orders' => 'ใบสั่งซื้อ',
            'amount' => 'ยอดใช้จ่ายรวม',
        ],
    ],
];
