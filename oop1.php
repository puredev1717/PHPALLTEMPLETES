<?php


   // 1. Build a Class and Object

	//class test1 { // Build Test Class
		    //Set Syntax in Block
	//}
	  // $obj = new test1(); //Create new Object for Getting in $obj Vaiable
	  // echo "\$obj is a " . $gettype($obj)."<br>"; //Print $obj Variable is Data Type ?

	// (Real Case 1)

	//class Database { //Build Database Class 
			//Set Syntax in Block
	//}
	  // $conn = new Database(); //Create conn object for Getting in $conn Variable
	 //  echo "\$conn is a " . $gettype($conn)."<br>";


    // 2. Object Properties
    class test2 { // Build Test Class
		//Set Syntax in Block
		   var $name = "PPPOE"; // Set $name Variable of Class with var Syntax 
    }
       $obj1 = new test2(); //Create new Object for Getting in $obj Vaiable
	   $obj2 = new test2();
	      $obj1->name="VLAN"; // Set Prtoeries of $obj1
		  $obj2->name="MACADDRESS";
       echo "$obj1->name". '<br>'; //Print $obj1 Variable Properties 
	   echo "$obj2->name". '<br>'; //Print $obj2 Variable Properties
	
	// 3.Object Method 
	class ObjMetch {
		var $name ="MORRANAPHAP"; // Set $name Variable of Class with var Syntax
		   function Hello() // Build Hello() Method
		   {
			echo "Hello". '<br>';
		   }
	}

			$obj = new ObjMetch();
			$obj-> Hello(); //Typing Hello




	// 4. Access Object Property in Method
	class ObjMetch2 // Build ObjMetch
	{
		var $name2 = "PURE"; //Set $name Variable of Class with var Syntax
			function Hello()
			{
				echo "Hello$this->name2<br>\n";
				// Call Object Property or Object Method in This Class we call special Variable are $this follow ->

			}
			function setname($n)
			{
				$this->name2=$n; //we change syntax Properties USE setname($n) Method for chenge Properties before call method
			}
	}

	$obj = new ObjMetch2();
	$obj->Hello(); //Typing Hello PURE

	$obj = new ObjMetch2();
	$obj->setname("KNOCK");
	$obj->Hello();
	$obj->name2;
?>