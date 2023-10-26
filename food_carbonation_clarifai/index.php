<!DOCTYPE html>
<html lang="en">

<head>
 <title>Foods Carbonation AI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>



<style>




.section_padding {
padding: 60px 40px;
}

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}



  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:purple;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }



  
.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}



.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #800000;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:800000;
color:white;

}






.category_post{
background-color: #800000;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	




.category_post1{
background-color: purple;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}

.category_post1:hover {
background: black;
color:white;
}	



</style>



 
</head>
<body>





<br><br>






<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">



      <ul class="nav navbar-nav navbar-right">

        <li class="navgate about_click">Foods Carbon Emission AI</li>
       
       
        
        



      </ul>


    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->






	
<br>
<div class="rows">

<h2><center>Foods Carbon Emission AI Powered by <b>Clarifai</b></center></h2>

<h4>An interactive Eco-awareness System design to  educate people and various communities on how the food they eat impacts on our
environments by triggering global warming and greenhouse Gaseous Emissions</h4>
<br>


<h3>About Foods & Climatic Change</h3>
According to <b>Climatic Experts</b>, The Food we eat contributes <b>One-Quater</b> of <b>Global Warming and Green House Gaseous Emission</b> more than other
climatic sectors including Carbon emission by <b>Transportations, Energy</b> etc.<br>

Its is very important to know the <b>quantity of Carbon emitted</b> in making each meal/food that we eat. This will help to <b>educate</b> People and  also create <b>
Ecological Awarness</b> about impacts of foods we eats on our Climates..<br>


<h3>What It Does</h3>
<ul>
<li>
The User Uploads/Enter an Image URL containing the Photo or Picture of Meal/food to be analyzed.
</li>

<li>
The application leverages <b>Clarifai AI Food Detection Models</b>
to detect all <b>Ingriedients, nutrients and foods Components</b> used in 
making that particular meal. 
</li>


<li>
The application leverages various <b>Computational Carbon Footprint</b> for various Foods components/nutrients to help determine the <b>Total amount/quantity of
Carbon</b> emitted in making the Foods/meal.

<i><b>This help to educate People, and various Communities and provides eco-awarness on the impacts of the food we eat on our environments... </b></i>

</li>


</ul>

<br><br>

<div class="col-sm-4">
<img style="width:100%;min-width:100%;max-width:100%;height:400px;" src="pic1.jpg">
</div>

<div class="col-sm-4">




<script>

$(document).ready(function(){
$('#emission_btn').click(function(){
		
var food_image_url = $('.img_url102').val();
//alert(food_image_url);

if(food_image_url==""){
alert('There is a Problem with Food Carbon Emission being Analyzed..Reload the Page and Try Again.');

}


else{

$('#loader_emission').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Food Photo Analysis in Progress...</div>');
var datasend = {food_image_url:food_image_url};	
		$.ajax({
			
			type:'POST',
			url:'food_carbonation_clarifai.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_emission').hide();
				//$('#result_emission').fadeIn('slow').prepend(msg);

                       $('#result_emission').fadeIn('slow').html(msg);

			//$('#img_url102').val('');
			}
			
		});
		
		}
		
	})
					
});




</script>

<!-- form starts  -->

<div class="col-sm-12 form-group" style='background:#f1f1f1; padding:16px;color:black'>
<label>Enter Food Picture/image url Eg: </label>

<br>
<b>Sample 1:</b>  &nbsp;&nbsp; https://samples.clarifai.com/metro-north.jpg<br>



<br>

<input type="type" name="img_url102" id="img_url102" class="form-control img_url102" placeholder="Enter Food Picture/image url">

            </div>



<div class="form-group">
<div id="loader_emission"></div>

<div id="result_emission" class="myform_foodemission"></div>
<br /><br />
                    
<button type="button" id="emission_btn" class=""  style='background:#ddd;color:black;padding:10px;border:none'>Analyze Food Now</button>
</div>



</div>



<!-- form ends  -->



</div>

<div class="col-sm-4">
<img style="width:100%;min-width:100%;max-width:100%;height:400px;" src="pic2.jpg">
</div>


<div>
   
<br><br><br><br><br>
</body>
</html>



















