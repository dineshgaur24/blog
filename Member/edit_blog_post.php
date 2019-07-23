<?php include("header.php"); ?>
<div id="page-wrapper">
    <div class="row">
        <H4>Edit/View Blog Post </H4><hr/>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit/View Blog Post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" disabled class="form-control" placeholder="main category name"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" disabled class="form-control" placeholder="sub category name"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="Title Here" class="form-control" name="" placeholder="Title Here">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control ckeditor" name="editor1" rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
                                    </textarea>                  
                                </div>
                                <div class="form-group">
                                <input type="submit" class="form-control" name="submit"> 
                                </div>                                        
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>

            </div>
        </div>
        <!-- /.col-lg-6 -->

          
                
    </div>
    <!-- /.row -->
</div>
<script type="text/javascript" src="bower_components/ckeditor/ckeditor.js"></script>

<!-- /#page-wrapper -->
<?php include("footer.php"); ?>