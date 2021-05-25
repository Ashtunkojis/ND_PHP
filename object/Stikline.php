<?php
class stikline
{

    private $turis;
    private $kiekis = 0;

    public function getTuris()
    {
        return $this->turis;
    }

    public function setTuris($turis)
    {
        $this->turis = $turis;
    }

    public function getKiekis()
    {
        return $this->kiekis;
    }

    public function setKiekis($kiekis)
    {
        $this->kiekis = $kiekis;
    }

    public function ipilti($kiekis)
    {
        $this->setKiekis($this->getKiekis() + $kiekis);
        if ($this->getKiekis() > $this->getTuris()) {
            $this->setKiekis($this->getTuris());
        }
    }
    public function ispilti(){
        return $this->getKiekis();
    }
}
