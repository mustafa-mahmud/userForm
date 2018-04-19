<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8" />
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-Control" content="no-cache"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <!--[if lte IE 9]>
        <link href='/PATH/TO/FOLDER/css/animations-ie-fix.css' rel='stylesheet'>
        <![endif]-->
        <title>User Form</title>
        <!----CSS----->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css" />
        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <p data-toggle="modal" data-target="#userForm" class="btn btn-dark m-2">form</p>
                <!---Modal---->
                <div id="userForm" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button class="close myDesign" type="button" data-dismiss="modal">&times;</button>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="userForm col-sm-12">
                                        <div class="card">
                                            <div class="card-header p-3 bg-dark">
                                                Edit Member
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Name</span>
                                                        </div>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/userForm.js"></script>
    </body>
</html>