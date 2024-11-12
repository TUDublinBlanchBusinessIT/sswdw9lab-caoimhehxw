<?php
// Include the Team.php file to access the Team class
include("Team.php");

// Check if all expected GET parameters are set
if (isset($_GET['teamName'], $_GET['home1'], $_GET['away1'], $_GET['home2'], $_GET['away2'], $_GET['home3'], $_GET['away3'])) {
    // Retrieve the team name and scores from the GET request
    $teamName = $_GET['teamName'];
    $homeScore1 = (int)$_GET['home1'];
    $awayScore1 = (int)$_GET['away1'];
    $homeScore2 = (int)$_GET['home2'];
    $awayScore2 = (int)$_GET['away2'];
    $homeScore3 = (int)$_GET['home3'];
    $awayScore3 = (int)$_GET['away3'];

    // Instantiate the Team class with the provided team name
    $homeTeam = new Team($teamName);

    // Call the finalScore method for each match
    $homeTeam->finalScore($homeScore1, $awayScore1);
    $homeTeam->finalScore($homeScore2, $awayScore2);
    $homeTeam->finalScore($homeScore3, $awayScore3);

    // Output the goal average to the screen
    echo "Team Name: " . htmlspecialchars($teamName) . "<br>";
    echo "Goal Average: " . $homeTeam->getGoalAverage();
} else {
    echo "Error: Missing required data. Please fill out the form correctly.";
}
?>