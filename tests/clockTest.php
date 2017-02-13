 <?php
 require_once "src/clock.php";

 class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_Clock()
        {
            $test_Clock_Angle = new Clock;
            $input1 = "6:00";
            $result = $test_Clock_Angle->ClockAngle($input1);

            $this->assertEquals(180 , $result);
        }
    }
?>
