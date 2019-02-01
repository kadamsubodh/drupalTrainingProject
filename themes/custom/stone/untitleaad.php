<?php

/**
 * @file
 * Functions to support theming in the Bartik theme.
 */

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Template\Attribute;
use Drupal\taxonomy\Entity\Term;
// global $cityId;
// global $city;


/**
 * Implements hook_preprocess_HOOK() for HTML document templates.
 */
function stone_preprocess_page(&$variables) {
  // If on a node add or edit page, add a node-layout class.
 
$current_path = \Drupal::service('path.current')->getPath();
//print_r($current_path);exit;
$path_args = explode('/', $current_path);
$variables['location_path'] = $path_args[3];
 $cityId = '';
 //echo $path_args[3];exit;
 if($path_args[1] == 'taxonomy') {
 	
	 $cityId = \Drupal::configFactory()->getEditable('contactus.settings')->get('cityId');
	 if($cityId != "") {

	  \Drupal::configFactory()->getEditable('contactus.settings')->clear('cityId')->save();
	  //echo "oldID: ". $cityId; echo '<pre>';
	  \Drupal::configFactory()->getEditable('contactus.settings')
	      ->set('cityId', $path_args[3])
	      ->save();
	      $cityId = \Drupal::configFactory()->getEditable('contactus.settings')->get('cityId');
	  //echo "newID: ". $cityId; echo '<pre>';exit;

	 } else {
	 \Drupal::configFactory()->getEditable('contactus.settings')
	      ->set('cityId', $path_args[3])
	      ->save();
	      $cityId = \Drupal::configFactory()->getEditable('contactus.settings')->get('cityId');
	 }  
} 
$variables['#cache']['max-age'] = 0;
$cityId = \Drupal::configFactory()->getEditable('contactus.settings')->get('cityId');
if($cityId != '') {
 
    $term = Term::load($cityId);
	$city=$term->getName();
   	$variables['cityname']=$city;

    
     //$variables['location_cookie'] = $_COOKIE['city']['cityname'];	
     //print_r($variables['location_cookie']);exit;
 
    }
}

