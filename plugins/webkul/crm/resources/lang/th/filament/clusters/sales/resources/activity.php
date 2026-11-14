<?php

return [
    'model-label'        => 'กิจกรรม',
    'plural-model-label' => 'กิจกรรม',

    'navigation' => [
        'title' => 'กิจกรรมของฉัน',
    ],

    'table' => [
        'columns' => [
            'due-date'      => 'วันครบกำหนด',
            'due-status'    => 'สถานะครบกำหนด',
            'opportunity'   => 'ลีด / โอกาสการขาย',
            'customer'      => 'ลูกค้า',
            'activity-type' => 'ประเภทกิจกรรม',
            'summary'       => 'สรุป',
            'assigned-to'   => 'มอบหมายให้',
            'stage'         => 'ขั้นตอน',
            'created-at'    => 'สร้างเมื่อ',
        ],

        'groups' => [
            'activity-type' => 'ประเภทกิจกรรม',
            'assigned-to'   => 'มอบหมายให้',
            'due-date'      => 'วันครบกำหนด',
        ],

        'filters' => [
            'due-status'    => 'ครบกำหนด',
            'activity-type' => 'ประเภทกิจกรรม',
            'assigned-to'   => 'มอบหมายให้',
        ],

        'empty-state' => [
            'heading'     => 'ไม่มีกิจกรรม',
            'description' => 'ใช้ กำหนดกิจกรรม หรือไอคอนนาฬิกาบนโอกาสการขาย เพื่อวางแผนขั้นตอนถัดไป',
        ],
    ],

    'actions' => [
        'schedule' => [
            'label' => 'กำหนดกิจกรรม',

            'modal' => [
                'heading' => 'กำหนดกิจกรรม',
                'submit'  => 'กำหนดเวลา',
            ],

            'form' => [
                'opportunity'   => 'โอกาสการขาย',
                'activity-type' => 'ประเภทกิจกรรม',
                'due-date'      => 'วันครบกำหนด',
                'summary'       => 'สรุป',
                'assigned-to'   => 'มอบหมายให้',
                'note'          => 'บันทึก',
            ],

            'notification' => [
                'success' => [
                    'title' => 'กำหนดกิจกรรมแล้ว',
                    'body'  => 'กำหนดกิจกรรมใน ":opportunity" แล้ว',
                ],

                'forbidden' => [
                    'title' => 'ไม่อนุญาต',
                    'body'  => 'คุณไม่มีสิทธิ์กำหนดกิจกรรมในโอกาสการขายนี้',
                ],
            ],
        ],

        'open' => [
            'label' => 'เปิดระเบียน',
        ],

        'done' => [
            'label'             => 'ทำเครื่องหมายว่าเสร็จ',
            'bulk-notification' => 'ทำเครื่องหมายกิจกรรมว่าเสร็จแล้ว :count รายการ',

            'modal' => [
                'heading' => 'ทำเครื่องหมายกิจกรรมว่าเสร็จแล้ว',
                'submit'  => 'เสร็จแล้ว',
            ],

            'form' => [
                'feedback' => 'ความคิดเห็น',
            ],

            'notification' => [
                'title' => 'กิจกรรมเสร็จแล้ว',
                'body'  => 'ทำเครื่องหมายกิจกรรมว่าเสร็จและบันทึกไว้ในโอกาสการขายแล้ว',
            ],
        ],

        'snooze' => [
            'label'        => 'เลื่อน :days วัน',
            'notification' => 'เลื่อนกิจกรรมไปจนถึง :date',
        ],

        'reschedule' => [
            'label' => 'เลื่อนกำหนด',

            'modal' => [
                'heading' => 'เลื่อนกำหนดกิจกรรม',
            ],

            'form' => [
                'due-date'    => 'วันครบกำหนด',
                'summary'     => 'สรุป',
                'assigned-to' => 'มอบหมายให้',
            ],

            'notification' => [
                'title' => 'เลื่อนกำหนดกิจกรรมแล้ว',
                'body'  => 'อัปเดตกิจกรรมแล้ว',
            ],
        ],

        'cancel' => [
            'label'      => 'ยกเลิกกิจกรรม',
            'bulk-label' => 'ยกเลิกกิจกรรม',

            'modal' => [
                'heading' => 'ยกเลิกกิจกรรม',
            ],

            'notification' => [
                'title' => 'ยกเลิกกิจกรรมแล้ว',
                'body'  => 'นำกิจกรรมออกแล้ว',
            ],
        ],
    ],
];
