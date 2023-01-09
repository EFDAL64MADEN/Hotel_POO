<?php

class Chambre
{
    private string $_numero;
    private int $_nbLits;
    private bool $_wifi;
    private float $_prix;
    private bool $_dispo;
    private static array $_chambres;
    private Hotel $_hotel;

    public function __construct(string $numero, int $nbLits, bool $wifi, float $prix, Hotel $hotel)
    {
        $this->_numero = $numero;
        $this->_nbLits = $nbLits;
        $this->_wifi = $wifi;
        $this->_prix = $prix;
        $this->_dispo = false;
        self::$_chambres[] = $this;
        $this->_hotel = $hotel;
        $hotel->ajouterChambre($this);
    }

    public function getWifi()
    {
        if($this->_wifi == true){
            return "oui";
        } else {
            return "non";
        }
    }

    public function getDispo()
    {
        if($this->_dispo == false){
            return "disponible";
        } else {
            return "non disponible";
        }
    }

    public function __toString()
    {
        return "Chambre n°".$this->_numero.", ".$this->_nbLits." lits. Wifi : ".$this->getWifi().". Prix : ".$this->_prix."€ par nuit. Disponibilité : ".$this->getDispo().".";
    }

    public function ajouterReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
    }

    /**
     * Get the value of _nbLits
     *
     * @return  int
     */
    public function getNbLits()
    {
        return $this->_nbLits;
    }
}

?>