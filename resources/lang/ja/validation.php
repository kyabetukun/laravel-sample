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

    'accepted' => ':属性は必ず受け入れなければなりません。',
    'accepted_if' => 'attributeは、:otherが:valueの場合に受け入れなければなりません。',
    'active_url' => ':属性は有効なURLではありません。',
    'after' => ':attribute には :date 以降の日付を指定します。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => '属性には文字のみを指定します',
    'alpha_dash' => ':属性には、アルファベット、数字、ダッシュ、アンダースコアのみを指定します。',
    'alpha_num' => ':属性には、アルファベットと数字のみを指定します。',
    'array' => ':属性は配列でなければなりません。',
    'before' => ':attribute は :date の前の日付でなければなりません。',
    'before_or_equal' => ':attributeには、:dateより前の日付、または同じ日付を指定します。',
    'between' => [
        'numeric' => ':attribute は :min と :max の間でなければなりません。',
        'file' => ':attributeには、:minから:maxまでのキロバイトを指定します。',
        'string' => ':attributeには、:minから:maxの文字数を指定します。',
        'array' => ':attribute には :min から :max までの項目が必要です。',
    ],
    'boolean' => ':attributeフィールドは、trueまたはfalseでなければなりません。',
    'confirmed' => '属性の確認が一致しない。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':属性は有効な日付ではありません。',
    'date_equals' => ':attributeには、:dateと同じ日付を指定してください。',
    'date_format' => ':attributeはフォーマット:formatと一致しません。',
    'different' => ':attributeと:otherは異なるものでなければなりません。',
    'digits' => ':attribute には :digits 数字を指定してください。',
    'digits_between' => ':attribute は :min と :max の間の数字を指定します。',
    'dimensions' => '属性の画像寸法が不正です。',
    'distinct' => ':attributeフィールドの値が重複しています。',
    'email' => ':属性には、有効なメールアドレスを指定してください。',
    'ends_with' => ':属性の末尾は以下のいずれかでなければなりません。:valuesです。',
    'exists' => '選択した :attribute が無効です。',
    'file' => ':attributeにはファイルを指定します。',
    'filled' => ':attributeフィールドには必ず値を入力してください。',
    'gt' => [
        'numeric' => ':attributeは、:valueよりも大きくなければなりません。',
        'file' => ':attribute は :value kilobytes よりも大きくなければなりません。',
        'string' => ':attributeは、:valueの文字数よりも大きくなければなりません。',
        'array' => ':attribute には :value 以上の項目が必要です。',
    ],
    'gte' => [
        'numeric' => ':attribute は :value と同じかそれ以上でなければなりません。',
        'file' => ':attribute は :value kilobytes 以上でなければなりません。',
        'string' => ':attribute は :value の文字数以上でなければなりません。',
        'array' => ':attribute には :value アイテム以上が必要です。',
    ],
    'image' => ':attributeには画像を指定してください。',
    'in' => '選択した :attribute が無効です。',
    'in_array' => ':attributeフィールドは、:otherには存在しません。',
    'integer' => ':属性は整数でなければなりません。',
    'ip' => ':属性には、有効なIPアドレスを指定してください。',
    'ipv4' => ':属性には、有効なIPv4アドレスを指定してください。',
    'ipv6' => ':属性には、有効なIPv6アドレスを指定する必要があります。',
    'json' => ':属性には、有効なJSON文字列を指定する必要があります。',
    'lt' => [
        'numeric' => ':attribute は :value よりも小さくなければなりません。',
        'file' => ':attributeは、:value kilobytes以下でなければなりません。',
        'string' => ':attributeは、:valueの文字数以下でなければなりません。',
        'array' => ':attributeは、:value以下の項目を持たなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attribute は :value 以下の値でなければなりません。',
        'file' => ':attribute は :value kilobytes 以下でなければなりません。',
        'string' => ':attribute は :value の文字数以下でなければなりません。',
        'array' => ':attribute は :value 以上の項目を持ってはいけません。',
    ],
    'max' => [
        'numeric' => ':attributeは、:maxより大きくてはいけません。',
        'file' => ':attribute は :max kilobytes より大きくてはなりません。',
        'string' => ':attributeは、:max文字より大きくてはいけません。',
        'array' => ':attribute は :max 以上の項目を持ってはいけません。',
    ],
    'mimes' => ':attributeには、type: :valuesのファイルを指定します。',
    'mimetypes' => ':attributeには、type: :valuesのファイルを指定します。',
    'min' => [
        'numeric' => ':attributeには最低でも:minを指定する必要があります。',
        'file' => ':attributeには、最低でも:min kilobytesを指定する必要があります。',
        'string' => ':attributeには最低でも:minの文字が必要です。',
        'array' => ':attributeには最低でも:minの項目が必要です。',
    ],
    'multiple_of' => ':attributeは、:valueの倍数でなければなりません。',
    'not_in' => '選択した :attribute が無効です。',
    'not_regex' => ':attributeのフォーマットが無効です。',
    'numeric' => ':属性には数字を指定します。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attributeフィールドが存在する必要があります。',
    'regex' => ':attributeのフォーマットが無効です。',
    'required' => ':attributeは必須項目です。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_unless' => ':attributeフィールドは、:otherが:valuesに含まれていない限り必須です。',
    'required_with' => ':valuesが存在する場合は、:attributeフィールドが必要です。',
    'required_with_all' => ':valuesが存在する場合は、:attributeフィールドが必須となります。',
    'required_without' => ':valuesが存在しない場合は、:attributeフィールドが必要です。',
    'required_without_all' => ':attribute フィールドは :values が存在しない場合に必要です。',
    'prohibited' => ':attributeフィールドは禁止です。',
    'prohibited_if' => '他が:valueの場合、:attributeフィールドの使用は禁止されています。',
    'prohibited_unless' => ':attributeフィールドは、:otherが:valuesに含まれていない限り禁止です。',
    'prohibits' => ':attributeフィールドは、:otherが存在することを禁止しています。',
    'same' => ':attribute と :other は一致しなければなりません。',
    'size' => [
        'numeric' => ':attributeには必ず:sizeを指定してください。',
        'file' => ':attribute には :size kilobytes を指定します。',
        'string' => ':attribute には :size characters を指定します。',
        'array' => ':attribute には :size の項目が含まれていなければなりません。',
    ],
    'starts_with' => ':属性は、以下のいずれかで始まる必要があります。:values',
    'string' => ':属性は文字列でなければなりません。',
    'timezone' => ':属性には有効なタイムゾーンを指定する必要があります。',
    'unique' => ':attributeは既に取得済みです。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':属性には有効なURLを指定してください。',
    'uuid' => ':属性には有効なUUIDを指定してください。',

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
