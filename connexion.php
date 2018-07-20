  <?php
  /* Connexion à une base ODBC avec l'invocation de pilote */
  class connexion {
    private $host;
    private $dbname;
    private $login;
    private $psw;

    public  $bdd;

    public function connexion() {
      // constructeur 
      $this->host     = '192.168.3.125';
      $this->dbname   = 'animal_world';
      $this->login    = 'root';
      $this->psw      = 'sqlcoda#2018!';
    }
    
    public function connect() {
      
      try { $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->login, $this->psw);
      } catch (Exception $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }
    }

    public function para ($para1,$para2,$para3="",$para4="",$para5="") {

      $reponse = $this->bdd->query("SELECT $para1 FROM `$para2` WHERE $para3");
      $donnees = $reponse->fetchAll();
      foreach ($donnees as $valeur) {
        echo $valeur[$para1]."<br>";
    };
    $reponse->closeCursor(); // Termine le traitement de la requête
     
    }
  }
  
  ?>
