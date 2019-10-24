<?php

namespace sn01615\ZhTwTranslate;

class Translate
{

    public static function zh2hant($text)
    {
        $map = array_merge(Dict::zh2TW(), Dict::zh2Hant());
        return self::turn($text, $map);
    }

    private static function turn($text, $map)
    {
        $from = array_keys($map);
        return str_replace($from, $map, $text);
    }

    public static function hant2zh($text)
    {
        $map = array_merge(Dict::zh2TW(), Dict::zh2Hant());
        $map = array_flip($map);
        return self::turn($text, $map);
    }
}
