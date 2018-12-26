<?php require_once 'header.php';?>

      <div class="mainbar">
      <?php
      foreach ($category_blog as $view_blog) {
       
      ?>
         <div class="article">
          <h2><span><?php echo $view_blog->blog_title; ?></span></h2>
          <p class="infopost">Posted on <span class="date">11 sep 2018</span> by <a href="#"><?php echo $view_blog->author_name; ?></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="<?php echo base_url();?>images/img1.jpg" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p><?php echo $view_blog->blog_short_discription; ?></p>
            <p class="spec"><a href="<?php echo base_url(); ?>/welcome/blog_detail/<?php echo $view_blog->blog_id; ; ?>" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
        </div>
      <?php  
        }
       ?>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>

      <?php require_once 'sidebar.php';?>
      <?php require_once 'footer.php';?>
     