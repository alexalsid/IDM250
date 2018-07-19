<?php echo 'hello';

$characters = ['Paul', 'Mark', 'Jane'];
for ($x = 0; $x<= 2; $x++) {
    echo '<p>' .  $x . ' is the key and' . $characters[$x] . 'is the value in the $charcters array </p>';
}


$schools = [
    'Drexel University' => [
        'type' => 'University',
        'url'  => 'https://drexel.edu'
    ],
    'Temple University'  => [
        'type' => 'University',
        'url'  => 'https://www.temple.edu/'
    ],
    'University of Pennsylvania' => [
        'type' => 'University',
        'url'  => 'https://www.upenn.edu/'
    ]
]; 

foreach ($school as $x => $x_value) {
    echo '$x' is 



}



?>