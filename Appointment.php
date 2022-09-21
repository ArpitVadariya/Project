<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="appointment_style.css" />
    <title>Appoinment Form</title>
  </head>
  <body>
    <form name="appointment" action="Book_Appointment.php" method="POST" id="appointment">
      <h1 class="header">Appointment Form</h1>
      <!-- Customer Name -->
      <input
        class="text-field"
        type="text"
        name="Customer_name"
        id="Customer_name"
        placeholder="Enter Your Name"
        required
      />
      <br />

      <!-- Email -->
      <input
        class="text-field"
        type="email"
        name="Customer_Email"
        id="Customer_Email"
        placeholder="Enter Your Email"
        required
      />
      <br />

      <!-- Contact Number -->
      <input
        class="text-field"
        type="Text"
        name="Customer_contact"
        id="Customer_contact"
        placeholder="Enter Your mobile number"
        required
      />
      <br />

      <!-- Appointment_date -->
      <input
        class="date-field"
        type="date"
        name="appointment_date"
      />
      <br />


      <!-- services -->

      <div class="services_parent">
        <div class="services_child">
          <h2 class="h2">Sercives</h2>
          <hr />
          <hr />
          <div class="wrapper div1">
            <input
              type="radio"
              value="Hair Color"
              name="service"
            />Hair Color
            <br>
            <input
              type="radio"
              value="Hair Cut"
              name="service"
            />Hair Cut
            <br>
            <input
              type="radio"
              value="Eyebrow"
              name="service"
            />Eyebrow
            <br>
            <input
              type="radio"
              value="Reserved Bride Room"
              name="service"
            />Reserved Bride Room
            <br>
            <input
              type="radio"
              value="SPA"
              name="service"
            />SPA
            <br>
            <input
              type="radio"
              value="Manicure"
              name="service"
            />Manicure
            <br>
          </div>
          </div>
        </div>
      </div>
      <br />

      <!-- Message Box -->
      <textarea
        class="text-field textarea"
        type="textarea"
        name="messagebox"
        id="messagebox"
        placeholder="Enter messgae regarding appointment..."
      ></textarea>
      <br />

      <!-- Gender -->
      <div class="field-gender">
        <label for="Gender" class="gen">
          <input
            type="radio"
            name="Gender"
            value="Male"
            required
          />&nbsp;&nbsp;Male</label
        >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="Gender" class="gen">
          <input
            type="radio"
            name="Gender"
            value="Female"
            required
          />&nbsp;&nbsp;Female</label
        >
      </div>
      <br />

      <!-- submit button -->
      <button class="submit" type="submit" name="submit" value="Submit">
        Submit
      </button>
    </form>




  </body>
</html>
<script> 
  var today = new Date();
  var month = today.getmonth() + 1;
  var day = today.getDate();
  var year = today.getFullYear();
  if(month < 0)
  month = '0' + month.toString();
  if(day < 10)
  day = '0' + day.toString();
  var mindate = year + '-' + month + '-' + day;
  $('.date-field').attr('max', mindate);
</script>