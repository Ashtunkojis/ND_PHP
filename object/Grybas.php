<?php
// include("./Krepsys.php");
class grybas
{

    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct(){
        $this->valgomas = (bool)(rand(0, 1));
        $this->sukirmijes = (bool)(rand(0, 1));
        $this->svoris = (rand(5, 45));
        
        
    }
    public function getValgomas(){
		return $this->valgomas;
	}

	public function setValgomas($valgomas){
		$this->valgomas = $valgomas;
	}

	public function getSukirmijes(){
		return $this->sukirmijes;
	}

	public function setSukirmijes($sukirmijes){
		$this->sukirmijes = $sukirmijes;
	}

	public function getSvoris(){
		return $this->svoris;
	}

	public function setSvoris($svoris){
		$this->svoris = $svoris;
	}
}
