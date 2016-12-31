<?php
/**
 * Created by PhpStorm.
 * User: Rohan
 * Date: 12/26/2016
 * Time: 7:43 AM
 */

Class View{

    protected $data;

    protected $path;

    protected static function getDefaultViewPath()
    {
        $router = App::getRouter();
        if(!router)
        {
            return false;
        }
        $controller_dir = $router->getController();
        $template_name = $router->getMethodPrefix().$router->getAction().'.html';
        return VIEWS_PATH.DS.$controller_dir.DS.$template_name;
    }

    public function __construct($data = array(), $path = null)
    {
        if (!$path)
        {
            $path = self::getDefaultViewPath();
        }
        if(!file_exists($path))
        {
            throw new Exception('Template file not found: ' .$path);
        }
        $this->path = $path;
        $this->data = $data;
    }

    public function render()
    {
        $data = $this->data;

        ob_start();
        include($this->path);
        $content = ob_get_clean();

        return $content;
    }
}