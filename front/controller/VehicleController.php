<?php

class VehicleController extends Controller
{
	
	public function indexAction()
	{
		if( isset($_SESSION['client_id']) )
		{
			$vehicleRepo = $this->entityManager->getRepository('Vehicle');
			
			$veh = $vehicleRepo->findAll();
			//var_dump($veh);die();
			//$this->vehicle = $vehicleRepo->findOneBy(array('client_id'=>$_SESSION['client_id']));
			//$this->entityManager->flush();

			if( isset($this->client) )
			{
					$clientData = array(
						'email' => $this->client->getEmail(),
						'lastname' => $this->client->getLastname(),
						'firstname' => $this->client->getFirstname(),
						'phone_number' => $this->client->getPhoneNumber()
					);
					
					$this->renderForm('client',$clientData);
			}
		
			$this->renderForm('vehicle');
		}
		else
		{	
			$this->renderForm('login');
		}
	}
	
}
