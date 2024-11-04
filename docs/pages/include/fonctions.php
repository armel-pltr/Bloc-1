<?php
declare(strict_types=1);

function get(string $name,$default=''):?string{
    return $_GET[$NAME]??$default;
}

function title(string $content, $subTitle='', int $level=1,bool $toUpper=false) :string{
    $result="<h$level>$content</$level>";
    if($subTitle){
        $result+="<p>$subTitle</p>";
    }
    return $result;
}