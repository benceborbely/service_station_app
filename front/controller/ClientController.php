<?php

require_once "entities/Client.php";

class ClientController extends Controller
{
	private $client;
	
	public function indexAction()
	{
		if( isset($_SESSION['client_id']) )
		{ 
			$clientRepo = $this->entityManager->getRepository('Client');
			$this->client = $clientRepo->findOneBy(array('client_id'=>$_SESSION['client_id']));
			$this->entityManager->flush();

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
		}
		else
		{	
			$this->renderForm('login',array('email' => 'alma'));
		}
	}
	
	public function saveAction()
	{
		$clientRepo = $this->entityManager->getRepository('Client');
		$this->client = $clientRepo->findOneBy(array('client_id'=>$_SESSION['client_id']));
		$this->entityManager->flush();
	
		if( isset($_POST['submit']) )
		{
			$this->client->setEmail($_POST['email']);
			$this->client->setLastname($_POST['lastname']);
			$this->client->setFirstname($_POST['firstname']);
			$this->client->setPhoneNumber($_POST['phone_number']);

			$client = $this->entityManager->merge($this->client);
			$this->entityManager->flush();
			
			$clientData = array(
			'email' => $this->client->getEmail(),
			'lastname' => $this->client->getLastname(),
			'firstname' => $this->client->getFirstname(),
			'phone_number' => $this->client->getPhoneNumber()
			);
					
			echo 'Adatait sikeresen elmentettük!';
					
			$this->renderForm('client',$clientData);

		}
		else
		{	
			$this->renderForm('login',array('email' => 'alma'));
		}
	}
	
}
