<?php

namespace Src;

class StrTool
{
    /**
     * Obtém uma parte da string passando suas posições
     * Get a part of the string by passing its positions
     * @param int $string
     * @param int $start
     * @param int $end
     * @return string
     */
    public static function get($string, $start, $end) :string
    {
        if ($start < 1 || $end < 1 || $end < $start) {
            return "Posições inválidas";
        }

        $offset = $start - 1;

        $end = $end - mb_strlen($string);
        if ($end == 0) {
            $end = null;
        }
        return trim(mb_substr($string, $offset, $end));
    }

    /**
     * Formata para escrita
     * Format to write
     * @param mixed $dado
     * @param mixed $length
     * @param mixed $padString
     * @param mixed $padType
     * @return string
     */
    public static function format($string, $length, $padString = '0', $padType = STR_PAD_LEFT)
    {
        $string = trim($string);
        if (mb_strlen($string) > $length) {
            $string = mb_substr($string, 0, $length);
        }

        return str_pad($string, $length, $padString, $padType);
    }


}
