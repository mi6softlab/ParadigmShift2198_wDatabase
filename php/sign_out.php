<?php
    #destroy the session
    session_start();
    
    if(session_destroy())
    {
        header('Location: ../index.html');
    }
?>