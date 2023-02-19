 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('./dist/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('./dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('./dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>


 <!-- Page level plugins -->
 <script src="{{ asset('./dist/vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('./dist/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>



 {{-- ckeditor --}}
 <script>
     ClassicEditor
         .create(document.querySelector('#sinopsiseditor'))
         .catch(error => {
             console.error(error);
         });

     $('#dataTable').DataTable({
         info: false,
         showing: false,
     });
 </script>
