<?php

return [
    'navigation' => [
        'title' => 'รายงาน',
    ],
    'common' => [
        'from-to'                  => ':report - ตั้งแต่ :from ถึง :to',
        'expand-all'               => 'ขยายทั้งหมด',
        'collapse-all'             => 'ยุบทั้งหมด',
        'account'                  => 'บัญชี',
        'date'                     => 'วันที่',
        'communication'            => 'การสื่อสาร',
        'partner'                  => 'คู่ค้า',
        'journal'                  => 'สมุดรายวัน',
        'invoice-date'             => 'วันที่ใบแจ้งหนี้',
        'due-date'                 => 'วันครบกำหนด',
        'debit'                    => 'เดบิต',
        'credit'                   => 'เครดิต',
        'balance'                  => 'ยอดคงเหลือ',
        'total'                    => 'รวม',
        'opening-balance'          => 'ยอดยกมาต้นงวด',
        'initial-balance'          => 'ยอดยกมา',
        'end-balance'              => 'ยอดยกไป',
        'not-due'                  => 'ยังไม่ครบกำหนด',
        'no-data'                  => 'ไม่มีข้อมูล',
        'no-accounts-transactions' => 'ไม่มีบัญชีที่มีรายการเคลื่อนไหวในช่วงเวลานี้',
    ],
    'pages' => [
        'balance-sheet' => [
            'navigation' => [
                'title' => 'งบแสดงฐานะการเงิน',
                'group' => 'รายงานงบการเงิน',
            ],
            'actions' => [
                'export-excel' => 'ส่งออกเป็น Excel',
                'export-pdf'   => 'ส่งออกเป็น PDF',
            ],
            'filters' => [
                'date-range' => 'ช่วงวันที่',
                'journals'   => 'สมุดรายวัน',
            ],
            'content' => [
                'sections' => [
                    'assets' => [
                        'title'       => 'สินทรัพย์',
                        'total-label' => 'รวมสินทรัพย์',
                        'subsections' => [
                            'current-assets' => [
                                'title'       => 'สินทรัพย์หมุนเวียน',
                                'total-label' => 'รวมสินทรัพย์หมุนเวียน',
                            ],
                            'fixed-assets' => [
                                'title'       => 'สินทรัพย์ถาวร',
                                'total-label' => 'รวมสินทรัพย์ถาวร',
                            ],
                            'non-current-assets' => [
                                'title'       => 'สินทรัพย์ไม่หมุนเวียน',
                                'total-label' => 'รวมสินทรัพย์ไม่หมุนเวียน',
                            ],
                        ],
                    ],
                    'liabilities' => [
                        'title'       => 'หนี้สิน',
                        'total-label' => 'รวมหนี้สิน',
                        'subsections' => [
                            'current-liabilities' => [
                                'title'       => 'หนี้สินหมุนเวียน',
                                'total-label' => 'รวมหนี้สินหมุนเวียน',
                            ],
                            'non-current-liabilities' => [
                                'title'       => 'หนี้สินไม่หมุนเวียน',
                                'total-label' => 'รวมหนี้สินไม่หมุนเวียน',
                            ],
                        ],
                    ],
                    'equity' => [
                        'title'       => 'ส่วนของเจ้าของ',
                        'total-label' => 'รวมส่วนของเจ้าของ',
                        'subsections' => [
                            'unallocated-earnings' => [
                                'title'          => 'กำไรที่ยังไม่ได้จัดสรร',
                                'current-year'   => 'กำไรที่ยังไม่ได้จัดสรรปีปัจจุบัน',
                                'previous-years' => 'กำไรที่ยังไม่ได้จัดสรรปีก่อน ๆ',
                                'total-label'    => 'รวมกำไรที่ยังไม่ได้จัดสรร',
                            ],
                            'retained-earnings' => [
                                'title'       => 'กำไรสะสม',
                                'total-label' => 'รวมกำไรสะสม',
                            ],
                        ],
                    ],
                ],
                'grand-total-label' => 'หนี้สิน + ส่วนของเจ้าของ',
            ],
        ],
        'profit-loss' => [
            'navigation' => [
                'title' => 'งบกำไรขาดทุน',
                'group' => 'รายงานงบการเงิน',
            ],
            'actions' => [
                'export-excel' => 'ส่งออกเป็น Excel',
                'export-pdf'   => 'ส่งออกเป็น PDF',
            ],
            'filters' => [
                'date-range' => 'ช่วงวันที่',
                'journals'   => 'สมุดรายวัน',
            ],
            'content' => [
                'sections' => [
                    'revenue' => [
                        'title'         => 'รายได้',
                        'total-label'   => 'รวมรายได้',
                        'empty-message' => 'ไม่มีบัญชีรายได้ที่มีรายการเคลื่อนไหวในช่วงเวลานี้',
                    ],
                    'expenses' => [
                        'title'         => 'ค่าใช้จ่าย',
                        'total-label'   => 'รวมค่าใช้จ่าย',
                        'empty-message' => 'ไม่มีบัญชีค่าใช้จ่ายที่มีรายการเคลื่อนไหวในช่วงเวลานี้',
                    ],
                ],
            ],
        ],
        'general-ledger' => [
            'navigation' => [
                'title' => 'บัญชีแยกประเภททั่วไป',
                'group' => 'รายงานตรวจสอบ',
            ],
            'actions' => [
                'export-excel' => 'ส่งออกเป็น Excel',
                'export-pdf'   => 'ส่งออกเป็น PDF',
            ],
            'filters' => [
                'date-range' => 'ช่วงวันที่',
                'journals'   => 'สมุดรายวัน',
            ],
        ],
        'trial-balance' => [
            'navigation' => [
                'title' => 'งบทดลอง',
                'group' => 'รายงานตรวจสอบ',
            ],
            'actions' => [
                'export-excel' => 'ส่งออกเป็น Excel',
                'export-pdf'   => 'ส่งออกเป็น PDF',
            ],
            'filters' => [
                'date-range' => 'ช่วงวันที่',
                'journals'   => 'สมุดรายวัน',
            ],
        ],
        'partner-ledger' => [
            'navigation' => [
                'title' => 'บัญชีแยกประเภทคู่ค้า',
                'group' => 'รายงานคู่ค้า',
            ],
            'actions' => [
                'export-excel' => 'ส่งออก Excel',
                'export-pdf'   => 'ส่งออก PDF',
            ],
            'filters' => [
                'date-range' => 'ช่วงวันที่',
                'partners'   => 'คู่ค้า',
                'journals'   => 'สมุดรายวัน',
            ],
        ],
        'aged-receivable' => [
            'navigation' => [
                'title' => 'ลูกหนี้ตามอายุหนี้',
                'group' => 'รายงานคู่ค้า',
            ],
            'actions' => [
                'export-excel' => 'ส่งออก Excel',
                'export-pdf'   => 'ส่งออก PDF',
            ],
            'filters' => [
                'as-of'         => 'ณ วันที่',
                'based-on'      => 'อ้างอิงจาก',
                'period-length' => 'ระยะเวลาแต่ละช่วง (วัน)',
                'journals'      => 'สมุดรายวัน',
                'partners'      => 'คู่ค้า',
                'entries'       => 'รายการ',
                'options'       => [
                    'due-date'       => 'วันครบกำหนด',
                    'invoice-date'   => 'วันที่ใบแจ้งหนี้',
                    'days-30'        => '30 วัน',
                    'days-60'        => '60 วัน',
                    'days-90'        => '90 วัน',
                    'posted-entries' => 'รายการที่ผ่านแล้ว',
                    'all-entries'    => 'รายการทั้งหมด',
                ],
            ],
        ],
        'aged-payable' => [
            'navigation' => [
                'title' => 'เจ้าหนี้ตามอายุหนี้',
                'group' => 'รายงานคู่ค้า',
            ],
            'actions' => [
                'export-excel' => 'ส่งออก Excel',
                'export-pdf'   => 'ส่งออก PDF',
            ],
            'filters' => [
                'as-of'         => 'ณ วันที่',
                'based-on'      => 'อ้างอิงจาก',
                'period-length' => 'ระยะเวลาแต่ละช่วง (วัน)',
                'journals'      => 'สมุดรายวัน',
                'partners'      => 'คู่ค้า',
                'entries'       => 'รายการ',
                'options'       => [
                    'due-date'       => 'วันครบกำหนด',
                    'invoice-date'   => 'วันที่ใบแจ้งหนี้',
                    'days-30'        => '30 วัน',
                    'days-60'        => '60 วัน',
                    'days-90'        => '90 วัน',
                    'posted-entries' => 'รายการที่ผ่านแล้ว',
                    'all-entries'    => 'รายการทั้งหมด',
                ],
            ],
        ],
    ],
];
