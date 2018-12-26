 <?php require_once 'header.php';?>
 <div class="mainbar">
        <div class="article">
          <h2><span>Log in here</span></h2>
          <div class="clr"></div>
          
          <h3 style="color:orange">
    
    <?php 
    $exp = $this->session->userdata('exception');
    if($exp){
        echo $exp;
        $this->session->unset_userdata('exception');

    }

     ?>
</h3>
        </div>
        <div class="article">
          <h2><span>Login woth your right information</span></h2>
          <div class="clr"></div>
          <form action="<?php echo base_url(); ?>welcome/user_login" method="post">
            <ol>
             
              <li>
                <label for="email">Email Address (required)</label>
                <input type="email" name="user_email" class="text" />
              </li>
              <li>
                <label for="website">Password</label>
                <input type="password" name="user_password" class="text" />
              </li>
              
              <li>
                <input type="submit" name="submit" value="login" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
      <?php require_once 'sidebar.php';?>
      <?php require_once 'footer.php';?>