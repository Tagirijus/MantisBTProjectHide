<?php

class MantisBTProjectHidePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'MantisBT Project Hide';
    $this->description = 'Hides inactive MantisBT projects on the "manage projects page".';

    $this->version     = '0.1';
    $this->requires    = array(
      'MantisCore'       => '2.5.1',
    );

    $this->author      = 'Manuel Senfft';
    $this->contact     = 'info@tagirijus.de';
    $this->url         = 'http://www.tagirijus.de';
  }

  function hooks() {
    return array(
        'EVENT_MANAGE_PROJECT_PAGE' => 'hide_projects'
    );
  }

  function hide_projects($p_event) {
      echo '<table>GUGUCK!</table>';
  }

}