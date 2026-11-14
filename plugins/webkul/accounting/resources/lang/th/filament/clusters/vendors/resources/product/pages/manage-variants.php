<?php

return [
    'title' => 'ตัวเลือกสินค้า',

    'form' => [
        'date'                   => 'วันที่',
        'employee'               => 'พนักงาน',
        'description'            => 'รายละเอียด',
        'time-spent'             => 'เวลาที่ใช้',
        'time-spent-helper-text' => 'เวลาที่ใช้เป็นชั่วโมง (เช่น 1.5 ชั่วโมง หมายถึง 1 ชั่วโมง 30 นาที)',
    ],

    'table' => [
        'columns' => [
            'date'                   => 'วันที่',
            'employee'               => 'พนักงาน',
            'description'            => 'รายละเอียด',
            'time-spent'             => 'เวลาที่ใช้',
            'time-spent-on-subtasks' => 'เวลาที่ใช้ในงานย่อย',
            'total-time-spent'       => 'รวมเวลาที่ใช้',
            'remaining-time'         => 'เวลาที่เหลือ',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบตัวเลือกสินค้าแล้ว',
                    'body'  => 'ลบตัวเลือกสินค้าเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],
];
