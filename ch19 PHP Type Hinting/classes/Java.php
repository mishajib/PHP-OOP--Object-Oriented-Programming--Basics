<?php
class Java{
  public $fromphp;
  public function __construct(Php $a){ #here define a object type as a argument
    $this->fromphp = $a;
    $this->fromphp->framework();
    $this->fromphp->cms();
  }
}
