<?php

return [
    'title' => 'เข้า/ออก',

    'table' => [
        'columns' => [
            'date'                 => 'วันที่',
            'reference'            => 'อ้างอิง',
            'product'              => 'สินค้า',
            'package'              => 'บรรจุภัณฑ์',
            'lot'                  => 'หมายเลขล็อต / ซีเรียล',
            'source-location'      => 'ตำแหน่งต้นทาง',
            'destination-location' => 'ตำแหน่งปลายทาง',
            'quantity'             => 'จำนวน',
            'state'                => 'สถานะ',
            'done-by'              => 'ทำโดย',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'ลบรายการแล้ว',
                    'body'  => 'ลบรายการเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],
];
