<?php

class Delete
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
    function delete_slider($id)
    {
        $query = "DELETE FROM slider WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Slider Deleted Successfully.....!";
            return $msg;
        }
    }

    function delete_marquee($id)
    {
        $query = "DELETE FROM marquee WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Marquee Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_education($id)
    {
        $query = "DELETE FROM education WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Education Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_features($id)
    {
        $query = "DELETE FROM features WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Features Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_university($id)
    {
        $query = "DELETE FROM university WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "University Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_event($id)
    {
        $query = "DELETE FROM events WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Events Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_about_text($id)
    {
        $query = "DELETE FROM about_us WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "About Us Text Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_overview($id)
    {
        $query = "DELETE FROM overview WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Card Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_testiomonial($id)
    {
        $query = "DELETE FROM testimonial WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Testimonial Text Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_concern($id)
    {
        $query = "DELETE FROM concern WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Concern Text Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_events_news($id)
    {
        $query = "DELETE FROM events_news WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Event News Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_events_text_documentation($id)
    {
        $query = "DELETE FROM events_apply_now WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Event Text Documentation Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_service_students($id)
    {
        $query = "DELETE FROM services_student WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Services Student Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_service_institute($id)
    {
        $query = "DELETE FROM partnership_institute WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Services Institute Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_blogs($id)
    {
        $query = "DELETE FROM blogs WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Blogs Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_news($id)
    {
        $query = "DELETE FROM news WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "News Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_videoes($id)
    {
        $query = "DELETE FROM videoes WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Videoes Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_study_destination($id)
    {
        $query = "DELETE FROM study_destination WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Study Destination Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_apply_now_text_documentation($id)
    {
        $query = "DELETE FROM apply_now_text WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Apply Now Text Documentation Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_contact_id($id)
    {
        $query = "DELETE FROM contact WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Contact Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_privacy_policy($id)
    {
        $query = "DELETE FROM privacy_and_policy WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Privacy and Policy Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_term_conditions($id)
    {
        $query = "DELETE FROM terms_and_conditions WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Term & Conditions Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_jobpost($id)
    {
        $query = "DELETE FROM carrier WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Job Post Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_event_form($id)
    {
        $query = "DELETE FROM events_application_apply_now WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Application Form Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_apply_now_form($id)
    {
        $query = "DELETE FROM apply_now WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Application Form Deleted Successfully.....!";
            return $msg;
        }
    }
    function delete_request_apply_now_form($id)
    {
        $query = "DELETE FROM request_apply_now WHERE id=$id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Application Form Deleted Successfully.....!";
            return $msg;
        }
    }
    


    











}
