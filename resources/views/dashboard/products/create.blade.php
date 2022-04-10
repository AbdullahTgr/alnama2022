 
  
  <!-- Modal -->
  <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">منتج جديد</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="userForm" enctype="multipart/form-data" action="{{route('admin.save_product')}}" method="post">

        <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="ar_name" class="form-label">الاسم العربي</label>
                    <input required type="text" class="form-control" name="ar_name" id="ar_name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="en_name" class="form-label">الاسم الانجليزي</label>
                    <input  required type="text" class="form-control" name="en_name" id="en_name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="fr_name" class="form-label">الاسم الفرنسي</label>
                    <input  required type="text" class="form-control" name="fr_name" id="fr_name" aria-describedby="helpId" placeholder="">
                   </div>

                   <div class="row">
                    <div class="col">
                      <label for="price" class="form-label">السعر</label>
                      <input  required type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="col">
                      <label for="quantity" class="form-label">الكمية</label>
                      <input  required type="number" step="0.01" class="form-control" name="quantity" id="quantity" aria-describedby="helpId" placeholder="">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="cat_id">القسم</label>
                    <select class="form-control" name="cat_id" id="cat_id">
                        @foreach ($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->en_name}}</option>
                        @endforeach
                    </select>
                  </div>

                   <div class="mb-3">
                    <label for="ar_description" class="form-label">الوصف العربي</label>
                    <textarea  required   class="form-control" name="ar_description" id="ar_description" aria-describedby="helpId" placeholder=""></textarea>
                   </div>
                   <div class="mb-3">
                    <label for="en_description" class="form-label">الوصف الانجليزي</label>
                    <textarea  required   class="form-control" name="en_description" id="en_description" aria-describedby="helpId" placeholder=""></textarea>
                   </div>

                   <div class="mb-3">
                    <label for="fr_description" class="form-label">الوصف الفرنسي</label>
                    <textarea  required   class="form-control" name="fr_description" id="fr_description" aria-describedby="helpId" placeholder=""></textarea>
                   </div>


                   
                   <div class="row">
                    <div class="col">
                      <label for="photo" class="form-label">صوره العرض</label>
                      <br>
                      <img id="pic" class="img-fluid">
                      <input   accept="image/png, image/gif, image/jpeg"  oninput="pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="photo" id="photo" style="display: none">
                      <br>
                      <label class="btn btn-primary btn-sm shadow-sm" for="photo"><i class="fas fa-image"></i> Choose Image</label>

                       <br>
                       <label for="video">رابط الفديوا</label>
                       <input   type="text"  class="form-control" name="video" id="video" aria-describedby="helpId" placeholder="">
                       <br>
                    </div>
                    <div class="col">
                      <label for="images" class="form-label">مجموعه صور</label>
                      <br>
                      <div id="pics" class="row">

                      </div>
                      <input  accept="image/png, image/gif, image/jpeg" oninput="preview(this,null)"  type="file" step="0.01" class="form-control" name="images[]" multiple id="images" style="display: none">
                      <br>
                      <label class="btn btn-primary btn-sm shadow-sm" for="images"><i class="fas fa-images"></i> اختر الصور</label>
                    </div>
                  </div>


             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-primary">اضافة</button>
        </div>
    </form>

      </div>
    </div>
  </div>