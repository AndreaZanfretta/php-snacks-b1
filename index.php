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
    <ul>
        <?php for($i = 0; $i < count($partite); $i++){ ?>
            <li>
                <?php echo "$partite[$i]";?>
            </li>
        <?php } ?>
    </ul>

    
</body>
</html>

