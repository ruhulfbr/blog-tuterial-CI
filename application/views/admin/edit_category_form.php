<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Category</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_category_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_category/<?php echo $category_info->category_id;?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Category Name" value="<?php echo $category_info->category_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="category_desc"><?php echo $category_info->category_desc;?></textarea>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="selectError">Publication status</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="category_status">
                            <option>Select status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_category_form'].elements['category_status'].value='<?php echo $category_info->category_status;?>';
</script>









 <?php  require_once 'admin_footer.php'; ?>