<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once BASEPATH . 'core/Model.php';

class Model extends CI_Model
{
    /**
     * Static function for creating model instances
     * @param  string $name   name of the model (ie 'user')
     * @param  array  $vars   values
     * @return [type]         [description]
     */
    public static function factory( $name, $vars = array() )
    {
      
    }

    /**
     * Constructor
     * Initialize model and load model data depending on key value
     * @param string $key [description]
     */
    public function __construct( $key = '' )
    {

    }



    /**
     * Save this model
     * @return [type] [description]
     */
    public function save()
    {

    }





}