<!-- Programmer: Chauntel Atchley Cully
     This page contains the Member class with functions representing 
     the memberName and memberExpiration -->
<?php
    class Member
    {
        // Create variables
        public $memberName;
        public $memberExpiration;

        // Create cunstructor this must have 2 underscores (__)construct
        function __construct()
        {
            $this->memberExpiration = new DateTime('12/12/2022');
        }

        // Create methods
        function get_memberName()
        {
            return $this->memberName;
        }

        function get_memberExpiration()
        {
            // Get the difference between hardcoded date(memberExpiration) 
            // and today's date(now) converting/formatting it to days.
            $now = new DateTime();
            $interval = date_diff($this->memberExpiration, $now)->format('%a');  
        
            // Use if else statement to check if now's is < memberExpiration 
            // to show how many days are left of membership or show how many 
            // days have passed since expiration and provide a form to renew.
            if($this->memberExpiration > $now)
            {
                echo ("Your card expires in " . $interval . " days. On " . $this->memberExpiration->format('M d, Y') . ".");
            }
            else
            {
                echo ("Your card expired " . $interval . " days ago. On " . $this->memberExpiration->format('M d, Y') . ".");
                echo ("<p style='display: flex; justify-content: center;'>" . "Please resubmit below to renew membership.");
                echo ("</p>");
            }
        }
    }   
?>