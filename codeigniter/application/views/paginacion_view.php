    <body>
    <div id="container">
       <div id="body">
           <?php
           echo print_r($data["results"], true);
           //echo print_r($data, true);
           echo '<table>';

           
           
           foreach($data["results"] as $row) {
                echo "<td>".$row->Actividad."</td>".chr(10);
           }
           echo '</table>';

           //echo print_r($data["links"], true);

           echo "aaaa";
           echo $data["links"];
           echo "bbbb";
/*           foreach($data["links"] as $row) {
                echo "<td>".$row."</td>".chr(10);
           }*/
           
           ?>
           <p><?php  /*echo $links; */?></p>
       </div>
    </div>
    </body>
