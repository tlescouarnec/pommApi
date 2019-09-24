<?php

namespace App\Database\ApplicationSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use App\Database\ApplicationSchema\AutoStructure\Register as RegisterStructure;
use App\Database\ApplicationSchema\Register;

/**
 * RegisterModel
 *
 * Model class for table register.
 *
 * @see Model
 */
class RegisterModel extends Model
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
        $this->structure = new RegisterStructure;
        $this->flexible_entity_class = '\App\Database\ApplicationSchema\Register';
    }
}
