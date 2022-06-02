<?php
    // $s = 'epsxyyflvrrrxzvnoenvpegvuonodjoxfwdmcvwctmekpsnamchznsoxaklzjgrqruyzavshfbmuhdwwmpbkwcuomqhiyvuztwvq';
    // $n = 549382313570;

    // $s = 'abcd';
    // $n = 10;

    $s = "aba";
    $n = 10;

    $result = repeatedString($s, $n);

    print($result);

    function repeatedString($s, $n) {
        //Get infos
        $count = substr_count($s, 'a');
        $length = strlen($s);
    
        // Start calculating
        $division = $n / $length;
        $times = (int)$division;
        $rest = ($n % $length);
        $count = $times * $count;

        // Find the missing 'a's
        $miss = substr_count($s, 'a', 0, $rest);
        $return = $count + $miss;

        return $return;
    }

?>  