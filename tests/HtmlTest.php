<?php
namespace Pwcodigo\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testEsteEUmSimplesExemploDeTeste()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCriaUmLinkComImagemComoAncora()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');
        $link = $html->a('http://seusite.com.br/perfil', $img);

        $this->assertEquals('<a href="http://seusite.com.br/perfil"><img src="images/photo.jpg"></a>',$link);
    }

    public function testCriaUmLista()
    {
        $html = new Html;
        $lista = $html->ul('<li>Aqui é ul</li>');


        $this->assertEquals('<ul><li>Aqui é ul</li></ul>',$lista);
    }
}


?>