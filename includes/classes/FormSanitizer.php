<?php

class FormSanitizer
{
    public static function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText); //strip_tags - HTML ve PHP etiketlerini bir dizeden çıkarır
        $inputText = str_replace(" ", "",$inputText); //str_replace — Bir alt dizgenin bütün örneklerini yenisiyle değiştirir
        //$inputText = trim($inputText); //trim — Dizgenin başındaki ve sonundaki boşlukları (veya diğer karakterleri) budar
        $inputText = strtolower($inputText);  //strtolower — Bir dizgenin harflerini küçük harfe çevirir
        $inputText = ucfirst($inputText); //ucfirst — Dizgenin ilk karakterini büyük harfe çevirir
        return $inputText;
    }

    public static function sanitizeFormUsername($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "",$inputText);
        return $inputText;
    }

    public static function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    public static function sanitizeFormEmail($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "",$inputText);
        return $inputText;
    }
}
