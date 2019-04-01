<?php 
    include 'header.php';
    #We can also include function here.
?>
   <div class="container-fluid">
        <div class="row">  
            <div class="col-sm-5" style="background-color:lavender;">
                <?php 
                    include 'carousel.php';
                ?>     
            </div>  
            <div class="col-sm-6" style="background-color:lavender;">
                  
                    About Election Process <br>
                    And if want to arrange an election please sign up as an EC.
                  
                   <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Signup as
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Voter</a>
                          <a class="dropdown-item" href="#">Candidate</a>
                          <a class="dropdown-item" href="#">EC</a>
                        </div>
                  </div>
                  <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Signin as
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Voter</a>
                          <a class="dropdown-item" href="#">Candidate</a>
                          <a class="dropdown-item" href="#">EC</a>
                        </div>
                    </div>
            </div> 
        </div>
    </div>    
    
    <div class="footer">
        <?php 
            include 'footer.php';
        ?>
    </div>    

        
    

</body>

</html>
