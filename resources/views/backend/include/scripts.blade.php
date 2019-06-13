  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('js/sb-admin-2.min.js')}}"></script>

  <script src="{{URL::to('ckeditor/ckeditor.js')}}"></script>

<script type="text/javascript">
  function passId(val){
    $(".modal-footer #deleteNum").val(val);
  }

  function galleryFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";

    var editGalleryLink = document.getElementById("editGalleryLink");
    editGalleryLink.href = imgs.id+'/edit';

    document.getElementById("deleteGalleryLink").onclick = passId(imgs.id);
  }


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

