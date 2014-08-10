<?php

/**
 * @Entity
 * @Table(name="client")
 **/
class Client
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $client_id;
	
	/** @Column(type="string") **/
    protected $email;
	
    /** @Column(type="string") **/
    protected $password;
	
    /** @Column (type="string") **/
    protected $lastname;
	
	/** @Column (type="string") **/
    protected $firstname;
	
	/** @Column (type="string") **/
    protected $phone_number;

	/*
     * @OneToMany(targetEntity="Vehicle", mappedBy="client")
	 */
    protected $client_vehicle_associations;
	
	public function __construct()
    {
        $this->client_vehicle_associations = new ArrayCollection();
    }
	
	public function getClientId(){
        return $this->client_id;
    }
	 
    public function getEmail(){
        return $this->email;
    }
 
    public function getPassword(){
        return $this->password;
    }
	
	public function getLastname(){
        return $this->lastname;
    }
	
	public function getFirstname(){
        return $this->firstname;
    }
	
	public function getPhoneNumber(){
        return $this->phone_number;
    }
 
 	public function getVehicles(){
        return $this->vehicles;
    }
 
    public function setEmail($email){
        $this->email = $email;
    }
	
	public function setPassword($password){
        $this->password = $password;
    }
 
    public function setLastname($lastname){
        $this->lastname = $lastname;
    }
 
    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

	public function setPhoneNumber($phoneNumber){
        $this->phone_number = $phoneNumber;
    }

}
