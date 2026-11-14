<?php

return [
    'model-label'        => 'ระดับ',
    'plural-model-label' => 'ระดับ',

    'navigation' => [
        'title' => 'ระดับ',
        'group' => 'สมาชิก',
    ],

    'header-actions' => [
        'create' => 'ระดับใหม่',
    ],

    'form' => [
        'name'          => 'ชื่อ',
        'weight'        => 'น้ำหนักระดับ',
        'weight-helper' => 'โอกาสที่พาร์ทเนอร์ระดับนี้จะได้รับลีด 0 หมายถึงไม่ได้รับลีด',
    ],

    'table' => [
        'columns' => [
            'name'     => 'ชื่อ',
            'weight'   => 'น้ำหนักระดับ',
            'partners' => 'ผู้ติดต่อ',
        ],
    ],

    'tabs' => [
        'active'   => 'ใช้งานอยู่',
        'archived' => 'เก็บถาวร',
    ],

    'notifications' => [
        'created'  => 'สร้างระดับแล้ว',
        'updated'  => 'อัปเดตระดับแล้ว',
        'restored' => 'กู้คืนระดับแล้ว',
        'deleted'  => 'ลบระดับแล้ว',
    ],

    'contact' => [
        'section'       => 'ระดับพาร์ทเนอร์',
        'level'         => 'ระดับ',
        'weight'        => 'น้ำหนักระดับ',
        'weight-helper' => 'เว้นว่างไว้เพื่อใช้น้ำหนักของระดับ',
    ],
];
