<?php
namespace Concrete\Package\ThemeSupermint\Controller\Tools;

use Concrete\Core\Controller\Controller as RouteController;
use Concrete\Core\Http\ResponseFactoryInterface;
use Concrete\Package\ThemeSupermint\Src\Helper\ThemeObject;
use Concrete\Package\ThemeSupermint\Src\Models\ThemeSupermintOptions;
use Page;
use View;

defined('C5_EXECUTE') or die('Access Denied.');

class OverrideCss extends RouteController
{
    public function render()
    {
        $time_start = microtime(true);
        $c = Page::getByID($this->request->query->get('cID')); // Juste pour pouvoir afficher le nom de la page dans le fichier css
        $o = ThemeSupermintOptions::get();
        $option_object = new ThemeSupermintOptions();
        $t = ThemeObject::get($c);

        // On capte le code CSS dans le tampon
        ob_start();
        View::element(
            'override.css',
            [
                'o' => $o,
                'option_object' => $option_object,
                'pageTheme' => $t,
                'bodypattern' => $bodypattern,
                'c' => $c,
            ],
            'theme_supermint'
        );
        $style = ob_get_clean();

        $time_end = microtime(true);
        $time = $time_end - $time_start;

        $rf = $this->app->make(ResponseFactoryInterface::class);
        /*@var ResponseFactoryInterface $rf*/
        return $rf->create(
            "$style/ Generated Time $info : $time . ms / \n\n",
            200,
            [
                'Content-Type' => 'text/css',
            ]
        );
    }
}
