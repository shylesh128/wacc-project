<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $fname=$data['name'];
        $rgno=$data['rgno'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];

        $q="insert into contact_us set first_name='$fname', reg_no='$rgno', email='$email', phone='$phone', message='$message'";
       $data= $this->mysqli->query($q);
       if($data==true){
           
       }
    }
    
    
}
?>