<?php

return [
    'none' => 'ไม่มี',

    'chart' => [
        'heading' => ':measure ตาม :group',
    ],

    'filters' => [
        'measure'        => 'หน่วยวัด',
        'split-by'       => 'แยกตาม',
        'no-split'       => 'ไม่แยก',
        'salespeople'    => 'พนักงานขาย',
        'teams'          => 'ทีมขาย',
    ],

    'dimensions' => [
        'salesperson'         => 'พนักงานขาย',
        'team'                => 'ทีมขาย',
        'stage'               => 'ขั้นตอน',
        'type'                => 'ประเภท',
        'city'                => 'เมือง',
        'country'             => 'ประเทศ',
        'lost-reason'         => 'เหตุผลที่แพ้',
        'company'             => 'บริษัท',
        'campaign'            => 'แคมเปญ',
        'medium'              => 'ปานกลาง',
        'source'              => 'แหล่งที่มา',
        'expected-closing'    => 'วันที่คาดว่าจะปิด',
        'created-at'          => 'วันที่สร้าง',
        'converted-at'        => 'วันที่แปลง',
        'closed-at'           => 'วันที่ปิด',
        'activity-type'       => 'ประเภทกิจกรรม',
        'assigned-to'         => 'มอบหมายให้',
        'done-by'             => 'ทำโดย',
        'done-at'             => 'วันที่เสร็จสิ้น',
        'activity-created-at' => 'วันที่สร้างกิจกรรม',
    ],

    'measures' => [
        'count'            => 'จำนวน',
        'expected-revenue' => 'รายได้ที่คาดหวัง',
        'prorated-revenue' => 'รายได้ตามสัดส่วน',
        'probability'      => 'ความน่าจะเป็น (เฉลี่ย)',
        'days-to-assign'   => 'จำนวนวันจนถึงมอบหมาย',
        'days-to-close'    => 'จำนวนวันจนถึงปิด',
    ],

    'presets' => [
        'ongoing'           => 'กำลังดำเนินการ',
        'won'               => 'ชนะ',
        'lost'              => 'แพ้',
    ],

    'table' => [
        'lost' => 'แพ้',

        'columns' => [
            'name'             => 'ชื่อ',
            'type'             => 'ประเภท',
            'customer'         => 'ลูกค้า',
            'stage'            => 'ขั้นตอน',
            'expected-revenue' => 'รายได้ที่คาดหวัง',
            'probability'      => 'ความน่าจะเป็น',
            'salesperson'      => 'พนักงานขาย',
            'team'             => 'ทีมขาย',
            'expected-closing' => 'วันที่คาดว่าจะปิด',
            'created-at'       => 'สร้างเมื่อ',
            'closed-at'        => 'ปิดเมื่อ',
            'lost-reason'      => 'เหตุผลที่แพ้',
            'country'          => 'ประเทศ',
            'city'             => 'เมือง',
            'done-at'          => 'ทำเมื่อ',
            'activity-type'    => 'ประเภทกิจกรรม',
            'summary'          => 'สรุป',
            'lead'             => 'ลีด / โอกาสการขาย',
            'assigned-to'      => 'มอบหมายให้',
            'done-by'          => 'ทำโดย',
            'due-date'         => 'วันครบกำหนด',
        ],
    ],

    'rules' => [
        'active' => [
            'label'         => 'ใช้งานอยู่',
            'is-active'     => 'ใช้งานอยู่',
            'is-not-active' => 'ไม่ใช้งาน',
            'not-active'    => 'ไม่ใช้งาน',
        ],

        'won' => [
            'label'      => 'ชนะ',
            'is-won'     => 'ชนะ',
            'is-not-won' => 'ไม่ชนะ',
            'not-won'    => 'ไม่ชนะ',
        ],

        'lost' => [
            'label'       => 'แพ้',
            'is-lost'     => 'แพ้',
            'is-not-lost' => 'ไม่แพ้',
            'not-lost'    => 'ไม่แพ้',
        ],
    ],

    'tabs' => [
        'leads'         => 'ลีด',
        'opportunities' => 'โอกาสการขาย',
        'mine'          => 'ของฉัน',
        'won'           => 'ชนะ',
        'lost'          => 'แพ้',
        'my-activities' => 'กิจกรรมของฉัน',
        'this-month'    => 'เดือนนี้',
    ],
];
