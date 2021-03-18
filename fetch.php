



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/main.css" type="text/css"> 
        <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code,jquey.com/ui/1.12.1/jquery-ui.js"></script>
        
    </head>
    <body>

        <div class= "main-div">
            
            <div class="container">
</br>
              <h1 class =" text-dark text-center font-weight-bold "> List of Candidates </h1>
</br>    


                <div class="col-lg-12">
                    <table class =" table table-striped table-hover table-bordered">
                        <thead>
                            <tr class= "bg-dark text-white text-center">
                            
                                
                                <th> USN </th>
                                <th> Name </th>
                                <th> Email</th>
                                <th> DOB</th>
                                <th> EQ</th>
                                <th> IQ</th>
                                <th> SKILL</th>
                                <th> PROFF</th>
                                <th> Company</th>
                                <th> Operation</th>
                            </tr>    
                        </thead>

                        <tbody>
                        
                        <?php

                          

                            $conn = mysqli_connect('localhost', 'root','','internship');

                                    $selectquery = "select * from student s INNER JOIN test t on s.USN= t.USN INNER JOIN skills k on s.USN=k.USN INNER JOIN company c on s.USN= c.USN" ;;
                                    $sq="select * from test";
                                    $sq2="select * from skills";

                                    $sqt=mysqli_query($conn,$sq);
                                    $sqt2=mysqli_query($conn,$sq2);
                                    $query = mysqli_query($conn,$selectquery);
                                                
                                    

                                    while($res= mysqli_fetch_array($query) )
                                    {
                                        
                                                ?>
                                        
                                            
                                                <tr>
                                                    <td> <?php echo $res["USN"]; ?> </td>
                                                    <td> <?php echo $res["Name"]; ?> </td>
                                                    <td> <?php echo $res["Email"]; ?> </td>
                                                    <td> <?php echo $res["DOB"]; ?> </td>
                                                    
                                                    <td> <?php echo $res["EQ"]; ?> </td>
                                                    <td> <?php echo $res["IQ"]; ?> </td>
                                                    <td> <?php echo $res["SKILL"]; ?> </td>
                                                    <td> <?php echo $res["PROFICIENCY"]; ?> </td>
                                                    <td> <?php echo $res["COMPANY_NAME"]; ?> </td>
                                                    <td> <button class="btn-danger btn"> <a href=" delete.php?USN=<?php echo $res['USN']; ?>" class= text-white> Delete </a> </button> </td>
                                                    
                                                </tr>
                                            
                                                
                                                
                                                <?php
                                            
                                        
                                    }

                                   

                                ?>
                        
                        </tbody>
                       
                    </table>
                    <form name="Form2" action="index.html#us">
                    <div class=text-right>
                    <button type="button" class="btn btn-info"><a href="index.html#us" class= "text-white"> Add New Record</button> 
                      </div>
                                </form>
                </div>
            </div>
               
                    
                
        </div>
        
        
    </body>
</html>