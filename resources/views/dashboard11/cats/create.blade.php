 
  
  <!-- Modal -->
  <div class="modal fade" id="addCat" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">اضف فئة جديدة</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" action="{{route('admin.save_cat')}}" method="post">

        <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="ar_name" class="form-label">الاسم العربي</label>
                    <input type="text" class="form-control" name="ar_name" id="ar_name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="en_name" class="form-label">الاسم الانجليزي</label>
                    <input type="text" class="form-control" name="en_name" id="en_name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="photoEdit" class="form-label">الصورة</label>
                    <br>
                    <img id="e_pic"  class="img-fluid">
                    <input  accept="image/png, image/gif, image/jpeg"   oninput="e_pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="photo" id="photoEdit" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photoEdit"><i class="fas fa-image"></i> اختر صورة</label>
                   </div>

                   <div class="mb-3">
                    <label for="ar_description" class="form-label">الوصف باللغة العربية</label>
                    <textarea   class="form-control" name="ar_description" id="ar_description" aria-describedby="helpId" placeholder=""></textarea>
                   </div>
                   <div class="mb-3">
                    <label for="en_description" class="form-label">الوصف باللغة الانجليزية</label>
                    <textarea   class="form-control" name="en_description" id="en_description" aria-describedby="helpId" placeholder=""></textarea>
                   </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="submit" class="btn btn-primary">انشاء</button>
        </div>
    </form>

      </div>
    </div>
  </div>