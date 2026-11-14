<?php

return [
    'model-label'        => 'กฎผู้เข้าชมเป็นลีด',
    'plural-model-label' => 'กฎผู้เข้าชมเป็นลีด',

    'navigation' => [
        'title' => 'กฎผู้เข้าชมเป็นลีด',
        'group' => 'การสร้างลีด',
    ],

    'form' => [
        'name'                     => 'ชื่อกฎ',
        'name-placeholder'         => 'เช่น ผู้เข้าชมจากสหรัฐฯ',
        'active'                   => 'ใช้งานอยู่',
        'countries'                => 'ประเทศ',
        'countries-helper'         => 'หาจากที่อยู่ IP ของผู้เข้าชม เว้นว่าง = ทุกประเทศ',
        'states'                   => 'จังหวัด/รัฐ',
        'states-helper'            => 'ทราบเฉพาะลูกค้าที่เข้าสู่ระบบ (จากที่อยู่) เว้นว่าง = ทุกจังหวัด/รัฐ',
        'url'                      => 'URL Expression',
        'url-placeholder'          => 'เช่น /page',
        'url-helper'               => 'หน้าที่นับรวม เป็น regular expression ของพาธหน้า เว้นว่าง = ทั้งเว็บไซต์, "/" = เฉพาะหน้าแรก, "/pricing|/shop" = หน้าที่มี /pricing หรือ /shop',
        'url-invalid'              => 'ใส่นิพจน์ที่ถูกต้อง',
        'type'                     => 'ประเภท',
        'suffix'                   => 'คำต่อท้าย',
        'suffix-helper'            => 'ต่อท้ายชื่อลีด เช่น "ผู้เข้าชมเว็บไซต์ #12 (India) - Pricing"',
        'team'                     => 'ทีมขาย',
        'salesperson'              => 'พนักงานขาย',
        'tags'                     => 'แท็ก',
        'priority'                 => 'ลำดับความสำคัญ',
        'company'                  => 'บริษัท',
        'company-helper'           => 'เว้นว่าง = บริษัทของลูกค้า หรือบริษัทแรกที่ใช้งานอยู่',
        'lead-for'                 => 'การติดตามข้อมูล',
        'industries'               => 'อุตสาหกรรม',
        'industries-helper'        => 'พิมพ์ชื่อเพื่อเพิ่มอุตสาหกรรมใหม่',
        'filter-on-size'           => 'กรองตามขนาด',
        'size-min'                 => 'ขนาดบริษัทตั้งแต่',
        'size-max'                 => 'ขนาดบริษัทถึง',
        'employees'                => 'พนักงาน',
        'gdpr'                     => 'ตรวจสอบให้แน่ใจว่าคุณต้องปฏิบัติตาม PDPA/GDPR ในการจัดเก็บข้อมูลส่วนบุคคลหรือไม่',
        'contact-filter'           => 'กรองผู้ติดต่อตาม',
        'extra-contacts'           => 'จำนวนผู้ติดต่อ',
        'preferred-role'           => 'บทบาทที่ต้องการ',
        'other-roles'              => 'บทบาทอื่น',
        'seniority'                => 'อาวุโส',

        'sections' => [
            'traffic'          => 'เงื่อนไขการเข้าชมเว็บไซต์',
            'generation'       => 'เงื่อนไขการสร้างโอกาสการขาย',
            'lead-generation'  => 'เงื่อนไขการสร้างลีด',
            'contact-filter'   => 'ตัวกรองผู้ติดต่อ',
            'lead-data'        => 'ข้อมูลลีด',
            'opportunity-data' => 'ข้อมูลโอกาสการขาย',
            'settings'         => 'การตั้งค่า',
        ],
    ],

    'table' => [
        'name'          => 'ชื่อกฎ',
        'url'           => 'URL Expression',
        'whole-website' => 'ทั้งเว็บไซต์',
        'countries'     => 'ประเทศ',
        'all-countries' => 'ทุกประเทศ',
        'type'          => 'ประเภท',
        'team'          => 'ทีมขาย',
        'salesperson'   => 'พนักงานขาย',
        'leads'         => 'ลีด',
        'opportunities' => 'โอกาสการขาย',
        'active'        => 'ใช้งานอยู่',
    ],

    'pages' => [
        'leads' => [
            'navigation' => 'ลีดที่สร้างขึ้น',
            'title'      => 'ลีดที่สร้างขึ้น: :rule',

            'columns' => [
                'name'       => 'ชื่อ',
                'country'    => 'ประเทศ',
                'stage'      => 'ขั้นตอน',
                'created-at' => 'สร้างแล้ว',
            ],
        ],
    ],
];
