<?php

class AppController{

    private $request;

    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isPost()
    {
        return $this->request === 'POST';
    }

    protected function isGet()
    {
        return $this->request === 'GET';
    }
    protected function render(string $template=null,array $variables=[])
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $templatePath = "public/views/".$template.".php";
        $output = "File not found";

        if(file_exists($templatePath))  
        {
            extract($variables);
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }

        print $output;
    } 
}