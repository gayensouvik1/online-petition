<head>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="modal.css">
</head>

<button class="view" onclick="location.href = 'http://nucleus.esy.es/view.php';">All Petitions</button>
  <div class="imgcontainer">
    
    <img src="Petition.png" alt="Avatar" class="avatar">
  </div>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <label><b>Heading</b></label>
    <input type="text" placeholder="Enter Heading" name="heading" required>

    <label><b>Descrption</b></label>
    <input type="text" placeholder="Enter Description" name="description" required><br>

    <label><b>Add members</b></label>
    <input type="text" name="desc"><br>

    <button class="btn" id="myBtn">Submit</button><br>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>


  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <p><?php include 'submit.php';?></p>
  </div>

</div>

<script src="popup.js" ></script>



