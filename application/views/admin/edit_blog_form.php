<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit blog here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_blog_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_blog" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Blog Title</label>
                        <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" placeholder="Blog tille........." value="<?php echo $blog_info->blog_title;?>">
                        <input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id;?>">
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="selectError">Blog category</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="blog_category">
                            <option>Select category....</option>

                             <?php
                  foreach ($publish_category as $b_category) {
                  
                  ?>
                    <option value="<?php echo $b_category->category_id; ?>"><?php echo $b_category->category_name; ?></option>
                    <?php } ?>
                    
                  </ul>
                </div>
               

                           
                            
                        </select>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Blog short Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="blog_short_discription"><?php echo $blog_info->blog_short_discription;?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Blog long Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="blog_long_discription"><?php echo $blog_info->blog_long_discription;?></textarea>
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="selectError">Publication status</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="publication_status">
                            <option>Select publication status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update blog</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_blog_form'].elements['publication_status'].value='<?php echo $blog_info->publication_status;?>';
    document.forms['edit_blog_form'].elements['blog_category'].value='<?php echo $blog_info->category_id; ?>';
</script>









 <?php  require_once 'admin_footer.php'; ?>