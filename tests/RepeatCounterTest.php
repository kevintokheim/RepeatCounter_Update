<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_oneWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(array("a", 1), $result);
        }

        function test_countRepeats_twoWords()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a b";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(array("a", 1), $result);
        }

        function test_countRepeats_sameLetters()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "a";
            $input_string = "a b and a c and ad";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(array("a", 2), $result);
        }

        function test_countRepeats_finalTest()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "the";
            $input_string = "the theater is for the thespians";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(array("the", 2), $result);
        }

    }

?>
