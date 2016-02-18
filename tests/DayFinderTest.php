<?php
    require_once __DIR__ . '/../src/DayFinder.php';

    class ClassTest extends PHPUnit_Framework_TestCase
    {
        function test_dayFinder_Wednesday()
        {
            // Arrange
            $test_DayFinder = new DayFinder;
            $month = 1;
            $day = 1;
            $year = 1800;

            // Act
            $result = $test_DayFinder->returnDay($day, $month, $year);
            // Assert
            $this->assertEquals("Wednesday", $result);
        }

        function test_dayFinder_LeapYear()
        {
            // Arrange
            $test_DayFinder = new DayFinder;
            $month = 2;
            $day = 18;
            $year = 2016;

            // Act
            $result = $test_DayFinder->returnDay($day, $month, $year);
            // Assert
            $this->assertEquals("Thursday", $result);
        }
    }
 ?>
