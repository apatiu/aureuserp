<?php

return [
    'model-label'        => 'ลีด',
    'plural-model-label' => 'ลีด',

    'navigation' => [
        'title' => 'ลีด',
    ],

    'global-search' => [
        'contact' => 'ผู้ติดต่อ',
        'company' => 'บริษัท',
    ],

    'form' => [
        'sections' => [
            'general' => 'ลีด',
            'sales'   => 'การขาย',
        ],

        'tabs' => [
            'notes'      => 'บันทึก',
        ],

        'fieldsets' => [
            'marketing' => 'การตลาด',
            'analysis'  => 'วิเคราะห์',
        ],

        'fields' => [
            'name-placeholder'    => 'เช่น ราคาสินค้า',
            'probability'         => 'ความน่าจะเป็น',
            'company-name'        => 'ชื่อบริษัท',
            'address'             => 'ที่อยู่',
            'street1'             => 'ถนน...',
            'street2'             => 'ถนน 2...',
            'city'                => 'เมือง',
            'zip'                 => 'รหัสไปรษณีย์',
            'state'               => 'จังหวัด/รัฐ',
            'country'             => 'ประเทศ',
            'website'             => 'เว็บไซต์',
            'website-placeholder' => 'เช่น https://www.example.com',
            'salesperson'         => 'พนักงานขาย',
            'team'                => 'ทีมขาย',
            'contact-name'        => 'ชื่อผู้ติดต่อ',
            'email'               => 'อีเมล',
            'job-position'        => 'ตำแหน่งงาน',
            'phone'               => 'โทรศัพท์',
            'priority'            => 'ลำดับความสำคัญ',
            'tags'                => 'แท็ก',
            'company'             => 'บริษัท',
            'campaign'            => 'แคมเปญ',
            'medium'              => 'ปานกลาง',
            'source'              => 'แหล่งที่มา',
            'referred-by'         => 'แนะนำโดย',
            'assignment-date'     => 'วันที่มอบหมาย',
            'closed-date'         => 'วันที่ปิด',
        ],
    ],

    'infolist' => [
        'sections' => [
            'lost' => 'แพ้',
        ],

        'entries' => [
            'lost-reason'  => 'เหตุผลที่แพ้',
            'closing-note' => 'บันทึกการปิด',
        ],
    ],

    'table' => [
        'columns' => [
            'name'         => 'ลีด',
            'contact-name' => 'ชื่อผู้ติดต่อ',
            'company-name' => 'ชื่อบริษัท',
            'email'        => 'อีเมล',
            'phone'        => 'โทรศัพท์',
            'city'         => 'เมือง',
            'country'      => 'ประเทศ',
            'salesperson'  => 'พนักงานขาย',
            'team'         => 'ทีมขาย',
            'priority'     => 'ลำดับความสำคัญ',
            'tags'         => 'แท็ก',
            'source'       => 'แหล่งที่มา',
            'medium'       => 'ปานกลาง',
            'lost-reason'  => 'เหตุผลที่แพ้',
            'created-at'   => 'สร้างเมื่อ',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'ลีดใหม่',
        ],

        'open' => [
            'label' => 'เปิด',
        ],

        'schedule-activity' => [
            'label' => 'กำหนดกิจกรรม',
        ],

        'convert' => [
            'label' => 'แปลงเป็นโอกาสการขาย',

            'modal' => [
                'heading' => 'แปลงเป็นโอกาสการขาย',
                'submit'  => 'สร้างโอกาสการขาย',
            ],

            'form' => [
                'action'     => 'การดำเนินการแปลง',
                'duplicates' => 'ลีดและโอกาสการขายที่คล้ายกันที่จะรวม',

                'customer'          => 'ลูกค้า',
                'existing-customer' => 'ลูกค้าเดิม',
                'salesperson'       => 'พนักงานขาย',
                'team'              => 'ทีมขาย',
            ],

            'notification' => [
                'title' => 'แปลงเป็นโอกาสการขายแล้ว',
                'body'  => '":name" เป็นโอกาสการขายในไปป์ไลน์แล้ว',

                'invalid' => [
                    'title' => 'ตัวเลือกไม่ถูกต้อง',
                    'body'  => 'ลูกค้า พนักงานขาย หรือทีมขายที่เลือกไม่ได้อยู่ในบริษัทของลีดนี้',
                ],
            ],
        ],

        'mass-convert' => [
            'label' => 'แปลงเป็นโอกาสการขาย',

            'modal' => [
                'heading' => 'แปลงเป็นโอกาสการขาย',
                'submit'  => 'แปลง',
            ],

            'form' => [
                'deduplicate'             => 'ตัดรายการซ้ำ',
                'deduplicate-helper'      => 'รวมลีดแต่ละรายการเข้ากับลีดและโอกาสการขายที่คล้ายกัน (อีเมล เบอร์โทร หรือลูกค้าเดียวกัน)',
                'salespeople'             => 'พนักงานขาย',
                'salespeople-helper'      => 'ลีดที่ไม่มีพนักงานขายจะถูกแบ่งให้สมาชิกตามลำดับ',
                'force-assignment'        => 'บังคับมอบหมาย',
                'force-assignment-helper' => 'มอบหมายลีดที่มีพนักงานขายอยู่แล้วใหม่ด้วย',

                'customer-options' => [
                    'create' => 'เชื่อมโยงกับลูกค้าเดิมหรือสร้างใหม่',
                    'link'   => 'เชื่อมโยงกับลูกค้าเดิม',
                ],
            ],

            'notification' => [
                'title' => 'แปลงลีดแล้ว',
                'body'  => 'แปลงลีด :count รายการ รวมระเบียนที่คล้ายกัน :merged รายการ ข้าม :skipped รายการ',
            ],
        ],
        'lost' => [
            'notification' => [
                'title' => 'ลีดแพ้',
                'body'  => 'ทำเครื่องหมายลีดว่าแพ้และย้ายไปที่มุมมอง แพ้ แล้ว',
            ],
        ],

        'restore' => [
            'notification' => [
                'title' => 'กู้คืนลีดแล้ว',
                'body'  => 'กู้คืนลีดแล้ว',
            ],
        ],

        'force-delete' => [
            'notification' => [
                'title' => 'ลบลีดแล้ว',
                'body'  => 'ลบลีดถาวรแล้ว',
            ],
        ],
    ],
];
