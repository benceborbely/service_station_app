<?php

require_once(APP_PATH . '/entities/Client.php');

class LoginController extends Controller
{
	
	public function signinAction()
	{
		if( isset($_POST['submit']) && $_POST['password'] === $_POST['password2'] )
		{
			$client = new Client;
			$client->setEmail($_POST['email']); 
			$client->setPassword($_POST['password']);
			$client->setLastname($_POST['lastname']);
			$client->setFirstname($_POST['firstname']);

			$this->entityManager->persist($client);
			$this->entityManager->flush();
		}
		else
		{	
			$this->renderForm('signin');
		}
	}
	
	public function loginAction()
	{
		if( isset($_POST['submit']) )
		{
			$clientRepo = $this->entityManager->getRepository('Client');
			$client = $clientRepo->findOneBy(array('email'=>$_POST['email']));
			$this->entityManager->flush();
			//var_dump($client);die();
			if( isset($client) )
			{
				if( $_POST['password'] === $client->getPassword() )
				{
					$_SESSION['client_id'] = $client->getClientId();
					
					$clientData = array(
						'client_id' => $client->getClientId(),
						'email' => $client->getEmail(),
						'lastname' => $client->getLastname(),
						'firstname' => $client->getFirstname(),
						'phone_number' => $client->getPhoneNumber()
					);

					$this->renderForm('client',$clientData);
				}
				else
				{
					$this->renderForm('login');
				}
			}
			else
			{
				$this->renderForm('login');
			}
		}
		else
		{	
			$this->renderForm('login');
		}
	}
	
	public function logoutAction()
	{
		session_destroy();
		header("Location: index.php");
		die();
	}
	
}
