<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );
echo $countries[2];


// Array representing family members
$familyMembers = array("Jacky", "Arthur", "René", "Willy");

// Displaying family members using print_r
echo "<br>Family Members:";
print_r($familyMembers);
echo "<br>Me =>".$familyMembers[3];

// Array describing favorite recipes
$favoriteRecipes = array("Lasagna", "Chocolate Cake", "Chicken", "Spaghetti Bolognese");

// Displaying favorite recipes using print_r
echo "<br>Favorite Recipes:";
print_r($favoriteRecipes);

// Array listing favorite films
$favoriteFilms = array("The Shawshank Redemption", "Inception", "Pulp Fiction", "The Godfather");

// Displaying the best film using its index
echo "<br>Favorite Film:<br>";
echo $favoriteFilms[1]; 

echo '<pre>';
print_r($countries);
echo '</pre>';

var_dump($countries);
echo "<br>";
echo $countries[2];
echo "<br>";
// add
array_push($countries,'England');
// add short way
$countries[]= 'USA';

echo '<pre>';
print_r($countries);
echo '</pre>';
echo "<br>";

// Replace value
$person['function']='Junior Web Developper';
echo $person['function'];
echo"<br>";
$person['function']='Senior Web developper';
echo $person['function'];
echo "<br>";
// Associate array
$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person['city'] = 'Brussels';

// compare this
echo $person[1];
echo "<br>";
echo $person['city'];
// with this
echo $person['street'];
echo "<br>";

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );

echo $user['lastname']; 
echo "<br>";

$me = array(
    'firstname' => 'Willy',
    'age' => '53',
    'like football' => 'true'
);

$me['hobbies'] = array("reading");

echo '<pre>';
print_r($me);
echo '</pre>';
echo "<br>";

// Exercises
$mother = array(
    'firstname' => 'Jacky',
    'age' => '78',
    'like football' => 'no',
    'hobbies' => "garden"
);

echo '<pre>';
print_r($mother);
echo '</pre>';
echo "<br>";

$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';
echo "<br>";

// Manipulating arrays exercises

// Counting the number of hobbies in the $mother array
$motherHobbiesCount = is_array($mother['hobbies']) ? count($mother['hobbies']) : 1;
// Counting the number of your own hobbies
$myHobbiesCount = is_array($me['hobbies']) ? count($me['hobbies']) : 0;
// Calculating the total number of hobbies
$totalHobbiesCount = $motherHobbiesCount + $myHobbiesCount;

echo "Number of mother's hobbies: " . $motherHobbiesCount . "<br>";
echo "Number of your own hobbies: " . $myHobbiesCount . "<br>";
echo "Total number of hobbies: " . $totalHobbiesCount;
echo "<br>";
//add element to multi-dimensional array
$me['hobbies'][]='taxidermy';
echo '<pre>';
print_r($me);
echo '</pre>';
echo "<br>";

//replace
$me['name']='Durand';

echo '<pre>';
print_r($me);
echo '</pre>';
echo "<br>";

$me = array(
    'firstname' => 'Willy',
    'age' => '53',
    'hobbies' => array("reading", "cooking", "photography")
);

$soulmate = array(
    'firstname' => 'Alice',
    'age' => '45',
    'hobbies' => array("gardening", "yoga", "cooking")
);

// Perform array operations
$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
echo "<br>";

$web_development = array(
    'frontend' => array(),
    'backend' => array()
);

print_r($web_development);
echo "<br>";
$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';

print_r($web_development);
echo "<br>";
$web_development['frontend'][] = 'CSS';
$web_development['backend'][] = 'Flash';

print_r($web_development);
echo "<br>";
array_push($web_development['frontend'], 'JavaScript');
$web_development['frontend'][array_search('xhtml', $web_development['frontend'])] = 'html';

print_r($web_development);
echo "<br>";
$index = array_search('Flash', $web_development['backend']);
if ($index !== false) {
    unset($web_development['backend'][$index]);
}

print_r($web_development);
echo"<br>";
















?>

    
</body>
</html>