<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project One</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <h1> Student </h1>

    <?php
            $server="localhost";
            $username="root"; 
            $password=""; 
            $database="mydatabase1"; 
            $con=mysqli_connect($server,$username,$password,$database);
            if(!$con){
                die('Not Successful '.mysqli_connect_error());
            }else{
                echo "Successful!";
            }
            echo "<br/>"; 
            $sql="SELECT * FROM student_info";
            $result=mysqli_query($con,$sql); 
            $rowCount=mysqli_num_rows($result);
            echo 'Number of rows in the database; '.$rowCount.'<br>'; 
            /*
            if($result){
                while($row=$result->fetch_assoc()){
                    $studentId=$row['id'];
                    $studentName=$row['name'];
                    $studentAge=$row['age'];  
                }
                echo "Student ID: $studentId, Student Name: $studentName, Student Age: $studentAge <br>"; 
            }else{
                echo "Erro".mysqli_error($con); 
            }

            $rows=array();
            while($row=$result->fetch_assoc()){
                $rows[]=$row; 
            }
            echo "<table>";
            echo "<tr>";
            echo "<th> ID </th>";
            echo "<th> Name </th>";
            echo "<th> Age </th>";
            echo "</tr>";
            
            foreach($rows as $row){
                echo"<tr>";
                echo"<td>".$row['id']."<td>".'<br/>';
                echo"<td>".$row['name']."<td>";
                echo"<td>".$row['age']."<td>";
                echo"</tr>";   
            }
            
            echo "</table> "; 
            mysqli_close($con); 
    ?>
    */
    ?>
            <?php if ($rowCount>0): ?>
     <div class="main-div">            
        
    <table> 
        <thead> 
            <tr> 
                <th>ID</th> 
                <th> Name</th> 
                <th> Age</th>
            </tr> 
            </thead> 
            
             
                    <?php while ($row=$result->fetch_assoc()): ?>
                        <tr> 
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['age']; ?> </td>
                        </tr> 
                    <?php endwhile; ?> 
              
    </table> 
                    </div> 
    <?php else: ?> 
        <p> No Data </p> 
    <?php endif; ?>
    <?php mysqli_close($con); ?>

    <br> 

   

    <div class="api"> 
    <h4> API</h4> 
        <h4> Cat Facts <h4> 
        <p id="cat-para"> Randaom Cats Fact</p>      

    </div> 










   

<script src="java.js"> </script>  
</body>
</html>
            