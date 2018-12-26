 <?php require_once 'header.php';?>
 <div class="mainbar">
        <div class="article">
          <h2><span><?php echo $blog_info->blog_title; ?></h2>
          <div class="clr"></div>
          <p>Posted by <a href="#"><?php echo $blog_info->author_name; ?></a> <span>&nbsp;&bull;&nbsp;</span> Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <p><?php echo $blog_info->blog_long_discription; ?> </p>
          <p>Tagged: <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a></p>
          <p><a href="#"><strong>Comments (3)</strong></a> <span>&nbsp;&bull;&nbsp;</span> May 27, 2010 <span>&nbsp;&bull;&nbsp;</span> <a href="#"><strong>Edit</strong></a></p>
        </div>
        <div class="article">
          <h2><span><?php echo count($comment_info); ?></span>  Response</h2>
          <div class="clr"></div>

          <?php  

            foreach ($comment_info as $v_comment) {
              

          ?>


          <div class="comment"> <a href="#"><img src="<?php echo base_url();?>images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#"><?php echo $v_comment->author_name; ?></a> Says:<br />
              <?php echo $v_comment->date_time; ?></p>
            <p><?php echo $v_comment->comment; ?></p>
          </div>

          <?php } ?>

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

        <?php  
        $user_id = $this->session->userdata('user_id');
        if( $user_id != NULL ){

        ?>



        <div class="article">
          <h2><span>Leave a</span> Reply</h2>
          <div class="clr"></div>
          <form action="<?php echo base_url(); ?>welcome/post_comment" method="post">
            <ol>
              
                <label for="message">Your Comments</label><br><br>
                <textarea name="comment" rows="8" cols="75"></textarea>
              <input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id; ?>">
           <br><br>
                <input type="submit" name="submit" value="Post comment" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>

        <?php 

      }
      else{

         ?>
         <h3 style="color:green;"> Please log in for comment <a href="<?php echo base_url();?>welcome/sign_in"><span>Login</span></a></h3>
         <?php } ?>

      </div>

      <?php require_once 'sidebar.php';?>
      <?php require_once 'footer.php';?>