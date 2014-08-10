<?php

class VehicleController extends Controller
{
	
	public function indexAction()
	{
		if( isset($_SESSION['client_id']) )
		{
			$vehicleRepo = $this->entityManager->getRepository('Vehicle');

			//@TODO find client's vehicles.
		
			$this->render('vehicleForm');
		}
		else
		{	
			$this->render('loginForm');
		}
	}
	
}
