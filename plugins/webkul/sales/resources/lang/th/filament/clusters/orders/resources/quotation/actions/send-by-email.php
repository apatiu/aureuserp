<?php

return [
    'title'        => 'ส่งทางอีเมล',
    'resend-title' => 'ส่งอีเมลอีกครั้ง',
    'quotation'    => 'ใบเสนอราคา',
    'quotations'   => 'ใบเสนอราคา',

    'modal' => [
        'heading' => 'ส่งใบเสนอราคาทางอีเมล',
    ],

    'form' => [
        'fields' => [
            'partners'    => 'คู่ค้า',
            'subject'     => 'หัวเรื่อง',
            'description' => 'รายละเอียด',
            'attachment'  => 'ไฟล์แนบ',
        ],
    ],

    'actions' => [
        'notification' => [
            'email' => [
                'no_recipients' => [
                    'title' => 'ไม่ได้เลือกผู้รับ',
                    'body'  => 'โปรดเลือกคู่ค้าอย่างน้อยหนึ่งรายเพื่อส่งใบเสนอราคา',
                ],

                'all_success' => [
                    'title' => 'ส่งใบเสนอราคาแล้ว!',
                    'body'  => 'ส่ง :plural ของคุณให้เรียบร้อยแล้ว: :recipients',
                ],

                'all_failed' => [
                    'title' => 'ส่งใบเสนอราคาไม่ได้',
                    'body'  => 'พบปัญหาในการส่งใบเสนอราคาของคุณ: :failures',
                ],

                'partial_success' => [
                    'title'       => 'ส่งใบเสนอราคาบางส่วน',
                    'sent_part'   => 'ส่งมอบให้เรียบร้อยแล้ว: :recipients',
                    'failed_part' => 'ส่งมอบให้ไม่สำเร็จ: :failures',
                ],

                'failure_item' => ':partner (:reason)',
            ],
        ],
    ],

];
