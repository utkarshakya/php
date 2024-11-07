<?php
// Here We Are Accessing The Cookie.
if(isset($_COOKIE["username"])){
    echo "You Are " . $_COOKIE["username"] . " Is In It?";
}else{
    echo "I don't Know Your Username ):";
}
?>