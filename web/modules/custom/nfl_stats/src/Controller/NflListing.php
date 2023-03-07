<?php

  namespace Drupal\nfl_stats\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class NflListing extends ControllerBase {
    public function view() {
      return[
        '#type' => 'markup',
        '#markup' => $this->t('This is going to display NFL statistics')
      ];
    }
  }
