<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'รายละเอียดกิจกรรม',

                'fields' => [
                    'activity-type' => 'ประเภทกิจกรรม',
                    'summary'       => 'สรุป',
                    'note'          => 'หมายเหตุ',
                ],
            ],

            'assignment' => [
                'title' => 'การมอบหมาย',

                'fields' => [
                    'assignment' => 'การมอบหมาย',
                    'assignee'   => 'ผู้รับผิดชอบ',
                ],
            ],

            'delay-information' => [
                'title' => 'ข้อมูลความล่าช้า',

                'fields' => [
                    'delay-count'            => 'จำนวนที่ล่าช้า',
                    'delay-unit'             => 'หน่วยความล่าช้า',
                    'delay-from'             => 'ล่าช้าจาก',
                    'delay-from-helper-text' => 'แหล่งที่ใช้คำนวณความล่าช้า',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'ประเภทกิจกรรม',
            'summary'       => 'สรุป',
            'assignment'    => 'การมอบหมาย',
            'assigned-to'   => 'มอบหมายให้',
            'interval'      => 'ช่วง',
            'delay-unit'    => 'หน่วยความล่าช้า',
            'delay-from'    => 'ล่าช้าจาก',
            'created-by'    => 'สร้างโดย',
            'created-at'    => 'สร้างเมื่อ',
            'updated-at'    => 'อัปเดตเมื่อ',
        ],

        'groups' => [
            'activity-type' => 'ประเภทกิจกรรม',
            'assignment'    => 'การมอบหมาย',
            'assigned-to'   => 'มอบหมายให้',
            'interval'      => 'ช่วง',
            'delay-unit'    => 'หน่วยความล่าช้า',
            'delay-from'    => 'ล่าช้าจาก',
            'created-by'    => 'สร้างโดย',
            'created-at'    => 'สร้างเมื่อ',
            'updated-at'    => 'อัปเดตเมื่อ',
        ],

        'filters' => [
            'activity-type'   => 'ประเภทกิจกรรม',
            'activity-status' => 'สถานะกิจกรรม',
            'has-delay'       => 'มีความล่าช้า',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'อัปเดตแม่แบบกิจกรรมแล้ว',
                    'body'  => 'อัปเดตแม่แบบกิจกรรมเรียบร้อยแล้ว',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'สร้างแม่แบบกิจกรรมแล้ว',
                    'body'  => 'สร้างแม่แบบกิจกรรมเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบแม่แบบกิจกรรมแล้ว',
                    'body'  => 'ลบแม่แบบกิจกรรมเรียบร้อยแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบแม่แบบกิจกรรมแล้ว',
                    'body'  => 'ลบแม่แบบกิจกรรมเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'รายละเอียดกิจกรรม',

                'entries' => [
                    'activity-type' => 'ประเภทกิจกรรม',
                    'summary'       => 'สรุป',
                ],
            ],

            'assignment' => [
                'title' => 'การมอบหมาย',

                'entries' => [
                    'assignment' => 'การมอบหมาย',
                    'assignee'   => 'ผู้รับผิดชอบ',
                ],
            ],

            'delay-information' => [
                'title' => 'ข้อมูลความล่าช้า',

                'entries' => [
                    'delay-count'            => 'จำนวนที่ล่าช้า',
                    'delay-unit'             => 'หน่วยความล่าช้า',
                    'delay-from'             => 'ล่าช้าจาก',
                    'delay-from-helper-text' => 'แหล่งที่ใช้คำนวณความล่าช้า',
                ],
            ],
        ],

        'note' => 'หมายเหตุ',
    ],
];
