<?php
include_once(__DIR__ . "/dontenvreader.php");

use DevCoder\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('APP_ENV');
echo "<br>";
// dev
const DB_HOST = getenv('DATABASE_HOST');
const DB_USER = getenv('DATABASE_USER');
const DB_PASSWORD = getenv('DATABASE_PASSWORD');
const DB_NAME = getenv('DATABASE_NAME');



class Database{


    // Connect =================================================================
    private static function connect(){
        $conn = new mysqli(DB_HOST, DB_USER DB_PASSWORD DB_NAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            error_log("Connection failed: " . $conn->connect_error);
        }
    }
    // =========================================================================
    
    // Connect =================================================================
    private static function close($conn, $stmt = FALSE){
        if($stmt !== FALSE){
            $stmt->close();
        }
        $conn->close();
    }
    // =========================================================================
    

    
    // Select all ==============================================================
    public static function select_all(array $columns, $limit = False){
        
        self::connect();
        $col = implode(", ",$columns);
        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);


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
    // =========================================================================



    public static function select(array $dict, $limit = False){
        
        self::connect();
        

        foreach($dict as $k => $v){
            // TODO fare qualcosa qui
        }


        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);


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




// =============================================================================
//  INSERT ---------------------------------------------------------------------
// =============================================================================
// Check connection
$sql = "INSERT INTO mytable (col1, col2, col3) VALUES (?, ?, ?)"
$stmt = $conn->prepare($sql);
$bind = $stmt->bind_param("sss", $firstname, $lastname, $email);

$exec = // set parameters and execute
$firstna

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

me = "John";
$lastname = "Doe";
$email = "john@example.com";
$exec = $stmt->execute();


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$exec = $stmt->execute();


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}



$stmt->close();
$conn->close();


// =============================================================================
//  ERRORS AND LOGGING  --------------------------------------------------------
// =============================================================================
if ($mysqli->connect_errno) {
    error_log("Connect failed:");
    error_log( print_r( $mysqli->connect_error, true ) );
    exit();
}

if ( false === $stmt ) {
    error_log('mysqli prepare() failed: ');
    error_log( print_r( htmlspecialchars($stmt->error), true ) );
    exit();
}

if ( false === $bind ) {
    error_log('bind_param() failed:');
    error_log( print_r( htmlspecialchars($stmt->error), true ) );
    exit();
}

if ( false === $exec ) {
    $exec = error_log('mysqli execute() failed: ');
    error_log( print_r( htmlspecialchars($stmt->error), true ) );
}
 
    
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

g( print_r( htmlspecialchars($stmt->error), true ) );
}


// =============================================================================
//  SELECT ---------------------------------------------------------------------
// =============================================================================



// =============================================================================
//  SELECT WHERE ---------------------------------------------------------------
// =============================================================================
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$sql = "SELECT col1, col2, col3 FROM  mytable WHERE col1=?, col2=?, col3=?)"
$stmt = $conn->prepare($sql); 
$bind = $stmt->bind_param("sss", $firstname, $lastname, $email);



$result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc(); // fetch data   


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
$stmt->close();

// =============================================================================
// DELETE ----------------------------------------------------------------------
// =============================================================================
$sql = "DELETE FROM users WHERE id=?"; // SQL with parameters
$stmt = $conn->prepare($sql); 

$bind = $stmt->bind_param("s", $id);
$exec = $stmt->execute();

if ($exec === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


$stmt->close();
$conn->close();

// =============================================================================
// DELETE ----------------------------------------------------------------------
// =============================================================================

$sql = "UPDATE MyGuests SET lastname=? WHERE id=?";
$stmt = $conn->prepare($sql); 

$bind = $stmt->bind_param("si", $lastname, $id);
$exec = $stmt->execute();


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}







?>