<?php
    class User {
        public $nome;
        public $email;
        public $eta;

        public function __construct($nome, $email, $eta) {
            $this->nome = $nome;
            $this->email = $email;
            $this->eta = $eta;
        
        }
    }


    $giuseppe = new User("giuseppe", "giuseppe@gmail.com", 50);
    $pasquale = new User("pasquale", "pasquale@gmail.com", 50);
    $nicola = new User("nicola", "nicola@gmail.com", 50);
    $lucia = new User("lucia", "lucia@gmail.com", 50);

    $users = [$giuseppe, $pasquale, $nicola, $lucia];

    
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
                <th>nome</th>
                <th>email</th>
                <th>eta</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user){ ?>
                <tr>
                    <td><?php echo $user -> nome ?></td>
                    <td><?php echo $user -> email ?></td>
                    <td><?php echo $user -> eta ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>



