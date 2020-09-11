<section class="contact-container" id="contact">
        <div class="contact-background">
          <div class="contact-border">
            <div class="contact-title">
              <h3>Contact</h3>
              <p>You can contact me here</p>
            </div>
            <form class="form-container" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <?php
            if(!empty($_POST['user']) && !empty($_POST['mail']) && !empty($_POST['description'])){
                if(preg_match('/^[a-zA-Z\sÑñáéíóúÁÉÍÓÚ]+$/',$_POST['user']) && preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST['mail']) && preg_match('/^[a-zA-ZÑñ\sáéíóúÁÉÍÓÚ0-9]+$/',$_POST['description'])){
                    $mail = $_POST['mail'];
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                        $user = $_POST['user'];
                        $description = $_POST['description']; 
                        $to = 'garavello.manuel@gmail.com';
                        $header = "From:".$mail."\r\n";
                        $header.= "Reply-To: $user"."\r\n";
                        $header.= "X-Mailer: PHP/".phpversion();
                        $mail = mail($to,'Portfolio',$description,$header,$user);
                        if(mail){
                            echo "<p class='alert alert-success'>Message send</p>";
                        }
                        else{
                            echo "<p class='alert alert-danger' role='alert' >An error has ocurried</p>";
                        }
                    }else{
                        echo "<p class='alert alert-danger' role='alert' >An error has ocurried</p>";
                    }    

                }else{
                    echo "<p class='alert alert-danger' role='alert' >An error has ocurried</p";
                }
            }
            ?>
              <label for="user">Name:</label>
              <input type="text" name="user" placeholder="Enter your name" required>
              <label for="mail">Mail:</label>
              <input type="email" name="mail"  placeholder="Enter your mail" requiered>
              <label for="description">Message:</label>
              <textarea name="description" placeholder="Write here a comment" required></textarea>
              <input type="submit" value="Send">
            </form>
          </div>
        </div>
      </section>
