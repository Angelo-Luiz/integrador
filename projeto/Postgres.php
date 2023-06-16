<?php   
class Postgres {
    private $dbname;
    private $host;
    private $pass;
    private $port;
    private $user;

    public function __construct($usuario, $senha) 
    {
        $this->dbname = 'marina';
        $this->host = 'localhost';
        $this->user = $usuario;
        $this->pass = $senha;
        $this->port = '5432';
    }
    
    public function criaConexao(){

        try{
            $conexao = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->pass);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            echo "conexao estabelecida";
            return $conexao;
        
        } catch(PDOExcepdtion $e){
            echo "erro ao conectar ao banco" . $e->getMessage();
            
        }
    }

}


?>
