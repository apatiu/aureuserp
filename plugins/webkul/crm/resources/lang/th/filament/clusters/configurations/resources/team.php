<?php

return [
    'model-label'        => 'ทีมขาย',
    'plural-model-label' => 'ทีมขาย',

    'navigation' => [
        'title' => 'ทีมขาย',
    ],

    'pages' => [
        'assignment' => [
            'navigation' => 'กฎการมอบหมาย',
            'title'      => ':team — กฎการมอบหมาย',
        ],

        'alias' => [
            'navigation' => 'อีเมลแฝง',
            'title'      => ':team — อีเมลแฝง',
        ],

        'members' => [
            'title'              => ':team — สมาชิก',
            'inactive'           => 'ไม่ใช้งาน',
            'skipped'            => 'ข้ามการมอบหมายอัตโนมัติ',
            'rules'              => '{1} กฎ :count ข้อ|[0,*] กฎ :count ข้อ',
            'lead-limit'         => 'ขีดจำกัดลีด (30 วัน): :assigned / :max',
            'lead-limit-tooltip' => 'มอบหมายลีดแล้ว :assigned จาก :max ใน 30 วันที่ผ่านมา',
        ],
    ],
];
