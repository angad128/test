  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('js/sb-admin-2.min.js')}}"></script>

  <script src="{{URL::to('ckeditor/ckeditor.js')}}"></script>
 <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ), {
      // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    } )
    .then( editor => {
      window.editor = editor;
    } )
    .catch( err => {
      
    } );
</script>
<script type="text/javascript">
  function passId(val){
    $(".modal-footer #deleteNum").val(val);
  }
</script>
