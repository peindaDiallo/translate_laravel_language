<?php

namespace Atpro\Translate\service;

use ErrorException;
use Stichoza\GoogleTranslate\GoogleTranslate;
use function is_dir;
use function mkdir;


class TranslateService
{
    private ?GoogleTranslate $translator = null;


    public function __construct()
    {
        $this->translator = $this->translator == null ?  new GoogleTranslate() : $this->translator;
    }

    /***
     * This translates a multi-associative array of data from a language to another
     * @param string $directoryName the directory containing the files to be translated
     * @param string $directoryStore the directory containing the files translated
     * @param string $from the start language
     * @example $tr->translateOld('./lang/en','./lang', $from, $to)
     * @ $array the associative array
     * @param array $to the arrival language
     * @return void
     * @throws ErrorException
     */
    public function translate(string $directoryName, string $directoryStore, string $from, array $to): void
    {
        foreach ($to as $lang) {
            $this->translator->setSource($from);
            $this->translator->setTarget($lang);
            $data = [];
            $scandir = scandir($directoryName);
            foreach($scandir as $fichier){
                if($fichier != '.' and $fichier != '..'){
                    $array = require $directoryName.'/'.$fichier;
                    foreach ($array as $key => $value) {
                        if (is_array($value))
                        {
                            foreach ($value as $keyword => $item) {
                                if(is_array($item))
                                {
                                    foreach ($item as $keys => $val){
                                        $chaine =  $this->translator->translate($this->containsWords($val));
                                        $array[$key][$keyword][$keys] = '"'.$this->replaceWords($chaine).'",';
                                    }
                                }
                                else{
                                    $chaine =  $this->translator->translate($this->containsWords($item));
                                    $array[$key][$keyword] = '"' .$this->replaceWords($chaine). '",';
                                }
                            }
                        }
                        else
                        {
                            $chaine =  $this->translator->translate($this->containsWords($value));
                            $array[$key] = '"' .$this->replaceWords($chaine).'",';
                        }
                    }
                    $content = str_replace("Array", "", print_r($array, true));
                    $content = str_replace("[", "'", print_r($content, true));
                    $content = str_replace("]", "'", print_r($content, true));

                    $content = str_replace("(", "[", print_r($content, true));
                    $content = str_replace(")", "],", print_r($content, true));

                    $content = str_replace("=> '", '=> "', print_r($content, true));

                    $content = str_replace("',", '",', print_r($content, true));

                    $content = str_replace(":00", '&laquo;', print_r($content, true));

                    $content = str_replace(":01", '&raquo;', print_r($content, true));

                    $this->makeDirectory($directoryStore.'/'.$lang);
                    $filename = $directoryStore.'/'.$lang."/".substr(strtolower($fichier),0,-4) . ".php";
                    $this->writeInPhpFile($filename,$content);
                }
            }
        }
    }

    /**
     * create a new directory if not exist
     * @param string $directoryName
     */
    public function makeDirectory(string $directoryName): void
    {
        if(!is_dir($directoryName)){
            mkdir($directoryName);
        }
    }

    /**
     * @param string $fileName
     * @param string $fileContent
     */
    public function writeInPhpFile(string $fileName, string $fileContent): void
    {
        file_put_contents($fileName, '<?php');
        $content = file_get_contents($fileName);
        $content .= "\n\n\n\n\n\n";
        $content .= 'return '.substr(rtrim($fileContent), 0, -1).';';
        file_put_contents($fileName, $content);
    }

    /**
     * @param string $chaine
     * @return string
     */
    public function containsWords(string $chaine):string
    {
        if(str_contains($chaine, ":attribute")){
            $chaine = str_replace(":attribute",  ':a', $chaine);
        }
        if(str_contains($chaine, ":value")){
            $chaine = str_replace(":value",  ':v', $chaine);
        }
        if(str_contains($chaine, ":min")){
            $chaine = str_replace(":min",  ':mn', $chaine);
        }
        if(str_contains($chaine, ":max")){
            $chaine = str_replace(":max",  ':mx',$chaine);
        }
        if(str_contains($chaine, ":value")){
            $chaine = str_replace(":value",  ':vl', $chaine);
        }
        if(str_contains($chaine, ":other")){
            $chaine = str_replace(":other",  ':ot', $chaine);
        }
        if(str_contains($chaine, ":size")){
            $chaine = str_replace(":size",  ':sz', $chaine);
        }
        if(str_contains($chaine, "&laquo;")){
            $chaine = str_replace("&laquo;",  ':00', $chaine);
        }
        if(str_contains($chaine, "&raquo;")){
           $chaine = str_replace("&raquo;",  ':01', $chaine);
        }
        if(str_contains($chaine, ":date")){
           $chaine = str_replace(":date",  ':d', $chaine);
        }
        if(str_contains($chaine, ":format")){
           $chaine = str_replace(":format",  ':f', $chaine);
        }

        return $chaine;

    }

    /**
     * @param string $chaine
     * @return string
     */
    public function replaceWords(string $chaine):string
    {
        if(str_contains($chaine, ":a")){
            $chaine = str_replace(":a",  ':attribute ', $chaine);
        }
        if(str_contains($chaine, ":v")){
            $chaine = str_replace(":v",  ':value ', $chaine);
        }
        if(str_contains($chaine, ":mn")){
            $chaine = str_replace(":mn",  ':min ', $chaine);
        }
        if(str_contains($chaine, ":mx")){
            $chaine = str_replace(":mx",  ':max ',$chaine);
        }
        if(str_contains($chaine, ":vl")){
            $chaine = str_replace(":vl",  ':value ', $chaine);
        }
        if(str_contains($chaine, ":ot")){
            $chaine = str_replace(":ot",  ':other ', $chaine);
        }
        if(str_contains($chaine, ":sz")){
            $chaine = str_replace(":sz",  ':size ', $chaine);
        }
        if(str_contains($chaine, ":d")){
            $chaine = str_replace(":d",  ':date', $chaine);
        }
        if(str_contains($chaine, ":f")){
        $chaine = str_replace(":f",  ':format', $chaine);
    }
        return $chaine;

    }

}
