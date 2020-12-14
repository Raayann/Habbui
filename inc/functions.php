<?php 

function chiffrer($s) 
            { 
            $config_hash = "xCg532%@%gdvf^5DGaa6&*rFTfg^FD4\$OIFThrR_gh(ugf*/";
            $mdp = sha1($s . $config_hash);
            return $mdp;
            }

function  Redirect($url)
			{  
                // echo "<SCRIPT LANGUAGE=\"JavaScript\"> document.location.href=\"".$url."\" </SCRIPT>";
                header("Location: ".$url."");
                exit();
			}
function  Redirect2($url)
            {  
                echo "<SCRIPT LANGUAGE=\"JavaScript\"> document.location.href=\"".$url."\" </SCRIPT>";
                exit();
            }

 
function Securise($str)
{
    $str = htmlspecialchars(stripslashes(nl2br(trim($str))));   
    $pattern = Array("/\'/", "/\"/", "/ /");
    $rep_pat = Array("", "", "");
    $str_noacc = preg_replace($pattern, $rep_pat, $str);
    return $str_noacc;
}

function FullDate($str)
{
    $H = date('H');
    $i = date('i');
    $s = date('s');
    $m = date('m');
    $d = date('d');
    $Y = date('Y');
    $j = date('j');
    $n = date('n');
    
    switch ($str)
        {
            case "day":
                $str = $j;
                break;
            case "month":
                $str = $m;
                break;
            case "year":
                $str = $Y;
                break;
            case "today":
                $str = $d;
                break;
            case "full":
                $str = date('d-m-Y H:i:s',mktime($H,$i,$s,$m,$d,$Y));
                break;
            case "datehc":
                $str = "".$j."-".$n."-".$Y."";
                break;
            default:
                $str = date('d-m-Y',mktime($m,$d,$Y));
                break;
        }
        
    return $str;
}

function timeago($ptime)
    {
        $etime = time() - $ptime;

        if ($etime < 1) {
            return '0 seconde';
        }

        $a = [
            365 * 24 * 60 * 60 => 'an',
            30 * 24 * 60 * 60 => 'mois',
            24 * 60 * 60 => 'jour',
            60 * 60 => 'heure',
            60 => 'minute',
            1 => 'seconde'
        ];

        $a_plural = [
            'an' => 'ans',
            'mois' => 'mois',
            'jour' => 'jours',
            'heure' => 'heures',
            'minute' => 'minutes',
            'seconde' => 'secondes'
        ];

        foreach ($a as $secs => $str) {
            $d = $etime / $secs;

            if ($d >= 1) {
                $r = round($d);
                return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str);
            }
        }
    }

    function get($key, $default=NULL) {
      return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
    }

    function session($key, $default=NULL) {
      return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
    }

    function token($var){
        $string = "";
        $chaine = "a0b1c2d3e4f5g6h7i8j9klmnpqrstuvwxy123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$var; $i++){
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }

    function verify(){
    if ( func_num_args() > 0 ){
        $arg_count = func_num_args();
        $arg_list = func_get_args();
        $check = "";
        for($i=0; $i<$arg_count; $i++){
            $check .= $arg_list[$i];
        }
        if (strlen($check) > $arg_count) {
            return false;
        } else {
            return true;
        }
    }
    return false;
}
?>