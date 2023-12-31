<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージです。サイズルールのようにいくつかのバリデーションを
    | 持っているものもあります。メッセージはご自由に調整してください。
    |
    */

    'accepted'             => ':attributeを承認してください',
    'active_url'           => ':attributeが有効なURLではありません',
    'after'                => ':attributeには、:dateより後の日付を指定してください',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してください',
    'alpha'                => ':attributeはアルファベットのみがご利用できます',
    'alpha_dash'           => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます',
    'alpha_num'            => ':attributeには半角英数字以外入力できません',
    'array'                => ':attributeは配列でなくてはなりません',
    'before'               => ':attributeには、:dateより前の日付をご利用ください',
    'before_or_equal'      => ':attributeには、:date以前の日付をご利用ください',
    'between'              => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください',
        'file'    => ':attributeは、:min kBから、:max kBの間で指定してください',
        'string'  => ':attributeは、:min文字〜:max文字の間で指定してください',
        'array'   => ':attributeは、:min個から:max個の間で指定してください',
    ],
    'boolean'              => ':attributeは、trueかfalseを指定してください',
    'confirmed'            => ':attributeと、確認フィールドとが、一致していません',
    'date'                 => ':attributeには有効な日付を指定してください',
    'date_format'          => ':attributeは:format形式で指定してください',
    'different'            => ':attributeと:otherには、異なった内容を指定してください',
    'digits'               => ':attributeは:digits桁で指定してください',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定してください',
    'dimensions'           => ':attributeの図形サイズが正しくありません',
    'distinct'             => ':attributeには異なった値を指定してください',
    'email'                => ':attributeを正しく入力してください',
    'exists'               => '選択された:attributeは正しくありません',
    'file'                 => ':attributeにはファイルを指定してください',
    'filled'               => ':attributeに値を指定してください',
    'gt'                   => [
        'numeric' => ':attributeには、:valueより大きな値を指定してください',
        'file'    => ':attributeには、:value kBより大きなファイルを指定してください',
        'string'  => ':attributeは、:value文字より長く指定してください',
        'array'   => ':attributeには、:value個より多くのアイテムを指定してください',
    ],
    'gte'                  => [
        'numeric' => ':attributeには、:value以上の値を指定してください',
        'file'    => ':attributeには、:value kB以上のファイルを指定してください',
        'string'  => ':attributeは、:value文字以上で指定してください',
        'array'   => ':attributeには、:value個以上のアイテムを指定してください',
    ],
    'image'                => ':attributeには画像ファイルを指定してください',
    'in'                   => '選択された:attributeは正しくありません',
    'in_array'             => ':attributeには:otherの値を指定してください',
    'integer'              => ':attributeは整数で指定してください',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください',
    'ipv4'                 => ':attributeには、有効なIPv4アドレスを指定してください',
    'ipv6'                 => ':attributeには、有効なIPv6アドレスを指定してください',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください',
    'lt'                   => [
        'numeric' => ':attributeには、:valueより小さな値を指定してください',
        'file'    => ':attributeには、:value kBより小さなファイルを指定してください',
        'string'  => ':attributeは、:value文字より短く指定してください',
        'array'   => ':attributeには、:value個より少ないアイテムを指定してください',
    ],
    'lte'                  => [
        'numeric' => ':attributeには、:value以下の値を指定してください',
        'file'    => ':attributeには、:value kB以下のファイルを指定してください',
        'string'  => ':attributeは、:value文字以下で指定してください',
        'array'   => ':attributeには、:value個以下のアイテムを指定してください',
    ],
    'max'                  => [
        'numeric' => ':attributeには、:max以下の数字を指定してください',
        'file'    => ':attributeには、:max kB以下のファイルを指定してください',
        'string'  => ':attributeは、:max文字以下で入力してください',
        'array'   => ':attributeは:max個以下指定してください',
    ],
    'mimes'                => ':attributeには:valuesタイプのファイルを指定してください',
    'mimetypes'            => ':attributeには:valuesタイプのファイルを指定してください',
    'min'                  => [
        'numeric' => ':attributeには、:min以上の数字を指定してください',
        'file'    => ':attributeには、:min kB以上のファイルを指定してください',
        'string'  => ':attributeは、:min文字以上入力してください',
        'array'   => ':attributeは:min個以上指定してください',
    ],
    'not_in'               => '選択された:attributeは正しくありません',
    'not_regex'            => ':attributeの形式が正しくありません',
    'numeric'              => ':attributeには数字以外は入力できません',
    'present'              => ':attributeが存在していません',
    'regex'                => ':attributeに正しい形式を指定してください',
    'required'             => ':attributeを入力してください',
    'required_if'          => ':otherが:valueの場合、:attributeも指定してください',
    'required_unless'      => ':otherが:valuesでない場合、:attributeを指定してください',
    'required_with'        => ':valuesを指定する場合は、:attributeも指定してください',
    'required_with_all'    => ':valuesを指定する場合は、:attributeも指定してください',
    'required_without'     => ':valuesを指定しない場合は、:attributeを指定してください',
    'required_without_all' => ':valuesのどれも指定しない場合は、:attributeを指定してください',
    'same'                 => ':attributeと:otherには同じ値を指定してください',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定してください',
        'file'    => ':attributeのファイルは、:sizeキロバイトでなくてはなりません',
        'string'  => ':attributeは:size文字で指定してください',
        'array'   => ':attributeは:size個指定してください',
    ],
    'string'               => ':attributeは文字列を指定してください',
    'timezone'             => ':attributeには、有効なゾーンを指定してください',
    'unique'               => ':attributeの値は既に存在しています',
    'uploaded'             => ':attributeのアップロードに失敗しました',
    'url'                  => ':attributeを確認してください',

    /*
     * カスタムバリデーション
     */
    'mb_alpha_num'              => ':attributeには半角英数字以外は入力できません',
    'mb_alpha_num_dash'         => ':attributeには半角英数字とダッシュ(-)及び下線(_)以外は入力できません',
    'boolean_string'            => ':attributeにはtrueかfalseを指定してください',
    'symbol'                    => ':attributeに特殊記号が使用されています',
    'admin_symbol'              => ':attributeに特殊記号が使用されています',
    'tel'                       => ':attributeには数字、ハイフン以外は入力できません',
    'password_strength'         => 'パスワードは他人からわかりにくい英数字にご変更お願いします',
    'password_distinct'         => '以前と同じパスワードを設定することはできません',
    'string_number'             => ':attributeは数字を指定してください',
    'token_has_expired'         => ':attributeの有効期限が切れています。',
    'vmdb_email'                => ':attributeを正しく入力してください',
    'exists_duplicate_email'    => ':attributeは既に登録されています',
    'exists_duplicate_btm_login_id' => '入力したBTMログインIDは既に登録されています',
    'exists_duplicate_login_id' => '入力したログインIDは既に登録されています',
    'exists_duplicate_four_travel_user'     => '既に他の方で:attribute連携済みです',
    'exists_duplicate_coupon_code' => '入力したクーポンコードは既に登録されています',
    'match_hash_code'           => ':attributeが誤っています',
    'exists_bill_perfect_status' =>'引当中のため削除は行えません',
    'exists_call_trouble'       => 'トラブル登録された:attributeは、顧客IDや受注番号を変更できません',
    'trouble_already_has'       => ':attributeは変更できません',
    'member_info_is_complete'   => '顧客情報が不足しております。お手数ですがコールセンター(0120-460-214)までお問合せください。',
    'admin_login_password_strength'   => 'パスワードは半角英小文字、大文字、数字を含めて入力してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "属性.ルール"の規約でキーを指定することでカスタムバリデーション
    | メッセージを定義できます。指定した属性ルールに対する特定の
    | カスタム言語行を手早く指定できます。
    |
    */

    'custom' => [
        '属性名' => [
            'ルール名' => 'カスタムメッセージ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、例えば"email"の代わりに「メールアドレス」のように、
    | 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
    | 言語行です。これはメッセージをよりきれいに表示するために役に立ちます。
    |
    */

    'attributes' => [
        'site_key' => 'サイトKEY',
        'admin_session_sid' => '担当者専用管理トークン',
        'member_session_sid' => 'セッションID',
        'agency_admin_sid' => '代理店専用管理トークン',
        'company_admin_sid' => '企業専用管理トークン',
        'password' => 'パスワード',
        'token' => '確認コード',
        'login_id' => 'ログインID',
        'call_id' => 'コンタクト履歴ID',
    ],

];
