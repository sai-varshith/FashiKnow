<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Contact Us</title>
</head>
<body>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">

<div>
  <div class="contact-form-wrapper d-flex justify-content-center">
    <form class="contact-form">
      <h5 class="title">Contact us</h5>
      <p class="description">Feel free to contact us if you need any assistance, any help or another question.
      </p>
      <div>
        <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required name="username">
      </div>
      <div>
        <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required name="email">
      </div>
      <div>
        <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required name="message"></textarea>
      </div>
      <div class="submit-button-wrapper">
        <input type="submit" value="Send" name="submit" onclick="message();">
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  function message(){
    alert("Message Sent SuccessFully");
  }

</script>
</body>
</html>