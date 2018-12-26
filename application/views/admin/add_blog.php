<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url(); ?>/super_admin">Home</a>
        </li>
        <li>
           <a href="<?php echo base_url(); ?>/super_admin/add_blog">Add blog</a>
        </li>
    </ul>
</div>

<h4 style="color:blue">
    
    <?php 
    $msg = $this->session->userdata('message');
    if($msg){
        echo $msg;
        $this->session->unset_userdata('message');

    }

     ?>
</h4>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add blog here</h2>

                
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url(); ?>/super_admin/save_blog" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Blog Title</label>
                        <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" placeholder="Blog tille.........">
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="selectError">Blog category</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="blog_category">
                            <option>Select category....</option>

                             <?php
                  foreach ($publish_catagory as $b_category) {
                  
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
                        <textarea class="form-control" id="exampleInputPassword1" name="blog_short_discription"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Blog long Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="blog_long_discription"></textarea>
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
                    <button type="submit" class="btn btn-default" name="submit">Add blog</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>










 <?php  require_once 'admin_footer.php'; ?>