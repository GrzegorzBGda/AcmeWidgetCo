<?php

namespace AcmeWidgetCo\Classes;


class StringReverser
{
    public function reverseString(string $string): string
    {
        $chars = str_split($string);

        $charsReversed = [];
        for ($i = count($chars); $i >= 0; $i--) {
            $charsReversed[] = $chars[$i];
        }

        $reversedString = implode('', $charsReversed);;
        return $reversedString;
    }
}