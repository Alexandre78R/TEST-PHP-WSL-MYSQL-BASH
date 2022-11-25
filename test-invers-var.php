<?php
    function my_swap_vars (&$a, &$b)
    {   
        echo "A --->";
        print_r($a);
        echo "B ---->";
        print_r($b);

        echo "Avant condition"\n
        if (is_array($a) && is_array($b)) {
            $newA = "";
            $newB = "";
            for ($i=0; $i <count($a); $i++) { 
                echo "a test" . $a[$i];
                $newB = $a[$i];
            }
            echo "Boucle A ---> " . $newB;
            for ($i=0; $i <count($b); $i++) { 
                $newA = $b[$i];
            }
            echo "Boucle B -->" . $newA;
        } else if (is_array($a) ) {
            // for ($i=0; $i <count($a); $i++) { 
            //     echo $a[$i];
            // }
        } else {
            $my_swap = $b;
            $b = $a;
            $a = $my_swap;
            echo "A ---> " . $a . "B --->" . $b, "\n";
        }
    };
    // my_swap_vars(1, 2);
    // my_swap_vars("A", "B");
    my_swap_vars(["A", "AA"], ["B", "BB"]);
?>