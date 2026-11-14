<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'ต้องยอมรับช่อง :attribute',
    'accepted_if' => 'ต้องยอมรับช่อง :attribute เมื่อ :other เป็น :value',
    'active_url' => 'ช่อง :attribute ต้องเป็น URL ที่ถูกต้อง',
    'after' => 'ช่อง :attribute ต้องเป็นวันที่หลัง :date',
    'after_or_equal' => 'ช่อง :attribute ต้องเป็นวันที่ตั้งแต่ :date เป็นต้นไป',
    'alpha' => 'ช่อง :attribute ต้องมีเฉพาะตัวอักษร',
    'alpha_dash' => 'ช่อง :attribute ต้องมีเฉพาะตัวอักษร ตัวเลข ขีด และขีดล่าง',
    'alpha_num' => 'ช่อง :attribute ต้องมีเฉพาะตัวอักษรและตัวเลข',
    'any_of' => 'ช่อง :attribute ไม่ถูกต้อง',
    'array' => 'ช่อง :attribute ต้องเป็นอาร์เรย์',
    'ascii' => 'ช่อง :attribute ต้องมีเฉพาะตัวอักษร ตัวเลข และสัญลักษณ์แบบไบต์เดียว',
    'before' => 'ช่อง :attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => 'ช่อง :attribute ต้องเป็นวันที่ก่อนหรือตรงกับ :date',
    'between' => [
        'array' => 'ช่อง :attribute ต้องมีระหว่าง :min ถึง :max รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาดระหว่าง :min ถึง :max กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่าระหว่าง :min ถึง :max',
        'string' => 'ช่อง :attribute ต้องมีความยาวระหว่าง :min ถึง :max ตัวอักษร',
    ],
    'boolean' => 'ช่อง :attribute ต้องเป็นจริงหรือเท็จ',
    'can' => 'ช่อง :attribute มีค่าที่ไม่ได้รับอนุญาต',
    'confirmed' => 'การยืนยันช่อง :attribute ไม่ตรงกัน',
    'contains' => 'ช่อง :attribute ขาดค่าที่จำเป็น',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง',
    'date' => 'ช่อง :attribute ต้องเป็นวันที่ที่ถูกต้อง',
    'date_equals' => 'ช่อง :attribute ต้องเป็นวันที่ตรงกับ :date',
    'date_format' => 'ช่อง :attribute ต้องตรงกับรูปแบบ :format',
    'decimal' => 'ช่อง :attribute ต้องมีทศนิยม :decimal ตำแหน่ง',
    'declined' => 'ต้องปฏิเสธช่อง :attribute',
    'declined_if' => 'ต้องปฏิเสธช่อง :attribute เมื่อ :other เป็น :value',
    'different' => 'ช่อง :attribute และ :other ต้องไม่เหมือนกัน',
    'digits' => 'ช่อง :attribute ต้องมี :digits หลัก',
    'digits_between' => 'ช่อง :attribute ต้องมีระหว่าง :min ถึง :max หลัก',
    'dimensions' => 'ขนาดรูปภาพของช่อง :attribute ไม่ถูกต้อง',
    'distinct' => 'ช่อง :attribute มีค่าซ้ำกัน',
    'doesnt_contain' => 'ช่อง :attribute ต้องไม่มีค่าใดต่อไปนี้: :values',
    'doesnt_end_with' => 'ช่อง :attribute ต้องไม่ลงท้ายด้วยค่าใดต่อไปนี้: :values',
    'doesnt_start_with' => 'ช่อง :attribute ต้องไม่ขึ้นต้นด้วยค่าใดต่อไปนี้: :values',
    'email' => 'ช่อง :attribute ต้องเป็นอีเมลที่ถูกต้อง',
    'encoding' => 'ช่อง :attribute ต้องเข้ารหัสแบบ :encoding',
    'ends_with' => 'ช่อง :attribute ต้องลงท้ายด้วยค่าใดค่าหนึ่งต่อไปนี้: :values',
    'enum' => ':attribute ที่เลือกไม่ถูกต้อง',
    'exists' => ':attribute ที่เลือกไม่ถูกต้อง',
    'extensions' => 'ช่อง :attribute ต้องมีนามสกุลไฟล์อย่างใดอย่างหนึ่งต่อไปนี้: :values',
    'file' => 'ช่อง :attribute ต้องเป็นไฟล์',
    'filled' => 'ช่อง :attribute ต้องมีค่า',
    'gt' => [
        'array' => 'ช่อง :attribute ต้องมีมากกว่า :value รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาดมากกว่า :value กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่ามากกว่า :value',
        'string' => 'ช่อง :attribute ต้องมีมากกว่า :value ตัวอักษร',
    ],
    'gte' => [
        'array' => 'ช่อง :attribute ต้องมี :value รายการขึ้นไป',
        'file' => 'ช่อง :attribute ต้องมีขนาดอย่างน้อย :value กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่ามากกว่าหรือเท่ากับ :value',
        'string' => 'ช่อง :attribute ต้องมีอย่างน้อย :value ตัวอักษร',
    ],
    'hex_color' => 'ช่อง :attribute ต้องเป็นรหัสสีฐานสิบหกที่ถูกต้อง',
    'image' => 'ช่อง :attribute ต้องเป็นรูปภาพ',
    'in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array' => 'ช่อง :attribute ต้องมีอยู่ใน :other',
    'in_array_keys' => 'ช่อง :attribute ต้องมีคีย์ต่อไปนี้อย่างน้อยหนึ่งคีย์: :values',
    'integer' => 'ช่อง :attribute ต้องเป็นจำนวนเต็ม',
    'ip' => 'ช่อง :attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง',
    'ipv4' => 'ช่อง :attribute ต้องเป็นที่อยู่ IPv4 ที่ถูกต้อง',
    'ipv6' => 'ช่อง :attribute ต้องเป็นที่อยู่ IPv6 ที่ถูกต้อง',
    'json' => 'ช่อง :attribute ต้องเป็นข้อความ JSON ที่ถูกต้อง',
    'list' => 'ช่อง :attribute ต้องเป็นรายการ',
    'lowercase' => 'ช่อง :attribute ต้องเป็นตัวพิมพ์เล็ก',
    'lt' => [
        'array' => 'ช่อง :attribute ต้องมีน้อยกว่า :value รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่าน้อยกว่า :value',
        'string' => 'ช่อง :attribute ต้องมีน้อยกว่า :value ตัวอักษร',
    ],
    'lte' => [
        'array' => 'ช่อง :attribute ต้องมีไม่เกิน :value รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาดไม่เกิน :value กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่าน้อยกว่าหรือเท่ากับ :value',
        'string' => 'ช่อง :attribute ต้องมีไม่เกิน :value ตัวอักษร',
    ],
    'mac_address' => 'ช่อง :attribute ต้องเป็นที่อยู่ MAC ที่ถูกต้อง',
    'max' => [
        'array' => 'ช่อง :attribute ต้องมีไม่เกิน :max รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาดไม่เกิน :max กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่าไม่เกิน :max',
        'string' => 'ช่อง :attribute ต้องมีไม่เกิน :max ตัวอักษร',
    ],
    'max_digits' => 'ช่อง :attribute ต้องมีไม่เกิน :max หลัก',
    'mimes' => 'ช่อง :attribute ต้องเป็นไฟล์ประเภท: :values',
    'mimetypes' => 'ช่อง :attribute ต้องเป็นไฟล์ประเภท: :values',
    'min' => [
        'array' => 'ช่อง :attribute ต้องมีอย่างน้อย :min รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องมีค่าอย่างน้อย :min',
        'string' => 'ช่อง :attribute ต้องมีอย่างน้อย :min ตัวอักษร',
    ],
    'min_digits' => 'ช่อง :attribute ต้องมีอย่างน้อย :min หลัก',
    'missing' => 'ช่อง :attribute ต้องไม่มี',
    'missing_if' => 'ช่อง :attribute ต้องไม่มี เมื่อ :other เป็น :value',
    'missing_unless' => 'ช่อง :attribute ต้องไม่มี เว้นแต่ :other เป็น :value',
    'missing_with' => 'ช่อง :attribute ต้องไม่มี เมื่อมี :values',
    'missing_with_all' => 'ช่อง :attribute ต้องไม่มี เมื่อมี :values',
    'multiple_of' => 'ช่อง :attribute ต้องเป็นผลคูณของ :value',
    'not_in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'not_regex' => 'รูปแบบของช่อง :attribute ไม่ถูกต้อง',
    'numeric' => 'ช่อง :attribute ต้องเป็นตัวเลข',
    'password' => [
        'letters' => 'ช่อง :attribute ต้องมีตัวอักษรอย่างน้อยหนึ่งตัว',
        'mixed' => 'ช่อง :attribute ต้องมีตัวพิมพ์ใหญ่และตัวพิมพ์เล็กอย่างน้อยอย่างละหนึ่งตัว',
        'numbers' => 'ช่อง :attribute ต้องมีตัวเลขอย่างน้อยหนึ่งตัว',
        'symbols' => 'ช่อง :attribute ต้องมีสัญลักษณ์อย่างน้อยหนึ่งตัว',
        'uncompromised' => ':attribute ที่ระบุเคยรั่วไหลในเหตุข้อมูลรั่ว โปรดเลือก :attribute อื่น',
    ],
    'present' => 'ต้องมีช่อง :attribute',
    'present_if' => 'ต้องมีช่อง :attribute เมื่อ :other เป็น :value',
    'present_unless' => 'ต้องมีช่อง :attribute เว้นแต่ :other เป็น :value',
    'present_with' => 'ต้องมีช่อง :attribute เมื่อมี :values',
    'present_with_all' => 'ต้องมีช่อง :attribute เมื่อมี :values',
    'prohibited' => 'ห้ามระบุช่อง :attribute',
    'prohibited_if' => 'ห้ามระบุช่อง :attribute เมื่อ :other เป็น :value',
    'prohibited_if_accepted' => 'ห้ามระบุช่อง :attribute เมื่อยอมรับ :other',
    'prohibited_if_declined' => 'ห้ามระบุช่อง :attribute เมื่อปฏิเสธ :other',
    'prohibited_unless' => 'ห้ามระบุช่อง :attribute เว้นแต่ :other อยู่ใน :values',
    'prohibits' => 'ช่อง :attribute ห้ามมี :other อยู่ด้วย',
    'regex' => 'รูปแบบของช่อง :attribute ไม่ถูกต้อง',
    'required' => 'ต้องระบุช่อง :attribute',
    'required_array_keys' => 'ช่อง :attribute ต้องมีรายการสำหรับ: :values',
    'required_if' => 'ต้องระบุช่อง :attribute เมื่อ :other เป็น :value',
    'required_if_accepted' => 'ต้องระบุช่อง :attribute เมื่อยอมรับ :other',
    'required_if_declined' => 'ต้องระบุช่อง :attribute เมื่อปฏิเสธ :other',
    'required_unless' => 'ต้องระบุช่อง :attribute เว้นแต่ :other อยู่ใน :values',
    'required_with' => 'ต้องระบุช่อง :attribute เมื่อมี :values',
    'required_with_all' => 'ต้องระบุช่อง :attribute เมื่อมี :values',
    'required_without' => 'ต้องระบุช่อง :attribute เมื่อไม่มี :values',
    'required_without_all' => 'ต้องระบุช่อง :attribute เมื่อไม่มี :values ทั้งหมด',
    'same' => 'ช่อง :attribute ต้องตรงกับ :other',
    'size' => [
        'array' => 'ช่อง :attribute ต้องมี :size รายการ',
        'file' => 'ช่อง :attribute ต้องมีขนาด :size กิโลไบต์',
        'numeric' => 'ช่อง :attribute ต้องเป็น :size',
        'string' => 'ช่อง :attribute ต้องมี :size ตัวอักษร',
    ],
    'starts_with' => 'ช่อง :attribute ต้องขึ้นต้นด้วยค่าใดค่าหนึ่งต่อไปนี้: :values',
    'string' => 'ช่อง :attribute ต้องเป็นข้อความ',
    'timezone' => 'ช่อง :attribute ต้องเป็นเขตเวลาที่ถูกต้อง',
    'unique' => ':attribute นี้ถูกใช้ไปแล้ว',
    'uploaded' => 'อัปโหลด :attribute ไม่สำเร็จ',
    'uppercase' => 'ช่อง :attribute ต้องเป็นตัวพิมพ์ใหญ่',
    'url' => 'ช่อง :attribute ต้องเป็น URL ที่ถูกต้อง',
    'ulid' => 'ช่อง :attribute ต้องเป็น ULID ที่ถูกต้อง',
    'uuid' => 'ช่อง :attribute ต้องเป็น UUID ที่ถูกต้อง',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
