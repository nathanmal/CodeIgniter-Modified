<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Asset
{
  /**
   * Registered assets
   * @var array
   */
  private $_registered = array();

  /**
   * Asset queue
   * @var array
   */
  private $_queue = array();

  /**
   * Get the absolute URL for the asset
   * @param  [type] $path [description]
   * @return [type]       [description]
   */
  public static function url( $path )
  {
    if( strpos($path, 'http') === 0 ) return $path;

    return CI_BASEURL . '/assets/' . $path;
  }

  /**
   * Get the src URL for the asset
   * @param  [type] $path [description]
   * @return [type]       [description]
   */
  public static function src( $path )
  {

  }

  /**
   * Get the absolute path of an asset
   * @param  [type] $path [description]
   * @return [type]       [description]
   */
  public static function path( $path )
  {

  }


  public static function link( $path, $media = 'all' )
  {
    $link  = '<link rel="stylesheet" type="text/css" ';
    $link .= 'href="' . Asset::url($path) . '" ';
    $link .= 'media="'. $media .'" />';

    return $link;
  }

  /**
   * Register an asset/package
   * @param  [type] $name   [description]
   * @param  array  $assets [description]
   * @param  array  $dep    [description]
   * @return [type]         [description]
   */
  public static function register( $name, array $assets = array(), array $config = array() )
  {
    if( ! isset( self::$_registered[$name]) )
    {
      self::$_registered[$name] = array( 'assets' => $assets, 'config' => $config );
    }
  }

  /**
   * Queue an asset for inclusion
   * @param  [type]  $name   [description]
   * @param  array   $assets [description]
   * @param  boolean $footer [description]
   * @return [type]          [description]
   */
  public static function queue( $name )
  {
    
  }

  /**
   * Output script tags
   * @param  boolean $footer [description]
   * @return [type]          [description]
   */
  public static function scripts( $footer = FALSE )
  {

  }

  /**
   * Output stylesheet links
   * @return [type] [description]
   */
  public static function styles()
  { 

  }

}