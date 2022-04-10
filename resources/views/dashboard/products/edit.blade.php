 
  
  <!-- Modal -->
  <div class="modal fade" id="editProduct{{$product->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تعديل منتج</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="userForm" enctype="multipart/form-data" action="{{route('admin.update_product')}}" method="post">
            @csrf
        <div class="modal-body">
                <div class="mb-3">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <label for="ar_name" class="form-label">الاسم العربي</label>
                    <input  required type="text" class="form-control" name="ar_name" id="ar_name" aria-describedby="helpId" value="{{$product->ar_name}}">
                   </div>
                   <div class="mb-3">
                    <label for="en_name" class="form-label">الاسم الانجليزي</label>
                    <input  required type="text" class="form-control" name="en_name" id="en_name" aria-describedby="helpId" value="{{$product->en_name}}">
                   </div>
                   <div class="mb-3">
                    <label for="fr_name" class="form-label">الاسم الفرنسي</label>
                    <input  required type="text" class="form-control" name="fr_name" id="fr_name" aria-describedby="helpId" value="{{$product->fr_name}}>
                   </div>
                   <div class="row">
                    <div class="col">
                      <label for="price" class="form-label">السعر</label>
                      <input  required type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="helpId"  value="{{$product->price}}">
                    </div>
                    <div class="col">
                      <label for="quantity" class="form-label">الكمية</label>
                      <input required  type="number" step="0.01" class="form-control" name="quantity" id="quantity" aria-describedby="helpId"  value="{{$product->quantity}}">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="cat_id">القسم</label>
                    <select class="form-control" name="cat_id" id="cat_id">
                        @foreach ($cats as $cat)
                        <option {{$product->cat_id == $cat->id ? 'selected' : null}} value="{{$cat->id}}">{{$cat->en_name}}</option>
                        @endforeach
                    </select>
                  </div>

                   <div class="mb-3">
                    <label for="ar_description" class="form-label">الوصف العربي</label>
                    <textarea   class="form-control" name="ar_description" id="ar_description" aria-describedby="helpId">{{str_replace('<br />', '', $product->ar_description)}}</textarea>
                   </div>
                   <div class="mb-3">
                    <label for="en_description" class="form-label">الوصف الانجليزي</label>
                    <textarea   required  class="form-control" name="en_description" id="en_description" aria-describedby="helpId" >{{str_replace('<br />', '', $product->en_description)}}</textarea>
                </div>

                <div class="mb-3">
                  <label for="fr_description" class="form-label">الوصف الفرنسي</label>
                  <textarea  required   class="form-control" name="fr_description" id="fr_description" aria-describedby="helpId" placeholder="">{{str_replace('<br />', '', $product->fr_description)}}</textarea>
                 </div>


                <div class="row">
                  <div class="col">
                     <label for="photoEdit{{$product->id}}" class="form-label">صورة العرض</label>
                    <br>
                    <img id="e_pic" src="{{asset( str_replace('public' , 'storage' ,$product->photo))}}" class="img-fluid">
                    <input  accept="image/png, image/gif, image/jpeg"     oninput="e_pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="photo" id="photoEdit{{$product->id}}" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photoEdit{{$product->id}}"><i class="fas fa-image"></i> أخر صورة</label>
                    <br>
                    <br>
                    <label for="video">رابط الفديوا</label>
                    <input   type="text"  class="form-control" value="{{$product->video}}" name="video" id="video" aria-describedby="helpId" placeholder="">
                    <br>
                    </div>
                   <div class="col">
                    <label for="images{{$product->id}}" class="form-label">مجموعة الصور</label>
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
                    <label class="btn btn-primary btn-sm shadow-sm" for="images{{$product->id}}"><i class="fas fa-images"></i> أختر الصور</label>
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
          <h5 class="modal-title" id="exampleModalLabel">Delete Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_image')}}" method="post">
            @csrf
            <input type="hidden" name="image_id" value="{{$img->id}}">
        <div class="modal-body">
            Are You Sure to Delete This Image?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  @endforeach