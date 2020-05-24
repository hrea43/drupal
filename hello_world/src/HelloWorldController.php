<?php 

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the salutation message 
 */

class HelloWorldController extends ControllerBase {

    public function hello_world(){
      $build = [
        '#markup' => t('BENVINGUT!'),
      ];
      return $build;
    }
}


?>
