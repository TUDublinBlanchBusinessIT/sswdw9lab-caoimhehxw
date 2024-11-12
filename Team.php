<?php
date_default_timezone_set('UTC'); 

class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    public function finalScore($homeScore, $opposingScore) {
        $this->totalGames += 1;
        $this->totalGoals += $homeScore;

        if ($homeScore > $opposingScore) {
            $this->totalPoints += 3;
        } elseif ($homeScore == $opposingScore) {
            $this->totalPoints += 1;
        }
    }

    public function getGoalAverage() {
        return $this->totalGames > 0 ? $this->totalGoals / $this->totalGames : 0;
    }

    // Add this method to retrieve total points
    public function getTotalPoints() {
        return $this->totalPoints;
    }
}
?>