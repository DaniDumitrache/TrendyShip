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

    'accepted' => ':attribute trebuie acceptat.',
    'accepted_if' => ':attribute trebuie acceptat când :other si :value.',
    'active_url' => ':attribute nu este o adresă URL validă.',
    'after' => ':attribute trebuie să fie o dată după :date.',
    'after_or_equal' =>
        ':attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha' => ':attribute trebuie să conțină doar litere.',
    'alpha_dash' =>
        ':attributetrebuie să conțină numai litere, cifre, liniuțe și liniuțe de subliniere.',
    'alpha_num' => ':attribute trebuie să conțină numai litere și cifre.',
    'array' => ':attribute trebuie să fie o matrice.',
    'before' => ':attribute trebuie să fie o întâlnire înainte :date.',
    'before_or_equal' =>
        ':attribute trebuie să fie o dată anterioară sau egală cu :date.',
    'between' => [
        'array' => ':attribute trebuie să aibă între :min si :max items.',
        'file' => ':attribute trebuie să fie între :min si :max kilobytes.',
        'numeric' => ':attribute trebuie să fie între :min si :max.',
        'string' => ':attribute trebuie să fie între :min si :max caractere.',
    ],
    'boolean' => ':attribute câmpul trebuie să fie adevărat sau fals.',
    'confirmed' => ':attribute confirmarea nu se potrivește.',
    'current_password' => 'Parola este incorecta.',
    'date' => ':attribute nu este o dată valabilă.',
    'date_equals' => ':attribute trebuie să fie o dată egală cu :date.',
    'date_format' => ':attribute nu se potrivește cu formatul :format.',
    'declined' => ':attribute trebuie refuzat.',
    'declined_if' => ':attribute trebuie refuzat când :other este :value.',
    'different' => ':attribute si :other trebuie să fie diferit.',
    'digits' => ':attribute trebuie să fie :digits cifre.',
    'digits_between' => ':attribute trebuie să fie între :min si :max cifre.',
    'dimensions' => ':attribute are dimensiuni nevalide ale imaginii.',
    'distinct' => ':attribute câmpul are o valoare duplicat.',
    'doesnt_end_with' =>
        ':attribute nu se poate termina cu unul dintre following: :values.',
    'doesnt_start_with' => 'nu poate începe cu una dintre following: :values.',
    ':attribute este posibil să nu înceapă cu unul dintre following: :values.',
    'email' => 'Trebuie sa fie o adresa de email valida.',
    'ends_with' => 'trebuie să se încheie cu una dintre following: :values.',
    'enum' => 'Cel selectat :attribute este invalid.',
    'exists' => 'Cel selectat :attribute este invalid.',
    'file' => ':attribute trebuie să fie un fișier.',
    'filled' => ':attribute câmpul trebuie să aibă o valoare.',
    'gt' => [
        'array' => ':attribute trebuie să aibă mai mult decât :value articole.',
        'file' => ':attribute trebuie să fie mai mare decât :value kilobytes.',
        'numeric' => ':attribute trebuie să fie mai mare decât :value.',
        'string' => ':attribute trebuie să fie mai mare decât :value caractere.',
    ],
    'gte' => [
        'array' => ':attribute trebuie să aibă :value articole sau mai multe.',
        'file' =>
            ':attribute trebuie să fie mai mare sau egal cu :value kilobytes.',
        'numeric' => ':attribute trebuie să fie mai mare sau egal cu :value.',
        'string' =>
            ':attribute trebuie să fie mai mare sau egal cu :value caractere.',
    ],
    'image' => ':attribute trebuie să fie o imagine.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lowercase' => 'The :attribute must be lowercase.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' =>
            'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' =>
            'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'nu trebuie să fie mai mic decât :max.',
        'file' => 'nu trebuie să fie mai mic decât :max kilobytes.',
        'numeric' => 'nu trebuie să fie mai mic decât :max.',
        'string' => 'nu trebuie să fie mai mic decât :max.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'Trebuie sa aiba cel putin :min articole.',
        'file' => 'Trebuie sa aiba cel putin :min kilobytes.',
        'numeric' => 'Trebuie sa aiba cel putin :min.',
        'string' => 'Trebuie sa aiba cel putin :min caractere.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'trebuie să conțină cel puțin o literă.',
        'mixed' =>
            'trebuie să conțină cel puțin o literă mare și o literă mică.',
        'numbers' => 'trebuie să conţină cel puţin un număr',
        'symbols' => 'trebuie să conțină cel puțin un simbol.',
        'uncompromised' =>
            ':attribute dat a apărut într-o scurgere de date. Vă rugăm să alegeți un alt :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' =>
        'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' =>
        'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute formatul este invalid.',
    'required' => 'Acest camp este obligatoriu',
    'required_array_keys' =>
        'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' =>
        'The :attribute field is required when :other is accepted.',
    'required_unless' =>
        'The :attribute field is required unless :other is in :values.',
    'required_with' =>
        'The :attribute field is required when :values is present.',
    'required_with_all' =>
        'The :attribute field is required when :values are present.',
    'required_without' =>
        'The :attribute field is required when :values is not present.',
    'required_without_all' =>
        'The :attribute field is required when none of :values are present.',
    'same' => ':attribute și :other trebuie să se potrivească.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' =>
        ':attribute trebuie să înceapă cu unul dintre following: :values.',
    'string' => ':attribute trebuie să fie un șir.',
    'timezone' => ':attribute trebuie să fie un fus orar valid.',
    'unique' => ':attribute a fost deja luat.',
    'uploaded' => ':attribute nu s-a putut încărca.',
    'uppercase' => ':attribute trebuie să fie majuscule.',
    'url' => ':attribute trebuie să fie o adresă URL validă.',
    'uuid' => ':attribute trebuie să fie un UUID valid.',

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

    'custom' => [],

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
