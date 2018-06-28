<?php
    session_start();
    if(isset($_POST['libraryLogout']))
    {
        session_destroy();
        header("Location: index.html");
    }

    if(isset($_POST['accountLogout']))
    {
        session_destroy();
        header("Location: index.html");
    }