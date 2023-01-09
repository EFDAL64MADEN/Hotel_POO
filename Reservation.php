<?php

class Reservation
{
    private Client $_client;
    private Chambre $_chambre;
    private DateTime $_dateArrivee;
    private DateTime $_dateSortie;

    // public function __construct(Client $client, Chambre $chambre, $dateArrivee, $dateSortie)
    // {
    //     $this->_client = $client;
    //     $this->_chambre = $chambre;
    //     $this->_dateArrivee = new DateTime($dateArrivee);
    //     $this->_dateSortie = new DateTime ($dateSortie);
    //     // $hotel = $chambre->getHotel();
    // }

    public function __toString()
    {
        return "Réservation n°".$this->_numReservation.". Chambre ".$this->_chambre.", réservée par ".$this->_client.", du ".$this->_dateArrivee." au ".$this->_dateSortie;
    }

    public function getNbJour()
    {
        $nbJours = $this->_dateArrivee->diff($this->_dateSortie);
        return $nbJours->d." jours";
    }

}

?>