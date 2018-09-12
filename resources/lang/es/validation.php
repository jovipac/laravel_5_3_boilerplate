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

    'accepted'             => 'El :attribute debe ser accepted.',
    'active_url'           => 'El :attribute is not a valid URL.',
    'after'                => 'El :attribute debe ser a date after :date.',
    'after_or_equal'       => 'El :attribute debe ser a date after or equal to :date.',
    'alpha'                => 'El :attribute may only contain letters.',
    'alpha_dash'           => 'El :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'El :attribute may only contain letters and numbers.',
    'array'                => 'El :attribute debe ser an array.',
    'before'               => 'El :attribute debe ser a date before :date.',
    'before_or_equal'      => 'El :attribute debe ser a date before or equal to :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser between :min and :max.',
        'file'    => 'El :attribute debe ser between :min and :max kilobytes.',
        'string'  => 'El :attribute debe ser between :min and :max characters.',
        'array'   => 'El :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser true or false.',
    'confirmed'            => 'El :attribute confirmation does not match.',
    'date'                 => 'El :attribute is not a valid date.',
    'date_format'          => 'El :attribute does not match El format :format.',
    'different'            => 'El :attribute and :other debe ser different.',
    'digits'               => 'El :attribute debe ser :digits digits.',
    'digits_between'       => 'El :attribute debe ser between :min and :max digits.',
    'dimensions'           => 'El :attribute has invalid image dimensions.',
    'distinct'             => 'El campo :attribute has a duplicate value.',
    'email'                => 'El :attribute debe ser a valid email address.',
    'exists'               => 'El selected :attribute es invalido.',
    'file'                 => 'El :attribute debe ser a file.',
    'filled'               => 'El campo :attribute must have a value.',
    'image'                => 'El :attribute debe ser an image.',
    'in'                   => 'El selected :attribute es invalido.',
    'in_array'             => 'El campo :attribute does not exist in :other.',
    'integer'              => 'El :attribute debe ser an integer.',
    'ip'                   => 'El :attribute debe ser a valid IP address.',
    'json'                 => 'El :attribute debe ser a valid JSON string.',
    'max'                  => [
        'numeric' => 'El :attribute may not be greater than :max.',
        'file'    => 'El :attribute may not be greater than :max kilobytes.',
        'string'  => 'El :attribute may not be greater than :max characters.',
        'array'   => 'El :attribute may not have more than :max items.',
    ],
    'mimes'                => 'El :attribute debe ser a file of type: :values.',
    'mimetypes'            => 'El :attribute debe ser a file of type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser at least :min.',
        'file'    => 'El :attribute debe ser at least :min kilobytes.',
        'string'  => 'El :attribute debe ser at least :min characters.',
        'array'   => 'El :attribute must have at least :min items.',
    ],
    'not_in'               => 'El selected :attribute es invalido.',
    'numeric'              => 'El :attribute debe ser a number.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El :attribute format es invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other is :value.',
    'required_unless'      => 'El campo :attribute es requerido unless :other is in :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values esta presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values esta presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no esta presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando none of :values estan presentes.',
    'same'                 => 'El :attribute y :other deben ser iguales.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe ser :size characters.',
        'array'   => 'El :attribute must contain :size items.',
    ],
    'string'               => 'El :attribute debe ser a string.',
    'timezone'             => 'El :attribute debe ser a valid zone.',
    'unique'               => 'El :attribute has already been taken.',
    'uploaded'             => 'El :attribute failed to upload.',
    'url'                  => 'El :attribute format es invalido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
