<?php

class Insert
{
    private $con;
    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "global";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Error!");
        }
    }
    //..................................................................................

    public function add_apply_now_form($data) 
    {
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $country_code = $data['country_code'];
        $mobile_number = $data['mobile_number'];
        $email = $data['email'];
        $study_destination = $data['study_destination'];
        $course_level = $data['course_level'];
        $subject = $data['subject'];
        $message = $data['message'];
        $query = "INSERT INTO events_application_apply_now (first_name,last_name,country_code,mobile_number,email,study_destination,course_level,subject,message) VALUE ('$first_name','$last_name','$country_code','$mobile_number','$email','$study_destination','$course_level','$subject','$message')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Your Application Has Been Submitted Successfully!......";
            return $msg;
        } else {
            $msg = "Your Application Not Submitted!......";
            return $msg;
        }
    }
    public function apply_now($data)
    {
        $name = $data['name'];
        $mobile_number = $data['mobile_number'];
        $email = $data['email'];
        $study_destination = $data['study_destination'];
        $course_level = $data['course_level'];
        $subject = $data['subject'];
        $message = $data['message'];
        $query = "INSERT INTO apply_now (name,mobile_number,email,study_destination,course_level,subject,message) VALUE ('$name','$mobile_number','$email','$study_destination','$course_level','$subject','$message')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Your Application Has Been Submitted Successfully!......";
            return $msg;
        } else {
            $msg = "Your Application Not Submitted!......";
            return $msg;
        }
    }
    public function request_apply_now($data)
    {
        $name = $data['name'];
        $phone = $data['phone'];
        $email = $data['email'];
        $address = $data['address'];
        $postal_code = $data['postal_code'];
        $country = $data['country'];
        $dob = $data['dob'];
        $gender = $data['gender'];
        $ielts = $data['ielts'];
        $interested_course = $data['interested_course'];
        $query = "INSERT INTO request_apply_now (name,phone,email,address,postal_code,country,dob,gender,ielts,interested_course) VALUE ('$name','$phone','$email','$address','$postal_code','$country','$dob','$gender','$ielts','$interested_course')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Your Application Has Been Submitted Successfully!......";
            return $msg;
        } else {
            $msg = "Your Application Not Submitted!......";
            return $msg;
        }
    }


}
?>