@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" >

    
    <div id="class all">
        <input checked type="radio" name="respond"  id="desktop">
        <article id="slider">
            <input checked type="radio" name="slider" id="switch1">
            <input type="radio" name="slider" id="switch2">
            <input type="radio" name="slider" id="switch3">
            <input type="radio" name="slider" id="switch4">
            <input type="radio" name="slider" id="switch5">

            <div id="slides">
                <div id="overflow">
                    <div class ="image">
                    
                        <article><img src="img/10.jpg" width="200" height="350"></article>
                        <article><img src="img/4.jpg" width="200" height="350"></article>
                        <article><img src="img/3.jpeg" width="200" height="350"></article>
                        <article><img src="img/5.jpg" width="200" height="350"></article>
                        <article><img src="img/6.jpeg" width="200" height="350"></article>
                    </div>
                    <div class="container2">
                        <img src="" style="width:100%;">
                        <div class="text-block">
                          <h4>Mercedes-Benz</h4>
                          <p><strong>VIP</strong></p>
                        </div>
                      </div> 
                </div>
            </div>
            <div id="controls">
                <label for="switch1"></label>
                <label for="switch2"></label>
                <label for="switch3"></label>
                <label for="switch4"></label>
                <label for="switch5"></label>
            </div>
            <div id="active">
                <label for="switch1"></label>
                <label for="switch2"></label>
                <label for="switch3"></label>
                <label for="switch4"></label>
                <label for="switch5"></label>
            </div>
        </article>
    </div>

     <div id="first">
      <h1 id="level1">Mercedes-Benz Auto Shop</h1>
     </div>
     <div>
     </div>
     <div>
        <ul>
            <a class="button"  href="#E-class">E-class</a>
            <a class="button"  href="#G-class">G-class</a>
            <a class="button"  href="#V-class">V-class</a>
            <a class="button"  href="#CLS-class">CLS-class</a>
            <a class="button"  href="#GLE-class">GLE-class</a>
        </ul>
       </div>
    <section id ="html">
        <div>
        <hr>
      <h2 style="position: relative; text-align: center; color:honeydew;">The site will help you find a new car!</h2>
      <h3 style="position: relative; text-align: center; color: cornsilk;">Mercedes-Benz</h3>
      <p style="position: relative;left:3% ;width: 97%; color:white;"><strong>Mercedes-Benz</strong> -
        <strong>trademark,</strong> <strong>company of the same name.</strong><br>
        <br> Mercedes - is a German global automobile marque and a division of Daimler AG. Mercedes-Benz is known for luxury vehicles, vans, trucks, buses, coaches and ambulances. 
        The headquarters is in Stuttgart, Baden-Württemberg. The name first appeared in 1926 under Daimler-Benz. In 2018, Mercedes-Benz was the largest seller of premium vehicles in the world,
         having sold 2.31 million passenger cars. Mercedes-Benz origins' come from Daimler-Motoren-Gesellschaft's 1901 Mercedes and Karl Benz's 1886 Benz Patent-Motorwagen,
          which is widely regarded as the first gasoline-powered automobile. 
          The slogan for the brand is "the best or nothing".</p>
      <img style="position: relative; left: 30%;" src="img/img.png">
      <a style="position: relative;right: 30%; color: white;" href="https://www.domenikss.lv/ru">Domenikss</a>
       </div>
     </section>
     <section id="E-class">
        <div>
            <hr>
          <h2 style="position: relative; text-align: center; color:honeydew;">E-class </h2>
          <h3 style="position: relative; text-align: center; color: cornsilk;">Mercedes-Benz</h3>
          <br>
          <br>
          <div>
            <div class="pirkums">
                 <img style="position: relative; padding-left:10%;" src="img/9.png" width="300" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 3)}}">Buy</a>
                </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/10.PNG" width="303" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 4)}}">Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                <img style="position: relative;padding-left:10%;" src="img/11.PNG" width="303" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 1)}}">Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/12.PNG" width="310" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 2)}}">Buy</a>
                 </div>
            </div>
         </div>
        </div>
     </section>
     <section id="G-class">
      <div>
        <hr>
      <h2 style="position: relative; text-align: center; color:honeydew;">G-class </h2>
      <h3 style="position: relative; text-align: center; color: cornsilk;">Mercedes-Benz</h3>
      <br>
      <br>
      <div class="pirkums">
                 <img style="position: relative; padding-left:10%;" src="img/13.png" width="300" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 5)}}">Buy</a>
                </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/14.PNG" width="303" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 8)}}">Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                <img style="position: relative;padding-left:10%;" src="img/15.PNG" width="303" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 7)}}">Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/17.PNG" width="310" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 6)}}">Buy</a>
                 </div>
            </div>
    </div>
    </section>
    <section id="V-class">
      <div>
        <hr>
      <h2 style="position: relative; text-align: center; color:honeydew;">V-class </h2>
      <h3 style="position: relative; text-align: center; color: cornsilk;">Mercedes-Benz</h3>
      <br>
      <br>
      <div class="pirkums">
                 <img style="position: relative; padding-left:10%;" src="img/21.PNG" width="300" height="150">
                <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 10)}}">Buy</a>
                </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/18.PNG" width="303" height="150">
                 <div class="pirkums_info">
                 <a  type="button" class="pirkt" href="{{ action('OrderController@create', 11)}}">Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                <img style="position: relative;padding-left:10%;" src="img/19.PNG" width="303" height="150">
                <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 12)}}" >Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/20.PNG" width="310" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 9)}}" >Buy</a>
                 </div>
            </div>
    </div>
    </section>
    <section id="CLS-class">
      <div>
        <hr>
      <h2 style="position: relative; text-align: center; color:honeydew;">CLS-class </h2>
      <h3 style="position: relative; text-align: center; color: cornsilk;">Mercedes-Benz</h3>
      <br>
      <br>
      <div class="pirkums">
                 <img style="position: relative; padding-left:10%;" src="img/25.PNG" width="300" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 14)}}" >Buy</a>
                </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/22.PNG" width="303" height="150">
                 <div class="pirkums_info">
                 
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 15)}}" >Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                <img style="position: relative;padding-left:10%;" src="img/23.PNG" width="303" height="150">
                <div class="pirkums_info">
                 
                 <a type="button" class="pirkt" href="{{ action('OrderController@create',16)}}" >Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/24.PNG" width="310" height="150">
                 <div class="pirkums_info">
                 
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 13)}}" >Buy</a>
                 </div>
            </div>
    </div>

    </section>
         
    <section id="GLE-class">
      <div>
        <hr>
      <h2 style="position: relative; text-align: center; color:honeydew;">GLE-class </h2>
      <h3 style="position: relative; text-align: center; color: cornsilk;">Mercedes-Benz</h3>
      <br>
      <br>
      <div class="pirkums">
                 <img style="position: relative; padding-left:10%;" src="img/29.PNG" width="300" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 18)}}" >Buy</a>
                </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/26.PNG" width="303" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 19)}}" >Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                <img style="position: relative;padding-left:10%;" src="img/27.PNG" width="303" height="150">
                <div class="pirkums_info">
                <a type="button" class="pirkt" href="{{ action('OrderController@create', 20)}}" >Buy</a>
                 </div>
            </div>
            <div class="pirkums">
                 <img style="position: relative;padding-left:10%; " src="img/28.PNG" width="310" height="150">
                 <div class="pirkums_info">
                 <a type="button" class="pirkt" href="{{ action('OrderController@create', 17)}}" >Buy</a>
                 </div>
            </div>
    </div>
    </section>
    <br>
    <section id="Contacts">
        <div class="container1">
            <div style="text-align:center">
              <h2>Contact Us</h2>
              <p>Swing by for a cup of coffee, or leave us a message:</p>
            </div>
            <div class="row">
              <div class="column">
                <img src="img/15.jpg" style="width:100%">
              </div>
              <div class="column">
                <form action="/action_page.php">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  <label for="country">Country</label>
                  <select id="country" name="country">
                    <option value="latvia">Latvia</option>
                    <option value="lithuania">Lithuania</option>
                    <option value="eesti">Eesti</option>
                  </select>
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                  <input type="submit" value="Submit">
                </form>
              </div>
            </div>
          </div> 
    </section>
    <div class="footer">
        <h2>Contacts</h2>
        <p> Antons Broks </p>
        <p>antonbroks@inbox.lv</p>
      </div>
    
@endsection