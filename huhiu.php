<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>ONLINE SERVICE BOOKING</title>

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        

        <link href="css/bootstrap-icons.css" rel="stylesheet">
        

         <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet"> 
        


<!-- TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity -->




   

     
        
        <!-- registration form -->
        <body>
        <style>
            body {
                font-family: Arial;
                font-size: 16px;
                padding: 6px;
              }
              
              * {
                box-sizing: border-box;
              }
              
              .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
              }
              
              
              .col-75 {
                -ms-flex: 75%; /* IE10 */
                flex: 100%;
              }
              
            
              
              .col-75 {
                padding: 0 16px;
              }  */
              
              .container {
                background-color: #f2f2f2;
                padding: 5px 20px 15px 20px;
                border: 1px solid lightgrey;
                border-radius: 3px;
                 max-width:500px;
              margin:auto;
              }
              
              .container1 {
                background-color: #f2f2f2;
                padding: 5px 20px 15px 20px;
                border: 1px solid lightgrey;
                border-radius: 3px;
                 max-width:600px;
              margin:auto;
              }
              input[type=text] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              input[type=datetime-local] {
                width: 100%;
                margin-bottom: 20px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              
              
              input[type=email],textarea, select {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              
              input[type=number] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              input[type=text] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              input[type=time] {
                width: 100%;
                margin-bottom: 20px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              input[type=date] {
                width: 100%;
                margin-bottom: 20px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
              }
              
              
              
              .btn {
                background-color: #04AA6D;
                color: white;
                padding: 12px;
                margin: 10px 0;
                border: none;
                width: 100%;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
              }
              
              .btn:hover {
                background-color: #45a049;
              }
              
              
              
              
              
              /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
              @media (max-width: 400px) {
                .row {
                  flex-direction: column;
                }
                .col-25 {
                  margin-bottom: 20px;
                }
              }
            </style>

            
   

            <center><h2>BOOK AN APPOINTMENT</h2></center>
            <div>
              <div>
                <div class="container">
                  <form action="insert.php" method="post">
                  
                    
                        <h3>Customer detail</h3>

                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" required>

                        <label for="address">Address</label>
                        <input type="text" id="address" name="address"  placeholder="full Address" required>	

                        <label for="city">City</label>
                        <input type="text" id="city" name="city"  placeholder="city" required>	

                       <label for="pincode">PinCode</label>
                       <input type="text" id="pincode" name="pincode"  placeholder="562112" required>

                       <label for="State">State</label>
                       <input type="text" id="state" name="state"  placeholder="state" required>

                       <label for="country">Country</label>
                       <input type="text" id="country" name="country"  placeholder="country" required>
       
                      <div>
                    <div>
                    <label for="Appointment date">Appointment Date</label>
                    <input type="date" id="date" name="date" required>
                    

                                  </div>
                                  </div>   
                                <div>
                                  <div >
                                    Gender:
                                    <br>
                                    <input type="radio" name="gender"  value="male">Male
                                    <br>
                                    <input type="radio" name="gender"  value="female">Female
                                    
                                   
                                    <br>
                                    <input type="radio" name="gender" value="other">Other  
                                    <br>
                                    <br>
                                    <br>
                                    SERVICE MENU:
                                    <br>
                                    <input type="radio" name="choice"  value="haircut - $50 - $60">Haircut - $50 - $60
                                    <br>
                                    <input type="radio" name="choice"  value="beard trimming - $20 - $25">Beard Trimming - $20 - $25
                                    
                                   
                                    <br>
                                    <input type="radio" name="choice" value="hair tirm - $30 - $40  ">Hair Trim - $30 - $40  
                                    <br>
                                    <input type="radio" name="choice" value="kid cut - $40 - $45 ">Kid's Cut - $40 - $45 
                                    <br> 
                                    <input type="radio" name="choice" value="haircut - $120 - $150 ">Haircut & Shave - $120 - $150 
                                    <br> 
                                    <input type="radio" name="choice" value="buzz cut  - $27- $37">Buzz Cut - $27- $37
                                    <br>
                                    
                                  </div>

                                </div>
                                  <label for="time">Time</label>
                                   <input type="time" id="time" name="time" >

                                
                                  <div>  
                                    <div>  
                                    <label for="age">Age</label>
                                  <input type="number" id="age" name="age" required>
                                                                          
                                                                          
                                  </div>
                                </div>    
                              
                                <label for="appointment_details">Appointment Details</label>
                                <textarea type="text" id="appointment_details" name="appointment_details" style="height:100px"></textarea> 
                                
                                              
                              <input type="submit" value="Submit" class="btn" onclick=location.href="hello.html">
                        </form>  
                        </div>                                  
                        </div>
                      </div> 
                  </form>  
                    </body>
                  
                  
                      

                   
                    
                

                <!-- JAVASCRIPT FILES -->
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.sticky.js"></script>
                <script src="js/click-scroll.js"></script>
                <script src="js/counter.js"></script>
                <script src="js/custom.js"></script>

            </body>
        </html>