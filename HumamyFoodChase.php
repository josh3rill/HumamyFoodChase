<?php
class FoodChase {
    private $gridSize = 10;
    private $playerPos = [0, 0];
    private $foodPos = [];

    public function __construct() {
        $this->foodPos = [rand(0, $this->gridSize - 1), rand(0, $this->gridSize - 1)];
    }

    public function movePlayer($direction) {
        $this->playerPos[0] += ($direction == 'right') ? 1 : (($direction == 'left') ? -1 : 0);
        $this->playerPos[1] += ($direction == 'down') ? 1 : (($direction == 'up') ? -1 : 0);
        $this->playerPos[0] = max(0, min($this->playerPos[0], $this->gridSize - 1)); // Boundary check
        $this->playerPos[1] = max(0, min($this->playerPos[1], $this->gridSize - 1)); // Boundary check
        if ($this->playerPos == $this->foodPos) {
            echo "Food caught! Generating new food...\n";
            $this->foodPos = [rand(0, $this->gridSize - 1), rand(0, $this->gridSize - 1)];
        }
    }
}

