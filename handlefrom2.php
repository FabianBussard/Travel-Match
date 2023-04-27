<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
</head>

<body>

<?php

//Create new MySQL column every time a new search is processed
/*if($_SERVER['REQUEST_METHOD'] == "POST"){
$type = $_POST['type'];
$state = $_POST['state'];
$user_id = 4;
//$history_id = rand(1, 900000000);
echo $type;
echo $state;
//$query = "INSERT INTO history(`state`, `activity`) VALUES ('$state', '$type')";
$query = "INSERT INTO history(`user_id`, `state`, `activity`) VALUES ('4', 'Ohio','Beach')";
mysqli_query($con, $query);
}*/


// handlefrom2.php
$type = $_POST['type'];
$state = $_POST['state']; 

// Basic control
if (!isset($type) || !isset($state))
{
	echo 'Name or email field is empty.';
	
	// Stop PHP execution
    return;
}

echo '<p>Type: ' . $type . '</p>';
echo '<p>State: ' . $state . '</p>'; 




if($type === 'city' && $state === 'New York'){
echo '<section class="search-result-item">';
echo '<a class="image-link" href=""><img class="image" src="NewYorkCity.jpg" alt="NYC">';
echo '</a>';
echo '<div class="search-result-item-body">';
echo '<div class="row">';
echo '<div class="col-sm-9">';
echo '<h1 class="search-result-item-heading">New York City</h1>';
echo '<p>New York City is divided up into five boroughs: Brooklyn, Queens, Staten Island,';
echo 'The Bronx, and Manhattan with Manhattan being the most popular. The city is very easy to navigate';
echo 'with streets going north to south and';
echo 'avenues going...';
echo '</li></p>';
echo '<form action="nyc.php" id="learnmoreButton">';
echo '<input id="learnmoreButton" type="submit" value="Learn more">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</section>';


} elseif($type === 'city' && $state === 'Colorado'){
echo '<!-- Denver, Colorado-->';
echo '<section class="search-result-item">';
echo '<a class="image-link" href="#"><img class="image" src="denver.jpg">';
echo '</a>';
echo '<div class="search-result-item-body">';
echo '<div class="row">';
echo '<div class="col-sm-9">';
echo '<h1 class="search-result-item-heading">Denver, Colorado</h1>';
echo '<p>Denver, the capital of Colorado, is an American metropolis dating to the';
echo 'Old West era. Larimer Square, the city’s oldest block, features landmark';
echo '19th-century buildings. Museums include the Denver Art Museum, an ultramodern';
echo 'complex known for its collection of indigenous works, and the mansion of';
echo 'famed Titanic survivor Molly Brown. Denver is also a jumping-off point for ski';
echo 'resorts in the nearby Rocky Mountains. </p>';
echo '<form id="learnmoreButton">';
echo '<input id="learnmoreButton" type="submit" value="Learn more">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</section>';

echo'<br>';


echo '<!-- Colorado Springs, Colorado-->';
echo '<section class="search-result-item">';
echo '<a class="image-link" href="#"><img class="image" src="coloradosprings.jpg">';
echo '</a>';
echo '<div class="search-result-item-body">';
echo '<div class="row">';
echo '<div class="col-sm-9">';
echo '<h1 class="search-result-item-heading">Colorado Springs</h1>';
echo '<p>Colorado Springs, at an elevation of 6,035 ft., is a city';
echo 'in Colorado at the eastern foot of the Rocky Mountains.';
echo 'It lies near glacier-carved Pikes Peak, a landmark in';
echo 'Pike National Forest with hiking trails and a cog railway';
echo 'leading to its 14,114-ft. summit. The citys Garden of the';
echo 'Gods park features iconic red-sandstone formations and mountain views.  </p>';
echo '<form id="learnmoreButton">';
echo '<input id="learnmoreButton" type="submit" value="Learn more">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</section>';
}

elseif($type === 'beach' && $state === 'Colorado'){
echo '<section class="search-result-item">';
echo '<a class="image-link" href="#"><img class="image" src="medanocreek.jpeg">';
echo '</a>';
echo '<div class="search-result-item-body">';
echo '<div class="row">';
echo '<div class="col-sm-9">';
echo '<h1 class="search-result-item-heading">Medano Creek</h1>';
echo '<p>A special type of beach. These streams and wetlands are not simply beautiful features of a national park.';
echo 'They are critical parts of a huge natural system that shapes and maintains';
echo 'the Great Sand Dunes as we know them today.  </p>';
echo '<form id="learnmoreButton">';
echo '<input id="learnmoreButton" type="submit" value="Learn more">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</section>';
}

elseif($type === 'city' && $state === 'Massachussets'){
echo '<section class="search-result-item">';
echo '<a class="image-link" href="#"><img class="image" src="boston.jpg">';
echo '</a>';
echo '<div class="search-result-item-body">';
echo '<div class="row">';
echo '<div class="col-sm-9">';
echo '<h1 class="search-result-item-heading">Boston</h1>';
echo '<p>Boston, officially the City of Boston, is the capital and';
echo 'largest city of the Commonwealth of Massachusetts and the cultural';
echo 'and financial center of the New England region of the Northeastern';
echo 'United States. The city boundaries encompass an area of about 48.4 sq';
echo 'mi and a population of 675,647 as of 2020</p>';
echo '<form id="learnmoreButton">';
echo '<input id="learnmoreButton" type="submit" value="Learn more">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</section>';
}

elseif($type === 'romance' && $state === 'Ohio'){
echo '<section class="search-result-item">';
echo '<a class="image-link" href="#"><img class="image" src="marbleroom.jpg">';
echo '</a>';
echo '<div class="search-result-item-body">';
echo '<div class="row">';
echo '<div class="col-sm-9">';
echo '<h1 class="search-result-item-heading">Marble Room</h4>';
echo '<p>Marble Room Steaks & Raw Bar is an upscale restaurant in downtown Cleveland.';
echo 'Available for celebrations, private parties, weddings, and fine dining any ...</p>';
echo '<form id="learnmoreButton">';
echo '<input id="learnmoreButton" type="submit" value="Learn more">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</section>';
}


?>




        


<style>
body{margin-top:20px;
    background-color: #eee;
    }
    
    .search-result-categories>li>a {
        color: #b6b6b6;
        font-weight: 400
    }
    
    .search-result-categories>li>a:hover {
        background-color: #ddd;
        color: #555
    }
    
    .search-result-categories>li>a>.glyphicon {
        margin-right: 5px
    }
    
    .search-result-categories>li>a>.badge {
        float: right
    }
    
    .search-results-count {
        margin-top: 10px
    }
    
    .search-result-item {
        padding: 20px;
        background-color: #fff;
        border-radius: 4px
    }
    
    .search-result-item:after,
    .search-result-item:before {
        content: " ";
        display: table
    }
    
    .search-result-item:after {
        clear: both
    }
    
    .search-result-item .image-link {
        display: block;
        overflow: hidden;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }
    
    @media (min-width:768px) {
        .search-result-item .image-link {
            display: inline-block;
            margin: -20px 0 -20px -20px;
            float: left;
            width: 200px
        }
    }
    
    @media (max-width:767px) {
        .search-result-item .image-link {
            max-height: 200px
        }
    }
    
    .search-result-item .image {
        max-width: 100%
    }
    
    .search-result-item .info {
        margin-top: 2px;
        font-size: 12px;
        color: #999
    }
    
    .search-result-item .description {
        font-size: 13px
    }
    
    .search-result-item+.search-result-item {
        margin-top: 20px
    }
    
    @media (min-width:768px) {
        .search-result-item-body {
            margin-left: 200px
        }
    }
    
    .search-result-item-heading {
        font-weight: 400
    }
    
    .search-result-item-heading>a {
        color: #555
    }
    
    @media (min-width:768px) {
        .search-result-item-heading {
            margin: 0
        }
    }



