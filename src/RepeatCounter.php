<?php

    class RepeatCounter
    {

        function countRepeats($input_word, $input_string)
        {

            //takes $input_string and turns it into an array of strings
            $input_array_string = explode(" ", $input_string);

            $words_and_repeats = array();

            foreach ($input_array_string as $string) {

                //checks to see if $input_word is in $input_array_string
                //and if true returns $string (the word being searched for)
                if (in_array($input_word, $input_array_string)){


                    //counts the values of input_array_string and looks for the
                    //user's input word
                    $repeated_words_array = array_count_values($input_array_string);

                    $repeated_words = $repeated_words_array[$input_word];

                    //var_dump($repeated_words);

                    array_push($words_and_repeats, $string, $repeated_words);

                }

                    return $words_and_repeats;

            }
        }
    }



 ?>
