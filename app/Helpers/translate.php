<?php

use Stichoza\GoogleTranslate\GoogleTranslate;

if (!function_exists('translate')) {
    function translate($text)
    {
        $locale = session('locale', 'en');
        return GoogleTranslate::trans($text, $locale);
    }
}
