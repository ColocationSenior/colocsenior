<?php


class Ftools
{
    public static function redirection($url){
        header('Location: '.$url);
        exit();
    }
    public static function fakeRedirection($url){
        echo '<meta http-equiv="refresh" content="0;URL='.$url.'">';
    }
    public static function randomString($length = 20){
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < $length; $i++)
        {
            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }

        return $chaineAleatoire;
    }
    public static function generateSeoURL($string, $wordLimit = 0){
        $search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
        $replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");
        $string = str_replace($search, $replace, $string);
        $separator = '-';
        if($wordLimit != 0){
            $wordArr = explode(' ', $string);
            $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
        }
        $quoteSeparator = preg_quote($separator, '#');
        $trans = array(
            '&.+?;'                    => '',
            '[^\w\d _-]'            => '',
            '\s+'                    => $separator,
            '('.$quoteSeparator.')+'=> $separator
        );
        $string = strip_tags($string);
        foreach ($trans as $key => $val){
            $string = preg_replace('#'.$key.'#i'.('u'), $val, $string);
        }
        $string = strtolower($string);

        return trim(trim($string, $separator));
    }
    public static function uploadProfilePicture($file){
        $infoFile = new SplFileInfo($file['name']);

        $uploadDir = 'files/profile/';
        $nameFile = self::randomString();
        $uploadFile = $uploadDir.$nameFile.'.'.$infoFile->getExtension();

        if(move_uploaded_file($file['tmp_name'], $uploadFile)) return $nameFile.'.'.$infoFile->getExtension();
        else return false;
    }
    public static function uploadPicture($file){
        $infoFile = new SplFileInfo($file['name']);

        $uploadDir = 'files/pictures/';
        $nameFile = self::randomString();
        $uploadFile = $uploadDir.$nameFile.'.'.$infoFile->getExtension();

        if(move_uploaded_file($file['tmp_name'], $uploadFile)) return $nameFile.'.'.$infoFile->getExtension();
        else return false;
    }
}