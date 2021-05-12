<?php
class Casa {
    public $misure;
    public $citta;
    public $via;
    public $prezzo;

    public function __construct(int $_misure, string $_citta, string $_via, int $_prezzo)
    {
        $this->misure = $_misure;
        $this->citta = $_citta;
        $this->via = $_via;
        $this->prezzo = $_prezzo;
    }
}

class Negozio extends Casa {
    public $tipo;
    public $cucina;

    public function __construct(int $_misure, string $_citta, string $_via, string $_prezzo, string $_tipo, bool $_cucina)
    {
        parent::__construct($_misure, $_citta, $_via, $_prezzo, $_cucina);
        $this->tipo = $_tipo;
        $this->cucina = $_cucina;
    }
}

$casa1 = new Casa (10, "Milano", "Monte Napoleone", 12000000);
$negozio1 = new Negozio (10, "Milano", "Monte Napoleone", 12000000, "merceria", false);

echo $casa1->via."<br>";
echo $negozio1->tipo." ".$negozio1->prezzo;

?>