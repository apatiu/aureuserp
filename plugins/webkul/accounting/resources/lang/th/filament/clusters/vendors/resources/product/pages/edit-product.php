<?php

return [
    'notification' => [
        'title' => 'อัปเดตสินค้าแล้ว',
        'body'  => 'อัปเดตสินค้าเรียบร้อยแล้ว',
    ],

    'header-actions' => [
        'update-quantity' => [
            'label'                     => 'อัปเดตจำนวน',
            'modal-heading'             => 'อัปเดตจำนวนสินค้า',
            'modal-submit-action-label' => 'อัปเดต',

            'form' => [
                'fields' => [
                    'on-hand-qty' => 'จำนวนคงคลัง',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'ลบสินค้าแล้ว',
                'body'  => 'ลบสินค้าเรียบร้อยแล้ว',
            ],
        ],
    ],
];
