<?php

    class Display
    {
        private $con;
        public function __construct()
        {
            $dbhost = "localhost";  
            $dbuser = "root";
            $dbpass = "";
            $dbname = "global"; 

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn)
            {
                die("Database Connection Error!");
            }
        }
        //..................................................................................
        public function show_slider()
        {
            $query = "SELECT * FROM slider";
           
            if(mysqli_query($this->conn, $query))
            {
                $slider = mysqli_query($this->conn, $query);
                return $slider;
            }
        }
    public function show_marquee()
    {
        $query = "SELECT * FROM marquee";
        if (mysqli_query($this->conn, $query)) {
            $marquee = mysqli_query($this->conn, $query);
            return $marquee;
        }
    }

    public function show_education()
    {
        $query = "SELECT * FROM education";
        if (mysqli_query($this->conn, $query)) {
            $education = mysqli_query($this->conn, $query);
            return $education;
        }
    }
    public function show_features()
    {
        $query = "SELECT * FROM features";
        if (mysqli_query($this->conn, $query)) {
            $features = mysqli_query($this->conn, $query);
            return $features;
        }
    }


    public function show_university()
    {
        $query = "SELECT * FROM university";
        if (mysqli_query($this->conn, $query)) {
            $university = mysqli_query($this->conn, $query);
            return $university;
        }
    }
    public function show_events()
    {
        $query = "SELECT * FROM events";
        if (mysqli_query($this->conn, $query)) {
            $events = mysqli_query($this->conn, $query);
            return $events;
        }
    }
    public function show_about_text()
    {
        $query = "SELECT * FROM about_us";
        if (mysqli_query($this->conn, $query)) {
            $about_us = mysqli_query($this->conn, $query);
            return $about_us;
        }
    }
    public function show_overview()
    {
        $query = "SELECT * FROM overview";
        if (mysqli_query($this->conn, $query)) {
            $overview = mysqli_query($this->conn, $query);
            return $overview;
        }
    }

    public function show_events_news()
    {
        $query = "SELECT * FROM events_news";
        if (mysqli_query($this->conn, $query)) {
            $events_news = mysqli_query($this->conn, $query);
            return $events_news;
        }
    }

    public function show_events_text_documentation()
    {
        $query = "SELECT * FROM events_apply_now";
        if (mysqli_query($this->conn, $query)) {
            $events_apply_now = mysqli_query($this->conn, $query);
            return $events_apply_now;
        }
    }
    public function show_service_students()
    {
        $query = "SELECT * FROM services_student";
        if (mysqli_query($this->conn, $query)) {
            $services_student = mysqli_query($this->conn, $query);
            return $services_student;
        }
    }
    public function show_service_institute()
    {
        $query = "SELECT * FROM partnership_institute";
        if (mysqli_query($this->conn, $query)) {
            $partnership_institute = mysqli_query($this->conn, $query);
            return $partnership_institute;
        }
    }
    public function show_blogs()
    {
        $query = "SELECT * FROM blogs";
        if (mysqli_query($this->conn, $query)) {
            $blogs = mysqli_query($this->conn, $query);
            return $blogs;
        }
    }
    public function show_news()
    {
        $query = "SELECT * FROM news";
        if (mysqli_query($this->conn, $query)) {
            $news = mysqli_query($this->conn, $query);
            return $news;
        }
    }
    public function show_videoes()
    {
        $query = "SELECT * FROM videoes";
        if (mysqli_query($this->conn, $query)) {
            $videoes = mysqli_query($this->conn, $query);
            return $videoes;
        }
    }
    public function show_study_destination()
    {
        $query = "SELECT * FROM study_destination";
        if (mysqli_query($this->conn, $query)) {
            $study_destination = mysqli_query($this->conn, $query);
            return $study_destination;
        }
    }
    public function apply_now_text()
    {
        $query = "SELECT * FROM apply_now_text";
        if (mysqli_query($this->conn, $query)) {
            $apply_now_text = mysqli_query($this->conn, $query);
            return $apply_now_text;
        }
    }
    public function show_contact()
    {
        $query = "SELECT * FROM contact";
        if (mysqli_query($this->conn, $query)) {
            $contact = mysqli_query($this->conn, $query);
            return $contact;
        }
    }
    public function show_term_conditions()
    {
        $query = "SELECT * FROM terms_and_conditions";
        if (mysqli_query($this->conn, $query)) {
            $terms_and_conditions = mysqli_query($this->conn, $query);
            return $terms_and_conditions;
        }
    }
    public function show_privacy_policy()
    {
        $query = "SELECT * FROM privacy_and_policy";
        if (mysqli_query($this->conn, $query)) {
            $privacy_and_policy = mysqli_query($this->conn, $query);
            return $privacy_and_policy;
        }
    }
    public function show_jobpost(){
        $query = "SELECT * FROM carrier";
        if (mysqli_query($this->conn, $query)) {
            $carrier = mysqli_query($this->conn, $query);
            return $carrier;
        }
    }
    public function request_apply_now(){
        $query = "SELECT * FROM request_apply_now";
        if (mysqli_query($this->conn, $query)) {
            $carrier = mysqli_query($this->conn, $query);
            return $carrier;
        }
    }

    public function event_apply_now(){
        $query = "SELECT * FROM events_application_apply_now";
        if (mysqli_query($this->conn, $query)) {
            $carrier = mysqli_query($this->conn, $query);
            return $carrier;
        }
    }
    public function apply_now(){
        $query = "SELECT * FROM apply_now";
        if (mysqli_query($this->conn, $query)) {
            $carrier = mysqli_query($this->conn, $query);
            return $carrier;
        }
    } 
    
 


    





    }
?>