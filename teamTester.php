<?php

include("Team.php");

$myTeam = new Team("Tigers");

// First match (draw)
$myTeam->finalScore(2, 2);

// Display points and goal average after first match
echo "That worked";
echo "<br>Total Points = " . $myTeam->getTotalPoints(); // Correctly calling getTotalPoints()

// Second match (win)
$myTeam->finalScore(3, 2);

// Display updated points and goal average after second match
echo "<br>Total Points = " . $myTeam->getTotalPoints(); // Correctly calling getTotalPoints()
echo "<br>Goal Average = " . $myTeam->getGoalAverage();

?>