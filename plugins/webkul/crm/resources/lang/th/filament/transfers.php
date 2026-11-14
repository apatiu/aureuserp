<?php

return [
    'actions' => [
        'export' => [
            'label' => 'ส่งออก',
        ],

        'import' => [
            'label' => 'นำเข้า',
        ],
    ],

    'columns' => [
        'id'                 => 'ID',
        'name'               => 'ชื่อ',
        'contact-name'       => 'ชื่อผู้ติดต่อ',
        'company-name'       => 'ชื่อบริษัท',
        'job-title'          => 'ตำแหน่งงาน',
        'email'              => 'อีเมล',
        'phone'              => 'โทรศัพท์',
        'mobile'             => 'มือถือ',
        'website'            => 'เว็บไซต์',
        'street1'            => 'ถนน',
        'street2'            => 'ถนน 2',
        'city'               => 'เมือง',
        'zip'                => 'รหัสไปรษณีย์',
        'country'            => 'ประเทศ',
        'stage'              => 'ขั้นตอน',
        'salesperson'        => 'พนักงานขาย',
        'team'               => 'ทีมขาย',
        'priority'           => 'ลำดับความสำคัญ',
        'probability'        => 'ความน่าจะเป็น',
        'tags'               => 'แท็ก',
        'source'             => 'แหล่งที่มา',
        'medium'             => 'ปานกลาง',
        'campaign'           => 'แคมเปญ',
        'notes'              => 'บันทึก',
        'lost-reason'        => 'เหตุผลที่แพ้',
        'created-at'         => 'สร้างเมื่อ',
        'customer'           => 'ลูกค้า',
        'expected-revenue'   => 'รายได้ที่คาดหวัง',
        'prorated-revenue'   => 'รายได้ตามสัดส่วน',
        'expected-closing'   => 'วันที่คาดว่าจะปิด',
        'number'             => 'หมายเลข',
        'order-date'         => 'วันที่สั่งซื้อ',
        'expiration'         => 'วันหมดอายุ',
        'delivery-date'      => 'วันที่ส่งมอบ',
        'customer-reference' => 'เลขอ้างอิงลูกค้า',
        'source-document'    => 'เอกสารต้นทาง',
        'untaxed-amount'     => 'ยอดก่อนภาษี',
        'taxes'              => 'ภาษี',
        'total'              => 'รวม',
        'currency'           => 'สกุลเงิน',
        'status'             => 'สถานะ',
        'invoice-status'     => 'สถานะใบแจ้งหนี้',
    ],

    'notifications' => [
        'export' => [
            'completed' => 'ไฟล์ส่งออกพร้อมแล้ว: ส่งออก :count แถว',
            'failed'    => 'ส่งออกไม่สำเร็จ :count แถว',
        ],

        'import' => [
            'completed' => 'นำเข้าเสร็จแล้ว: นำเข้า :count แถว',
            'failed'    => 'ไม่สำเร็จ :count แถว ดาวน์โหลดจากการแจ้งเตือนนี้เพื่อดูสาเหตุ',
        ],
    ],

    'errors' => [
        'record-not-found' => 'ไม่พบระเบียน ID :id ในบริษัทของคุณ',
        'cannot-update'    => 'คุณไม่มีสิทธิ์อัปเดตระเบียน :id',
        'cannot-create'    => 'คุณไม่มีสิทธิ์สร้างระเบียน',
        'not-found'        => 'ไม่พบ :field ":value"',
    ],
];
