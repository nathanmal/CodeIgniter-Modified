<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Profiler 
{

  private $sections = array(
    'benchmarks',
    'request',
    'database',
    'session'
  );


  /**
   * Class constructor
   *
   * Initialize Profiler
   *
   * @param array $config Parameters
   */
  public function __construct($config = array())
  {
    $this->ci =& get_instance();
    $this->ci->load->language('profiler');

    log_message('info', 'Profiler Class Initialized');
  }


  public function _compile_benchmarks()
  {
    $markers = $this->ci->benchmark->marker;

    $execution = $markers['total_execution_time_end'] - $markers['total_execution_time_start'];

    echo $execution;

    return print_r($this->ci->benchmark->marker, TRUE);
  }


  public function _compile_request()
  {

  }


  public function _compile_database()
  {

  }


  public function _compile_session()
  {

  }


  public function run()
  {
    echo '<div id="ci-profiler">';

    foreach( $this->sections as $section )
    {
      echo '<section id="ci-profiler-' . $section .'">';

      echo '<h2>' . ucfirst($section) . '</h2>';

      $method = '_compile_' . $section;

      echo $this->{$method}();

      echo '</section>';
    }


    echo '</div>';
  }
}