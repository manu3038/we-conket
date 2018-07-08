<script type="text/javascript">
  function validateForm() {
    var name=document.forms["cnt"]["name"].value;
    var phno=document.forms["cnt"]["phone"].value;
    if (isNaN(phno)) {
      alert("Numeric values only in Phone no");
      return false;
    }
    if (phno.length!=10) {
      alert("Valid Number should be entered");
      return false;
    }
    if (!isNaN(name)) {
      alert("No numbers in name");
      return false;
    }
  }
  function initMap(){
    var weconekt={lat: 13.0132063,lng: 77.6272159};
    var map=new google.maps.Map(
      document.getElementById('map'), {zoom: 14, center: weconekt});
    var marker= new google.maps.Marker({position: weconekt,map: map});
  }
</script><div class="container-fluid">
<h2 class="text-center">Connect with us</h2>
<div class="row">
  <div class="col-md-1" style="max-width: 10px;"></div>
  <div class="col-md-5">
    <h2 style="color:darkblue;">We-Conekt Enterprises</h2>
    <h5><span class="fa fa-address-card"></span> #101 2nd floor, 4th cross, Kanakadasa layout,<br> Lingarajapuram Bengaluru 560084</h5>
    <br><h5><span class="fa fa-phone"></span> 9538443628</h5>
    <br><h5><span class="fa fa-phone"></span> 9538443668</h5>
    <br><p style="font-size:20px;"><span class="fa fa-envelope"></span> info@we-conekt.com</p>
    <br><p style="font-size:20px;">Working Hours:<br>Monday-Saturday: </p>
    </div>
  <div class="col-md border" id="map" style="height: 500px;"></div>
 <div style="padding-left: 15px; font-size:25px;">
    <p> Our staff  are available during office hours and will be  happy to answer your every question.<br>
      You can also wWrite to us using the contact form: </p>
 </div>
</div>
  <div class="row">
  <div class="col-md">
    <form action="<?php echo base_url('index.php/welcome/savingData'); ?>" method="post" name="cnt">
      <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control" id="name" required="">
      </div>
      <div class="form-group">
          <label for="phone">Phone no:</label>
          <input type="text" name="phone" class="form-control" id="phone" maxlength="10" required="">
      </div>
      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" class="form-control" id="email" required="">
      </div>
      <div class="form-group">
          <label for="query">Query:</label>
          <textarea class="form-control" id="query" name="query" rows="3" required=""></textarea>
      </div>
      <div class="form-group">
        <button class="btn btn-success" type="submit" name="submit" onclick="validateForm();">Submit</button>
        <button class="btn btn-danger" type="reset" name="reset">Reset</button>
      </div>
    </form>
  </div>
  <div class="col-md" style="background-color:yellow;">
<div class="row" >
         <div class="col-md"><a href="#"><i class="fa fa-twitter"></i></a><br></div>
         <div class="col-md"><a href="#"><i class="fa fa-facebook"></i></a><br></div>
        <div class="col-md"><a href="#"><i class="fa fa-instagram"></i></a><br></div>
        <div class="col-md"><a href="#"><i class="fa fa-linkedin"></i></a><br></div>

  </div>
</div>
</div>
