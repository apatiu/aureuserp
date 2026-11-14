<?php

return [
    'mark-lost' => [
        'label'        => 'ทำเครื่องหมายแพ้',
        'notification' => 'ทำเครื่องหมายระเบียนว่าแพ้ :count รายการ',
    ],

    'send-email' => [
        'label'        => 'ส่งอีเมล',
        'short-label'  => 'อีเมล',
        'submit'       => 'ส่ง',

        'form' => [
            'recipient' => 'ถึง',
            'subject'   => 'หัวเรื่อง',
            'body'      => 'ข้อความ',
        ],

        'sent'         => 'ส่งอีเมลถึง :email แล้ว',
        'failed'       => 'ส่งอีเมลไม่สำเร็จ',
        'notification' => 'ส่งอีเมลแล้ว :sent ฉบับ ข้าม :skipped ระเบียน (ไม่มีอีเมลหรือไม่มีสิทธิ์)',
    ],

    'send-sms' => [
        'label'        => 'ส่ง SMS',
        'short-label'  => 'SMS',
        'submit'       => 'ส่ง SMS',

        'form' => [
            'recipient' => 'ผู้รับ',
            'message'   => 'ข้อความ',
        ],

        'log-subject'  => 'SMS ถึง :number',
        'sent'         => 'ส่ง SMS ถึง :number แล้ว',
        'failed'       => 'ส่ง SMS ไม่สำเร็จ',
        'notification' => 'ส่ง SMS แล้ว :sent รายการ ข้าม :skipped ระเบียน (ไม่มีเบอร์ที่ถูกต้องหรือไม่มีสิทธิ์)',
    ],
];
