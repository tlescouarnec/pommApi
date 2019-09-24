<?php

namespace App\Database\ApplicationSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use App\Database\ApplicationSchema\AutoStructure\Event as EventStructure;
use App\Database\ApplicationSchema\Event;

/**
 * EventModel
 *
 * Model class for table event.
 *
 * @see Model
 */
class EventModel extends Model
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
        $this->structure = new EventStructure;
        $this->flexible_entity_class = '\App\Database\ApplicationSchema\Event';
    }
    
    public function getSomething()
    {
        return 'Hello World';
    }
}
