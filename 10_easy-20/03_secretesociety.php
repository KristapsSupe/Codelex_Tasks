<?php


class Secret
{
    public static function secretSociety(array $names): string
    {
        $codeWord = [];
        foreach ($names as $name)
        {
            $codeWord[] = substr($name, 0, 1);
        }
        return implode('', $codeWord);
    }
}

$names = ['Andre', 'John', 'Michael', 'Peter'];

echo Secret:: secretSociety($names);
