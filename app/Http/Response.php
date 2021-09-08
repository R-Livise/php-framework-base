<?php

namespace App\Http;

class Response
{
  protected $view; //array,json,pdf

  public function __construct($view)
  {
    $this->view = $view; //home ,contact <div class=""></div>
  }

  public function getView()
  {
    return $this->view;
  }

  public function send()
  {
    $view = $this->getView();
    $content = file_get_contents(viewPath($view));
    require viewPath('layout');
  }
}
