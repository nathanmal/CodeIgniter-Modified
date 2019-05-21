<?php defined('BASEPATH') OR exit('No direct script access allowed');


class View
{ 
    /**
     * Path to the view file
     * should be relative to VIEWPATH
     * @var string
     */
    private $path;


    /**
     * Data to be provided to the view when rendered
     * @var array
     */
    private $data = array();

    /**
     * Constructor
     * @param string $path [description]
     */
    public function __construct( $path = '', $data = array() )
    {
      $this->ci =& get_instance();
    }

    /**
     * Render the view if this instance is echo'ed or concatenated
     * @return string [description]
     */
    public function __toString()
    {
      $this->render();
    }

    public function merge( $data = array() )
    {

    }

    /**
     * Render the view
     * @param  boolean $return [description]
     * @return [type]          [description]
     */
    public function render( $return = FALSE )
    {
      $this->ci->load->view( $this->path, $thid->data );
    }

}