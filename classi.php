<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>classi</h1>

  <?php

  class User
  {
    public $nome;
    public $cognome;
    public $eta;
    public $auto;
    public static $specie = 'umano';
    public static $saluto = 'ciao';

    public function __construct($nome, $cognome, $eta, Auto|null $auto)
    {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->eta = $eta;
      $this->auto = $auto;
    }


    public function isMaggiorenne()
    {
      return $this->eta > 18 ? 'è maggiorenne' : 'è minorenne';
    }

    public static function saluto()
    {
      return self::$saluto;
    }
  }


  class Auto
  {
    public $modello;
    public $colore;
    public $utente;
    public function __construct($modello, $colore)
    {
      $this->modello = $modello;
      $this->colore = $colore;
    }
  }

  // $mattia = new User('Mattia', 'Esposito', 27, new Auto('corsa', 'gialla'));
  $mattia = new User('Mattia', 'Esposito', 27, null);



  echo $mattia->saluto(), '<br> Razza:', User::$specie;

  var_dump($mattia);
  echo $mattia->isMaggiorenne();

  if ($mattia->auto == null) {
    echo '<br> mattia non ha l auto <br>';
  }
  ?>



</body>

</html>