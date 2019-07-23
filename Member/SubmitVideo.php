<?php include("header.php"); ?>

<div id="page-wrapper">
    <div class="row">
        <H4>Submit youtube link</H4><hr/>
            
            <div class="col-lg-8">
                <div class="panel panel-default">
                        <div class="panel-heading">Submit youtube link</div>
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
                                    <label>You Tube Title</label>
                                    <input type="text" class="form-control" name="youtube title=" placeholder="youtube Title">
                                </div>

                                <div class="form-group">
                                    <label>Selects Sub Category</label>
                                    <input type="text" class="form-control" name="youtube Url" placeholder="youtube url">
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
   

    </div>
</div>
<!-- /#page-wrapper -->
<?php include("footer.php"); ?>