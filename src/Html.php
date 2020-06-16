<?php

namespace Pwcodigo\Solid;

class Html
{
    public function img(string $src)
    {
        return '<img src="images/photo.jpg">';
    }

    public function a(string $href, string $ancor){
        return '<a href="'. $href .'">'.$ancor .'</a>';
    }
}