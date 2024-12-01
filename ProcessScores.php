<?php
// Include the Team class
include 'Team.php';

// Retrieve the team name from the GET request
$teamName = $_GET['teamName'];

// Create an instance of the Team class
$homeTeam = new Team($teamName);

// Retrieve the scores for each match from the GET request
$home1 = (int)$_GET['home1'];
$away1 = (int)$_GET['away1'];
$home2 = (int)$_GET['home2'];
$away2 = (int)$_GET['away2'];
$home3 = (int)$_GET['home3'];
$away3 = (int)$_GET['away3'];

// Call finalScore method for each match
$homeTeam->finalScore($home1, $away1);
$homeTeam->finalScore($home2, $away2);
$homeTeam->finalScore($home3, $away3);

// Output the goal average
echo "The goal average for the team " . $homeTeam->getTeamName() . " is: " . $homeTeam->getGoalAverage();
?>
