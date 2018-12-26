<div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input style="width:100px; margin-top:10px;" name="button_search" class="button_search" type="submit" value="Search" />
          </form>
        </div>
        <div class="clr"></div>

        <?php  
          $user_id = $this->session->userdata('user_id');
          if ($user_id != NULL) {
           
        ?>

        <div class="gadget">
          <h2 class="star"><span>Welocome !!</span></h2>
          <h3 style="color:orange;" class="star"><span>Hellow !! <?php echo $this->session->userdata('user_name'); ?></span></h3>
          <ul class="sb_menu">
           <li><a href="<?php echo base_url();?>welcome/logout"><span>Log out</span></a></li>
         </ul>
          <div class="clr"></div>
          
        </div>
        <?php 
      }
         ?>

         <div class="gadget">
          <h2 class="star"><span>Recent blog</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
          <?php
          foreach ($recent_blog as $r_blog) {
          
          ?>
            <li><a href="<?php echo base_url(); ?>/welcome/blog_detail/<?php echo $r_blog->blog_id; ?>"><?php echo $r_blog->blog_title; ?></a></li>
            <?php } ?>
            
          </ul>
        </div>

        <?php
        if($menu)
        {
        ?>

        <div class="gadget">
          <h2 class="star"><span>Categories</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
          <?php
          foreach ($publish_catagory as $p_category) {
          
          ?>
            <li><a href="<?php echo base_url(); ?>/welcome/category_blog/<?php echo $p_category->category_id; ?>"><?php echo $p_category->category_name; ?></a></li>
            <?php } ?>
            
          </ul>
        </div>
        <?php } ?>
        <div class="gadget">
          <h2 class="star"><span>Populer blog</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
          <?php
          foreach ($populer_blog as $p_blog) {
          
          ?>
            <li><a href="<?php echo base_url(); ?>/welcome/blog_detail/<?php echo $p_blog->blog_id; ?>"><?php echo $p_blog->blog_title; ?></a></li>
            <?php } ?>
            
          </ul>
        </div>
      </div>