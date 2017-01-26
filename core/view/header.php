
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<nav id="mainNav"class="navbar navbar-default navbar-fixed-top navbar-custom affix-top">
    <div class="container">
        <div class="row">

            <!-- LOGO -->


            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a class="navbar-brand" href="<?php echo DOMINIO_SITO . "/home"?>">Flyers</a>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i
                            class="fa fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- SEARCHBAR -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="margin-top: 0.5%;margin-bottom:2%;">
                <div class="left">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle"
                                    data-toggle="dropdown">
                                <span id="search_concept">Appunti</span> <span class="caret"></span>
                            </button>
                            <ul id="list-option" class="dropdown-menu" role="menu">
                                <li><a>Annunci</a></li>
                                <li><a>Appunti</a></li>
                                <li><a>Categorie</a></li>
                                <li><a>Tags</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="appunti" id="search_param">
                        <input type="text" name="user_param" class="form-control"  placeholder="Search">
                        <span class="input-group-btn">
								<button style="width: 100%" class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- LINK -->

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="collapse navbar-collapse"
                     id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/listaAnnunci";?>">Annunci</a></li>
                        <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/categorie";?>">Appunti</a></li>

                        <?php if(isset($_SESSION["user"])){?>

                            <li class="page-scroll"><a href="<?php echo DOMINIO_SITO . "/profiloUtente";?>">Profilo</a></li>

                        <?php } ?>

                        <li class="page-scroll"><a href="<?php echo DOMINIO_SITO ."/help";?>">Help</a></li>

                        <?php if(isset($_SESSION["user"])){?>

                            <li><a href="<?php echo DOMINIO_SITO . "/logout";?>">Logout</a></li>

                        <?php }else{ ?>
                            <li><a href="<?php echo DOMINIO_SITO . "/autenticazione";?>">Login</a></li>


                        <?php } ?>
                    </ul>
                </div>
            </div>


        </div>

</nav>
</body>

</html>