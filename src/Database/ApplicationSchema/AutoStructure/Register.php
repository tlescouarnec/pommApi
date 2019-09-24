<?php
/**
 * This file has been automatically generated by Pomm's generator.
 * You MIGHT NOT edit this file as your changes will be lost at next
 * generation.
 */

namespace App\Database\ApplicationSchema\AutoStructure;

use PommProject\ModelManager\Model\RowStructure;

/**
 * Register
 *
 * Structure class for relation application.register.
 * Register of event
 *
 *
 *
 * @see RowStructure
 */
class Register extends RowStructure
{
    /**
     * __construct
     *
     * Structure definition.
     *
     * @access public
     */
    public function __construct()
    {
        $this
            ->setRelation('application.register')
            ->setPrimaryKey(['register_id'])
            ->addField('register_id', 'int4')
            ->addField('event_id', 'int4')
            ->addField('created_at', 'timestamp')
            ->addField('updated_at', 'timestamp')
            ->addField('lastname', 'varchar')
            ->addField('firstname', 'varchar')
            ->addField('email', 'varchar')
            ;
    }
}
