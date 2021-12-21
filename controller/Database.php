<?php
include_once(__DIR__ . "/dontenvreader.php");

use DevCoder\DotEnv;
(new DotEnv('controller/.env'))->load();



class Database{

  // Connect ===================================================================
  private static function connect(){
    $conn = new mysqli(getenv('DATABASE_HOST'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'), getenv('DATABASE_NAME'));
    if ($conn->connect_error) {
      error_log("Connection failed: " . $conn->connect_error);
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
  // ===========================================================================
  
  // Connect ===================================================================
  private static function close($conn, $stmt = FALSE){
      if($stmt){
          $stmt->close();
      }
      $conn->close();
  }
  // ===========================================================================
  

  public static function get_anon(){
    $conn = self::connect();

    $ret = [];

    // retrieve a random animal and color from table ---------------------------
    $sql_animal = "SELECT `ANIMAL` FROM `random` WHERE `ANIMAL` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $sql_color = "SELECT `COLOR` FROM `random` WHERE `COLOR` IS NOT NULL ORDER BY RAND() LIMIT 1";
    
    $animal = $conn->query($sql_animal);
    $color = $conn->query($sql_color);
        
    if ($animal->num_rows > 0) {$ret["ANIMAL"] = $animal->fetch_assoc()["ANIMAL"];} 
    if ($color->num_rows > 0) {$ret["COLOR"] = $color->fetch_assoc()["COLOR"];}
    // -------------------------------------------------------------------------
    
    self::close($conn);
    return $ret;
  }


  // Select all ================================================================
  public static function select_all(string $table, array $columns,  $limit = False){
      
      $conn = self::connect();

      $col = implode(", ",$columns);

      // if limit is set -------------------------------------------------------
      if ($limit){
        $sql = "SELECT $col FROM $table LIMIT = $limit";
      }else{
        $sql = "SELECT $col FROM $table";
      }
      // -----------------------------------------------------------------------
      
      
      // Get data --------------------------------------------------------------
      $result = $conn->query($sql);
      
      $ret = [];
      if ($result->num_rows > 0) {
        while( $row = $result->fetch_assoc()){
          $ret[] = $row;
        }
      } else {
        $ret[]  = "0 results";
      }
      // -----------------------------------------------------------------------

      self::close($conn);
      return $ret;

  }
  // ===========================================================================

  // Select ====================================================================
  public static function select(string $table, array $columns, string $user, int $limit = 0){
      
    $conn = self::connect();

    $ret = [];

    // get the desidered columns -----------------------------------------------
    $sql_col = implode(", ", $columns);
    $sql = "SELECT $sql_col FROM $table WHERE USER=?";
    // -------------------------------------------------------------------------
    
    
    // Retrieving the results --------------------------------------------------
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();    
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $ret[] = $row;
      }
    } else {
      echo "0 results";
    }
    // -------------------------------------------------------------------------


    self::close($conn, $stmt);
    return $ret;
  }

  private static function get_pepper(){
    // getting pepper for each user ==========================================
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $pepper = "";
    for ($i=0; $i < 22; $i++) {
      $index = rand(0, strlen($chars));
      $entry = substr($chars, $index, 1);
      $pepper .= $entry;
    }
    return $pepper;
    // =======================================================================
  }

  
  public static function signup(string $user, string $email, string $password){
    
    $conn = self::connect();

    // Hasing, salting and peppering password ================================
    $pepper = self::get_pepper();
    $password = $password . $pepper;
    $password_hash = password_hash($password, PASSWORD_DEFAULT, array('cost' => 9));
    // =======================================================================
    
    
    // SQL query =============================================================
    $sql =  "INSERT INTO `users` (`ID`, `USER`, `EMAIL`, `PASS`, `PEPPER`, `ACTIVATED`) VALUES (NULL, ?, ?, ?, ?, 0);";
    $stmt = $conn->prepare($sql);
    // =======================================================================
    

    // check for errors ======================================================
    if (!$stmt){
      error_log("Error while creating user: " . $conn->error);
    }
    $stmt->bind_param("ssss", $user, $email, $password_hash, $pepper);
    $stmt->execute();      
    // =======================================================================

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