<?php
/* snack1 */
$partite = [
        [
            'squadraCasa' => 'Cagliari',
            'squadraOspite' => 'Sassari',
            'puntiCasa' => 5,
            'puntiOspite' => 10,
        ],
        [
            'squadraCasa' => 'Padova',
            'squadraOspite' => 'Milano',
            'puntiCasa' => 6,
            'puntiOspite' => 30,
        ],
        [
            'squadraCasa' => 'torino',
            'squadraOspite' => 'atalanta',
            'puntiCasa' => 5,
            'puntiOspite' => 10,
        ]
    ];
    /* snack2 */
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
        $access = 'Accesso Negato, Inserisci i dati';
        var_dump($access);
    }elseif(strlen($name)>3 && strpos($mail, '@') && strpos($mail, '.' && is_numeric($age))){
        $access = 'Accesso riuscito';
    }else{
        $access = 'Accesso Negato';
    }
    /* snack3 */
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    /* snack4 */
    $numArr = [];
    while(count($numArr) < 15){
        $rand = rand(1, 100);
        if(!in_array($rand, $numArr)){
            $numArr[] = $rand;
        }
    };
    /* snack5 */
    $par = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    $parArr = [];
    $period = substr($par, strpos($par, '.') + 1);
    var_dump($period);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks</title>
</head>
<body>
    <!-- snack1 -->
    <h1>Snack1</h1>
    <ul>
        <?php for($i = 0; $i < count($partite); $i++){ ?>
            <li>
                <?php echo $partite[$i]['squadraCasa'] . ' - ' . $partite[$i]['squadraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . ' - ' . $partite[$i]['puntiOspite'];?>
            </li>
        <?php } ?>
    </ul>
    <!-- snack2 -->
    <h1>Snack2</h1>
    <h2><?php echo $access ?></h2>
    <!-- snack3 -->
    <h1>Snack3</h1>
    <p><?php for($i = 0; $i < count($posts); $i++){ ?>
        <li>
        <?php echo $posts[$i] . '-' ?>
        <ul>
            <li>
                
            </li>
        </ul>
        </li>
        <?php } ?>
    </p>
    <!-- snack4 -->
    <h1>snack4</h1>
        <?php for($i = 0; $i < count($numArr); $i++){ ?>
            <span>
                <?php echo $numArr[$i] . ' ';?>
        </span>
        <?php } ?>
    <!-- snack5 -->
    
</body>
</html>

