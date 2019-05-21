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

      if( $path ) $this->path = $path;

      if( ! empty($data) ) $this->data = $data;
    }

    /**
     * Render the view if this instance is echo'ed or concatenated
     * @return string [description]
     */
    public function __toString()
    {
      return $this->render(TRUE);
    }

    /**
     * Set view data
     * @param [type] $key   [description]
     * @param [type] $value [description]
     */
    public function set( $key, $value )
    {
      $this->data[$key] = $value;
    }

    /**
     * Merge view data
     * @param  array  $data [description]
     * @return [type]       [description]
     */
    public function merge( $data = array() )
    {
      if( is_array($data) ) 
      {
        $this->data = array_merge_deep( $this->data, $data );
      }
    }

    /**
     * Render the view
     * @param  boolean $return [description]
     * @return [type]          [description]
     */
    public function render( $return = FALSE )
    {
      // If returning output as a string
      if($return) return $this->ci->load->view( $this->path, $this->data, TRUE );
      // Otherwise output to browser/stdout
      $this->ci->load->view( $this->path, $this->data );
    }

}