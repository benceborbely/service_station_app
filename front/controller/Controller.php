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
        include APP_PATH . '/front/view/' . $templateName . '.php';
        $renderedView = ob_get_clean();
        echo $renderedView;
		
        include APP_PATH . '/front/view/footer.php';
	}
	
	protected function renderForm($formName, $data = array())
	{
        include APP_PATH . '/front/view/header.php';
	
        extract($data);
        ob_start();
        include APP_PATH . '/front/view/form/' . $formName . 'Form.php';
        $renderedForm = ob_get_clean();
        echo $renderedForm;
		
        include APP_PATH . '/front/view/footer.php';
	}
	
}