<!-- animated background/cursor effect from https://tympanus.net -->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Peter's Web Portfolio</title>

 <!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'/>-->
  <link rel='stylesheet prefetch' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'/>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'/>
  
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" href="css/style.css?v=1.1">
</head>

<body>
  <div id="main">
    <main>
      <section id="page1">
        <div class="demo-1">
        <div class="content">
          <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="navigation">
              <div class="logo block" style="float:left; display: inline;">
                <a href="https://peterwebdev.com" ><img  src="img/logosmall.png" height="30"></a>
              </div>
              <div class="block" style="float:right; display: inline;">
                <nav>
                   <ul>
                      <a href="#page1"><li id="home">Home</li></a>
                      <a href="#page2"><li id="work">Work</li></a>
                      <a href="#page3"><li id="about">About</li></a>
                      <a href="#page4"><li id="contact">Contact</li></a>
                    </ul>
                </nav>
              </div>
            </div>
            <div class="titleblock">
                 <h1 class="main-title bounceInLeft animated">Hi, I am peter</h1>
                 <h1 class="subtitle">A front end developer</h2>
            </div>
          </div>
        </div>
      </section>
      </section>
      <section id="page2">
        <div class="wrap">
          <h2>Here is my work</h2>
            <div class="project">
               <div class="col col1 projectchild">
                     <b>Tribute Page</b>
                   <br/><br/>
                   <img src="img/tribute.jpg" class="imgflex" onclick="openlink();" width="400" height="400">


                   <div id="pop" class="pop popcontent">
                      <a href="https://demo.peterwebdev.com/Tribute-Page/" target="_blank"><div class="button">Demo</div></a>
                      <a href="https://github.com/PeterWebDev/Tribute-Page" target="_blank"><div class="button">Source/details</div></a>
                      <div class="button close">Close</div>
                   </div>
                   
               </div>
               <div class="col col2 projectchild">
                     <b>Product Email Template</b>
                    <br/><br/>
                     <img src="img/product.jpg" onclick="openlink2();" class="imgflex"  style="max-width: 100%; height:auto;" width="400" height="400">

                     <div id="pop2" class="pop popcontent">
                         <a href="https://demo.peterwebdev.com/product_Template_01" target="_blank"><div class="button">Demo</div></a>
                        <a href="https://github.com/PeterWebDev/Email-Templates/tree/master/Product_Template_01" target="_blank"><div class="button">Source/details</div></a>
                        <a href="https://demo.peterwebdev.com/" target="_blank"><div class="button">More Tempalates</div></a>
                        <div class="button close2">Close</div>

                     </div>
                      
               </div>
               <div class="col col3 projectchild">
                   <b>Portfolio</b>
                   <br/><br/>
                   <img src="img/portfolio.jpg" class="imgflex" onclick="openlink3();" style="max-width: 100%; height:auto;" width="400" height="400">

                    <div id="pop3" class="pop popcontent">
                     <a href="#page1" target="_blank"><div class="button">Demo</div></a>
                    <div class="button">Source/details</div>
                    <div class="button close3">Close</div>
                   </div>
                  
               </div>   
            <div> 
        </div>
      </section>
      <section id="page3">
        <h1>Hi, I am peter</h1>
      </section>
      <section id="page4">
        <h1>Hi, I am peter</h1>
      </section>
    </main>
    <footer>
      <div><br/><br/></div>
    </footer>
</div>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src="js/index.js"></script>


</body>

</html>
