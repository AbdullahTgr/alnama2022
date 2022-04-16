 
  
  <!-- Modal -->
  <div class="modal fade" id="editCat{{$cat->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">تعديل القسم</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" class="userForm" action="{{route('admin.update_cat')}}" method="post">
            @csrf
        <div class="modal-body">
                <div class="mb-3">
                    <input type="hidden" name="cat_id" value="{{$cat->id}}">
                    <label for="ar_name" class="form-label">الاسم العربي</label>
                    <input type="text" class="form-control" name="ar_name" id="ar_name" aria-describedby="helpId" value="{{$cat->ar_name}}">
                   </div>

                   <div class="mb-3">
                    <label for="en_name" class="form-label">الاسم الانجليزي</label>
                    <input type="text" class="form-control" name="en_name" id="en_name" aria-describedby="helpId" value="{{$cat->en_name}}">
                   </div>
                   <div class="mb-3">
                    <label for="fr_name" class="form-label">الاسم الفرنسي</label>
                    <input type="text" class="form-control" name="fr_name" id="fr_name" aria-describedby="helpId" value="{{$cat->fr_name}}">
                   </div>
                   <div class="mb-3">
                    <label for="photoEdit{{$cat->id}}" class="form-label">صوره العرض</label>
                    <br>
                    <img id="e_pic" src="{{asset( str_replace('public' , 'storage' ,$cat->photo))}}" class="img-fluid">
                    <input  accept="image/png, image/gif, image/jpeg"   oninput="e_pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="photo" id="photoEdit{{$cat->id}}" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photoEdit{{$cat->id}}"><i class="fas fa-image"></i> اختر الصورة</label>
                   </div>

                   <div class="mb-3">
                    <label for="ar_description" class="form-label">الوصف العربي</label>
                    <textarea   class="form-control" name="ar_description" id="ar_description" aria-describedby="helpId">{{str_replace('<br />', '', $cat->ar_description)}}</textarea>
                   </div>
                   <div class="mb-3">
                    <label for="en_description" class="form-label">الوصف الانجليزي</label>
                    <textarea   class="form-control" name="en_description" id="en_description" aria-describedby="helpId" >{{str_replace('<br />', '', $cat->en_description)}}</textarea>
                </div>
                <div class="mb-3">
                  <label for="fr_description" class="form-label">الوصف الفرنسي</label>
                  <textarea   class="form-control" name="fr_description" id="fr_description" aria-describedby="helpId" >{{str_replace('<br />', '', $cat->fr_description)}}</textarea>
              </div>
                   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
          <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
        </form>
      </div>
    </div>
  </div>