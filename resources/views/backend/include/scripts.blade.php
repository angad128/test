  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('js/sb-admin-2.min.js')}}"></script>

<script type="text/javascript">
$(function(){
  $(".open-modal").click(function(){
     $('#deleteid').val($(this).data('id'));
    $("#confirmModal").modal("show");
  });
});
</script>

  <script src="{{URL::to('https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js')}}"></script>
 <script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
      .then( editor => {
        console.log( editor );
      } )
      .catch( error => {
        console.error( error );
    } );
</script>