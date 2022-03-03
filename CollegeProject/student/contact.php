<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Contact Us Form  | CodingLab </title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <?php
      include "connection.php";
      $sql="SELECT * FROM admn LIMIT 1;";
      $q=mysqli_query($conn,$sql);
      if($q==TRUE){
        while($res=mysqli_fetch_array($q)){
          $phone=$res['mobile'];
          $email=$res['email'];
        }
      }
   ?>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one"><?php echo $phone; ?></div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one"><?php echo $email; ?></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div class="button" onclick="send()">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  <script>
    function send() {
      alert("Thank You For FeedBack");
      window.open("myTest.php");
    }
  </script>
</body>
</html>
