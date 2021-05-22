<?php
  require_once('./sessioncheck.php'); 
  include('adminpanel.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="style/style.css"> 
  <link rel="stylesheet" href="style/panel.css">
  <script src="admscript.js"></script>
</head>

<body>
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
                <li>
              <form id="logout" action="logout.php" method="POST">
            <?php echo $_SESSION['username'];?>
            <input type="submit" value="logout" /> 
            </form>
            </li>
            
          </ul>
    </nav>

<div id="main-container">
  <div id="sidebar">
    <h1> WELCOME ADMIN </h1>
        <p> What would you like to do? </p>
      <button onclick="add_user()"> Add User </button>
      <button onclick="add_user()"> Edit User </button>
        <button onclick="view_users()"> Display User </button>  
      <button onclick="delete_user()"> Delete User </button>
  </div>

  <div id="content">
    <div id="welcome">
      <h2> Barangay Di-Maunlad Admin Panel </h2>
      <p> This page is for admin users only. Admin can view, add, edit and delete in the barangay database </p>
    </div>




    <div id="adduser">
            <form class="modal-content animate" action="adminpanel.php" method="POST">

                  <h2>Add Users</h2>
                  <div class="containerr">
                     First name: <input type = "text" name = "firstname" />
                     <br>
                     Last name: <input type = "text" name = "lastname" />
                     <br>
                     Age: <input type = "text" name = "age" />
                    <br>
                     Gender: <input type="radio" name="gender" value="male"> Male 
                <input type="radio" name="gender" value="female"> Female
                <br>
                 Purok: <input type = "text" name = "purok" />

                  </div>

        <button type="submit" name="submit">Submit</button>
            <div class="containerr" >
      <button type="button" onclick="document.getElementById('adduser').style.display='none'" class="cancelbtn">Cancel</button>
    </div>  
</div>
  
  <div id="id01" class="animate"> 

        <div class="imgcontainer">
          <h2> Display Users </h2>
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

    <form action="adminpanel.php" method="POST">
    <input type="text" name="id" placeholder="Enter id of data to delete"/>
    <input type="submit" name="delete" value="delete"/>
    </form>

    <div class="containerr">
      <button type="button" onclick="document.getElementById('deleteuser').style.display='none'" class="cancelbtn">CLOSE</button>
    </div>

</div>


</div>
</html>