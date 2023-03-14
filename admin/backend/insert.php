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
    public function add_slider($data)
    {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) 
            {
                $query = "INSERT INTO slider (image) VALUE('$image')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/slider/' . $image);
                    $msg = "Slider Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

    public function add_marquee($data)
    {
        $text = $data['text'];
        $query = "INSERT INTO marquee (text) VALUE ('$text')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Marquee Added......";
            return $msg;
        } else {
            $msg = "Marquee Not Added......";
            return $msg;
        }
    }

    public function add_education($data)
    {
        $text = $data['text'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO education (image, text) VALUE('$image', '$text')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/education/' . $image);
                    $msg = "Education Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

    public function add_features($data)
    {
        $heading = $data['heading'];
        $text = $data['text'];
        $query = "INSERT INTO features (heading,text) VALUE ('$heading','$text')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Features Added......";
            return $msg;
        } else {
            $msg = "Features Not Added......";
            return $msg;
        }
    }



    public function add_university($data)
    {
        $university_name = $data['university_name'];
        $details = $data['details'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO university (image,university_name,details) VALUE('$image', '$university_name', '$details')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/add_university/' .$image);
                    $msg = "University Added Successfully.....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

    
    public function add_events($data)
    {
        $event_name = $data['event_name'];
        $time = $data['time'];
        $date = $data['date'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO events (image,event_name,time,date) VALUE(' $image','$event_name','$time','$date')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/add_events/' . $image);
                    $msg = "Events Added Successfully.....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

    
 

    public function add_about_text($data)
    {
        // $text= $data['text'];
        $text = $data['text'];
        $query = "INSERT INTO about_us (text) VALUE ('$text')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Text Added......";
            return $msg;
        } else {
            $msg = "Text Not Added......";
            return $msg;
        }
    }

    public function add_overview($data)
    {
        // $text= $data['text'];
        $heading = $data['heading'];
        $text = $data['text'];
        $query = "INSERT INTO overview (heading,text) VALUE ('$heading','$text')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Card Added......";
            return $msg;
        } else {
            $msg = "Card Not Added......";
            return $msg;
        }
    }
    
   
    public function add_events_news($data)
    {
        $event_name = $data['event_name'];
        $time = $data['time'];
        $date = $data['date'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO events_news (image,event_name,time,date) VALUE('$image','$event_name','$time','$date')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/events_news/' . $image); 
                    $msg = "Event News Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }


    public function add_events_text_documentation($data)
    {
        // $text= $data['text'];
        $header = $data['header'];
        $text = $data['text'];
        $query = "INSERT INTO events_apply_now (header,text) VALUE ('$header','$text')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Events Text Documentation Added......";
            return $msg;
        } else {
            $msg = "Events Text Documentation Not Added......";
            return $msg;
        }
    }

    public function add_service_students($data)
    {
        // $text= $data['text'];
        $heading = $data['heading'];
        $text = $data['text'];
        $query = "INSERT INTO services_student (heading,text) VALUE ('$heading','$text')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Services Student Text Documentation Added......";
            return $msg;
        } else {
            $msg = "Services Student Text Documentation Not Added......";
            return $msg;
        }
    }
    public function add_service_institute($data)
    {
        $text = $data['text'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO partnership_institute (image,text) VALUE('$image','$text')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/service_institute/' . $image);
                    $msg = "Institute Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }


    public function add_apply_now_text_documentation($data)
    {
        // $text= $data['text'];
        $heading = $data['heading'];
        $description = $data['description'];
        $query = "INSERT INTO apply_now_text (heading,description) VALUE ('$heading','$description')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Apply Now Text Documentation Added......";
            return $msg;
        } else {
            $msg = "Apply Now Text Documentation Not Added......";
            return $msg;
        }
    }


    public function add_contact($data)
    {
        // $text= $data['text'];
        $address = $data['address'];
        $phone_number = $data['phone_number'];
        $email = $data['email'];
        $query = "INSERT INTO contact (address,phone_number,email) VALUE ('$address','$phone_number','$email')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Contact Added Sucessfully......";
            return $msg;
        } else {
            $msg = "Contact Not Added......";
            return $msg;
        }
    }


    public function add_privacy_policy($data)
    {
        // $text= $data['text'];
        $privacy_description= $data['privacy_description'];
        $policy_description = $data['policy_description'];

        $query = "INSERT INTO privacy_and_policy (privacy_description,policy_description) VALUE ('$privacy_description','$policy_description')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Privacy and Policy Added Sucessfully......";
            return $msg;
        } else {
            $msg = "Privacy and Policy Not Added......";
            return $msg;
        }
    }

   
    public function add_blogs($data)
    {
        $heading = $data['heading'];
        $details = $data['details'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO blogs (image,heading,details) VALUE('$image','$heading','$details')"; 

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/add_blogs/' . $image);
                    $msg = "Blogs Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

    public function add_news($data) 
    {
        $heading = $data['heading'];
        $details = $data['details'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO news (image,heading,details) VALUE('$image','$heading','$details')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/add_news/' . $image);
                    $msg = "News Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }
    public function add_videoes($data)
    {
     
        $url = $data['url'];
      

        $query = "INSERT INTO videoes (url) VALUE ('$url')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Videoes URL Added Sucessfully......";
            return $msg;
        } else {
            $msg = "Videoes URL Not Added......";
            return $msg;
        }
    }
    public function add_study_destination($data)
    {
        $university_name = $data['university_name'];
        $university_details = $data['university_details'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if ($ext == 'jpg' or $ext == 'png' or $ext == 'jpeg') {
            if ($image_size <= 3145728) {
                $query = "INSERT INTO study_destination (image,university_name,university_details) VALUE('$image','$university_name','$university_details')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($tmp_name, 'storage/add_study_destination/' . $image);
                    $msg = "Study Destination Added Successfully .....!";
                    return $msg;
                }
            } else {
                $msg = "Your File Size Should Be Less or Equal 3 MB!";
            }
        } else {
            $msg = "Your File Must Be a JPG or PNG File!";
            return $msg;
        }
    }

    public function add_term_conditions($data)
    {
        // $text= $data['text'];
        $terms_description = $data['terms_description'];
        $conditions_description = $data['conditions_description'];

        $query = "INSERT INTO terms_and_conditions (terms_description,conditions_description) VALUE ('$terms_description','$conditions_description')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Terms And Conditions Added Sucessfully......";
            return $msg;
        } else {
            $msg = "Terms And Conditions Not Added......";
            return $msg;
        }
    }
    public function add_jobpost($data)
    {
        // $text= $data['text'];
        $post_name = $data['post_name'];
        $last_date = $data['last_date'];
        $job_description = $data['job_description'];

        $query = "INSERT INTO carrier (post_name,last_date,job_description) VALUE ('$post_name','$last_date','$job_description')";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Job Post Added Sucessfully......";
            return $msg;
        } else {
            $msg = "Job Post Not Added......";
            return $msg;
        }
    }
}
?>
