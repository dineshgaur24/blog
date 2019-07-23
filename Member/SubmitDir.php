<?php include("header.php"); ?>
<div id="page-wrapper">
    <div class="row">
        <H4>Directory Listing</H4><hr/>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel panel-default">
                        <div class="panel-heading">
                           Directory Listing Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Selects Main Dir</label>
                                    <select class="form-control">
                                        <option>1 Cat name</option>
                                        <option>2 Seo</option>
                                        <option>3 Design</option>
                                        <option>4 Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Selects Sub Dir </label>
                                    <select class="form-control">
                                        <option>1 Cat name</option>
                                        <option>2 Seo</option>
                                        <option>3 Design</option>
                                        <option>4 Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="url" placeholder="URL">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="keyword">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Description" placeholder="Description">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control" name="file" placeholder="File">
                                </div>

                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
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
<!-- /#page-wrapper -->
<?php include("footer.php"); ?>