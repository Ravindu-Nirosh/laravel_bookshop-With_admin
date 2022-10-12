@extends('admins.admin_master')
@section('admin_index')

@section('backtitle')
  Lassana BooksShop Product Edit
@endsection
    <div class="container-full">
    
      <!-- Main content -->
      <section class="content">

       <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Edit Product</h4>
         </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">

                  <form method="POST" action="{{route('update.product.store')}}">

                    @csrf

                    

                    <div class="row">
                        <input type="hidden" name="id" value="{{$product->id}}">
                      <div class="col-12">		
                          
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <h5>Select Category <span class="text-danger"></span></h5>
                                    <div class="controls">
                                    <select name="category_id" class="form-control">
                                                 <option value="" selected="" disabled="">Select Category</option>
                                                 @foreach($categories as $items)
                                                 <option value="{{$items->id}}" {{$items->id == $product->category_id ? 'selected':''}}>{{$items->cat_name}}</option>
                                                 @endforeach
                                         </select>
                                         @error('category_id')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                             
             
             
                                <div class="text-xs-right" style="float:right;" >
                             
                            </div>
                            </div> 
                            </div>


                            </div> <!-- end col 6 1 -->

                            <div class="col-md-6">

                                <div class="form-group">
                                    <h5>Select Category <span class="text-danger"></span></h5>
                                    <div class="controls">
                                    <select name="subcategory_id" class="form-control">
                                                 <option value="" selected="" disabled="">Select Sub Category</option>
                                                 @foreach($subcategories as $items)
                                                 <option value="{{$items->id}}" {{$items->id ==$product->subcategory_id ? 'selected':''  }}>{{$items->sub_cat_name}}</option>
                                                 @endforeach
                                         </select>
                                         @error('subcategory_id')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                             
             
             
                                <div class="text-xs-right" style="float:right;" >
                             
                            </div>
                            </div> 
                            </div>

                            </div><!-- end col 6 2 -->

                        </div><!-- endrow -->


                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" > </div>
                                        @error('product_name')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>


                            </div> <!-- end col 4 1 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Code <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_code" class="form-control" value="{{$product->product_code}}"> </div>
                                        @error('product_code')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 2 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Quntity <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_qty" class="form-control" value="{{$product->product_qty}}"> </div>
                                        @error('product_qty')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 3 -->

                        </div><!-- endrow 2-->

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Tags <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_tag"  data-role="tagsinput"  value="{{$product->product_tag}}" placeholder="add tags" class="form-control" > </div>
                                        @error('product_tag')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>


                            </div> <!-- end col 4 1 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Language <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_lang" value="{{$product->product_lang}}" class="form-control" > </div>
                                        @error('product_lang')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 2 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Author <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_author"  value="{{$product->product_author}}" class="form-control" > </div>
                                        @error('product_author')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 3 -->

                        </div><!-- endrow 3-->

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Publisher <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_publisher" value="{{$product->product_publisher}}" class="form-control" > </div>
                                        @error('product_publisher')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>


                            </div> <!-- end col 4 1 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product ISBN <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_isbn" value="{{$product->product_isbn}}" class="form-control" > </div>
                                        @error('product_isbn')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 2 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                    <h5>Product Price <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_price" value="{{$product->product_price}}"  class="form-control" > </div>
                                        @error('product_price')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 3 -->

                        </div><!-- endrow 4-->

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <h5>Product Discount Price <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_disprice" value="{{$product->product_disprice}}"  class="form-control" > </div>
                                        @error('product_disprice')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>


                            </div> <!-- end col 4 1 -->

                            <div class="col-md-6">

                                <div class="form-group">
                                    <h5>Product Short Description <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="product_shortdescription" value="{{$product->product_shortdescription}}" class="form-control" > </div>
                                        @error('product_shortdescription')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror
                                </div>

                            </div><!-- end col 4 2 -->

                        </div><!-- endrow 5-->
                          
                          <div class="form-group">
                              <h5>Product Description  <span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <textarea name="product_longdescription" id="textarea" class="form-control" required placeholder="Description">{!!$product->product_longdescription!!}</textarea>
                              </div>
                          </div>
                      </div>
                    </div>

                    <hr>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  
                                  <div class="controls">
                                      <input type="checkbox" name="hotdeals" id="checkbox_1"  {{$product->hotdeals==1? 'checked':''}} value="1">
                                      <label for="checkbox_1">Hot Deals</label>
                                  </div>								
                              </div>
                              <div class="form-group">
                                  
                                <div class="controls">
                                    <input type="checkbox" name="featured" id="checkbox_2" {{$product->featured==1? 'checked':''}}  value="1">
                                    <label for="checkbox_2">Fetured</label>
                                </div>								
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                
                                <div class="controls">
                                    <input type="checkbox" name="specila_offer" id="checkbox_3" {{$product->specila_offer==1? 'checked':''}}  value="1">
                                    <label for="checkbox_3">Special Offer</label>
                                </div>								
                            </div>
                            <div class="form-group">
                                
                              <div class="controls">
                                  <input type="checkbox" name="specila_deals" id="checkbox_4"  {{$product->specila_deals==1? 'checked':''}}  value="1">
                                  <label for="checkbox_4">Special Deals</label>
                              </div>								
                          </div>
                          
                        </div>
                          
                      </div>
                    
                      <div class="text-xs-right">
                          <input type="submit" class="btn btn-rounded btn-info" value="Update">
                      </div>
                  </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      c


    <section class="content">
        <div class="row">


            <div class="col-md-12 col-12">
				<div class="box">
				  <div class="box-header with-border">
					<h4 class="box-title">Update Product Image</h4>
				  </div>
				  <div class="box-body">
                    <form method="POST" action="{{route('product.image.update.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <input type="hidden" name="id" value="{{$product->id}}">

                        <h5>Product Image <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="product_thumbnail" class="form-control" required onchange="mainImageUrl(this)"> </div>
                            @error('product_thumbnail')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <img src="{{(!empty($product->product_thumbnail))?url($product->product_thumbnail):url('upload/no-image-icon-0.jpg')}}" width="200px" height="200px" id="mainimage">
                            
                    </div>
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-info" value="Update">
                    </div>
                </form>

				  </div>
				</div>
			  </div>



        </div><!-- /.row -->
    </section>

    </div>


    <script type="text/javascript">
        function mainImageUrl(input){
            if(input.files && input.files[0]){
                var reader =new FileReader();
                reader.onload = function(e){
                    $('#mainimage').attr('src',e.target.result).width(200).height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    </script>

    
 

@endsection