<?php

class LibCss{
    public function loadLib(string $nazwa, string $typ, string $wersja){
        $out = '';
        if($typ == 'script'){
            $out .= '<script src="'.$nazwa;
            if($wersja != ''){
                $out .= '?v='.$wersja;
            }
            $out .= '"></script>';
        }
        else if($typ == 'css'){
            $out .= '<link rel="stylesheet" href="'.$nazwa;
            if($wersja != ''){
                $out .= '?v='.$wersja;
            }
            $out .= '" />';
        }

        return $out;
    }
}