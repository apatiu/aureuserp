<?php

return [
    'model-label'        => 'แผนรายได้ประจำ',
    'plural-model-label' => 'แผนรายได้ประจำ',

    'navigation' => [
        'title' => 'แผนรายได้ประจำ',
    ],

    'header-actions' => [
        'create' => 'แผนรายได้ประจำใหม่',
    ],

    'form' => [
        'name'             => 'ชื่อแผน',
        'name-placeholder' => 'เช่น รายเดือน',
        'months'           => 'จำนวนเดือน',
        'months-helper'    => 'จำนวนเดือนที่รายได้ประจำครอบคลุม (รายเดือน = 1, รายปี = 12)',
    ],

    'table' => [
        'columns' => [
            'name'          => 'แผน',
            'months'        => 'เดือน',
            'opportunities' => 'โอกาสการขาย',
        ],
    ],

    'tabs' => [
        'active'   => 'ใช้งานอยู่',
        'archived' => 'เก็บถาวร',
    ],

    'notifications' => [
        'created'  => 'สร้างแผนรายได้ประจำแล้ว',
        'updated'  => 'อัปเดตแผนรายได้ประจำแล้ว',
        'restored' => 'กู้คืนแผนรายได้ประจำแล้ว',
        'deleted'  => 'ลบแผนรายได้ประจำแล้ว',
    ],

    'opportunity' => [
        'recurring-revenue' => 'รายได้ประจำ',
        'plan'              => 'แผนรายได้ประจำ',
        'mrr'               => 'รายได้ประจำรายเดือน',
    ],
];
