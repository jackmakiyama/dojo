<?php

class RomanNumerals
{
    private $arabic = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
    ];

    public function toRoman($decimal)
    {
        if ($decimal <= 3) {
           return str_repeat('I', $decimal);
        }

        return $this->arabic[$decimal];
    }

    public function toArabic($roman)
    {
        $strlen = str_split($roman);
        $aux = 0;
        $romans = array_flip($this->arabic);
        $ant = 0;
        foreach($strlen as $position) {
            $rom_pos = $romans[$position];
            $aux += $romans[$position];
            if ($ant < $rom_pos) {
                $aux -= 2*$ant;
            }
            $ant = $rom_pos;
        }

        return $aux;
    }


}