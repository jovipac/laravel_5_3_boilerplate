<?php

namespace App\Repositories;

use App\Models\FormCategories;
use InfyOm\Generator\Common\BaseRepository;

class FormCategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'template_category_id',
        'name',
        'alias'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FormCategories::class;
    }
}
