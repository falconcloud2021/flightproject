@extends('layouts.client')
@section('content')
       
   <article>
    <style type="text/css">body { background: url(/resources/media/images/laptops.jpg); background-size: 100%; font-family: Verdana;} </style>
      <div class="section background-opacity"> 
        <div class="line">
         <div class="margin">
          <!-- Contact Form -->
          <div class="s-12 m-12 l-11">
            <h2 class="text-uppercase text-strong margin-bottom-10">Admin Panel</h2>
              <form class="customform" method="post" action = "">
               <div class="line" >
                <div class="margin">
                  <div class="s-12 m-14 l-2" >
                    <input name="login" class="required name border-radius text-strong" placeholder="Login" title="Login" type="text" />
                  </div>
                  <div class="s-12 m-12 l-2">
                    <input name="password" class="required name border-radius text-strong" placeholder="Password" title="Password" type="password" />
                  </div>
                </div>
                  <div class="s-12 m-12 l-2"><button class="submit-form button background border-radius text-white" type="submit">Войти</button></div> 
               </div>
              </form>
           </div>  
         </div> 
        </div>
      </div>
    </article>
      
     
      
@stop
