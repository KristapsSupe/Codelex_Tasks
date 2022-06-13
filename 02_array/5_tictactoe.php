<?php

$player1 = 'X';
$player2 = 'O';

$currentPlayer = $player1;


$board = [
    0=>[
        0 => '-',
        1 => '-',
        2 => '-'
    ],
    1=>[
        0 => '-',
        1 => '-',
        2 => '-'
    ],
    2=>[
        0 => '-',
        1 => '-',
        2 => '-'
    ]
];

function displayBoard(array $board): void
{
    echo "   0  | 1  | 2  \n";
    echo "0   {$board[0][0]} | {$board[0][1]}  | {$board[0][2]}  \n";
    echo "   ---+----+---\n";
    echo "1   {$board[1][0]} | {$board[1][1]}  | {$board[1][2]}  \n";
    echo "   ---+----+---\n";
    echo "2   {$board[2][0]} | {$board[2][1]}  | {$board[2][2]}  \n";
}

function hasWon(string $player, array $board): bool
{
    //horizontals
    if ($board[0][0] === $player && $board[0][1] === $player && $board[0][2] === $player) {
        return true;
    }
    if ($board[1][0] === $player && $board[1][1] === $player && $board[1][2] === $player) {
        return true;
    }
    if ($board[2][0] === $player && $board[2][1] === $player && $board[2][2] === $player) {
        return true;
    }

    //verticals
    if ($board[0][0] === $player && $board[1][0] === $player && $board[2][0] === $player) {
        return true;
    }
    if ($board[0][1] === $player && $board[1][1] === $player && $board[2][1] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][2] === $player && $board[2][2] === $player) {
        return true;
    }

    //diagonals
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }

return false;
}

function isTie(array $board): bool {
        return in_array('-', $board) === true; //isti nestrada Tie
}

displayBoard($board);

$turns = 0;

while($turns < 10)
{

    $position = readline('Enter your position player: '. $currentPlayer  . ' (row, column): ');
    [$x, $y] = explode(' ', $position);

    $board[$x][$y] = $currentPlayer;

    displayBoard($board);

    if (isTie($board)) {
        echo "Its a Tie" . PHP_EOL;
        break;
    }

    if (hasWon($currentPlayer, $board)) {
       echo "Player $currentPlayer won" . PHP_EOL;
       break;
    }

    $currentPlayer = $currentPlayer == $player1 ? $player2 : $player1;
    $turns++;
}



