<?php

return [
    'columns' => [
        'number'           => 'เลขที่',
        'date'             => 'วันที่',
        'account'          => 'บัญชี',
        'partner'          => 'คู่ค้า',
        'label'            => 'ป้ายกำกับ',
        'reference'        => 'อ้างอิง',
        'journal'          => 'สมุดรายวัน',
        'debit'            => 'เดบิต',
        'credit'           => 'เครดิต',
        'balance'          => 'ยอดคงเหลือ',
        'currency'         => 'สกุลเงิน',
        'company'          => 'บริษัท',
        'status'           => 'สถานะ',
        'amount-currency'  => 'จำนวนเงินตามสกุลเงิน',
        'amount-residual'  => 'ยอดคงค้าง',
        'reconciled'       => 'กระทบยอดแล้ว',
        'due-date'         => 'วันครบกำหนด',
    ],

    'values' => [
        'yes' => 'ใช่',
        'no'  => 'ไม่',
    ],

    'notification' => [
        'completed' => 'ส่งออกรายการย่อยในสมุดรายวันเสร็จแล้ว ส่งออก :count แถว',
        'failed'    => 'ส่งออกไม่สำเร็จ :count แถว',
    ],
];
