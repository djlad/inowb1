<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="articlePage.css">

<script>
var postId = <?php echo $_GET["pID"]; ?>


if(window.XMLHttpRequest)
{
    xmlhttp = new XMLHttpRequest();
}
else
{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.open("GET","index.php?type=postID&pID="+postId+"",true);
xmlhttp.send();

xmlhttp.onreadystatechange = function(){
    if(true || xmlhttp.readyState == 4 && xmlhttp.status == 200){
        /*//console.log(xmlhttp.responseText);
        post = JSON.parse(xmlhttp.responseText);

        title = document.getElementById("title");
        pic = document.getElementById("pic");
        content = document.getElementById("content");

        title.innerHTML = post[0];
        pic.src = post[1];*/
    }
    
    //document.write(xmlhttp.responseText);
}

if(window.XMLHttpRequest)
{
    xcontent = new XMLHttpRequest();
}
else
{
    xcontent = new ActiveXObject("Microsoft.XMLHTTP");
}

xcontent.open("GET","index.php?type=postID&pID="+postId+"",true);
xcontent.send();

xcontent.onreadystatechange = function(){
    if(true || xcontent.readyState == 4 && xcontent.status == 200){
        //console.log(xmlhttp.responseText);
        title = document.getElementById("title");
        pic = document.getElementById("pic");
        content = document.getElementById("content");

        rPost = xmlhttp.responseText;
        divider = rPost.search("!@#");

        content.innerHTML = rPost.slice(0,divider);

        postArray = JSON.parse(rPost.slice(divider+3,rPost.length));

        title.innerHTML = postArray[0];
        pic.src = postArray[1];
    }
    
    //document.write(xmlhttp.responseText);
}

</script>


<div id = "column-container">
	<h1 id = "title"></h1>
	<img id = "pic" class="bodyContent"></img>
	<p id = "content" class="bodyContent"></p>
</div>