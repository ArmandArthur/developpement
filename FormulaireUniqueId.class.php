<?php

//You can of course choose any name for your class or integrate it in something like a functions or base class
class FormulaireUniqueId
{
    //Here we store the generated form key
    private $uniqueId;
     
    //Here we store the old form key (more info at step 4)
    private $oldUniqueId;
     
    //The constructor stores the form key (if one excists) in our class variable
    function __construct()
    {
        //We need the previous key so we store it
        if(isset($_SESSION['uniqueId']))
        {
            $this->oldUniqueId = $_SESSION['uniqueId'];
        }
    }
 
    //Function to generate the form key
    private function generateUniqueId()
    {
        //Get the IP-address of the user
        $ip = $_SERVER['REMOTE_ADDR'];
         
        //We use mt_rand() instead of rand() because it is better for generating random numbers.
        //We use 'true' to get a longer string.
        //See http://www.php.net/mt_rand for a precise description of the function and more examples.
        $uniqid = uniqid(mt_rand(), true);
         
        //Return the hash
        return md5($ip . $uniqid);
    }
 
     
    //Function to output the form key
    public function displayUniqueId()
    {
        //Generate the key and store it inside the class
        $this->uniqueId = $this->generateUniqueId();
        //Store the form key in the session
        $_SESSION['uniqueId'] = $this->uniqueId;
         
        //Output the form key
        print($this->uniqueId);
        //echo "<input type='hidden' name='form_key' id='form_key' value='".$this->uniqueId."' />";
    }
 
     
    //Function that validated the form key POST data
    public function validate()
    {
       if(isset($_POST['uniqueId']))
       {
        //We use the old formKey and not the new generated version
        if($_POST['uniqueId'] == $this->oldUniqueId)
        {
            //The key is valid, return true.
            return true;
        }
        else
        {
            //The key is invalid, return false.
            return false;
        }           
       }
    }
}
?>