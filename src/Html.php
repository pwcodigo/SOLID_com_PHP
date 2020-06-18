<?php

namespace Pwcodigo\Solid;

class Html
{
    // Isso aqui é um método mágico, ele automaticamente executa para mim
  public function __call(string $nomeDoMetodo, array $argumentos)
  {
      $class = '\Pwcodigo\Solid\Tag\\'.ucfirst($nomeDoMetodo);
      return call_user_func_array([new $class, 'render'], $argumentos);
  }
}