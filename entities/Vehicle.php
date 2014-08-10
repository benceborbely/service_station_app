<?php

/**
 * @Entity
 * @Table(name="vehicle")
 **/
class Vehicle
{
    /** @Id @Column(type="integer") **/
    protected $vehicle_id;
	
    /** @Column(type="string") **/
    protected $make;
	
    /** @Column (type="string") **/
    protected $model;
	
	/** @Column (type="integer") **/
    protected $vintage;
     
	/** @Column (type="string") **/
    protected $fuel;
	
	/*
     * @OneToMany(targetEntity="Client", mappedBy="vehicle")
	 */
    protected $client_vehicle_associations;

    public function __construct()
    {
        $this->client_vehicle_associations = new ArrayCollection();
    }
	 
    public function getVehicleId(){
        return $this->vehicle_id;
    }
 
    public function getMake(){
        return $this->make;
    }
	
	public function getModel(){
        return $this->model;
    }
	
	public function getYear(){
        return $this->year;
    }
	
	public function getFuel(){
        return $this->year;
    }
 
 	public function getVehicles(){
        return $this->vehicles;
    }
 
    public function setMake($make){
        $this->make = $make;
    }
	
	public function setModel($model){
        $this->model = $model;
    }
 
    public function setVintage($vintage){
        $this->vintage = $vintage;
    }
 
    public function setFuel($fuel){
        $this->fuel = $fuel;
    }
	
}
