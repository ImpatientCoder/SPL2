<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Election Pole</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
 <div id="heading">
     <h2>Vote for your favourite candidate</h2>
 </div>
  <div class="container">
    <form action="pole.php" method="post" align="center">
       <div>
           <img src="../images/messi.jpg" width="280" height="250" alt="Messi"><br>
           <input type="submit" name="messi" value="Vote for Messi">
       </div>
       
       <div>
           <img src="../images/Cristiano-Ronaldo.jpg" width="280" height="250" alt="Ronaldo"><br>
           <input type="submit" name="ronaldo" value="Vote for Ronaldo">   
       </div>
       
       <div>
           <img src="../images/Neymar_Junior_the_Future_of_Brazil.jpg" width="280" height="250" alt="Neymar"><br>    
           <input type="submit" name="neymar" value="Vote for Neymar">
       </div>
       
    </form>
    
    <?php
          $connection = mysqli_connect('localhost', 'root', 'root', 'voter');
            
          if(isset($_POST['messi']))
          {
              $vote_messi = "UPDATE vote SET messi=messi+1;";
              $run_messi = mysqli_query($connection, $vote_messi);
              
              if($run_messi)
              {
                  echo "<h2 align='center'>Your vote has been casted for Lionel Messi</h2>";
                  echo "<h2 align='center'><a href='pole.php?results'>View Results</a></h2>";
              }
          }
          if(isset($_POST['ronaldo']))
          {
              $vote_ronaldo = "UPDATE vote SET ronaldo=ronaldo+1;";
              $run_ronaldo = mysqli_query($connection, $vote_ronaldo);
              
              if($run_ronaldo)
              {
                  echo "<h2 align='center'>Your vote has been casted for Cristiano Ronaldo</h2>";
                  echo "<h2 align='center'><a href='pole.php?results'>View Results</a></h2>";
              }
          }
          if(isset($_POST['neymar']))
          {
              $vote_neymar = "UPDATE vote SET neymar=neymar+1;";
              $run_neymar = mysqli_query($connection, $vote_neymar);
              
              if($run_neymar)
              {
                  echo "<h2 align='center'>Your vote has been casted for Neymar, Brazil</h2>";
                  echo "<h2 align='center'><a href='pole.php?results'>View Results</a></h2>";
              }
          } 
      
        //Operation for "View results..!"
        
         if(isset($_GET['results']))  
         {
             $get_votes = "SELECT* FROM vote";
             $run_votes = mysqli_query($connection, $get_votes);
             $votes_row = mysqli_fetch_array($run_votes);
             
             
             $messi = $votes_row['messi'];
             $ronaldo = $votes_row['ronaldo'];
             $neymar = $votes_row['neymar'];
             
             $count = $messi+$ronaldo+$neymar;
             
             $per_messi = round($messi*100/$count)."%";
             $per_ronaldo = round($ronaldo*100/$count)."%";
             $per_neymar = round($neymar*100/$count)."%";
             
             
             echo "
                <div style='background:orange; text-align:center; padding: 10px;'>
                    <center>
                        <h2>Updated result</h2>   
                        <p style='background: black; color:white; padding: 10px; width:50%;'>
                            <b>Lionel Messi: </b>$messi($per_messi)
                        </p>
                        <p style='background: black; color:white; padding: 10px; width:50%;'>
                            <b>Cristiano Ronaldo: </b>$ronaldo($per_ronaldo)
                        </p>
                        <p style='background: black; color:white; padding: 10px; width:50%;'>
                            <b>Neymar: </b>$neymar($per_neymar)
                        </p>
                    </center>
                </div>
             ";  
         }
    ?>              
  </div>

 <div id="heading">
     <h2>This is only for sample of project</h2>
 </div>
    
</body>
</html>