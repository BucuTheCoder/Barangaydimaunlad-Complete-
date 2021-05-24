<?php
  //Created by Bryan Joshua Bucu

  include  ('Database/sessioncheck.php'); 
  include ('Database/adminpanel.php');
  require ('Database/permission.php');

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="style/mainstyle.css"> 
  <link rel="stylesheet" href="style/newpanel.css">
  <script src="script/admscript.js"></script>
</head>

<header>
    <nav>
          <div id="logo"><img src= "style/img/logo.png" width= "60px" height="60px">    
          </div>

          <input type="checkbox" id="check">
            <label for ="check">
              <li id="icon"><i class="fas fa-bars"></i></li>  
            </label>

          <ul>
              <li><a class="active" href="admin.php">Admin Panel</a></li>
              <li><a href="index.php">Home</a></li>
              <li><a href="news.html">News</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About</a></li>
          </ul>

           <form id="logout" action="Database/logout.php" method="POST">
            <?php echo $_SESSION['username']?>
            <input type="submit" value="logout" /> 
            </form>
    </nav>

</header>
     
    
            
      
<body>


  
<div id="main-container">
  <div id="sidebar">
    <h1> WELCOME ADMIN </h1>
        <p> What would you like to do? </p>
      <button onclick="add_user()"> Create </button>
      <button onclick="edit_users()"> Update </button>
        <button onclick="view_users()"> Display  </button>  
      <button onclick="delete_user()"> Delete  </button>
  </div>

  <div id="content">
    <div id="welcome">
      <h2> Barangay Di-Maunlad Admin Panel </h2>
      <p> This page is for admin users only. Admin can view, add, edit and delete in the barangay database </p>
    </div>

<div id="updateuser" class="animate">
  <div class="containerr">
        <table> 
          <tr>
            <th>ID</th>
            <th>Type</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Purok</th>
            <th colspan="2"></th>
          </tr>
          <tr>
              <?php edit();?>
        </tr>

        </table>
    </div>


    <div class="containerr">
      <button type="button" onclick="document.getElementById('updateuser').style.display='none'" class="cancelbtn">CLOSE</button>
    </div>
  </div>



    <div id="adduser">
            <form class="modal-content animate" action="Database/adminpanel.php" method="POST">

                  <h2>Add Data</h2>
                  
                     <label>First name:</label> <input id="inputform" type = "text" name = "firstname" />
                     <br>
                     <label>Last name:</label> <input id="inputform" type = "text" name = "lastname" />
                     <br>
                     <label>Age:</label> <input id="inputform" type = "text" name = "age" />
                    <br>
                     <label>Gender:</label> 
                    <input  type="radio" name="gender" value="male"> Male 
                    <input type="radio" name="gender" value="female"> Female
                    <br>
                     <label>Type:</label> 
                     <input type="radio" name="type" value="boarder"> Boarder 
                    <input type="radio" name="type" value="resident"> Resident
                     <br>
                   <label>Purok:</label> 
                   <select name="purok">
                    <option value="1"> Purok 1 </option> 
                    <option value="2"> Purok 2 </option> 
                    <option value="3"> purok 3 </option> 
                   </select>

                  <button type="submit" name="submit">Submit</button>
            <div class="containerr" >
      <button type="button" onclick="document.getElementById('adduser').style.display='none'" class="cancelbtn">Cancel</button>
    </div>  
            </form>
</div>
  
  <div id="id01" class="animate"> 

        <div class="imgcontainer">
          <h2> Display Data </h2>
        </div>

    <div class="containerr">
        <table> 
          <tr>
            <th>ID</th>
            <th>Type</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Purok</th>
         
          </tr>
          <tr>
              <?php view();?> 
        </tr>


        </table>
    </div>

    <div class="containerr">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">CLOSE</button>
    </div>

</div> 


<div id="deleteuser" class="animate">
  <div class="containerr">
        <table> 
          <tr>
            <th>ID</th>
            <th>Type</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Purok</th>
          </tr>
          <tr>
              <?php view();?>
        </tr>

        </table>
    </div>

    <form action="Database/adminpanel.php" method="POST">
    <input id="inputform" type="text" name="id" placeholder="Enter id of data to delete"/>
    <input type="submit" name="delete" value="delete"/>
    </form>

    <div class="containerr">
      <button type="button" onclick="document.getElementById('deleteuser').style.display='none'" class="cancelbtn">CLOSE</button>
    </div>

</div>


</div>
</html>