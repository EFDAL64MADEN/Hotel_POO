<?php

class Client
{
    private string $_prenom;
    private string $_nom;
    private string $_email;
    private string $_tel;
    private array $_reservations;

    public function __construct(string $prenom, string $nom, string $email, string $tel)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_email = $email;
        $this->_tel = $tel;
        $this->_reservations = [];
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom.". Email : ".$this->_email.", téléphone : ".$this->_tel;
    }

    public function ajouterReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
    }

}

?>