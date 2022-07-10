<?php
/**
* Example:
*
* Input: [[2, 3, 2], [6, 6, 7], [1, 2, 1]]
* Calculation: (2 x 3 x 2) + (6 x 6 x 7) + (1 x 2 x 1) = 12 + 252 + 2 = 266
    * Output: 266
*/

class Boxes
{

    public static function total(array $boxes): int
    {
        $volumes = [];
        foreach ($boxes as $box) {
            $volumes[] = array_product($box);
        }
        return array_sum($volumes);
    }
}

echo Boxes:: total([[2, 3, 2], [6, 6, 7], [1, 2, 1],]);

