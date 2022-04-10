 
  
  <!-- Modal -->
  <div class="modal fade" id="deleteCat{{$cat->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">مسح الفئة</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_cat')}}" method="post">
            @csrf
            <input type="hidden" name="cat_id" value="{{$cat->id}}">
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