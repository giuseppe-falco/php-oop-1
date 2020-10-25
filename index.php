<!-- Esercizio di oggi: Classe User -->
<!-- repo: php-oop-1
Dovete creare ed utilizzare una classe User, proprio come abbiamo fatto in classe stamattina -->

<?php
    class User {
        private $name;
        private $surname;
        private $email;
        private $age;
        private $discount = 0;

        //construct
        public function __construct($name, $surname, $email, $age) {
            $this -> name = $name;
            $this -> surname = $surname;
            $this -> email = $email;
            $this -> age = $age;
            
            //check age for discount
            if ($age > 65) {
                $this -> discount = 40;
            } 
        }

        //insensate se variabili public
        
        //setter
        public function setName($_name){
            $this -> name = $_name;
        }
        public function setSurname($_surname){
            $this -> surname = $_surname;
        }
        public function setAge($_age){
            $this -> age = $_age;
        }
        public function setEmail($_email){
            $this -> email = $_email;
        }

        //getter
        public function getName(){
            return $this -> name;
        }
        public function getSurname(){
            return $this -> surname;
        }
        public function getAge(){
            return $this -> age;
        }
        public function getEmail(){
            return $this -> email;
        }
        public function getDiscount(){
            return $this -> discount;
        }
    }


    $giuseppe = new User("giuseppe", "falco", "giuseppe@gmail.com", 50);
    $pasquale = new User("pasquale", "esposito", "pasquale@gmail.com", 42);
    $nicola = new User("nicola", "de lucia", "nicola@gmail.com", 70);
    $lucia = new User("lucia", "romano", "lucia@gmail.com", 50);

    $users = [$giuseppe, $pasquale, $nicola, $lucia];

    $giuseppe -> setName("giacomino");
    echo $giuseppe -> getName();
    echo $pasquale -> getName();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>surname</th>
                <th>email</th>
                <th>age</th>
                <th>discount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user){ ?>
                <tr>
                    <td><?php echo $user -> getName() ?></td>
                    <td><?php echo $user -> getSurname() ?></td>
                    <td><?php echo $user -> getEmail() ?></td>
                    <td><?php echo $user -> getAge() ?></td>
                    <td><?php echo $user -> getDiscount() ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>


