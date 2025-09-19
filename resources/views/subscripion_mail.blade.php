<html>

  <body style="font-family: Arial, sans-serif; color: #333;">
    <div style="text-align:center; margin-bottom: 20px;">
      <img src="https://testkesar.pleximus.co/asset/img/logo/kesar-logo-png.png" alt="Kesar Control" style="width: 150px;height: auto;">
    </div>
    <div style="padding: 20px; background: #f4f4f4; border-radius: 5px;">
      <p>Hello Team,</p>
      <p>A new user has subscribed to the newsletter.</p>
      <p>Subscriber Email: <b>{{ isset($data['email']) ? $data['email'] : '' }}</b></p>
      <p>Best regards,<br>
      Kesar Control Systems Website</p>
     </div>
  </body>

</html>
