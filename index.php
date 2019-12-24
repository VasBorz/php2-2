<!--1. Создать структуру классов ведения товарной номенклатуры.+ -->
    <!--б) Есть цифровой товар+, штучный физический товар и товар на вес. + -->
    <!--в) У каждого есть метод подсчета финальной стоимости. + -->
    <!--г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
    У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах.
    У всех формируется в конечном итоге доход с продаж.-->
    <!--д) Что можно вынести в абстрактный класс, наследование?-->
<?php
    spl_autoload_register(function ($ClassName){
        include "inc/$ClassName.class.php";
    });

    $obj = new SingleProd();
    //$obj = new DigProd();
    // $obj = new WeightProd();

    $obj->setPrice(10);
    $obj->setAmount(20);

    echo $obj->ShowResults();
    echo $obj->getFinalPrice();


//2. *Реализовать паттерн Singleton при помощи traits.

    trait Singleton {
        public function getConnection()
        {
            return $this->conn;
        }
    }

// Singleton to connect db.
    class ConnectDb {
        // Hold the class instance.
        use Singleton;

        private static $instance = null;
        private $conn;
        private $host = 'localhost';
        private $user = 'db user-name';
        private $pass = 'db password';
        private $name = 'db name';

        // The db connection is established in the private constructor.
        private function __construct()
        {
            $this->conn = new PDO("mysql:host={$this->host};
        dbname={$this->name}", $this->user,$this->pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        }
        public static function getInstance()
        {
            if(!self::$instance)
            {
                self::$instance = new ConnectDb();
            }

            return self::$instance;
        }

    }