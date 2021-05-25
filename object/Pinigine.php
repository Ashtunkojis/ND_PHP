<?php
class Pinigine
{

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;
    private $monetos = 0;
    private $banknotai = 0;



    public function setPopieriniaiPinigai($kiekis)
    {
        $this->popieriniaiPinigai = $kiekis;
    }
    public function setMetaliniaiPinigai($kiekis)
    {
        $this->metaliniaiPinigai = $kiekis;
    }

    public function getPopieriniaiPinigai()
    {
        return $this->popieriniaiPinigai;
    }
    public function getMetaliniaiPinigai()
    {
        return $this->metaliniaiPinigai;
    }
    public function getMonetos(){
		return $this->monetos;
	}

	public function setMonetos($monetos){
		$this->monetos = $monetos;
	}

	public function getBanknotai(){
		return $this->banknotai;
	}

	public function setBanknotai($banknotai){
		$this->banknotai = $banknotai;
	}

    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->setMetaliniaiPinigai($this->getMetaliniaiPinigai() + $kiekis);
            $this->setMonetos($this->getMonetos() + 1);
        } else {
            $this->setPopieriniaiPinigai($this->getPopieriniaiPinigai() + $kiekis);
            $this->setBanknotai($this->getBanknotai() + 1);
        }
    }

    public function skaiciuoti(){
        $suma = $this-> getPopieriniaiPinigai() + $this-> getMetaliniaiPinigai();
        return $suma;
    }
    public function monetos (){
        return $this->getMonetos();
    }
    public function banknotai (){
        return $this->getBanknotai();
    }
}
