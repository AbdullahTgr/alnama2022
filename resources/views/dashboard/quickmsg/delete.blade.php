 
  
  <!-- Modal -->
  <div class="modal fade" id="deletemsg{{$cat->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true" style="direction: rtl;text-align:right">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">حذف الرسالة</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_msg')}}" method="post">
            @csrf
            <input type="hidden" name="msg_id" value="{{$cat->id}}">
            <div class="modal-body">
              هل تريد حذف العنصر؟
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لا</button>
            <button type="submit" class="btn btn-danger">نعم</button>
          </div>
          </form>
      </div>
    </div>
  </div>