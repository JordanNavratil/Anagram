<?php
    class AnagramChecker
    {
        function checkAnagram($input_word, $comparison_word)
        {
            $input_word =  strtolower($input_word);
            $comparison_word = strtolower($comparison_word);
            $input_array_of_letters = str_split($input_word);
            $comparison_array_of_letters = str_split($comparison_word);
            sort($input_array_of_letters);
            sort($comparison_array_of_letters);

            // var_dump($input_array_of_letters);
            //
            //
            if ($input_array_of_letters == $comparison_array_of_letters) {
                return True;
            }
            //

        }
    }
?>
