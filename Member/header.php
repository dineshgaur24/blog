<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

   <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    body {
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
        font-weight: 400;
    }
    .huge {
        font-size: 24px;
    }
    a {
        color: #222;
        text-decoration: none;
    }
    .navbar-default {
        background-color: #fff;
        border-color: #e7e7e7;
    }
    .navbar-default .navbar-brand {
        color: #000;
    }
</style>
</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SE<i class="fa fa-globe"></i> ZONE</a>
            </div>
            <!-- /.navbar-header -->
           
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome User
                    </a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li> <a href="index.php" style="border-top: 1px solid #e9e9e9;">Dashboard</a></li>
                        <li> <a href="index.html">Blog Post</a> 
                            <ul class="nav nav-third-level">
                                <li><a href="blog_post.php">Post Blog</a></li>
                                <li><a href="DeleteBlog.php">Delete Blog</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Article Listing</a>
                            <ul class="nav nav-third-level">
                                <li><a href="CreatArticle.php" >Creat Article</a></li>
                                <li><a href="DeleteArticle.php">Delete Article</a></li>                                
                            </ul>

                        </li>
                        <li> <a href="">Directory Listing</a>
                            <ul class="nav nav-third-level">
                                <li><a href="SubmitDir.php" >Submit Directory Data</a></li>
                                <li><a href="DeleteDir.php">View/Delete/Edit</a></li>                                
                            </ul>                                
                        </li>
                        <li> <a href="index.html">Video Listing</a>
                            <ul class="nav nav-third-level">
                                <li><a href="SubmitVideo.php" >Submit Video URL</a></li>
                                <li><a href="DeleteVideo.php">View/Delete/Edit videos </a></li>                                
                            </ul> 
                        </li>
                        <li> <a href="setting.php">Setting</a>
                            
                        </li>
                     </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
      <!--   total blog { select via category display, Ex- dropdown}
    2. create category, and sub category {active/dactive}
    3. view {hide blog post if user post pron blog--admin can hide all type's}
    4. onwer can post his blog also -->