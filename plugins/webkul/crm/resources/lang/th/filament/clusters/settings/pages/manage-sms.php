<?php

return [
    'title' => 'SMS Gateway',

    'navigation' => [
        'group' => 'SMS',
    ],

    'actions' => [
        'test' => [
            'label'   => 'ส่ง SMS ทดสอบ',
            'number'  => 'เบอร์มือถือ',
            'message' => 'SMS gateway ของคุณใช้งานได้',
            'sent'    => 'ส่ง SMS ทดสอบถึง :number แล้ว',
            'failed'  => 'ส่ง SMS ทดสอบไม่สำเร็จ',
        ],
    ],

    'form' => [
        'active'           => 'ใช้รายละเอียด gateway เหล่านี้',
        'active-helper'    => 'SMS ที่ส่งจาก ERP (เช่น "ส่ง SMS" ใน CRM) จะส่งผ่านบัญชี MSG91 นี้ เมื่อปิดไว้จะใช้ข้อมูล MSG91 จากการตั้งค่าของแอปพลิเคชัน',
        'auth-key'         => 'Auth Key',
        'auth-key-helper'  => 'เว้นว่างไว้เพื่อใช้คีย์เดิม',
        'sender-id'        => 'Sender ID',
        'sender-id-helper' => 'สูงสุด 11 ตัวอักษร ตามที่ผู้ให้บริการอนุมัติ',
        'route'            => 'เส้นทาง',

        'routes' => [
            'transactional' => 'ธุรกรรม',
            'promotional'   => 'โปรโมชัน',
        ],
    ],
];
