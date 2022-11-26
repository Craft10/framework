<?php
        
class CheckDevice {

        public function myOS(){
            if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87).chr(73).chr(78)))
                return true;

            return false;
        }

        public function ping($ip_addr){
            if ($this->myOS()){
                if (!exec("ping -n 1 -w 1 ".$ip_addr." 2>NUL > NUL && (echo 0) || (echo 1)"))
                    return true;
            } else {
                if (!exec("ping -q -c1 ".$ip_addr." >/dev/null 2>&1 ; echo $?"))
                    return true;
            }

            return false;
        }
    }   
$iip = "172.18.0.1";

$checkDevice = new CheckDevice();

for($i = 0; $i < count($ip_addr); $i++)
{
if ($checkDevice->ping($ip_addr[$i]))

        echo"<span style =\"background-color:#66FF00;  \">".("ONLINE"). "</span>";
    else 
    
         echo"<span style=\"background-color:Grey; color:#FDFEFE; \">".("ONLINE"). "</span>";
}

echo json_encode ($ip_addr);

 $ip_addr = array ("10.49.xx.xx", "10.49.xx.xx", "10.49.xx.xx", "10.49.xx.xx", "$iip");


$checkDevice = new CheckDevice();

echo "<table border=1px;>";
echo "<thead><td align='center'>Status</td><td align='center'>IP</td></thead>";

foreach($ip_addr AS $ip) {
    if($checkDevice->ping($ip)) {
        $estilo = "background-color: #66FF00;";
        $mensaje = "ONLINE";
    } else {
        $estilo = "background-color:Grey; color:#FDFEFE;";
        $mensaje = "OFFLINE";
    }

    echo "<tr style='{$estilo}'>";
      echo "<td>{$mensaje}</td>";
      echo "<td>{$ip}</td>";

    echo "</tr>";
}

echo "</table>";
    ?>