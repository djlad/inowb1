<link rel="stylesheet" type="text/css" href="articleStyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
var xmlhttp, re, rep, images, titles, all;





if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
}
else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.open("GET","index.php?type=all",true);
xmlhttp.send();

xmlhttp.onreadystatechange = function(){
//console.log("con")
    if(true || xmlhttp.readyState == 4 && xmlhttp.status == 200){
        //console.log(xmlhttp.responseText);
        all = JSON.parse(xmlhttp.responseText);
        dispPosts();
    }
    
    //document.write(xmlhttp.responseText);
}



function fixForChrome(){
    for(i=0;i<images.length;i++){
        images[i] = images[i].slice(0,images[0].length-1);
    }
}


function dispPosts(){

    for(i=0;i<all.length-1;i++){
        addPost("left",all[i][0],all[i][1],all[i][2]);
        //addPost("middle",all[i][0],all[i][1]);
        //addPost("right",all[i][0],all[i][1]);
    }
}

function addPost(colId, title, pic, wpID){
    //element to add to (left right or middle)
    col = document.getElementById(colId);

    container = document.createElement("div");
    articleTitle = document.createElement("h1");
	link = document.createElement("a");        
    articlePic = document.createElement("img");
    articleSummary = document.createElement("p");
    bottomBorder = document.createElement("p");


    //edit container for article posts (each article post is containned in one)
    container.className = "articlePost";

    //edit title and add
    apEditTitle(title);

    //edit link and add title to it
    link.appendChild(articleTitle);
    link.href = "page.php"+"?pID="+wpID;

    //edit picture
    articlePic.src = pic;
    articlePic.className = "articlePic";
    //articlePic.style.textAlign = "center";

    //edit summary and
    articleSummary.innerHTML = "place excerpt here";
    articleSummary.className="summary";
    //articleSummary.style.margin-left = 5%;

    bottomBorder.innerHTML = "_______________________________"
    bottomBorder.style.textAlign = "center";
    bottomBorder.style.color="grey";

    //edit container
    container.className="article-container";

    apAddToContainer();

}

function apAddToContainer(){
    container.appendChild(link);
    container.appendChild(articlePic);
    container.appendChild(articleSummary);
    container.appendChild(bottomBorder);
    col.appendChild(container);
}

function apEditTitle(title){
	articleTitle.innerHTML = title;
    articleTitle.style.textAlign = "center";
    articleTitle.href = "www.google.com";

    articleTitle.onmouseover = function(){
        this.style.textDecoration= "underline";
    }
    articleTitle.onmouseout = function(){
        this.style.textDecoration= "none";
    }
}

</script>

<div id = "column-container">

	<div class = "column" id = "left">
	    <h1>Most Recent</h1>
	</div>

	<div class = "column" id = "middle">
	    <h1>Most Popular</h1>
	</div>

	<div class = "column" id = "right">
	    <h1>Featured</h1>
	</div>
</div>