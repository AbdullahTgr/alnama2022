

   
  
  <!-- Modal -->
  <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> أضافة شريك</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="userForm" enctype="multipart/form-data" action="{{route('admin.save_partner')}}" method="post">

        <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input required type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="phone" class="form-label">الهاتف</label>
                    <input  required type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="link" class="form-label">الرابط</label>
                    <input  required type="text" class="form-control" name="link" id="link" aria-describedby="helpId" placeholder="">
                   </div>  
                   <div class="mb-3">
                    <label for="photo" class="form-label"> الصورة</label>
                    <br>
                    <img id="pic" class="img-fluid">
                    <input   accept="image/png, image/gif, image/jpeg"  oninput="pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="photo" id="photo" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photo"><i class="fas fa-image"></i> اختر صورة</label>
                   </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">غلق</button>
          <button type="submit" class="btn btn-primary">انشاء</button>
        </div>
    </form>

      </div>
    </div>
  </div>