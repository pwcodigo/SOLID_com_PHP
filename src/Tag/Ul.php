<?php

namespace Pwcodigo\Solid\Tag;

class Ul {
    public function render(string $content){
        return  '<ul>'.$content.'</ul>';
    }
}