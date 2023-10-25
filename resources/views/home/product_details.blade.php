<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Imperial Shopping</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- font awesome style -->
      <link href=" home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href=" home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area" style="margin-bottom: 30px;">
         <!-- header section starts -->
         @include('home/header')
         <!-- end header section -->

  

      {{-- <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box">
 
           <div class="img-box">
              <img src="/product/{{$product->image}}" alt="">
           </div>
           <div class="detail-box">
              <h5>
                 {{$product->title}}
              </h5> --}}
              <div class="card" style="width: 20rem; margin: auto;">
                <img class="card-img-top" src="/product/{{$product->image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center; cursor:pointer;">Name: <span style="color: blue;">{{$product->title}}</span></h5>
                  <p class="card-text">Description: {{$product->description}}</p>
                  <p class="card-text">Quantity: {{$product->quantity}}</p>
                  <p class="card-text">Category: {{$product->category}}</p>
                  <hr>
                  @if($product->discount_price != null)

                  <h6 style="color: red">
                     Promotion<br>
                     RM{{$product->discount_price}}
                  </h6>
    
                  <h6  style="text-decoration: line-through;color:gray">
                     Price<br>
                     RM{{$product->price}}
                  </h6>
    
                  @else
    
                  <h6 style="color: blue;">
                     Price<br>
                     RM{{$product->price}}
                  </h6> 
    
    
                  @endif

                </div>
           
                <div class="card-body">
                    <form action="{{url('add_cart',$product->id)}}" method="post">

                        @csrf
                        <div class="row">
                        <div class="col-md-4" >
                           <input type="number" name="quantity" style="width:70px; border-radius:50px;" value="1" min="1" >
                        </div>
                        <div class="col-md-4">
                           <input type="submit" value="Add To Cart" style="border-radius: 50px;font-size:12px;">
                        </div>
                     </div>
                        

                        
                     </form>
                  
                </div>
              </div>



           </div>
        </div>
     </div>

      <!-- footer start -->
      @include('home/footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>