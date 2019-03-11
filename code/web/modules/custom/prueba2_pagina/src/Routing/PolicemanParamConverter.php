<?php

namespace Drupal\prueba2_pagina\Routing;

use Drupal\Core\ParamConverter\ParamConverterInterface;
use Drupal\prueba2_pagina\Policeman;

class PolicemanParamConverter implements ParamConverterInterface {

  public function applies($definition, $name, Route $route) {
    return !empty($definition['type']) && $definition['type'] == 'policeman';
  }

  public function convert($value, $definition, $name, array $defaults) {
    return new Policeman($value);
  }
}
