<?php

namespace AmoNG\Entities;

use AmoNG\Entities\AbstractEntity;

class Contacts extends AbstractEntity
{
  protected $method_url = '/api/v2/contacts';

  public function __construct()
  {
    parent::__construct();
  }
}
