<?php

class OrderController extends Controller
{
	
	public function orderAction()
	{
		if( isset($_POST['submit']) )
		{
			
		}
		else
		{	
			$this->renderForm('order');
		}
	}
	
}
