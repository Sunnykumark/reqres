<?php 
namespace reqres;
class Reqres
{
    public  function world()
    {
        return 'Hello World, Composer!';
    }
#------------------Get User By ID---------------------------
public  function GetUserById($userid)
    {
        $url = "https://reqres.in/api/users/".$userid;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        return  $result;
    }
#------------------End----------------------------------------   
#------------------Get All user list--------------------------
public  function PaginatedListOfUsers ()
    {
        $url = "https://reqres.in/api/users";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        return  $result;
    }
#---------------------End------------------------------------
?>
