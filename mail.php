$name = $email = $gender = $comment = $website = "";

if (isset($_POST["submit"])){
       $name = test_input($_POST["name"]);
       

        echo "<h2>Your Input:</h2>";
        echo $name;
        

    }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}