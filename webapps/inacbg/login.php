<?php
	include_once "conf/command.php";
  	if ($_GET['act']=="login"){
            if(($_GET['usere']=="admin")&&($_GET['passwordte']=="akusayangsamakamu")) {
                session_start();
                $_SESSION['ses_admin']="admin";
                if(($_GET['page']=="KlaimBaruOtomatis")){
                    $url = "index.php?act=KlaimBaruOtomatis";	
                }else if(($_GET['page']=="KlaimBaruManual")){
                    $url = "index.php?act=KlaimBaruManual";	
                }                		
            }else{
                    session_start();
                    session_destroy();
                    if (cekSessiAdmin()){
                        session_unregister("ses_admin");
                    }
                    $url = "index.php?act=HomeAdmin";
            }
	    header("Location:".$url);
            
	}
    
?>
