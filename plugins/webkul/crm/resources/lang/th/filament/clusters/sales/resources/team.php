<?php

return [
    'model-label'        => 'ทีมขาย',
    'plural-model-label' => 'ทีมขาย',

    'navigation' => [
        'title' => 'ทีม',
    ],

    'table' => [
        'columns' => [
            'name'    => 'ทีมขาย',
            'members' => 'สมาชิก',
            'company' => 'บริษัท',
        ],

        'filters' => [
            'team-leader' => 'หัวหน้าทีม',
            'created-at'  => 'สร้างเมื่อ',
        ],

        'actions' => [
            'pipeline' => [
                'label' => 'ไปป์ไลน์',
            ],
        ],
    ],

    'grid' => [
        'quotations'         => '{1} ใบเสนอราคา :count รายการ|[0,*] ใบเสนอราคา :count รายการ',
        'configuration'      => 'การกำหนดค่า',
        'menu'               => 'เมนูทีม',
        'open-opportunities' => '{1} โอกาสการขายที่เปิดอยู่ :count รายการ|[0,*] โอกาสการขายที่เปิดอยู่ :count รายการ',
        'orders-to-invoice'  => '{1} คำสั่งที่รอออกใบแจ้งหนี้ :count รายการ|[0,*] คำสั่งที่รอออกใบแจ้งหนี้ :count รายการ',
        'chart'              => 'โอกาสการขายใหม่ต่อสัปดาห์',
        'sample-data'        => 'ข้อมูลตัวอย่าง',
        'new'                => 'ใหม่',
        'invoiced-month'     => 'ออกใบแจ้งหนี้เดือนนี้',
        'of-target'          => 'ออกใบแจ้งหนี้แล้ว :invoiced จาก :target',
    ],

    'grid-menu' => [
        'leads'         => 'ลีด',
        'opportunities' => 'โอกาสการขาย',
        'quotations'    => 'ใบเสนอราคา',
        'sales-orders'  => 'คำสั่งขาย',
        'color'         => 'สี',
    ],
];
