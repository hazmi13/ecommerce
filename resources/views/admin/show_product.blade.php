<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css')
    <style type="text/css">



        .table_center{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid black;
          color: black;
        }
        .h2_font{
          font-size: 40px;
          padding-bottom: 40px;
          color: black;
          text-align: center;
        }

        .img_size{
            width: 120px;
            height: 120px;
            padding: 10px;
        }
        .th_bg{
            background:#6F8FAF;
        }
        .th_design{
            padding: 30px;
        }
    
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin/sidebar ')
      <!-- partial -->
      @include('admin/header')
        <!-- partial -->
        
      

        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
      
                  <button class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                  {{session()->get('message')}}
      
                  
                </div>
      
      
      
                @endif

                <h2 class="h2_font">All Products</h2>

  

                <table class="table_center">
                    <tr class="th_bg">
                        <th class="th_design">Product Title</th>
                        <th class="th_design">Description</th>
                        <th class="th_design">Category</th>
                        <th class="th_design">Quantity</th>
                        <th class="th_design">Price</th>
                        <th class="th_design">Discount</th>
                        <th class="th_design">Image</th>
                        <th class="th_design">Action</th>
                    </tr>

                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            
                            <img class="img_size" src="/product/{{$product->image}}" alt="">

                        </td>
                        <td>
                            <a href="{{url('update_product', $product->id)}}" class="btn btn-secondary">Update</a>
                            <a href="{{url('delete_product', $product->id)}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                        </td>
                      
                    </tr>
                   

                    @endforeach
                </table>
                {{-- <div class="pagination">
                    {{ $products->links() }}
                </div> --}}





            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin/script')
    <!-- End custom js for this page -->
  </body>
</html> 