<?php
include_once(__DIR__ . "/dontenvreader.php");

use DevCoder\DotEnv;
(new DotEnv('controller/.env'))->load();



$DB_HOST = getenv('DATABASE_HOST');
$DB_USER = getenv('DATABASE_USER');
$DB_PASSWORD = getenv('DATABASE_PASSWORD');
$DB_NAME = getenv('DATABASE_NAME');

class Database{
  
  // Connect =================================================================
  private static function connect(){
    global $DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME;
    $conn = new mysqli(getenv('DATABASE_HOST'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'), getenv('DATABASE_NAME'));
    if ($conn->connect_error) {
      error_log("Connection failed: " . $conn->connect_error);
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
    die("no");
  }
  // =========================================================================
    
    // Connect =================================================================
    private static function close($conn, $stmt = FALSE){
        if($stmt){
            $stmt->close();
        }
        $conn->close();
    }
    // =========================================================================
    

    
    // Select all ==============================================================
    public static function select_all(string $table, array $columns,  $limit = False){
        
        $conn = self::connect();

        $col = implode(", ",$columns);

        if ($limit){
          $sql = "SELECT $col FROM $table LIMIT = $limit";
        }else{
          $sql = "SELECT $col FROM $table";
        }


        $result = $conn->query($sql);

        // TODO cambiami con una funzione passata come parametro
        $ret = [];
        if ($result->num_rows > 0) {
          while( $row = $result->fetch_assoc()){
            $ret[] = $row;
          }
          // output data of each row
        } else {
          $ret[]  = "0 results";
        }

        self::close($conn);
        return $ret;

    }
    // =========================================================================



    public static function select(string $table, array $columns, array $dict, int $limit = 0){
        
        $conn = self::connect();

        $sql_col = implode(", ", $columns);

        $count = 0;
        $where = "";
        $bind_v = [];

        foreach($dict as $k => $v){
          $where .= $k . "=? AND";
          $bind_v[] = $v;
        }
        $where = substr($where, strlen($where) - 4);

        $sql = "SELECT $sql_col FROM $table WHERE  id=? AND firstname=? AND lastname=?";

        $stmt = $conn->prepare($sql);
        $bind = $stmt->bind_param("sss",  ...$bind_v);
        $exec = $stmt->execute();
        $stmt->bind_result($result);
        $stmt->fetch();
        
        
        // TODO cambiami con una funzione passata come parametro
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        self::close($conn, $stmt);
    }

}




// // =============================================================================
// //  INSERT ---------------------------------------------------------------------
// // =============================================================================
// // Check connection
// $sql = "INSERT INTO mytable (col1, col2, col3) VALUES (?, ?, ?)";
// $stmt = $conn->prepare($sql);
// $bind = $stmt->bind_param("sss", $firstname, $lastname, $email);



// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }




// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $exec = $stmt->execute();


// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }



// $stmt->close();
// $conn->close();


// // =============================================================================
// //  ERRORS AND LOGGING  --------------------------------------------------------
// // =============================================================================
// if ($mysqli->connect_errno) {
//     error_log("Connect failed:");
//     error_log( print_r( $mysqli->connect_error, true ) );
//     exit();
// }

// if ( false === $stmt ) {
//     error_log('mysqli prepare() failed: ');
//     error_log( print_r( htmlspecialchars($stmt->error), true ) );
//     exit();
// }

// if ( false === $bind ) {
//     error_log('bind_param() failed:');
//     error_log( print_r( htmlspecialchars($stmt->error), true ) );
//     exit();
// }

// if ( false === $exec ) {
//     $exec = error_log('mysqli execute() failed: ');
//     error_log( print_r( htmlspecialchars($stmt->error), true ) );
// }
 
    
// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

// error_log( print_r( htmlspecialchars($stmt->error), true ) );



// // =============================================================================
// //  SELECT ---------------------------------------------------------------------
// // =============================================================================



// // =============================================================================
// //  SELECT WHERE ---------------------------------------------------------------
// // =============================================================================
// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
// $sql = "SELECT col1, col2, col3 FROM  mytable WHERE col1=?, col2=?, col3=?)";
// $stmt = $conn->prepare($sql); 
// $bind = $stmt->bind_param("sss", $firstname, $lastname, $email);



// $result = $stmt->get_result(); // get the mysqli result
// $user = $result->fetch_assoc(); // fetch data   


// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
// $stmt->close();

// // =============================================================================
// // DELETE ----------------------------------------------------------------------
// // =============================================================================
// $sql = "DELETE FROM users WHERE id=?"; // SQL with parameters
// $stmt = $conn->prepare($sql); 

// $bind = $stmt->bind_param("s", $id);
// $exec = $stmt->execute();

// if ($exec === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }


// $stmt->close();
// $conn->close();

// // =============================================================================
// // DELETE ----------------------------------------------------------------------
// // =============================================================================

// $sql = "UPDATE MyGuests SET lastname=? WHERE id=?";
// $stmt = $conn->prepare($sql); 

// $bind = $stmt->bind_param("si", $lastname, $id);
// $exec = $stmt->execute();


// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }







// ?>