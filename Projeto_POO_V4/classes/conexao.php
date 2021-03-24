<?php
abstract class Conexao
{
	private static $conn;
	// public static $host = '127.0.0.1';
	// public static $dbname = 'bd_hc';
	// public static $user = 'root';
	// public static $pass = '';
	public static function getConn(){
        if (self::$conn == null){
            self::$conn = new PDO('mysql: host=127.0.0.1; dbname=bd_hc', 'root', '');
        }
        return self::$conn;
    }
}


	


// 	public static function conectar()
// 	{

// 		$conexao = new PDO(
// 			"mysql:host=self::$host;dbname=$dbname",
// 			"$user",
// 			"$pass"
// 		);

// 		return $conexao;
// 	}
// }

// abstract class Connection {
//     private static $conn;

//     public static function getConn(){
//         if (self::$conn == null){
//             self::$conn = new PDO('mysql: host=localhost; dbname=database', 'root', '');
//         }
//         return self::$conn;
//     }

// }