<?php

return [
    'columns' => [
        'invoice-date' => 'วันที่ใบแจ้งหนี้',
        'date'         => 'วันที่',
        'number'       => 'เลขที่',
        'partner'      => 'คู่ค้า',
        'reference'    => 'อ้างอิง',
        'journal'      => 'สมุดรายวัน',
        'company'      => 'บริษัท',
        'total'        => 'รวม',
        'state'        => 'สถานะ',
        'checked'      => 'ตรวจสอบแล้ว',
    ],

    'values' => [
        'yes' => 'ใช่',
        'no'  => 'ไม่',
    ],

    'notification' => [
        'completed' => 'ส่งออกรายการบันทึกบัญชีเสร็จแล้ว ส่งออก :count แถว',
        'failed'    => 'ส่งออกไม่สำเร็จ :count แถว',
    ],
];
