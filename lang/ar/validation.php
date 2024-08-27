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
   
    'attributes'=>[
        'carTitle'=>'اسم السيارة',
        'price'=>'السعر',
        'image'=>'الصورة',
        'description'=>'الوصف',
        'published'=>'النشر',
        'category_id'=>'الفئة',
        'chooseFile' => 'اختر الملف',
    ],
   
    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute ليس عنوان URL صحيحًا.',
    'after' => 'يجب أن يكون تاريخ :attribute بعد :date.',
    'alpha' => 'يجب أن يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على أحرف وأرقام وشرطات فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => ':attribute يجب أن يكون مصفوفة.',
    'before' => 'يجب أن يكون تاريخ :attribute قبل :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute بين :min و :max أحرف.',
        'array' => 'يجب أن يحتوي :attribute على بين :min و :max عناصر.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خطأ.',
    'confirmed' => 'تأكيد :attribute غير مطابق.',
    'date' => ':attribute ليس تاريخًا صحيحًا.',
    'date_format' => ':attribute لا يتطابق مع الشكل :format.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون :attribute عددًا مكونًا من :digits أرقام.',
    'digits_between' => 'يجب أن يكون :attribute عددًا بين :min و :max أرقام.',
    'dimensions' => ':attribute يحتوي على أبعاد صورة غير صحيحة.',
    'distinct' => 'يحتوي حقل :attribute على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح.',
    'exists' => ':attribute المحدد غير صحيح.',
    'file' => ':attribute يجب أن يكون ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute أكبر من :value أحرف.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر.',
    ],
    'image' => ':attribute يجب أن يكون صورة.',
    'in' => 'القيمة المحددة لـ :attribute غير صحيحة.',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيح.',
    'json' => 'يجب أن يكون :attribute نص JSON صحيح.',
    'max' => [
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :max.',
        'file' => 'يجب أن يكون حجم :attribute أقل من أو يساوي :max كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute أقل من أو يساوي :max أحرف.',
        'array' => 'يجب أن يحتوي :attribute على أقل من أو يساوي :max عناصر.',
    ],
    'mimes' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من نوع: :values.',
    'min' => [
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.',
        'array' => 'يجب أن يحتوي :attribute على الأقل :min عناصر.',
    ],
    'not_in' => 'القيمة المحددة لـ :attribute غير صحيحة.',
    'numeric' => 'يجب أن يكون :attribute عددًا.',
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'regex' => ':attribute صيغة غير صحيحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل :attribute مطلوب إلا إذا كان :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما لا يكون :values موجودًا.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يكون :attribute و :other متطابقين.',
    'size' => [
        'numeric' => 'يجب أن يكون :attribute :size.',
        'file' => 'يجب أن يكون حجم :attribute :size كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute :size أحرف.',
        'array' => 'يجب أن يحتوي :attribute على :size عناصر.',
    ],
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صحيحة.',
    'unique' => ':attribute مستخدم بالفعل.',
    'url' => ':attribute صيغة غير صحيحة.',
    'uuid' => ':attribute يجب أن يكون UUID صحيح.',
 

    // 'accepted' => 'The :attribute field must be accepted.',
    // 'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
    // 'active_url' => 'The :attribute field must be a valid URL.',
    // 'after' => 'The :attribute field must be a date after :date.',
    // 'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
    // 'alpha' => 'The :attribute field must only contain letters.',
    // 'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
    // 'alpha_num' => 'The :attribute field must only contain letters and numbers.',
    // 'array' => 'The :attribute field must be an array.',
    // 'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    // 'before' => 'The :attribute field must be a date before :date.',
    // 'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
    // 'between' => [
    //     'array' => 'The :attribute field must have between :min and :max items.',
    //     'file' => 'The :attribute field must be between :min and :max kilobytes.',
    //     'numeric' => 'The :attribute field must be between :min and :max.',
    //     'string' => 'The :attribute field must be between :min and :max characters.',
    // ],
    // 'boolean' => 'The :attribute field must be true or false.',
    // 'can' => 'The :attribute field contains an unauthorized value.',
    // 'confirmed' => 'The :attribute field confirmation does not match.',
    // 'contains' => 'The :attribute field is missing a required value.',
    // 'current_password' => 'The password is incorrect.',
    // 'date' => 'The :attribute field must be a valid date.',
    // 'date_equals' => 'The :attribute field must be a date equal to :date.',
    // 'date_format' => 'The :attribute field must match the format :format.',
    // 'decimal' => 'The :attribute field must have :decimal decimal places.',
    // 'declined' => 'The :attribute field must be declined.',
    // 'declined_if' => 'The :attribute field must be declined when :other is :value.',
    // 'different' => 'The :attribute field and :other must be different.',
    // 'digits' => 'The :attribute field must be :digits digits.',
    // 'digits_between' => 'The :attribute field must be between :min and :max digits.',
    // 'dimensions' => 'The :attribute field has invalid image dimensions.',
    // 'distinct' => 'The :attribute field has a duplicate value.',
    // 'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    // 'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    // 'email' => 'The :attribute field must be a valid email address.',
    // 'ends_with' => 'The :attribute field must end with one of the following: :values.',
    // 'enum' => 'The selected :attribute is invalid.',
    // 'exists' => 'The selected :attribute is invalid.',
    // 'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    // 'file' => 'The :attribute field must be a file.',
    // 'filled' => 'The :attribute field must have a value.',
    // 'gt' => [
    //     'array' => 'The :attribute field must have more than :value items.',
    //     'file' => 'The :attribute field must be greater than :value kilobytes.',
    //     'numeric' => 'The :attribute field must be greater than :value.',
    //     'string' => 'The :attribute field must be greater than :value characters.',
    // ],
    // 'gte' => [
    //     'array' => 'The :attribute field must have :value items or more.',
    //     'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
    //     'numeric' => 'The :attribute field must be greater than or equal to :value.',
    //     'string' => 'The :attribute field must be greater than or equal to :value characters.',
    // ],
    // 'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    // 'image' => 'The :attribute field must be an image.',
    // 'in' => 'The selected :attribute is invalid.',
    // 'in_array' => 'The :attribute field must exist in :other.',
    // 'integer' => 'The :attribute field must be an integer.',
    // 'ip' => 'The :attribute field must be a valid IP address.',
    // 'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    // 'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    // 'json' => 'The :attribute field must be a valid JSON string.',
    // 'list' => 'The :attribute field must be a list.',
    // 'lowercase' => 'The :attribute field must be lowercase.',
    // 'lt' => [
    //     'array' => 'The :attribute field must have less than :value items.',
    //     'file' => 'The :attribute field must be less than :value kilobytes.',
    //     'numeric' => 'The :attribute field must be less than :value.',
    //     'string' => 'The :attribute field must be less than :value characters.',
    // ],
    // 'lte' => [
    //     'array' => 'The :attribute field must not have more than :value items.',
    //     'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
    //     'numeric' => 'The :attribute field must be less than or equal to :value.',
    //     'string' => 'The :attribute field must be less than or equal to :value characters.',
    // ],
    // 'mac_address' => 'The :attribute field must be a valid MAC address.',
    // 'max' => [
    //     'array' => 'The :attribute field must not have more than :max items.',
    //     'file' => 'The :attribute field must not be greater than :max kilobytes.',
    //     'numeric' => 'The :attribute field must not be greater than :max.',
    //     'string' => 'The :attribute field must not be greater than :max characters.',
    // ],
    // 'max_digits' => 'The :attribute field must not have more than :max digits.',
    // 'mimes' => 'The :attribute field must be a file of type: :values.',
    // 'mimetypes' => 'The :attribute field must be a file of type: :values.',
    // 'min' => [
    //     'array' => 'The :attribute field must have at least :min items.',
    //     'file' => 'The :attribute field must be at least :min kilobytes.',
    //     'numeric' => 'The :attribute field must be at least :min.',
    //     'string' => 'The :attribute field must be at least :min characters.',
    // ],
    // 'min_digits' => 'The :attribute field must have at least :min digits.',
    // 'missing' => 'The :attribute field must be missing.',
    // 'missing_if' => 'The :attribute field must be missing when :other is :value.',
    // 'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    // 'missing_with' => 'The :attribute field must be missing when :values is present.',
    // 'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    // 'multiple_of' => 'The :attribute field must be a multiple of :value.',
    // 'not_in' => 'The selected :attribute is invalid.',
    // 'not_regex' => 'The :attribute field format is invalid.',
    // 'numeric' => 'The :attribute field must be a number.',
    // 'password' => [
    //     'letters' => 'The :attribute field must contain at least one letter.',
    //     'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
    //     'numbers' => 'The :attribute field must contain at least one number.',
    //     'symbols' => 'The :attribute field must contain at least one symbol.',
    //     'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    // ],
    // 'present' => 'The :attribute field must be present.',
    // 'present_if' => 'The :attribute field must be present when :other is :value.',
    // 'present_unless' => 'The :attribute field must be present unless :other is :value.',
    // 'present_with' => 'The :attribute field must be present when :values is present.',
    // 'present_with_all' => 'The :attribute field must be present when :values are present.',
    // 'prohibited' => 'The :attribute field is prohibited.',
    // 'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    // 'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    // 'prohibits' => 'The :attribute field prohibits :other from being present.',
    // 'regex' => 'The :attribute field format is invalid.',
    // 'required' => 'The :attribute field is required.',
    // 'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    // 'required_if' => 'The :attribute field is required when :other is :value.',
    // 'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    // 'required_if_declined' => 'The :attribute field is required when :other is declined.',
    // 'required_unless' => 'The :attribute field is required unless :other is in :values.',
    // 'required_with' => 'The :attribute field is required when :values is present.',
    // 'required_with_all' => 'The :attribute field is required when :values are present.',
    // 'required_without' => 'The :attribute field is required when :values is not present.',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
    // 'same' => 'The :attribute field must match :other.',
    // 'size' => [
    //     'array' => 'The :attribute field must contain :size items.',
    //     'file' => 'The :attribute field must be :size kilobytes.',
    //     'numeric' => 'The :attribute field must be :size.',
    //     'string' => 'The :attribute field must be :size characters.',
    // ],
    // 'starts_with' => 'The :attribute field must start with one of the following: :values.',
    // 'string' => 'The :attribute field must be a string.',
    // 'timezone' => 'The :attribute field must be a valid timezone.',
    // 'unique' => 'The :attribute has already been taken.',
    // 'uploaded' => 'The :attribute failed to upload.',
    // 'uppercase' => 'The :attribute field must be uppercase.',
    // 'url' => 'The :attribute field must be a valid URL.',
    // 'ulid' => 'The :attribute field must be a valid ULID.',
    // 'uuid' => 'The :attribute field must be a valid UUID.',

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

  

];
