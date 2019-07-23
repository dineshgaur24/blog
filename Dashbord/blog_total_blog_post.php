<?php include("header.php"); ?>
<div id="page-wrapper">
    <div class="row">
        <H4>Total Blog Post</H4><hr/>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel panel-default">
                        <div class="panel-heading">
                           Total Blog Post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Blog Title</th>
                                            <th>Blog Text</th>                                            
                                            <th>Status</th>
                                            <th>Email Id/user</th>
                                            <th>Blog Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>The seo world </td>
                                            <td>This is part of seo that we...<a href="edit_blog_post.php">View/edit More</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td>vyassagar9@gmail.com</td>
                                            <td>Video Tutorials</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Web design for uk </td>
                                            <td>Designer is available for uk and...<a href="">More</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td>info_rs9@gmail.com</td>
                                            <td>Email Listing</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>The seo world </td>
                                            <td>This is part of seo that we...<a href="">More</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td>theJOb9@gmail.com</td>
                                            <td>Job</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

            </div>
        </div>
        <!-- /.col-lg-6 -->

        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Select Date
                </div>
                <div class="panel-body">
                    <form>
                        <input type="date" class="form-control" name="date"><br>
                        <select class="form-control">
                            <option>Paid/Free</option>
                            <option>Paid User</option>
                            <option>Free User</option>
                        </select><br>
                        <select class="form-control">
                            <option>Select User Name</option>
                            <option>User Name 1</option>
                            <option>User Name 2</option>
                            <option>User Name 3</option>
                        </select><br>
                        <input type="submit" class="form-control" name="submit">
                    </form>
                </div>                         
            </div>
        </div>    
        <!-- /.col-lg-6 -->             
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php include("footer.php"); ?>