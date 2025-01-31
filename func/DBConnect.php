<?php

class Connect
{
    // Database Connection Properties
    protected $host = 'projetointegradorpiiv.mariadb.database.azure.com';
    protected $user = 'adminuser@projetointegradorpiiv';
    protected $password = 'P@$$w0rd';
    protected $database = 'semijoiaprod';

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail to connect! " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}

?>
