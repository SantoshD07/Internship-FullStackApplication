



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/main.css" type="text/css"> 
        <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        

        
    </head>
    <body>

        <div class= "main-div">
            
            <div class="container">
            </br>
              <h1 class =" text-dark text-center font-weight-bold"> Action Log </h1>
</br>

                <div class="col-lg-12">
                    <table class =" table table-striped table-hover table-bordered">
                        <thead>
                            <tr class= "bg-dark text-white text-center">
                            
                                
                                <th>ID</th>
                                <th>USN </th>
                                <th>Action Done</th>
                                <th>Timestamp</th>
                                
                            </tr>    
                        </thead>

                        <tbody>
                        <?php

                          

                            $conn = mysqli_connect('localhost', 'root','','internship');

                            $selectquery = "select * from logs";
                            
                            $query = mysqli_query($conn,$selectquery);

                            while($res= mysqli_fetch_array($query) )
                            {
                                
                                        ?>
                                
                                    
                                        <tr class= text-center>
                                            <td> <?php echo $res["ID"]; ?> </td>
                                            <td> <?php echo $res["USN"]; ?> </td>
                                            <td> <?php echo $res["Action"]; ?> </td>
                                            <td> <?php echo $res["cDate"]; ?> </td>
                                             </tr>
                                    
                                        
                                        
                                        <?php
                                    
                                
                            }

                            ?>
                          

                        
                        </tbody>
                       
                    </table>
                    
                </div>
            </div>
               
                    
                
        </div>
        
        
    </body>
</html>