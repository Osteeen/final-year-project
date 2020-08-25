<?php
    $connection = new mysqli("localhost", "root", "", "chapel_attendance");

        $output .= '
                    <div class="info">
                        <div class="">Name : Austin</div>
                        <hr />
                        <div class="">MatNo/Staff Id : VUG/CSC/17/2383</div>
                        <hr />
                        <div class="">Department : Computer Science</div>
                        <hr />
                        <div class="">Level/Program : 400</div>
                        <hr />
                        <div class="">Gender : 400</div>
                    </div>
                    ';
        echo $output;
  
?>