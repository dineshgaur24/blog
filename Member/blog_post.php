<?php include("header.php"); ?>
<div id="page-wrapper">
    <div class="row">
        <H4>Blog Post</H4><hr/>
        <div class="col-lg-9">
            <div class="panel panel-default">
             
                        <div class="panel-heading">
                           Blog Post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Selects Main Category</label>
                                    <select class="form-control">
                                        <option>1 Cat name</option>
                                        <option>2 Seo</option>
                                        <option>3 Design</option>
                                        <option>4 Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Selects Sub Category</label>
                                    <select class="form-control">
                                        <option>1 Cat name</option>
                                        <option>2 Seo</option>
                                        <option>3 Design</option>
                                        <option>4 Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                    
                                </div>
                                <div class="form-group">
                                <input type="submit" class="form-control" name="submit"> 
                                </div>                                        
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    

            </div>
        </div>
        <!-- /.col-lg-6 -->          
    </div>
    <!-- /.row -->
 
</div>

<script type="text/javascript" src="bower_components/ckeditor/ckeditor.js"></script>
<!-- /#page-wrapper -->
<?php include("footer.php"); ?>