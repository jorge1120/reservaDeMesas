
<?php


class reservation{

    private $recibe;

    function DataReservation(){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        
    }
    

     function confirmacion(){

        $recibe = new Mesa();
        $recibe -> status;
        

        if (isset($_POST)&& $recibe ->status= true ){
          echo "Reservacion realizada";
       } 

}}





