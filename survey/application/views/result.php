<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    #green {
      background-color: #2ecc71;
      height: 50px;
      width: 400px;
      padding: 30px;
    }

    #result {
      border: 2px solid black;
      height:450px;
      width: 500px;
      margin-left: 500px;
      padding: 50px;
    }
  </style
</head>
<body>
    <div id="result">
      <h3>Submitted Information</h3>
      <div id="green"> <p>Thanks for submitting the form. You have submitted this form <?php echo $this->session->userdata('counter'); ?> times now. </p></div>

      <p> Number of visit: </p>
      <p>Your Name:<?php echo $this->session->userdata('name'); ?></p>

      <p>Location:<?php echo $this->session->userdata('location'); ?></p>


      <p>Favorite Language:<?php echo $this->session->userdata('language'); ?> </p>

      <p>Comment(Optional):<?php echo $this->session->userdata('comment'); ?> </p>

    </div>
</body>
</html>
