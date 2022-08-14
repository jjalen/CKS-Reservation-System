<html>
<head>
<link rel="stylesheet" href="cksformcss.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CKS Reservation Form</title>

</head>
<script>

  $(document).ready(function(){
    $('.btn-primary').click(function(){

    var museuemchoice = $('#museum').val();
    console.log(museuemchoice);

    var timechoice = $('#time').val();
    console.log(timechoice);

    var datechoice = $('#visit').val();
    console.log(timechoice);

    var personchoice = $('#quantity').val();
    console.log(personchoice);

    var firstname = $('#fname').val();
    console.log(firstname);

    var lastname = $('#lname').val();
    console.log(lastname);

    var emailchoice = $('#email').val();
    console.log(emailchoice);

    var numberchoice = $('#number').val();
    console.log(numberchoice);

    var addresschoice = $('#add').val();
    console.log(addresschoice);

    var affichoice = $('#affi').val();
    console.log(affichoice);

      $('#confirm-museum').val(museuemchoice);
      $('#confirm-time').val(timechoice);
      $('#confirm-date').val(datechoice);
      $('#confirm-persons').val(personchoice);
      $('#confirm-first').val(firstname);
      $('#confirm-last').val(lastname);
      $('#confirm-email').val(emailchoice);
      $('#confirm-address').val(numberchoice);
      $('#confirm-number').val(addresschoice);
      $('#confirm-affil').val(affichoice);

    });

  });
</script>

<body>
  <div class="container" id="blur">
    <img class="banner" src="cks-banner.jpg" alt="">
    <form action="confirmation.php" method="post">
      <div class="title">Booking Details</div> 
        <label for="museum">Choose a Museum to visit:</label><br>
      <div class="museum-container">
      <!--Choose a museum to visit-->
      <select id="museum" name="museum">
        <option value="none"> </option>
        <option value="all">All</option>
        <option value="CKS">Center for Kapampangan Studies</option>
        <option value="Pinatubo">Pinatubo Museum</option>
        <option value="Manasala">Manasala Museum</option>
      </select><br><br><br>
      <div class="tour">
      <a href="https://www.hau.edu.ph/CKSVirtualTour/">Virtual Tour</a>
      </div>

      </div>
    <div class="booking-details">
    <div>

      <!--Date of Visit-->
      <label for="visit">Date of Visit:</label>
      <input type="date" id="visit" name="visit">
    </div>

    <!--Select a Time-->
    <div>
      <label for="time">Select a time:</label>
    <input type="time" id="time" name="time">
    </div><br>

    <!--No. of Persons-->
    <div class="pax">
      <label for="quantity">No of Person(s):</label>
    <input type="number" id="quantity" name="quantity" min="1" max="5">
    </div>
  </div>

  <!--User Information-->
  <div class="title1">Information</div>
      <div class="user-details">
        <div class="input-box">
          <span class="details">First Name:</span>
          <input type="text" id="fname" name="fname" placeholder="First Name" required>
        </div>
        <div class="input-box">
          <span class="details">Last Name:</span>
          <input type="text" id="lname" name="lname" placeholder="Last Name" required>
        </div>
        <div class="input-box">
          <span class="details">Email:</span>
          <input type="text" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
          <span class="details">Mobile Number:</span>
          <input type="text" id="number" name="mnum" placeholder="+63" required>
        </div>
        <div class="input-box">
          <span class="details">Address:</span>
          <input type="text" id="add" name="add" placeholder="Address" required>
        </div>
        <div class="input-box">
          <span class="details">Affiliation:</span>
          <input type="text" id="affi" name="aff" placeholder="Affiliation" required>
        </div>
      </div>

      <!--Privacy Policy Text-->
      <div class="terms">
        <input type="radio" id="accept" name="policy" value="privacy">
        <label for="accept">I have read and agree to the <a class="policy" href="#" onclick="toggle()">Privacy Policy</a></label>
      </div>

      <!--submit button-->
      <div class="submit">
      <button type='button' id="submits" class='btn btn-primary' data-toggle="modal" data-target="#exampleModalCenter">  Submit
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></button>      
</div>
    </form>
  </div>

  <!--Privacy policy-->
  <script type="text/javascript">
    function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }
</script>

  <!--Terms and Services Popup-->
  <div class="popup" id="popup">
    <h1>Terms of service</h1>
    <h4>By using our Services, you are agreeing to these terms, Please read them carefully.</h4>
    <p>Following the recent announcement of the Inter-Agency Task Force for the Management of Infectious Diseases (IATF) placing the Region 3 under Alert Level 1, the Holy Angel University in Angeles City shall still accept walk-in visitors; advance booking through this website shall only be required for groups of 5 - 10 persons.<br><br><br>

        By using the Holy Angel University online platform and submitting personal information, the user expressly consents to the collection, use, and disclosure of his/her personal information strictly for purposes of online booking and contact tracing. The Holy Angel University recognizes its obligation under the Data Privacy Act of 2012 and is committed to use the information consistent with provisions of the Act, its implementing Rules and Regulations, and relevant issuances of the National Privacy Commission.</p>
    <a href="#" id="a1" onclick="toggle()">Close</a>
</div>


<!--submit button-->
  <script>
    let popup = document.getElementById("popup");

    function openPopup(){
      popup.classList.add("open-popup");
    }
    function closePopup(){
      popup.classList.remove("open-popup");
    }
  </script>


</body>
<!-- ######################################  CONFIRMATION RECORD MODAL  ############################################## -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Confirmation</h3>
                    </div>
                    <div class="modal-body">
                        <form action="confirmation.php" method="POST">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Museum</label>
                                <input type="text" id="confirm-museum" class="form-control" placeholder="Museum" name="museum_input">
                            </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Time</label>
                                <input type="text" id="confirm-time" class="form-control" placeholder="Time" name="time_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Date</label>
                                <input type="text" id="confirm-date" class="form-control" placeholder="Date" name="date_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. of Persons</label>
                                <input type="text" id="confirm-persons" class="form-control" placeholder="No. of Persons" name="person_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">First Name</label>
                                <input type="text" id="confirm-first" class="form-control" placeholder="First Name" name="fname_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Last Name</label>
                                <input type="text" id="confirm-last" class="form-control" placeholder="Last Name" name="lname_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" id="confirm-email" class="form-control" placeholder="Email" name="email_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" id="confirm-address" class="form-control" placeholder="Address" name="address_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mobile Number</label>
                                <input type="text" id="confirm-number" class="form-control" placeholder="Mobile Number" name="number_input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Affiliation</label>
                                <input type="text" id="confirm-affil" class="form-control" placeholder="Affiliation" name="affil_input">
                            </div>
                            <div style='text-align: center;'>
                                <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                        
                    </div>
        
                    </div>
                </div>
            </div>
</html>