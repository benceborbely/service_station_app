<?php

abstract class Controller
{	
	protected $entityManager;
	
	function __construct(Doctrine\ORM\EntityManager  $entityManager)
	{
		$this->entityManager = $entityManager;
	}
	
	protected function render($templateName, $data = array())
	{
        include APP_PATH . '/front/view/header.php';
		
        extract($data);
        ob_start();
		
		$path = strpos($templateName, 'Form') ? APP_PATH . '/front/view/form/' : APP_PATH . '/front/view/';
		include $path . $templateName . '.php';
        $renderedView = ob_get_clean();
        echo $renderedView;
		
        include APP_PATH . '/front/view/footer.php';
	}
	
}
