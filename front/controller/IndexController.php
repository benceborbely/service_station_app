<?php

class IndexController extends Controller
{
	public function indexAction()
	{
		if( isset($_SESSION['client_id']) )
		{
			$dataToView = array('client_id'=>$_SESSION['client_id']);
			$this->render('main',$dataToView);
		}
		else
		{
			$this->render('main');
		}
	}
}
