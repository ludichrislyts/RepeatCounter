<?php
	require_once "src/CountRepeat.php";

	class CountRepeatTest extends PHPUnit_Framework_TestCase
	{
		//spec 1 test
		function test_findSingleLetterSingle()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "A";
			$input_string = "A";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 1;

			//Assert
			$this->assertEquals($answer, $result);
		}
		//spec 2 test
		function test_twoLetterSingle()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "If";
			$input_string = "If";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 1;

			//Assert
			$this->assertEquals($answer, $result);
		}
		//spec 3 test
		function test_twoLetterOneTimeInString()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "If";
			$input_string = "What if the big quake happens?";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 1;

			//Assert
			$this->assertEquals($answer, $result);
		}
		//spec 4 test
		function test_singleLetterMultTimesInString()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "I";
			$input_string = "I hope I get a job after class";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 2;

			//Assert
			$this->assertEquals($answer, $result);
		}
		//spec 5 test
		function test_twoLetterMultTimesInString()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "If";
			$input_string = "If I work hard, and if I am lucky, I should find work.";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 2;

			//Assert
			$this->assertEquals($answer, $result);
		}
		//spec 6 test
		function test_threeLetterOneTimeInString()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "Dog";
			$input_string = "That dog really stinks";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 1;

			//Assert
			$this->assertEquals($answer, $result);
		}
		//spec 7 test
		function test_threeLetterMultTimesInString()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "Bad";
			$input_string = "My bad, it's actually me who smells bad.";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 2;

			//Assert
			$this->assertEquals($answer, $result);
		}
	}
?>
