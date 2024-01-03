<?php
class FoodChase {
    private $gridSize = 10;              // Define the size of the game grid
    private $playerPos = [0, 0];         // Initialize the player's starting position
    private $foodPos = [];               // Initialize the food position
    public function __construct() {
        // Constructor: Set the initial food position randomly within the grid
        $this->foodPos = [rand(0, $this->gridSize - 1), rand(0, $this->gridSize - 1)];
//        $this->foodPos = [rand(0, $this->gridSize - 1), rand(0, $this->gridSize - 1)];
    }

    public function movePlayer($direction) {
        // Calculate horizontal movement based on direction (ternary operators for conciseness)
        $this->playerPos[0] += ($direction == 'right') ? 1 : (($direction == 'left') ? -1 : 0);

        // Calculate vertical movement based on direction
        $this->playerPos[1] += ($direction == 'down') ? 1 : (($direction == 'up') ? -1 : 0);

        // Keep player within grid boundaries (left/right)
        $this->playerPos[0] = max(0, min($this->playerPos[0], $this->gridSize - 1));

        // Keep player within grid boundaries (top/bottom)
        $this->playerPos[1] = max(0, min($this->playerPos[1], $this->gridSize - 1));

//         Check
}
