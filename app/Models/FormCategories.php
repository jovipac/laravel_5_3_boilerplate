<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FormCategories
 * @package App\Models
 * @version May 26, 2017, 10:16 pm UTC
 */
class FormCategories extends Model
{
    use SoftDeletes;

    public $table = 'form_categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'template_category_id',
        'name',
        'alias'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'template_category_id' => 'integer',
        'name' => 'string',
        'alias' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'template_category_id' => 'required',
        'alias' => 'required'
    ];

    
}
