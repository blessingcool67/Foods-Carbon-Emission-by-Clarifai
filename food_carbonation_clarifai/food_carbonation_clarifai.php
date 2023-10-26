<?php

error_reporting(0);
$image_url= strip_tags($_POST['food_image_url']);
$image_url_trim = trim($image_url);

include('settings.php');


if($api_key ==''){
echo "<div style='color:white;background:red;padding:10px;'>clarifaiAI API is Empty. Please edit settings.php to update it.</div>";

exit();
}


$payload='
{
    "inputs": [
      {
        "data": {
          "image": {
            "url": "'.$image_url_trim.'"

          }
        }
      }
    ]
  }';

//$url1 = 'https://api.clarifai.com/v2/users/clarifai/apps/main/models/general-image-recognition/versions/9504135848be0dd2c39bdab0002f78e9/outputs';
$url1 = 'https://api.clarifai.com/v2/users/clarifai/apps/main/models/food-item-recognition/versions/1d5fd481e0cf4826aa72ec3ff049e044/outputs';
$ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array("Authorization: Bearer $api_key", 'Content-Type:application/json'));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch1);
$result=$output;
$http_status = curl_getinfo($ch1, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch1)) {
   // echo $error_msg = curl_error($ch1);
}

curl_close($ch1);

echo "<br><br>";

if($http_status==200){

echo "<div style='color:white;background:green;padding:10px;'>Food Carbon Emission Successfully Breaked down and Analyzed. See Below</div>";

}
else {
echo "<div style='color:white;background:red;padding:10px;'>There is an Issue Making API Call to clarifaiAI. Please Check Internet Connections</div>";
exit();

}   




$json = json_decode($result, true);
$desc = $json['status']['description'];
$id =   $json['outputs'][0]['id'];
$code =   $json['status']['code'];


$food_name0 =   $json['outputs'][0]['data']['concepts'][0]['name'];
$emission_value0 =   $json['outputs'][0]['data']['concepts'][0]['value'];


echo $food_name1 =   $json['outputs'][0]['data']['concepts'][1]['name'];
$emission_value1 =   $json['outputs'][0]['data']['concepts'][1]['value'];


$food_name2 =   $json['outputs'][0]['data']['concepts'][2]['name'];
$emission_value2 =   $json['outputs'][0]['data']['concepts'][2]['value'];


$food_name3 =   $json['outputs'][0]['data']['concepts'][3]['name'];
$emission_value3 =   $json['outputs'][0]['data']['concepts'][3]['value'];

$food_name4 =   $json['outputs'][0]['data']['concepts'][4]['name'];
$emission_value4 =   $json['outputs'][0]['data']['concepts'][4]['value'];

$food_name5 =   $json['outputs'][0]['data']['concepts'][5]['name'];
$emission_value5 =   $json['outputs'][0]['data']['concepts'][5]['value'];


$food_name6 =   $json['outputs'][0]['data']['concepts'][6]['name'];
$emission_value6 =   $json['outputs'][0]['data']['concepts'][6]['value'];


$food_name7 =   $json['outputs'][0]['data']['concepts'][7]['name'];
$emission_value7 =   $json['outputs'][0]['data']['concepts'][7]['value'];

$food_name8 =   $json['outputs'][0]['data']['concepts'][8]['name'];
$emission_value8 =   $json['outputs'][0]['data']['concepts'][8]['value'];

$food_name9 =   $json['outputs'][0]['data']['concepts'][9]['name'];
$emission_value9 =   $json['outputs'][0]['data']['concepts'][9]['value'];

$food_name10 =   $json['outputs'][0]['data']['concepts'][10]['name'];
$emission_value10 =   $json['outputs'][0]['data']['concepts'][10]['value'];


$food_name11 =   $json['outputs'][0]['data']['concepts'][11]['name'];
$emission_value11 =   $json['outputs'][0]['data']['concepts'][11]['value'];

$food_name12 =   $json['outputs'][0]['data']['concepts'][12]['name'];
$emission_value12 =   $json['outputs'][0]['data']['concepts'][12]['value'];


$food_name13 =   $json['outputs'][0]['data']['concepts'][13]['name'];
$emission_value13 =   $json['outputs'][0]['data']['concepts'][13]['value'];

$food_name14 =   $json['outputs'][0]['data']['concepts'][14]['name'];
$emission_value14 =   $json['outputs'][0]['data']['concepts'][14]['value'];

$food_name15 =   $json['outputs'][0]['data']['concepts'][15]['name'];
$emission_value15 =   $json['outputs'][0]['data']['concepts'][15]['value'];


$food_name16 =   $json['outputs'][0]['data']['concepts'][16]['name'];
$emission_value16 =   $json['outputs'][0]['data']['concepts'][16]['value'];

$food_name17 =   $json['outputs'][0]['data']['concepts'][17]['name'];
$emission_value17 =   $json['outputs'][0]['data']['concepts'][17]['value'];

$food_name18 =   $json['outputs'][0]['data']['concepts'][18]['name'];
$emission_value18 =   $json['outputs'][0]['data']['concepts'][18]['value'];

$food_name19 =   $json['outputs'][0]['data']['concepts'][19]['name'];
$emission_value19 =   $json['outputs'][0]['data']['concepts'][19]['value'];

$food_name20 =   $json['outputs'][0]['data']['concepts'][20]['name'];
$emission_value20 =   $json['outputs'][0]['data']['concepts'][20]['value'];

//$total_emission =$emission_value0+$emission_value1+$emission_value2+$emission_value3+$emission_value4+$emission_value5;



$food_tags ="$food_name0, $food_name1, $food_name2, $food_name3, $food_name4, $food_name5, $food_name6, $food_name7, $food_name8, $food_name9, $food_name10, $food_name11, $food_name12, $food_name13, $food_name14, $food_name15, $food_name16, $food_name17, $food_name18, $food_name19, $food_name20";
$food_captions ='';

echo 
  "<div style='background:#c1c1c1;color:black;'>
<span class='col-sm-6'>
<center><b>Foody Image Products Breakdown</b></center><br>
$food_name0 <br>
$food_name1 <br>
$food_name2 <br>
$food_name3 <br>
$food_name4 <br>
$food_name5 <br>
$food_name6 <br>
$food_name7 <br>
$food_name8 <br>
$food_name9 <br>
$food_name10 <br>
$food_name11 <br>
$food_name12 <br>
]$food_name13 <br>
$food_name14 <br>
$food_name15 <br>
$food_name16 <br>
$food_name17 <br>
</span>


<span class='col-sm-6'>
<b>Scores/Values</b><br>
$emission_value0 <br>
$emission_value1 <br>
$emission_value2 <br>
$emission_value3 <br>
$emission_value4 <br>
$emission_value5 <br>
$emission_value6 <br>
$emission_value7 <br>
$emission_value8 <br>
$emission_value9 <br>
$emission_value10 <br>
$emission_value11 <br>
$emission_value12 <br>
$emission_value13 <br>
$emission_value14 <br>
$emission_value15 <br>
$emission_value16 <br>
$emission_value17 <br>
</span>
<br><br>



</div>

<div style='width:100%;' class='col-sm-12'></div><br>";










 echo "<br><br><div class='title_css1 col-sm-12'><b style='color:navy;font-size:26px;'>Foods Nutrients Breakdown & it's Carbon Emission Data</b><br>";

/*
Amount of Carbon Emitted by Various Foods products are obtained from the source below
https://www.visualcapitalist.com/visualising-the-greenhouse-gas-impact-of-each-food/

https://www.vegetableclimate.com/climate-credentials/greenhouse-gas-emissions-by-crop/

and many more from research

*/

$data_content="$food_tags";
$word = "tomatoes";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
$carbon1 = 1.4;
echo "<b>Tomatoes Carbon Emission:</b>  1.4 KG<br>";


} 

$data_content="$food_tags";
$word = "tomato";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
$carbon1a = 1.4;
echo "<b>Tomato Carbon Emission:</b>  1.4 KG<br>";


} 


$data_content="$food_tags";
$word = "pepper";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
$carbon1b = 1.3;
echo "<b>Pepper Carbon Emission:</b>  1.3 KG<br>";


} 


$data_content="$food_captions $food_tags";
$word = "cheese";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Cheese Carbon Emission:</b>  21.0 KG<br>";
$carbon2 = 21.1;

} 


$data_content="$food_captions $food_tags";
$word = "meat";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Meat Carbon Emission:</b>  7.0 KG<br>";
$carbon3 = 7.0;

} 



$data_content="$food_captions $food_tags";
$word = "barbecue";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Barbecue Carbon Emission:</b>  7.0 KG<br>";
$carbon3b = 7.0;

} 




$data_content="$food_captions $food_tags";
$word = "oranges";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Orange/Citrus Carbon Emission:</b>  0.3 KG<br>";
$carbon4 = 0.3;

} 


$data_content="$food_captions $food_tags";
$word = "bananas";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Banana Carbon Emission:</b>  0.7 KG<br>";
$carbon5 = 0.7;

} 



$data_content="$food_captions $food_tags";
$word = "coffee";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Coffee Carbon Emission:</b>  17.0 KG<br>";
$carbon6 = 17.0;

} 




$data_content="$food_captions $food_tags";
$word = "caffeine";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>caffeine Carbon Emission:</b>  17.0 KG<br>";
$carbon6b = 17.0;

} 


$data_content="$food_captions $food_tags";
$word = "vegetable";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Vegetable Carbon Emission:</b>  0.4 KG<br>";
$carbon7 = 0.4;

} 


$data_content="$food_captions $food_tags";
$word = "prawn";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Prawn Carbon Emission:</b>  12.0 KG<br>";
$carbon8 =12.0;

} 



$data_content="$food_captions $food_tags";
$word = "shrimp";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Shrimps Carbon Emission:</b>  12.0 KG<br>";
$carbon8b =12.0;

} 





$data_content="$food_captions $food_tags";
$word = "fish";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Fish Carbon Emission:</b>  5.0 KG<br>";
$carbon9 =5.0;

} 


$data_content="$food_captions $food_tags";
$word = "fruit";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Fruits Carbon Emission:</b>  0.3 KG<br>";
$carbon10 = 0.3;

} 



$data_content="$food_captions $food_tags";
$word = "nut";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Nuts Carbon Emission:</b>  0.3 KG<br>";
$carbon11 = 0.3;

} 


$data_content="$food_captions $food_tags";
$word = "pea";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Peas Carbon Emission:</b>  0.9 KG<br>";
$carbon12 = 0.9;

} 



$data_content="$food_captions $food_tags";
$word = "pizza";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Pizza Carbon Emission:</b>  2.07 KG<br>";
$carbon13 = 2.07;

} 



$data_content="$food_captions $food_tags";
$word = "beans";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Beans/Tofu Carbon Emission:</b>  2.0 KG<br>";
$carbon14 = 2.0;

} 


$data_content="$food_captions $food_tags";
$word = "bean";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Beans/Tofu Carbon Emission:</b>  2.0 KG<br>";
$carbon14a = 2.0;

} 


$data_content="$food_captions $food_tags";
$word = "legume";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Legume Carbon Emission:</b>  2.0 KG<br>";
$carbon14b = 2.0;

}


$data_content="$food_captions $food_tags";
$word = "bread";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Bread Carbon Emission:</b>  0.977 KG<br>";
$carbon15 = 0.977;

}


$data_content="$food_captions $food_tags";
$word = "noodles";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Noodles Carbon Emission:</b>  0.88 KG<br>";
$carbon16 = 0.88;

}


$data_content="$food_captions $food_tags";
$word = "chicken";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Chicken Carbon Emission:</b>  6.0 KG<br>";
$carbon17 = 6.0;

}



$data_content="$food_captions $food_tags";
$word = "beef";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Beef Carbon Emission:</b>  60.0 KG<br>";
$carbon18 = 60.0;

}


$data_content="$food_captions $food_tags";
$word = "burger";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Burger Carbon Emission:</b>  21.0 KG<br>";
$carbon19 = 21.0;

}



$data_content="$food_captions $food_tags";
$word = "chocolate";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>chocolate Carbon Emission:</b>  19.0 KG<br>";
$carbon20 = 19.0;

}



$data_content="$food_captions $food_tags";
$word = "palm oil";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>palm oil Carbon Emission:</b>  8.0 KG<br>";
$carbon21 = 8.0;

}



$data_content="$food_captions $food_tags";
$word = "olive oil";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>olive oil Carbon Emission:</b>  6.0 KG<br>";
$carbon22 = 6.0;

}



$data_content="$food_captions $food_tags";
$word = "egg";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Eggs Carbon Emission:</b>  4.5 KG<br>";
$carbon23 = 4.5;

}



$data_content="$food_captions $food_tags";
$word = "eggs";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Eggs Carbon Emission:</b>  4.5 KG<br>";
$carbon23b = 4.5;

}



$data_content="$food_captions $food_tags";
$word = "rice";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Rice Carbon Emission:</b>  4.0 KG<br>";
$carbon24 = 4.0;

}



$data_content="$food_captions $food_tags";
$word = "milk";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Milk Carbon Emission:</b>  3.0 KG<br>";
$carbon25 = 3.0;

}



$data_content="$food_captions $food_tags";
$word = "cane sugar";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Sugar Cane Carbon Emission:</b>  3.0 KG<br>";
$carbon26 = 3.0;

}




$data_content="$food_captions $food_tags";
$word = "groundnut";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>groundnuts Carbon Emission:</b>  2.5 KG<br>";
$carbon27 = 2.5;

}


$data_content="$food_captions $food_tags";
$word = "groundnuts";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>groundnuts Carbon Emission:</b>  2.5 KG<br>";
$carbon27b = 2.5;

}



$data_content="$food_captions $food_tags";
$word = "maize";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Maize Carbon Emission:</b>  1.0 KG<br>";
$carbon28 = 1.0;

}



$data_content="$food_captions $food_tags";
$word = "corn";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Corn Carbon Emission:</b>  1.0 KG<br>";
$carbon28b = 1.0;

}


$data_content="$food_captions $food_tags";
$word = "wheat";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>wheat Carbon Emission:</b>  1.4 KG<br>";
$carbon29 = 1.4;

}


$data_content="$food_captions $food_tags";
$word = "cassava";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>cassava Carbon Emission:</b>  1.0 KG<br>";
$carbon30 = 1.0;

}



$data_content="$food_captions $food_tags";
$word = "soyamilk";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>soyamilk Carbon Emission:</b>  0.9 KG<br>";
$carbon31 = 0.9;

}


$data_content="$food_captions $food_tags";
$word = "soymilk";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>soyamilk Carbon Emission:</b>  0.9 KG<br>";
$carbon32 = 0.9;

}



$data_content="$food_captions $food_tags";
$word = "apple";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Apples Carbon Emission:</b>  0.4 KG<br>";
$carbon33 = 0.4;

}



$data_content="$food_captions $food_tags";
$word = "apples";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Apples Carbon Emission:</b>  0.4 KG<br>";
$carbon33b = 0.4;

}

$data_content="$food_captions $food_tags";
$word = "onion";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Onion Carbon Emission:</b>  0.52 KG<br>";
$carbon34 = 0.52;

}

$data_content="$food_captions $food_tags";
$word = "onions";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Onion Carbon Emission:</b>  0.52 KG<br>";
$carbon34b = 0.52;

}


$data_content="$food_captions $food_tags";
$word = "potato";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>potatoes Carbon Emission:</b>  0.48 KG<br>";
$carbon35 = 0.48;

}



$data_content="$food_captions $food_tags";
$word = "potatoes";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>potatoes Carbon Emission:</b>  0.48 KG<br>";
$carbon35b = 0.48;

}



$data_content="$food_captions $food_tags";
$word = "carrot";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Carrots Carbon Emission:</b>  0.45 KG<br>";
$carbon36 = 0.45;

}

$data_content="$food_captions $food_tags";
$word = "carrots";
$mystring = $data_content;
if(strpos($mystring, $word) !== false){
// Carbon Emitted
echo "<b>Carrots Carbon Emission:</b>  0.45 KG<br>";
$carbon36b = 0.45;

}


/*

beef 60.0
burger 21.0
chocolate  = 19.0
palm oil  = 8.0
olive oil = 6.0 
fish  = 5.0 
Eggs = 4.5
rice = 4.0 
milk = 3.0 
cane sugar = 3.0
groundnuts = 2.5
maize/corn = 1.0
wheat = 1.4
rye = 1.4
cassava = 1.0
soyamilk = 0.9
soymilk = 0.9
apple = 0.4
apples = 0.4


onion (0.52) compared with all the other vegetables collected. 
It is followed by potatoes (0.48) and carrots (0.45).
*/



$total_carbon_emission = $carbon1 + $carbon1a + $carbon1b + $carbon2 + $carbon3+ $carbon3b + $carbon4 + $carbon5 + $carbon6 + $carbon6b + $carbon7 + $carbon8 + $carbon8b + $carbon9 + $carbon10 + $carbon11 + $carbon12 + $carbon13 + $carbon14 + $carbon14a + $carbon14b + $carbon15 + $carbon16 + $carbon17 + $carbon18 + $carbon19 + $carbon20 + $carbon21 + $carbon22 + $carbon23 + $carbon23b + $carbon24 + $carbon25 + $carbon26 + $carbon27 + $carbon27b + $carbon28 + $carbon28b + $carbon29 + $carbon30 + $carbon31 + $carbon32 + $carbon33 + $carbon33b + $carbon34 + $carbon34b + $carbon35 + $carbon35b + $carbon36 + $carbon36b;




 echo "<div class='title_css1'><b style='color:#800000;font-size:16px;'>Total Food Carbon Emission: &nbsp;
</b> $total_carbon_emission (KG)</div>";



echo "</div>";












?>