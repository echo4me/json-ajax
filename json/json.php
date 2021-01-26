<?php
/*
Json : is Format To share Data between Server and Client
Data written inside {} , must be always with double Quotes not single 
, Data contain kay=>value , key sperated with value by colon : "key":value
When u type Json inside ur page <script>'{}'</script> put single Quotes

Converting in Javascript
JSON.parse(myJasonObject) // will convert string Json To JS Object
JSON.stringify(myJsObject);// will Convert JS Object To string Json

Converting in PHP
json_decode($json); // will convert string Json To PHP Array
json_encode($phpArray); // will convert PHP array To string Json
Example 1
$json = '["HTML","CSS"]';
var_dump($json);
$phpArray = json_decode($json);
echo "<pre>";
var_dump($phpArray);
echo "</pre>";
Example 2
$phpArray = array ("HTML","CSS");
$json = json_encode($phpArray);
var_dump($json);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Json</title>
</head>
<body>
    <div id="show"></div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(function(){
        $.ajax({
            url     : "data-type.json",
            cashe   : false,
            success : function(data,status){
                 $.each(data,function(index){
                    $("#show").append('<div>'+data[index].username+'</div>');
                 });
            },
            error   : function(xhr,textStatus,err){
                console.log(xhr);
            }
        });
        
    });


    /* 
    Eample For JQuery 1- Load JSON Data With jQuery with getJSON()
     $(function(){
        $.getJSON("data-type.json",function(data){
            var content = "";
            for(var x in data){content += data[x].username+"<br>";}
            $("#show").html(content);
        });  
    });
    Eample For JQuery 2- Load JSON Data With jQuery with Ajax
      $(function(){
        $.ajax({
            url     : "data-type.json",
            cashe   : false,
            success : function(data,status){
                 $.each(data,function(index){
                    $("#show").append('<div>'+data[index].username+'</div>');
                 });
            },
            error   : function(xhr,textStatus,err){
                console.log(xhr);
            }
        });
        
    });
    ----------------------------------------------------
    Eample For JavaScript 1
    <div id="data">
        <div id="name"> </div>
        <div id="age"> </div>
    </div>
    let myJson = '{"username":"osama","age":33}';
    let js = JSON.parse(myJson);
    document.getElementById("name").innerHTML = js.username;
    document.getElementById("age").innerHTML  = js.age;
    -------------------------------------------------------
    Example to convert Json to Js object
        let myJsonObject = '{"username":"Elzero","age":39}';
        let myJsObject   = JSON.parse(myJsonObject);

        console.log(myJsonObject);
        console.log(typeof(myJsonObject));

        console.log(myJsObject);
        console.log(typeof(myJsObject));
    
    Example to convert JS object To Json string
        let myJsObject = {username:"Elzero",age:39 };
        let myJsonObject = JSON.stringify(myJsObject);

        console.log(myJsObject);
        console.log(typeof(myJsObject));
        console.log(myJsonObject);
        console.log(typeof(myJsonObject));
    */


    </script>
</body>
</html>