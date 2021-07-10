<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/accesPartenaire/accesPartenaire.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="w3-blue-grey">
            <div class="sidebar-header w3-blue-grey">
                <h3>Acces-Partenaire</h3>
            </div>

            <ul class="list-unstyled components w3-blue-grey">
                <p>Dummy Heading</p>
                <li class="active w3-blue-grey">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle w3-blue-grey">Theses</a>
                    <ul class="collapse list-unstyled w3-blue-grey" id="homeSubmenu">
                        <li>
                            <a href="#">These 1</a>
                        </li>
                        <li>
                            <a href="#">These 2</a>
                        </li>
                        <li>
                            <a href="#">These 3</a>
                        </li>
                        <li>
                            <a href="#">These 4</a>
                        </li>
                        <li>
                            <a href="#">These 5</a>
                        </li>
                        <li>
                            <a href="#">These 6</a>
                        </li>
                        <li>
                            <a href="#">These 7</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Publications</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Actualites Industries</a>
                    <ul class="collapse list-unstyled w3-blue-grey" id="pageSubmenu">
                        <li>
                            <a href="#">Industrie Managem</a>
                        </li>
                        <li>
                            <a href="#">Industrie Reminex</a>
                        </li>
                        <li>
                            <a href="#">Industrie Mascir</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#actueAcadSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Actualites Academique</a>
                    <ul class="collapse list-unstyled" id="actueAcadSubmenu">
                        <li>
                            <a href="#">Academie UCA</a>
                        </li>
                        <li>
                            <a href="#">Academie ENIM</a>
                        </li>
                        <li>
                            <a href="#">Academie CNRST</a>
                        </li>
                        <li>
                            <a href="#">Academie ENSIAS</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info w3-light-blue">
                        <i class="fas fa-align-left"></i>
                        <!-- <span>Toggle Sidebar</span> -->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="chat-search-box" id="contentSearch">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-info w3-light-blue">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto" style="margin:7px">
                            <li class="nav-item active">
                                <i class='fas fa-comment' style='font-size:36px'></i>
                            </li>
                            <li class="nav-item">
                                <i class='fas fa-bell' style='font-size:36px'></i>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col-3 w3-right">
                        <div class="users-container">
                            <ul class="users">
                                <li class="person" data-chat="person1">
                                <div class="user">
                                    <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                    <span class="status busy"></span>
                                </div>
                                <p class="name-time">
                                    <span class="name">Steve Bangalter</span>
                                    <span class="time">15/02/2019</span>
                                </p>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </nav>

             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="users-container">
                                <h2>Les personnes en ligne</h2>
                                <ul class="users">
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                                            <span class="status offline"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person active-user" data-chat="person2">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Retail Admin">
                                            <span class="status away"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Peter Gregor</span>
                                            <span class="time">12/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person3">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Jessica Larson</span>
                                            <span class="time">11/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person4">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                            <span class="status offline"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Lisa Guerrero</span>
                                            <span class="time">08/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person5">
                                        <div class="user">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                            <span class="status away"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Michael Jordan</span>
                                            <span class="time">05/02/2019</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

            <div class="line"></div>

            <div class="line"></div>
<div class="content" style="background:#DCDCDC;">
    <div class="container">
        <div class="row">
        @for($i=0;$i<3;$i++)
            <div class="col-lg-4">
                <div class="card-box">
                    <h4 class="text-dark header-title">Personnes deconnectees recemments</h4>
                    <p class="text-muted m-b-30 font-13">Your awesome text goes here. Your awesome text goes here.</p>
                    <ul class="sortable-list taskList list-unstyled ui-sortable" id="upcoming">
                        <li class="task-warning ui-sortable-handle" id="task1">
                            <div class="clearfix"></div>
                            <div class="mt-3">
                                <p class="float-right mb-0 mt-2">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">En ligne il y a 12min</button>
                                </p>
                                <p class="mb-0">
                                    <a href="" class="text-muted"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">kane cheickne</span></a>
                                </p>
                            </div>
                        </li>
                        <li class="task-success ui-sortable-handle" id="task2">
                            <div class="checkbox checkbox-custom checkbox-single float-right">
                                <input type="checkbox" aria-label="Single checkbox Two">
                                <label></label>
                            </div>Many desktop publishing packages and web page editors now use Lorem.
                            <div class="clearfix"></div>
                            <div class="mt-3">
                                <p class="float-right mb-0 mt-2">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                </p>
                                <p class="mb-0">
                                    <a href="" class="text-muted"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Anna Sthesia</span></a>
                                </p>
                            </div>
                        </li>
                        <li id="task3" class="ui-sortable-handle">
                            <div class="checkbox checkbox-custom checkbox-single float-right">
                                <input type="checkbox" aria-label="Single checkbox Two">
                                <label></label>
                            </div>If you are going to use a passage of Lorem Ipsum..
                            <div class="clearfix"></div>
                            <div class="mt-3">
                                <p class="float-right mb-0 mt-2">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                </p>
                                <p class="mb-0">
                                    <a href="" class="text-muted"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a>
                                </p>
                            </div>
                        </li>
                        <li class="task-info ui-sortable-handle" id="task4">
                            <div class="checkbox checkbox-custom checkbox-single float-right">
                                <input type="checkbox" aria-label="Single checkbox Two">
                                <label></label>
                            </div>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            <div class="clearfix"></div>
                            <div class="mt-3">
                                <p class="float-right mb-0 mt-2">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                </p>
                                <p class="mb-0">
                                    <a href="" class="text-muted"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a>
                                </p>
                            </div>
                        </li>
                        <li class="task-danger ui-sortable-handle" id="task5">
                            <div class="checkbox checkbox-custom checkbox-single float-right">
                                <input type="checkbox" aria-label="Single checkbox Two">
                                <label></label>
                            </div>There are many variations of passages of Lorem Ipsum available.
                            <div class="clearfix"></div>
                            <div class="mt-3">
                                <p class="float-right mb-0 mt-2">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                </p>
                                <p class="mb-0">
                                    <a href="" class="text-muted"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a>
                                </p>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
        @endfor
    </div>
</div>
            <div class="line"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('js/accesPartenaire/accesPartenaire.js')}}"> </script>
</body>

</html>