
<html lang="en">
<head>
<?php 
include('common/head-includes.php');?>
<script type="text/javascript">
// Create an image for each slide in the show
var image1 =  new Image();
image1.src= "Slideshow/Slide1.png";
var image2 = new Image();
image2.src = "Slideshow/Slide2.png";
var image3 = new Image();
image3.src="Slideshow/Slide3.png";
var image4 = new Image();
image4.src="Slideshow/Slide4.png";
var image5= new Image();
image5.src="Slideshow/Slide5.png";
var image6 = new Image();
image6.src="Slideshow/Slide6.png";
var image7= new Image();
image7.src="Slideshow/Slide7.png";
var image8 = new Image();
image8.src="Slideshow/Slide8.png";
var image9= new Image();
image9.src="Slideshow/Slide9.png";
var image10 = new Image();
image10.src="Slideshow/Slide10.png";
var image11 = new Image();
image11.src="Slideshow/Slide11.png";
var image12 = new Image();
image12.src="Slideshow/Slide12.png";
</script>
<title>
ElectroLove | Research

</title>
</head>
<body>
<?php
 include("common/menu.php"); 
?>

<body>

<div class="container" id="slideshow">
    <div class="row">

             <div class="col col-lg-1">
                <button type="button" class="btn btn-success btn-lg" id="back_btn" onclick="backUp()"> 
                     <span class="glyphicon glyphicon-arrow-left"></span>  
                         Back  
                        </button>
            </div>
            
        
            <div class="col col-sm-10 ">
                 <img name="slide" src="Slideshow/Slide1.PNG" height="800" width="1000" alt="Research presentation" class="img-responsive"/>
            </div>
        
         
            <div class="col col-lg-1">
                <button type="button" class="btn btn-success btn-lg" id="fwd_btn" onclick="slideit()">
                    <span class="glyphicon glyphicon-arrow-right"></span> 
                         Next
                         </button>
            </div>

            </div>
        </div>

        <div class="container" id="research_article">
        <a href="EDM_Research.pdf" style="color:white"> 
        <span class="glyphicon glyphicon-file"> 
        </span>
        Research Writeup
        </a>

        


   

<script type="text/javascript">
// change the path of the image on the click of a Button

var step = 1;

/*func slideit() rotates the image in the <img name="slide"> tag by incrementing the       */
/*value of  the image objects avialabe in the head. The images are stored in the Slideshow */
/* folder.                                                                                 */
function slideit(){

    if(step<12)
     ++step;

     else
    step=1;
 
    document.images.slide.src= eval("image"+step+".src");

    return step;
}

 /* function backUp() dee-crements the value of the image objects in the */
 /* Slideshow folder.                                                   */

function backUp(){

    if (step > 1)
        --step;
    document.images.slide.src= eval("image"+step+".src");
    return step;
}
</script>
</body>
