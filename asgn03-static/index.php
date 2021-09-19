<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';

    echo '<p>There are '. Bird::$instance_count .' birds.</p>';
    echo '<p>There are '. YellowBelliedFlyCatcher::$instance_count .' flycatchers.</p>';
    echo '<p>There are '. Kiwi::$instance_count .' kiwis.</p>';

    
    
    $bird = Bird::create();
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = YellowBelliedFlyCatcher::create();

    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    

    $kiwi = Kiwi::create();
    Kiwi::$flying = "no";

    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . " and has " . $fly_catcher::$egg_num . " eggs.</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . " and has " . $kiwi::$egg_num . " eggs.</p>";    

    echo '<p>There are '. Bird::$instance_count .' birds.</p>';
    echo '<p>There are '. YellowBelliedFlyCatcher::$instance_count .' flycatchers.</p>';
    echo '<p>There are '. Kiwi::$instance_count .' kiwis.</p>';

?>
    </body>
</html>

