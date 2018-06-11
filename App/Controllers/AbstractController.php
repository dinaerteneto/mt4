<?php 

namespace App\Controllers;

abstract class AbstractController
{
    private $view;
    private $params = [];

    private function setParams($params = [])
    {
        $this->params = $params;
    }

    private function getParams()
    {
        return $this->params;
    }

    protected function render($view, $params = [])
    {
        $this->view = $view;
        $this->setParams($params);

        $current = get_class($this);
        $singleClassName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current))));
        if (file_exists(__DIR__."/../Views/layout.php")) {
            include(__DIR__."/../Views/layout.php");
        } else {
            return $this->renderPartial($view, $params);
        }
    }
  
    protected function content()
    {
        extract($this->getParams());
        ob_start();

        $current = get_class($this);
        $singleClassName = strtolower(str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current)));
        include_once __DIR__."/../Views/{$singleClassName}/{$this->view}.php";

        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    protected function renderPartial($view, $params = [])
    {
        $this->view = $view;
        $this->setParams($params);
        
        echo $this->content();
    }
}
