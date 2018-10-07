<!doctype html5>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
/**{
background-color: pink;
}*/
 .header {
    background-color: ;
    text-align: center;
    padding: 20px;
    height: 150px;
 }
 body{
    	background-image: url("https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&h=350");
    	opacity:0.1px;
    }

     
.menunav ul{
width:700px;
height: 50px;
margin: 50px auto;
text-align: center;
list-style: none;
font-size: 13px;
font-family: 'Lobster', cursive;
}
.container {
  float: left;
  width: 33.33%;
  padding: 30px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
.container{
opacity: 1;
 position: relative;
 width: 350px;
 height: 350px;
}
.middle{
opacity: 0;
position: absolute;
text-align: center;
top: 40%;
left: 35%
}
.container:hover .image {
  opacity: 0.3;
  }
.container:hover .middle{
opacity: 1;
}
.text {
  background-color: purple;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
 }
  
figcaption{
background-color: babypink;
width: 350px;
height: 55px;
text-align: center;
}

/*.footer {
    background-color: black;
    text-align: center;
    padding: 10px;
    color: white;
    } 
   .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
  display: inline-table;
 
  }
  .fa:hover {
    opacity: 0.7;
  }
  .fa-facebook {
  background: #3B5998;
  color: white;
  }
  .fa-twitter{
   background: #55ACEE;
    color: white;
  }
  .fa-instagram {
  background:red;
  color: white;
  }
  .fa-pinterest {
  background: #cb2027;
  color: white;
  }
  .fa-phone {
  background: black;
  color: white;
  }
  
   .fa-clock-o{
   background: black;
   color: white;
   }
   .fa-envelope-o{
   background: black;
   color: white;
   
   }*/
   ul {
    text-align: center;
    list-style-type: none;
    margin: 0;
    padding: 0;
   background-color: grey;
    }
    
    li {
    display: inline;
    font-size: 30px;
    padding:10px;
    }
    li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }
    li a:hover {
    background-color: gray;
    color: white;
    }
         .active{
        background-color:gray;
        color:white; 
     }
       .text{
       color:white;
       font-size:30px;
       background-color: black;
       padding:px;      

       .column:hover .image{
         opacity: 0.3;
     }
     
     .column:hover .middle{
        opacity: 1;
     }
         /* .column:hover .image{
         opacity: 0.3;
     }
     
     .column:hover .middle{
        opacity: 1;
     }*/
</style>
</head>
<body >

<div class="header" style="background-image:url('background.jpeg') ;">
        <h1><marquee>TRIPLET BAKE SHOP</marquee></h1>
    </div>
    
    <div style="height: 160px;">
    <ul style="height: 80px;">
    <li><a href="#home">HOME</a></li>
    <li><a href="#x">ABOUT_US</a></li>
    <li><a href="#y">PRODUCTS</a></li>
    <li><a class="active" href="#cup">BUY ONLINE</a></li>
    <li><a href="#contact">CONTACT US</a></li>
   </ul>

    </div>



<div class="row">
<div class="container">
<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2016/2/26/1/WU1303H_White-Sandwich-Bread_s4x3.jpg.rend.hgtvcom.616.462.suffix/1459542226650.jpeg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>loaf of bread stock<br>&#8377 60<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">25% OFF</span> </p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://d2gk7xgygi98cy.cloudfront.net/1360-3-large.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>fresh bread<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="http://www.ndtv.com/cooks/images/Bread%20Rolls.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>bread rolls receipe<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>


<div class="row">
<div class="container">
<img src="https://cdn-ami-drupal.heartyhosting.com/sites/muscleandfitness.com/files/images/bread.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>bread for bodybuilding<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.tasteofhome.com/wp-content/uploads/2017/10/Apple-Bread_EXPS_SDAS17_3432_B04_06_5b-2-696x696.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>apple bread receipe<br>&#8377 45<br><span style="text-decoration: line-through; color: gray;">&#8377 60</span>  <span style="color :green;">25% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://img.buzzfeed.com/thumbnailer-prod-us-east-1/dd75a8779ee14bed8599ae5ee7a949b1/BFV8810_Cream_Cheese-Filled_Banana_Bread_Muffins_FB_w-Bien_End_Card.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>cream cheeze<br>&#8377 60/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>


<div class="row">
<div class="container">
<img src="https://realfood.tesco.com/media/images/Basic-Bread-LARGE-HERO-32adc330-cdd9-4cf7-b467-03bca920dc15-0-1400x919.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>bread roll receipe<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/4/5/4/FNM050111_Mix-And-Match-0152-Chocolate-Bread_s4x3.jpg.rend.hgtvcom.616.462.suffix/1382540008361.jpeg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>banna bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://cdn.shopify.com/s/files/1/2081/1175/products/Croissant_Bread.jpeg?v=1518203817" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>crossiont bread<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>




<div class="row">
<div class="container">
<img src="https://loperaindia.com/wp-content/uploads/2017/10/Milk-Bread.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>milk bread<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.ketovale.com/wp-content/uploads/2017/07/keto-bun-recipe.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>best low card bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://bromabakery.com/wp-content/uploads/2015/05/Lavender-Infused-Banana-Bread-4.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>lawender banna bread<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="http://joylovefood.com/wp-content/uploads/2014/11/Banana-Coconut-Bread-3-1.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Banana coconut bread<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://cdn-image.myrecipes.com/sites/default/files/styles/medium_2x/public/amish-cinnamon-bread-mr.jpg?itok=9OTEDgGU" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>amish sinnapour<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="http://www.businesstorch.com.ng/wp-content/uploads/2018/09/bread1234.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>nigerian<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="https://chocolatecoveredkatie.com/wp-content/uploads/2017/01/greek-yogurt-banana-bread.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>helathy banana<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.bigbasket.com/media/uploads/p/l/40020506_1-fresho-bread-multigrain-chemical-free.jpg" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>buy fresho bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="http://breadgardenmarket.com/wp-content/uploads/2017/02/bread_bakery_iowacity_breadgardenmarket.gif" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>Choco Chip<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>



<div class="row">
<div class="container">
<img src="https://mygluten-freekitchen.com/wp-content/uploads/2013/04/GF-Pull-Apart-Dinner-Rolls.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>gluten free bread<br>&#8377 80<br><span style="text-decoration: line-through; color: gray;">&#8377 100</span>  <span style="color :green;">20% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://images.pexels.com/photos/209403/pexels-photo-209403.jpeg?auto=compress&cs=tinysrgb&h=350" alt="cake" class="image" style="width:350px;height:300px;">
<figcaption><p>beautiful bread<br>&#8377 70/-;</p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
<div class="container">
<img src="https://www.doctorportal.com.au/wp-content/uploads/bread-salt-500x299.jpg" alt="cake" class="image" style="width:350px;height:300px;">
	<figcaption><p>hidden salt in bread<br>&#8377 68<br><span style="text-decoration: line-through; color: gray;">&#8377 80</span>  <span style="color :green;">15% OFF</span></p></figcaption>
<div class="middle">
<div class="text"><a href="#" style = "text-decoration: none; color: white;">Add To Cart</a></div>
</div>
</div>
</div>