<html>

  <body style="font-family: Arial, sans-serif; color: #333;">
    <div style="text-align:center; margin-bottom: 20px;">
      <img src="https://testkesar.pleximus.co/asset/img/logo/kesar-logo-png.png" alt="Kesar Control" style="width: 150px;height: auto;">
    </div>
    <div style="padding: 20px; background: #f4f4f4; border-radius: 5px;">
      <p>Hello Team,</p>
      <p>You have received a new inquiry from your website contact form. Below are the details:</p> 
      <p>Full Name: <b> {{ isset($data['name']) ? $data['name'] : '' }}</b></p>
      <p>Number: <b> {{ isset($data['phone_number']) ? $data['phone_number'] : '' }}</b></p>
      <p>Email: <b> {{ isset($data['email']) ? $data['email'] : '' }}</b></p>
      <p>Country: <b> {{ isset($data['country']) ? $data['country'] : '' }}</b></p>
      <p>City: <b> {{ isset($data['city']) ? $data['city'] : '' }}</b> </p> 
      <p>Message: <b> {{ isset($data['requirement']) ? $data['requirement'] : '' }}</b></p> 
      <p>Please reach out to the user at the earliest.</p>
      <br>
      <p>Best regards,<br>
      Kesar Control Systems</p> 
     </div>
  </body>

</html>
