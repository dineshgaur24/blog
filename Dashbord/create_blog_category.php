<?php include("header.php"); ?>

<div id="page-wrapper">
    <div class="row">
        <H4>Create Blog Category</H4><hr/>
            <div class="col-lg-4">               
                    <div class="panel panel-default">
                        <div class="panel-heading">Create Blog Category</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Create Category</label>
                                    <input class="form-control" placeholder="Create Category - Name">                                    
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>                             
                        </div>
                        <!-- /.panel-body -->
                    </div>
                
            </div>
        <!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="panel panel-default">
                        <div class="panel-heading">Create Sub Blog Category</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Enter Name Of SubCategory</label>
                                    <input class="form-control" placeholder="Enter Name Of SubCategory">                                    
                                </div>
                                <div class="form-group">
                                    <label>Selects Main Category</label>
                                    <select class="form-control">
                                        <option>1 Cat name</option>
                                        <option>2 Seo</option>
                                        <option>3 Design</option>
                                        <option>4 Hotel</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>                             
                        </div>
                        <!-- /.panel-body -->
                    </div>
                
            </div> <!-- /.col-lg-6 -->             
    </div>
    <!-- /.row -->
    <div class="row">
         <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">View/category</div>
                <div class="panel-body">
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Main Category</th>                                                                                      
                                            <th>Status</th>
                                            <th>Edit</th>                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Seo {20} </td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">link of Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>UI design {57} </td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">link of Edit</a></td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                </div>                         
            </div>
        </div>  

        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">View/category</div>
                <div class="panel-body">
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Main Category</th>
                                            <th>Sub Category</th>                                                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Seo {20} </td>
                                            <th>link buliding  | <a href="">active</a> <br/>
                                                On page | <a href="">active</a> <br/>
                                                Off page | <a href="">active</a> <br/>
                                                Report data | <a href="">active</a> <br/>
                                            </th>
                                        </tr>
                                         <tr>
                                            <td>1</td>
                                            <td>ui {2} </td>
                                            <th>link buliding  | <a href="">active</a> <br/>
                                                On page | <a href="">active</a> <br/>
                                                Off page | <a href="">active</a> <br/>
                                                Report data | <a href="">active</a> <br/>
                                            </th>
                                        </tr>                                      
                                    </tbody>
                                </table>
                            </div>
                </div>                         
            </div>
        </div>


    </div>
</div>
<!-- /#page-wrapper -->
<?php include("footer.php"); ?>