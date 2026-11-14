<?php

return [
    'title' => 'ทีมขาย',

    'navigation' => [
        'title' => 'ทีมขาย',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'     => 'ทีมขาย',
                'status'   => 'สถานะ',
                'fieldset' => [
                    'team-details' => [
                        'title'  => 'รายละเอียดทีม',
                        'fields' => [
                            'team-leader'            => 'หัวหน้าทีม',
                            'company'                => 'บริษัท',
                            'invoiced-target'        => 'เป้าหมายการออกใบแจ้งหนี้',
                            'invoiced-target-suffix' => '/ เดือน',
                            'color'                  => 'สี',
                            'members'                => 'สมาชิก',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'company'         => 'บริษัท',
            'team-leader'     => 'หัวหน้าทีม',
            'name'            => 'ชื่อ',
            'status'          => 'สถานะ',
            'invoiced-target' => 'เป้าหมายการออกใบแจ้งหนี้',
            'color'           => 'สี',
            'created-by'      => 'สร้างโดย',
            'created-at'      => 'สร้างเมื่อ',
            'updated-at'      => 'อัปเดตเมื่อ',
        ],

        'filters' => [
            'name'        => 'ชื่อ',
            'team-leader' => 'หัวหน้าทีม',
            'company'     => 'บริษัท',
            'created-by'  => 'สร้างโดย',
            'updated-at'  => 'อัปเดตเมื่อ',
            'created-at'  => 'สร้างเมื่อ',
        ],

        'groups' => [
            'name'        => 'ชื่อ',
            'company'     => ' บริษัท',
            'team-leader' => 'หัวหน้าทีม',
            'created-at'  => 'สร้างเมื่อ',
            'updated-at'  => 'อัปเดตเมื่อ',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนทีมขายแล้ว',
                    'body'  => 'กู้คืนทีมขายเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบทีมขายแล้ว',
                    'body'  => 'ลบทีมขายเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบทีมขายถาวรแล้ว',
                    'body'  => 'ลบทีมขายถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'กู้คืนทีมขายแล้ว',
                    'body'  => 'กู้คืนทีมขายเรียบร้อยแล้ว',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'ลบทีมขายแล้ว',
                    'body'  => 'ลบทีมขายเรียบร้อยแล้ว',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'ลบทีมขายถาวรแล้ว',
                    'body'  => 'ลบทีมขายถาวรเรียบร้อยแล้ว',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'สร้างทีมขายแล้ว',
                    'body'  => 'สร้างทีมขายเรียบร้อยแล้ว',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'     => 'ทีมขาย',
                'status'   => 'สถานะ',
                'fieldset' => [
                    'team-details' => [
                        'title'   => 'รายละเอียดทีม',
                        'entries' => [
                            'team-leader'            => 'หัวหน้าทีม',
                            'company'                => 'บริษัท',
                            'invoiced-target'        => 'เป้าหมายการออกใบแจ้งหนี้',
                            'invoiced-target-suffix' => '/ เดือน',
                            'color'                  => 'สี',
                            'members'                => 'สมาชิก',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
