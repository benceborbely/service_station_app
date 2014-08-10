<?php

/**
 * @Entity
 * @Table(name="client_to_vehicle")
 **/
class ClientToVehicle
{

    /** 
	 * @Id @Column(type="integer") 
	 * @ManyToOne(targetEntity="Client", inversedBy="client_vehicle_associations")
	 * @JoinColumn(name="client_id", referencedColumnName="client_id")
	 */
    protected $client_id;
	
    /** 
	 * @Id @Column(type="integer") 
	 * @ManyToOne(targetEntity="Vehicle", inversedBy="client_vehicle_associations")
	 * @JoinColumn(name="vehicle_id", referencedColumnName="vehicle_id")
	 */
    protected $vehicle_id;
	
    /** @Column (type="string") **/
    protected $number_plate;
	
    public function getClientId(){
        return $this->client_id;
    }
 
    public function getVehicleId(){
        return $this->vehicle_id;
    }
	
    public function setClientId($clientId){
        $this->client_id = $clientId;
    }
	
    public function setVehicleId($vehicleId){
        $this->vehicle_id = $vehicleId;
    }
	
}
