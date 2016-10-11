<div class="wrap">
  <header class="ContactHeader container u-centered">
    <h1 class="heading -huge">Let’s work together</h1>
    <p class="copy">
      Just tell me a little bit about the project at hand.
    </p>
  </header>
</div>

<div class="wrap">
  <form class="ContactForm container js-form" action="" method="POST">
    <?php
      if(isset($_POST['submit'])){
        $to = 'thomasthesecond@gmail.com';
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first_name'];
        $subject = 'Form submission';
        $subject2 = 'Copy of your form submission';
        $message = $name . ' wrote the following:' . '\n\n' . $_POST['description'];
        $message2 = 'Here is a copy of your message ' . $name . '\n\n' . $_POST['description'];
        $headers = 'From:' . $from;
        $headers2 = 'From:' . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
        echo 'Mail Sent. Thank you ' . $name . ', we will contact you shortly.';
        // You can also use header('Location: thank_you.php'); to redirect to another page.
      }
    ?>

    <fieldset>
      <legend>Contact information</legend>
      <div class="field -half">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name" required>
        <span class="label">Your name</span>
      </div>

      <div class="field -half">
        <label for="email">Your email address</label>
        <input type="email" id="email" name="email" required>
        <span class="label">Your email address</span>
      </div>
    </fieldset>

    <fieldset>
      <legend>Project information</legend>
      <div class="field">
        <label for="description">Project description</label>
        <textarea id="description" name="description" required></textarea>
        <span class="label">Project description</span>
      </div>
    </fieldset>

    <button class="js-submit" type="submit" name="submit" id="submit">
      Let’s get started!
    </button>
  </form>
</div>
