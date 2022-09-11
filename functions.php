<!-- Programmer: Chauntel Atchley Cully
     This page contains the Member class with functions representing 
     the memberName and memberExpiration -->
<?php
    class Member
    {
        // Create variables
        private $memberName;
        private $memberExpiration;
        public $currentMember = true;

        // Create cunstructor this must have 2 underscores (__)construct
        function __construct($memberName, $memberExpiration)
        {
            $this->memberName = $memberName;
            $this->memberExpiration = $memberExpiration;
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
            $memberExpiration = date_create("2022-09-01");
            $now = new DateTime();
            $interval = date_diff($memberExpiration, $now)->format('%a');  
        
            // Use if else statement to check if now's is < memberExpiration 
            // to show how many days are left of membership or show how many 
            // days have passed since expiration and provide a form to renew.
            if($now < $memberExpiration)
            {
                echo ("Your card expires in " . $interval . " days.");
            }
            else
            {
                echo ("Your card expired " . $interval . " days ago!");
                echo ("<p style='display: flex; justify-content: center;'>" . "Please resubmit below to renew membership.");
                echo ("</p>");
                include "expired.php"; // include the expired page if .... expired
            }
        }
    }   
?>