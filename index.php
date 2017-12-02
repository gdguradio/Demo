<html xmlns="http://www.w3.org/1999/xhtml"><!--
    Modified from the Debian original for Ubuntu
    Last updated: 2014-03-19
    See: https://launchpad.net/bugs/1288690
    --><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Demo</title>

            <!-- Optional theme -->
            <link rel="stylesheet" href="css/bootstrap-theme.min.css"></link>
            <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" ></link>

            <script src="js/moment.min.js"></script>   


            <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
            <link rel="stylesheet" href="css/bootstrap.min.css"></link>
            <link rel="stylesheet" href="css/style.css">    </link>
            <script src="js/jquery.min.js"></script>
            <script src="js/demo_ui.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/demo.js"></script>
            <script src="js/bootstrap-datetimepicker.min.js"></script>
            
    </head>
    <body>
        <div class="container">
            <div class="row">

                <section class="content">
                    <h1>To Do List</h1>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-filter" data-target="all">All</button>
                                        <button type="button" class="btn btn-warning btn-filter" data-target="pending">Pending</button>
                                        <button type="button" class="btn btn-danger btn-filter" data-target="cancelled">Cancelled</button>
                                        <button type="button" class="btn btn-success btn-action" data-toggle="modal" data-target="#DemoModal" data-action="Add">Add</button>
                                        <button type="button" class="btn btn-primary btn-action" data-toggle="modal" data-target="#DemoModal" data-action="Edit">Edit</button>
                                        <button type="button" id="delete"class="btn btn-filter btn-action" data-action="Delete">Delete</button>
                                        <!--<button type="button" class="btn btn-filter btn-action" data-toggle="modal" data-target="#DemoModal" data-action="Delete">Delete</button>-->

                                    </div>
                                </div>
                                <div class="table-container">
                                    <table class="table table-filter" id="tasktable">
                                        <tbody>
                                            <tr data-status="add">
                                                <td>
                                                    <div class="ckbox">
                                                        <input type="radio" name="todo" id="checkbox1">
                                                            <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="star">
                                                        <i class="glyphicon glyphicon-star"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="media">
<!--                                                        <a href="#" class="pull-left">
                                                            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                        </a>-->
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                            <h4 class="title">
                                                                Lorem Impsum
                                                                <!--<span class="pull-right add">(Pagado)</span>-->
                                                            </h4>
                                                            <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <p>
                                <a href="https://stackoverflow.com/users/4452553/guradio" target="_blank">Martin Lloyd T. Manlapig</a>
                            </p>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <!-- Modal -->

        <div class="modal fade" id="DemoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title" id="exampleModalLabel">New message</h3>
                    </div>
                    <div class="modal-body">
                        <form id="demoform" name="demoform" method="post">
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Target Date:</label>
                                <div class="container">
                                    <div class="row">
                                        <div class='col-sm-6'>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker5'>
                                                    <input type='text' class="form-control" name="task_date"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Task:</label>
                                <textarea class="form-control" name="task"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Person/s:</label>
                                <input type='text' class="form-control" name="task_person"/>
                            </div> 
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Status:</label>
                                <select class="form-control" name="task_status">
                                    <option value="0">Pending</option>
                                    <option value="1">Cancelled</option>
                                    <option value="2">Finished</option>

                                </select>
                            </div>  
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>