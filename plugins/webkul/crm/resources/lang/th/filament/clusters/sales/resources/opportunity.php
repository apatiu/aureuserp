<?php

return [
    'model-label'        => 'โอกาสการขาย',
    'plural-model-label' => 'โอกาสการขาย',

    'navigation' => [
        'title' => 'ไปป์ไลน์ของฉัน',
    ],

    'global-search' => [
        'customer' => 'ลูกค้า',
        'stage'    => 'ขั้นตอน',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'โอกาสการขาย',

                'fields' => [
                    'name'             => 'โอกาสการขาย',
                    'name-placeholder' => 'เช่น ราคาสินค้า',
                    'expected-revenue' => 'รายได้ที่คาดหวัง',
                    'probability'      => 'ความน่าจะเป็น',
                    'customer'         => 'ลูกค้า',
                    'email'            => 'อีเมล',
                    'phone'            => 'โทรศัพท์',
                ],
            ],

            'notes' => [
                'title' => 'บันทึกภายใน',
            ],

            'sales' => [
                'title' => 'การขาย',

                'fields' => [
                    'salesperson'      => 'พนักงานขาย',
                    'team'             => 'ทีมขาย',
                    'company'          => 'บริษัท',
                    'expected-closing' => 'วันที่คาดว่าจะปิด',
                    'priority'         => 'ลำดับความสำคัญ',
                    'tags'             => 'แท็ก',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'won' => [
                'title' => 'ชนะ',
            ],

            'lost' => [
                'title' => 'แพ้',

                'entries' => [
                    'lost-reason' => 'เหตุผลที่แพ้',
                    'feedback'    => 'บันทึกการปิด',
                ],
            ],

            'general' => [
                'title' => 'โอกาสการขาย',

                'entries' => [
                    'expected-revenue' => 'รายได้ที่คาดหวัง',
                    'probability'      => 'ความน่าจะเป็น',
                    'customer'         => 'ลูกค้า',
                    'email'            => 'อีเมล',
                    'phone'            => 'โทรศัพท์',
                ],
            ],

            'notes' => [
                'title' => 'บันทึกภายใน',
            ],

            'sales' => [
                'title' => 'การขาย',

                'entries' => [
                    'salesperson'      => 'พนักงานขาย',
                    'team'             => 'ทีมขาย',
                    'company'          => 'บริษัท',
                    'expected-closing' => 'วันที่คาดว่าจะปิด',
                    'priority'         => 'ลำดับความสำคัญ',
                    'tags'             => 'แท็ก',
                    'closed-at'        => 'ปิดเมื่อ',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'             => 'โอกาสการขาย',
            'customer'         => 'ลูกค้า',
            'stage'            => 'ขั้นตอน',
            'expected-revenue' => 'รายได้ที่คาดหวัง',
            'probability'      => 'ความน่าจะเป็น',
            'priority'         => 'ลำดับความสำคัญ',
            'salesperson'      => 'พนักงานขาย',
            'team'             => 'ทีมขาย',
            'expected-closing' => 'วันที่คาดว่าจะปิด',
            'tags'             => 'แท็ก',
            'email'            => 'อีเมล',
            'phone'            => 'โทรศัพท์',
            'medium'           => 'ปานกลาง',
            'lost-reason'      => 'เหตุผลที่แพ้',
            'created-at'       => 'สร้างเมื่อ',
        ],

        'summaries' => [
            'total' => 'รวม',
        ],

        'groups' => [
            'stage'            => 'ขั้นตอน',
            'team'             => 'ทีมขาย',
            'salesperson'      => 'พนักงานขาย',
            'priority'         => 'ลำดับความสำคัญ',
            'expected-closing' => 'วันที่คาดว่าจะปิด',
        ],

        'actions' => [
            'schedule-activity' => [
                'label' => 'กำหนดกิจกรรม',
            ],

            'restore' => [
                'label' => 'กู้คืน',

                'notification' => [
                    'title' => 'กู้คืนโอกาสการขายแล้ว',
                    'body'  => 'กู้คืนโอกาสการขายกลับไปที่ไปป์ไลน์แล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบโอกาสการขายแล้ว',
                    'body'  => 'ลบโอกาสการขายถาวรแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนโอกาสการขายแล้ว',
                    'body'  => 'กู้คืนโอกาสการขายกลับไปที่ไปป์ไลน์แล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบโอกาสการขายแล้ว',
                    'body'  => 'ลบโอกาสการขายถาวรแล้ว',
                ],
            ],
        ],
    ],

    'actions' => [
        'new-quotation' => [
            'label'             => 'ใบเสนอราคาใหม่',
            'modal-heading'     => 'ใบเสนอราคาใหม่',
            'modal-description' => 'โอกาสการขายนี้ยังไม่มีลูกค้า เลือกลูกค้าของใบเสนอราคา',
            'submit'            => 'ดำเนินการต่อ',
            'subheading'        => 'จากโอกาสการขาย: :name',
        ],

        'won' => [
            'label' => 'ชนะ',

            'modal' => [
                'heading'     => 'ทำเครื่องหมายว่าชนะ',
                'description' => 'โอกาสการขายจะย้ายไปยังขั้นตอนชนะด้วยความน่าจะเป็น 100%',
            ],

            'notification' => [
                'success' => [
                    'title' => 'โอกาสการขายชนะ',
                    'body'  => 'ทำเครื่องหมายโอกาสการขายว่าชนะแล้ว',
                ],

                'no-won-stage' => [
                    'title' => 'ไม่มีขั้นตอนชนะ',
                    'body'  => 'ทำเครื่องหมายขั้นตอนเป็น "เป็นขั้นตอนชนะ?" ที่ CRM → การกำหนดค่า → ขั้นตอน ก่อน',
                ],
            ],
        ],

        'lost' => [
            'label' => 'แพ้',

            'modal' => [
                'heading' => 'ทำเครื่องหมายว่าแพ้',
                'submit'  => 'ทำเครื่องหมายว่าแพ้',
            ],

            'form' => [
                'lost-reason' => 'เหตุผลที่แพ้',
                'feedback'    => 'บันทึกการปิด',
            ],

            'notification' => [
                'title' => 'โอกาสการขายแพ้',
                'body'  => 'ทำเครื่องหมายโอกาสการขายว่าแพ้และย้ายไปที่มุมมอง แพ้ แล้ว',
            ],
        ],
    ],

    'quotations' => [
        'title' => 'ใบเสนอราคา',

        'columns' => [
            'number'      => 'หมายเลข',
            'date'        => 'วันที่',
            'customer'    => 'ลูกค้า',
            'salesperson' => 'พนักงานขาย',
            'total'       => 'รวม',
            'status'      => 'สถานะ',
        ],

        'empty' => [
            'heading'     => 'ยังไม่มีใบเสนอราคา',
            'description' => 'ใช้ "ใบเสนอราคาใหม่" เพื่อสร้างใบเสนอราคาจากโอกาสการขายนี้',
        ],
    ],
];
