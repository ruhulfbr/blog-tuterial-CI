 <?php require_once 'header.php';?>
 <div class="mainbar">
        <div class="article">
          <h2><span>Sign up here</span></h2>
          <div class="clr"></div>
          <h3 style="color:orange">
    
    <?php 
    $msg = $this->session->userdata('message');
    if($msg){
        echo $msg;
        $this->session->unset_userdata('message');

    }

     ?>
</h3>
        </div>
        <div class="article">
          <h2><span> Input here your information bellow</h2>
          <div class="clr"></div>
          <form action="<?php echo base_url(); ?>/welcome/save_user" method="post">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input type="text" name="user_name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input type="email" name="user_email" class="text" />
              </li>
              <li>
                <label for="website">Password</label>
                <input type="password" name="user_password" class="text" />
              </li>
              
              <li>
                <input type="submit" name="submit" value="Sign up" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
      <?php require_once 'sidebar.php';?>
      <?php require_once 'footer.php';?>