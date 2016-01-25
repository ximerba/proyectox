*{ 
    font-size: 14px; 
} 
body{ 
background:#aaa; 
} 
form.logout { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 300px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.logout div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.logout div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.logout div input[type="text"], form.logout div input[type="numeric"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.logout div input[type="title"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 5px solid #C6C6C6; 
    float: center; 
    font-weight: bold; 
    padding: 10px 20px;
}
form.logout div input[type="submit"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: center; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
}




<?php
session_start();
session_destroy();

header('location:login.php');
?>
