<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="style/css/modCustom.css">
</head>
<body>
<nav id="mainNav"class="navbar navbar-default navbar-fixed-top navbar-custom affix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a class="navbar-brand" href="#">Flyers</a>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i
                            class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="collapse navbar-collapse"
                     id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden"><a href="#"></a></li>
                        <li class="page-scroll"><a href="#">Annunci</a></li>
                        <li class="page-scroll"><a href="#">Appunti</a></li>
                        <li class="page-scroll"><a href="#">Profilo</a></li>
                        <li class="page-scroll"><a href="#">Help</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="middle">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle"
                                    data-toggle="dropdown">
                                <span id="search_concept">Appunti</span> <span class="caret"></span>
                            </button>
                            <ul id="list-option" class="dropdown-menu" role="menu">
                                <li><a href="#">Appunti</a></li>
                                <li><a href="#">Annunci</a></li>
                                <li><a href="#">Tag</a></li>
                            </ul>
                        </div>
                        <form name="search" method="post">
                            <input type="hidden" name="search_param" value="appunti" id="search_param">
                            <input type="text" name="user_param" class="form-control"  placeholder="Search">
                            <span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
</body>

</html>