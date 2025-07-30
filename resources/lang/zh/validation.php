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

    'accepted'             => '必須接受 :attribute',
    'active_url'           => ':attribute 不是有效的網址',
    'after'                => ':attribute 必須要晚於 :date',
    'alpha'                => ':attribute 只能用英文',
    'alpha_dash'           => ':attribute 只能用英文、數字、橫線和底線',
    'alpha_num'            => ':attribute 只能用英文和數字',
    'array'                => ':attribute 必須是陣列',
    'before'               => ':attribute 必須早於 :date',
    'between'              => [
        'numeric' => ':attribute 必須介於 :min 到 :max 之間',
        'file'    => ':attribute 的大小必須在 :min 到 :max KB 之間',
        'string'  => ':attribute 長度必須在 :min 到 :max 字元之間',
        'array'   => ':attribute 必須有 :min 到 :max 個項目',
    ],
    'boolean'              => ':attribute 必須是布林值',
    'confirmed'            => ':attribute 確認欄位不一致',
    'date'                 => ':attribute 不是有效的日期',
    'date_format'          => ':attribute 格式必須符合 :format',
    'different'            => ':attribute 和 :other 必須不同',
    'digits'               => ':attribute 必須是 :digits 位數',
    'digits_between'       => ':attribute 必須是 :min 到 :max 位數',
    'email'                => ':attribute 必須是有效的 Email',
    'exists'               => '選取的 :attribute 無效',
    'filled'               => ':attribute 欄位不能空白',
    'image'                => ':attribute 必須是圖片',
    'in'                   => '選取的 :attribute 無效',
    'integer'              => ':attribute 必須是整數',
    'ip'                   => ':attribute 必須是有效的 IP',
    'max'                  => [
        'numeric' => ':attribute 不得大於 :max',
        'file'    => ':attribute 不得超過 :max KB',
        'string'  => ':attribute 最多 :max 個字元',
        'array'   => ':attribute 最多只能有 :max 個項目',
    ],
    'min'                  => [
        'numeric' => ':attribute 不能小於 :min',
        'file'    => ':attribute 至少要有 :min KB',
        'string'  => ':attribute 至少要有 :min 個字元',
        'array'   => ':attribute 至少要有 :min 個項目',
    ],
    'not_in'               => '選取的 :attribute 無效',
    'numeric'              => ':attribute 必須是數字',
    'required'             => ':attribute 是必填的',
    'same'                 => ':attribute 和 :other 必須一致',
    'size'                 => [
        'numeric' => ':attribute 必須是 :size',
        'file'    => ':attribute 大小必須是 :size KB',
        'string'  => ':attribute 必須是 :size 個字元',
        'array'   => ':attribute 必須包含 :size 個項目',
    ],
    'string'               => ':attribute 必須是字串',
    'timezone'             => ':attribute 必須是有效的時區',
    'unique'               => ':attribute 已經被使用了',
    'url'                  => ':attribute 格式不正確',

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
