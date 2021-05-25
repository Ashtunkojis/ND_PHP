<?php

// include("./Grybas.php");
class krepsys
{


    public function getMaxSvoris()
    {
        return $this->maxSvoris;
    }

    public function setMaxSvoris($maxSvoris)
    {
        $this->maxSvoris = $maxSvoris;
    }
    public function getGrybuSvoris()
    {
        return $this->grybuSvoris;
    }

    public function setGrybuSvoris($grybuSvoris)
    {
        $this->grybuSvoris = $grybuSvoris;
    }
    public function eitiGrybauti($krepsys, $kiekPririnkti)
    {
        static $grybuKrepsyje = 0;

        static $grybuCount = 0;
        while ($grybuKrepsyje < $kiekPririnkti) {

            $grybas = new Grybas;
            if (($grybas->getValgomas()) && (!$grybas->getSukirmijes())) {
                $grybasAr[] = $grybas;
                $krepsys = $grybasAr;
                $grybuKrepsyje += $grybas->getSvoris();
                $grybuCount++;
            }
        }
        echo 'I krepsi ideta ' . $grybuCount . ' grybai, surinktas svoris ' . $grybuKrepsyje . ' g. ' . '<br>';
        return $krepsys;
    }
}
