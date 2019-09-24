<?php

namespace App\Database\ApplicationSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use App\Database\ApplicationSchema\AutoStructure\Category as CategoryStructure;
use App\Database\ApplicationSchema\Category;

/**
 * CategoryModel
 *
 * Model class for table category.
 *
 * @see Model
 */
class CategoryModel extends Model
{
    use WriteQueries;

    /**
     * __construct()
     *
     * Model constructor
     *
     * @access public
     */
    public function __construct()
    {
        $this->structure = new CategoryStructure;
        $this->flexible_entity_class = '\App\Database\ApplicationSchema\Category';
    }
}
