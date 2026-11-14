<?php

return [
    'navigation' => [
        'title' => 'แผนกิจกรรม',
        'group' => 'กิจกรรม',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'ข้อมูลทั่วไป',
                'fields' => [
                    'name'       => 'ชื่อ',
                    'status'     => 'สถานะ',
                    'department' => 'แผนก',
                    'company'    => 'บริษัท',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'ชื่อ',
            'status'     => 'สถานะ',
            'department' => 'แผนก',
            'company'    => 'บริษัท',
            'manager'    => 'ผู้จัดการ',
            'created-by' => 'สร้างโดย',
            'created-at' => 'สร้างเมื่อ',
            'updated-at' => 'อัปเดตเมื่อ',
        ],

        'filters' => [
            'name'           => 'ชื่อ',
            'plugin'         => 'ปลั๊กอิน',
            'activity-types' => 'ประเภทกิจกรรม',
            'company'        => 'บริษัท',
            'department'     => 'แผนก',
            'is-active'      => 'สถานะ',
            'updated-at'     => 'อัปเดตเมื่อ',
            'created-at'     => 'สร้างเมื่อ',
        ],

        'groups' => [
            'status'     => 'สถานะ',
            'name'       => 'ชื่อ',
            'created-by' => 'สร้างโดย',
            'created-at' => 'สร้างเมื่อ',
            'updated-at' => 'อัปเดตเมื่อ',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนแผนกิจกรรมแล้ว',
                    'body'  => 'กู้คืนแผนกิจกรรมเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบแผนกิจกรรมแล้ว',
                    'body'  => 'ลบแผนกิจกรรมเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบแผนกิจกรรมถาวรแล้ว',
                    'body'  => 'ลบแผนกิจกรรมถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนแผนกิจกรรมแล้ว',
                    'body'  => 'กู้คืนแผนกิจกรรมเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบแผนกิจกรรมแล้ว',
                    'body'  => 'ลบแผนกิจกรรมเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบแผนกิจกรรมถาวรแล้ว',
                    'body'  => 'ลบแผนกิจกรรมถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'empty-state' => [
            'create' => [
                'notification' => [
                    'title' => 'สร้างแผนกิจกรรมแล้ว',
                    'body'  => 'สร้างแผนกิจกรรมเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'ข้อมูลทั่วไป',
                'entries' => [
                    'name'       => 'ชื่อ',
                    'status'     => 'สถานะ',
                    'department' => 'แผนก',
                    'manager'    => 'ผู้จัดการ',
                    'company'    => 'บริษัท',
                ],
            ],
        ],
    ],
];
