<style type="text/css">
    /***********contact us****************/
    input[type=text], select, textarea{

      width: 100%; /* Full width */
      padding: 1%; /* Some padding */  
      border: 1px solid #ccc; /* Gray border */
      border-radius: 4px; /* Rounded borders */
      box-sizing: border-box; /* Make sure that padding and width stays in place */
      margin-top: 0; /* Add a top margin */
      margin-bottom: 1%; /* Bottom margin */
      resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    input[type=submit] {
        background-color: green;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=reset]{
     background-color: green;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;



    }

    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
        background-color: #45a049;
    }
    input[type=reset]:hover {
        background-color: red;
        color: white;
    }

    table{
      border-collapse: separate;
     border-spacing: 20px;
    }
    label{font-weight: bold;}
    /******************
    contact us
    */
</style>
<?php $lan=$_GET['lan'];?>
<script language="javascript">
  function validateform(fm){
    // alert('sdf');
      if(fm.firstname.value == ""){
          alert("Please type your First Name.");
          fm.firstname.focus();
          return false;
      }
      if(fm.lastname.value == ""){
          alert("Please type your Last Name.");
          fm.lastname.focus();
          return false;
      }

      var goodEmail = fm.email.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);    
      if(fm.email.value == ""){
          alert("Please type your E-mail.");
          fm.email.focus();
          return false;
      }
      if (!goodEmail) {
          alert("The Email address you entered is invalid please try again!")
          fm.email.focus()
          return (false);
      }
      if(fm.adress.value == ""){
          alert("Please type Address.");
          fm.adress.focus();
          return false;
      }
      if(fm.phone.value == ""){
          alert("Please type Phone Number.");
          fm.phone.focus();
          return false;
      }
      if(fm.country.value == ""){
          alert("Please type Country.");
          fm.country.focus();
          return false;
      }     
      if(fm.comment.value == ""){
          alert("Please type your Comment.");
          fm.comment.focus();
          return false;
      }
      if(fm.security_code.value == ""){
          alert("Please enter security code.");
          fm.security_code.focus();
          return false;
      }
      else if(fm.security_code.value.length < 6)
      {
          alert("Please enter valid length security code.");
          fm.security_code.focus();
          return false;
      }
  }
</script>
<div class="9u row">
    <div class="12u skel-cell-important">
        <section class="sidebar welcome">
            <?php global $feedbackmsg; if(!empty($feedbackmsg)) $msg = $feedbackmsg; else if(isset($_REQUEST['msg'])) $msg = $_REQUEST['msg'];
            if(!empty($msg)){?>
                <header class="error-msg"><h2 style="background: #de3d27"><?php echo $msg;?></h2></header>
            <?php }?>
            <header>
                <h2><?php if($lan!='en') echo 'Contact Us'; else echo 'Contact Us';?></h2>
            </header>
            <article>
                <?php
                    $content=$groups->getByURLName(CONTACT);
                    // $contentGet=$conn->fetchArray($content);
                    if($lan!='en')
                       echo $content['contents'];
                    else echo $content['contentsen'];
                ?>
            </article>
            <header>
                <h2>Give Us Feedback</h2>
            </header>
            <div class="row">
              <div class="6u skel-cell-important" style="min-width: 5%">
                  <form action="" method="post" alingn="right" style="height: 30%;width: 100%;" onSubmit="return validateform(this);">
                      <label for="firstname">First Name</label>
                      <input type="text" id="firstname" name="firstname" placeholder="Your First Name.." required="">
                      
                      <label for="lastname">Last Name</label>
                      <input type="text" id="lastname" name="lastname" placeholder="Your last name.." required="">
                      
                      <label for="add">E-mail</label>
                      <input type="text" id="email" name="email" placeholder="Your E-mail.." required="">
                      
                      <label for="add">Address</label>
                      <input type="text" id="address" name="address" placeholder="Your Address.." required="">
                      
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" placeholder="Your Phone.." required="">

                      <label for="country">Country</label>
                      <input type="text" id="country" name="country" placeholder="Your Country.." required="">

                      <label>Gender</label>
                      <input type="radio" name="gender" value="male" checked=""> Male
                      <input type="radio" name="gender" value="female"> Female
                      <input type="radio" name="gender" value="other"> Other<br>


                      <label>Security Code</label>
                      <p>
                          <img src="includes/captcha.php?width=110&height=40&characters=6" id="captchaimage" />
                          <a style="margin: 0px 0 0 15px" href="javascript: void(0);" onclick="document.getElementById('captchaimage').src = 'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); return false;" class="captchaReload">
                              [ Reload Image ]
                          </a>
                      </p>

                      <input type="text" placeholder="Enter security code" maxlength="6" name="security_code" id="security_code" required="">

                      <label for="subject">Comment</label>
                      <textarea id="comment" name="comment" placeholder="Write your comment here.." rows="3" cols="50" required=""></textarea>
                      <table>
                          <tbody>
                              <tr>
                                  <th><input name="btnFeedback" type="submit" value="Submit"></th>
                                  <th><input type="reset" value="cancel"></th>
                              </tr>
                          </tbody>
                      </table>    
                  </form>
              </div>
              <div class="6u">
                  <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.3912115245785!2d85.32252385118707!3d27.70520498270832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a7f732d815%3A0xf6ac17188a66f88c!2sKrishi-+Ghar+%2C+ICT+In+Agriculture+Nepal+Office!5e0!3m2!1sen!2snp!4v1500443089931" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
            </div>
        </section>
    </div>
</div>

<!-- <?php $lan=$_GET['lan'];?>
<script language="javascript">
  function validateform(fm){
    // alert('sdf');
      if(fm.name.value == ""){
          alert("Please type your Name.");
          fm.name.focus();
          return false;
      } 
      var goodEmail = fm.email.value.match(/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\..{2,3}))$)\b/gi);    
      if(fm.email.value == ""){
          alert("Please type your E-mail.");
          fm.email.focus();
          return false;
      }
      if (!goodEmail) {
          alert("The Email address you entered is invalid please try again!")
          fm.email.focus()
          return (false);
      }
      if(fm.subject.value == ""){
          alert("Please type Subject.");
          fm.subject.focus();
          return false;
      }     
      if(fm.comment.value == ""){
          alert("Please type your Comment.");
          fm.comment.focus();
          return false;
      }
      if(fm.security_code.value == ""){
          alert("Please enter security code.");
          fm.security_code.focus();
          return false;
      }
      else if(fm.security_code.value.length < 6)
      {
          alert("Please enter valid length security code.");
          fm.security_code.focus();
          return false;
      }
  }
</script>
<style type="text/css">
    .error-msg{
          padding: 1%; background: #c76353; color: white; margin-bottom: 1%; margin: 0.5%;
    }
</style>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'Our Contact Information'; else echo 'हाम्रो सम्पर्क';?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $content=$groups->getByURLName(CONTACT);
                // $contentGet=$conn->fetchArray($content);
                if($lan!='en')
                   echo $content['contents'];
                else echo $content['contentsen'];
            ?>
        </div>
        <div class="panel-heading"><h3><?php if($lan=='en') echo 'Send Us Feedback'; else echo 'प्रतिक्रिया पठाउनुहोस';?></h3></div>
        <?php global $feedbackmsg; if(!empty($feedbackmsg)) $msg = $feedbackmsg; else if(isset($_REQUEST['msg'])) $msg = $_REQUEST['msg'];
        if(!empty($msg)){?>
            <div class="error-msg"><?php echo $msg;?></div>
        <?php }?>
        <div class="panel-body dynamic">
            <form id="contact_us" name="contact_us" action="" method="post" onSubmit="return validateform(this);">
                <div>
                  <p> नाम </p>
                  <input type="text" required="" placeholder="Name *" name="name" id="name">
                </div>
                <div>
                  <p> ठेगाना </p>
                  <input type="text" placeholder="Address" name="address" id="address">
                </div>
                <div>
                  <p> फोन नं. </p>
                  <input type="text" placeholder="Phone" name="phone" id="phone">
                </div>
                <div>
                  <p> ईमेल </p>
                  <input type="text" required="" placeholder="E-Mail *" name="email" id="email">
                </div>
                <div>
                  <p> बिषय </p>
                  <input type="text" required="" placeholder="Subject *" name="subject" id="subject">
                </div>
                <div>
                  <p> प्रतिक्रिया </p>
                  <textarea id="comment" required="" cols="60" name="comment" rows="7" placeholder="Your Comment *"> </textarea><br>
                </div>
                <div>
                    <p>Security Code:</p>
                    <p>
                        <img src="includes/captcha.php?width=110&height=40&characters=6" id="captchaimage" />
                        <a href="javascript: void(0);" onclick="document.getElementById('captchaimage').src = 'includes/captcha.php?width=110&height=40&characters=6&' + Math.random(); return false;" class="captchaReload">[ Reload Image ]</a>
                    </p>
                </div>
                <div>
                    <input type="text" required="" placeholder="Enter security code" maxlength="6" name="security_code" id="security_code">
                </div>
                <button type="submit" name="btnFeedback" class="btn btn-success btn-lg"><i class="fa fa-send"></i> Send Feedback</button>
            </form>
        </div>
    </div>            
</div> -->