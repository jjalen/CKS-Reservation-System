<html>
<head>
    <title>CKS Reservation Form</title>
</head>
<link rel="stylesheet" href="cksformcss.css">

<body>
  <div class="container" id="blur">
    <img class="banner" src="cks-banner.jpg" alt="">
    <form action="Connect.php" method="POST">
      <div class="title">Booking details</div>
      <label for="museum">Choose a Museum to visit:</label><br>

      <!--Choose a museum to visit-->
  <select id="museum" name="museum">
    <option value="none"> </option>
    <option value="all">All</option>
    <option value="CKS">Center for Kapampangan Studies</option>
    <option value="Pinatubo">Pinatubo Museum</option>
    <option value="Manasala">Manasala Museum</option>
  </select><br><br><br>
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
          <input type="text" placeholder="First Name" name="fname" required>
        </div>
        <div class="input-box">
          <span class="details">Last Name:</span>
          <input type="text" placeholder="Last Name" name="lname" required>
        </div>
        <div class="input-box">
          <span class="details">Email:</span>
          <input type="text" placeholder="Email" name="fname" required>
        </div>
        <div class="input-box">
          <span class="details">Mobile Number:</span>
          <input type="text" placeholder="Mobile Number" name="fname" required>
        </div>
        <div class="input-box">
          <span class="details">Address:</span>
          <input type="text" placeholder="Address" name="fname" required>
        </div>
        <div class="input-box">
          <span class="details">Affiliation:</span>
          <input type="text" placeholder="Affiliation" name="fname" required>
        </div>
      </div>

      <!--Privacy Policy Text-->
      <div class="terms">
        <input type="radio" id="accept" name="policy" value="privacy">
        <label for="accept">I have read and agree to the <a class="policy" href="#" onclick="toggle()">Privacy Policy</a></label>
      </div>

      <!--submit button-->
      <div class="submit">
        <button type="submit" class="btn">Submit</button>
        <div class="popup">
          <img src="tick.png">
          <h2>AWESOME!</h2>
          <p>Your booking has been submitted.</p>
          <br>
          <p>Check your emails for details.</p>
          <button type="button">OK</button>
        </div>
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
</html>