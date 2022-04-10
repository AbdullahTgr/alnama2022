 
  
  <!-- Modal -->
  <div class="modal fade" id="editProduct{{$product->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" action="{{route('admin.update_product')}}" method="post">
            @csrf
        <div class="modal-body">
                <div class="mb-3">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <label for="ar_name" class="form-label">AR Name</label>
                    <input  required type="text" class="form-control" name="ar_name" id="ar_name" aria-describedby="helpId" value="{{$product->ar_name}}">
                   </div>
                   <div class="mb-3">
                    <label for="en_name" class="form-label">EN Name</label>
                    <input  required type="text" class="form-control" name="en_name" id="en_name" aria-describedby="helpId" value="{{$product->en_name}}">
                   </div>

                   <div class="row">
                    <div class="col">
                      <label for="price" class="form-label">Price</label>
                      <input  required type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="helpId"  value="{{$product->price}}">
                    </div>
                    <div class="col">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input required  type="number" step="0.01" class="form-control" name="quantity" id="quantity" aria-describedby="helpId"  value="{{$product->quantity}}">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="cat_id">الفئة</label>
                    <select class="form-control" name="cat_id" id="cat_id">
                        @foreach ($cats as $cat)
                        <option {{$product->cat_id == $cat->id ? 'selected' : null}} value="{{$cat->id}}">{{$cat->ar_name}}</option>
                        @endforeach
                    </select>
                  </div>

                   <div class="mb-3">
                    <label for="ar_description" class="form-label">الوصف بالعربي</label>
                    <textarea   class="form-control" name="ar_description" id="ar_description" aria-describedby="helpId">{{str_replace('<br />', '', $product->ar_description)}}</textarea>
                   </div>
                   <div class="mb-3">
                    <label for="en_description" class="form-label">الوصف بالانجليزية</label>
                    <textarea   required  class="form-control" name="en_description" id="en_description" aria-describedby="helpId" >{{str_replace('<br />', '', $product->en_description)}}</textarea>
                </div>

                <div class="row">
                  <div class="col">
                     <label for="photoEdit{{$product->id}}" class="form-label">الصورة</label>
                    <br>
                    <img id="e_pic" src="{{asset( str_replace('public' , 'storage' ,$product->photo))}}" class="img-fluid">
                    <input  accept="image/png, image/gif, image/jpeg"     oninput="e_pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="photo" id="photoEdit{{$product->id}}" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photoEdit{{$product->id}}"><i class="fas fa-image"></i>اختر صوة</label>
                    <br>
                    <video controls src="{{asset( str_replace('public' , 'storage' ,$product->video))}}" id="ed_vid" class="img-fluid">
                    <input  accept="video/*"  oninput="ed_vid.src=window.URL.createObjectURL(this.files[0])" type="file" class="file_video"  name="video" id="videoEdit{{$product->id}}" style="display: none">
                    <br>
                    </video>
                    <label class="btn btn-primary btn-sm shadow-sm" for="videoEdit{{$product->id}}"><i class="fas fa-video"></i> Choose Video</label>
                   </div>
                   <div class="col">
                    <label for="images{{$product->id}}" class="form-label">الصور الاضافية</label>
                    <br>
                    <div id="pics{{$product->id}}" class="row">
                        @foreach ($images as $img)
                        @if ($product->id == $img->product_id)
                        <div class="col-md-4">
                          <div  type="button"  data-bs-toggle="modal" data-bs-target="#deleteImage{{$img->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>                                
                          <img class="img-fluid" src="{{asset( str_replace('public' , 'storage' ,$img->image))}}">
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <input  accept="image/png, image/gif, image/jpeg"   oninput="preview(this,'{{$product->id}}')"  type="file" step="0.01" class="form-control" name="images[]" multiple id="images{{$product->id}}" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="images{{$product->id}}"><i class="fas fa-images"></i>غير الصور الاضافية</label>
                  </div>
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


 
@foreach ($images as $img)

  <!-- Modal -->
  <div style="z-index: 900000"  class="modal fade" id="deleteImage{{$img->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="false">
    <div  class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">حذف الصور</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_image')}}" method="post">
            @csrf
            <input type="hidden" name="image_id" value="{{$img->id}}">
        <div class="modal-body">
            هل انت متاكد؟
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-danger">نعم</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  @endforeach