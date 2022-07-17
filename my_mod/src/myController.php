<?php
namespace Drupal\my_mod;
class myController {

  /**
   * @route: /path1
   */
  public function path1() {
    return array(
      '#markup'=> 'Welcome to D9 Website.'
    );
  }
}