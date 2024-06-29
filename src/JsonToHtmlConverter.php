<?php

namespace RaheelArifKhans;

class JsonToHtmlConverter
{
    public static function generateHtmlFromJson($json)
    {
        $data = json_decode($json, true);
        return generateHtmlFromJson($data);
    }
}