<?php

class Hotel
{
    private string $_nomHotel;
    private string $_adresse;
    private string $_cp;
    private string $_ville;
    private array $_rooms;
    private array $_reservations;

    public function __construct(string $nomHotel, string $adresse, string $cp, string $ville)
    {
        $this->_nomHotel = $nomHotel;
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
        $this->_rooms = [];
        $this->_reservations = [];
    }

    public function __toString()
    {
        return "Hôtel : ".$this->_nomHotel.", ".$this->_adresse.", ".$this->_cp." ".$this->_ville;
    }

    public function ajouterChambre(Chambre $chambre)
    {
        $this->_rooms[] = $chambre;
    }

    public function ajouterReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
    }
    public function getHotel()
    {
        return $this->_nomHotel;
    }

}

?>