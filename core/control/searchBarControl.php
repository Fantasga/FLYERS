<?php
/**
 * Created by PhpStorm.
 * User: Paolo
 * Date: 11/01/2017
 * Time: 14:37
 */
include_once MODEL_DIR . "SearchManager.php";

if(isset($_POST["search"])){

    if(isset($_POST["search_param"]) && isset($_POST["user_param"])){

        if($_POST["search_param"] == "appunti"){

            $paramByUser = $_POST["user_param"];
            $sm = new SearchManager();
            $result = $sm->searchNotes($paramByUser);

            include_once VIEW_DIR ."resultSearch.php";

        }else if($_POST["search_param"] == "annunci"){

            $paramByUser = $_POST["user_param"];
            $sm = new SearchManager();
            $result = $sm->searchAds($paramByUser);

            include_once VIEW_DIR ."resultSearch.php";

        }else if($_POST["search_param"] == "tag"){

            $paramByUser = $_POST["user_param"];
            $sm = new SearchManager();
            $result = $sm->searchByTag($paramByUser);

            include_once VIEW_DIR ."resultSearch.php";

        }else if($_POST["search_param"] == "categoria"){
            $paramByUser = $_POST["user_param"];
            $sm = new SearchManager();
            $result = $sm->searchNotesByCategory($paramByUser);

            include_once VIEW_DIR ."resultSearch.php";
        }

    }

}