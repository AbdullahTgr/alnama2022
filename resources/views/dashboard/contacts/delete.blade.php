 
  
  <!-- Modal -->
  <div class="modal fade" id="deleteProduct{{$contact->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete contact</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_contact')}}" method="post">
            @csrf
            <input type="hidden" name="contact_id" value="{{$contact->id}}">
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