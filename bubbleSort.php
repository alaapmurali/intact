<?php
	function bubbleSort($contacts) {
        $k = count($contacts) - 1;
        for ($i = 0; $i < count($contacts) - 1; $i++) {
            $isSwapped = false;
            for ($j = 0; $j < $k; $j++) {
                if (compare($contacts[$j], $contacts[$j + 1]) == 1) {
                    $temp = $contacts[$j];
                    $contacts[$j] = $contacts[$j + 1];
                    $contacts[$j + 1] = $temp;
                    $isSwapped = true;
                }
            }
            $k--;
            if (!$isSwapped) {
                return $contacts;
            }
        }
    }

    function compare($lastName1, $lastName2) {
    	if (strcmp($lastName1, $lastName2) < 0) {
    		return -1;
    	} else if (strcmp($lastName1, $lastName2) > 0) {
    		return 1;
    	} else {
    		return 0;
    	}
    }
?>




