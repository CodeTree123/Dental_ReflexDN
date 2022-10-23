 <!-- footer -->
 <div class="footer p-3">
        <div class="row container-fluid">
            <p class="text-center my-auto">
                © Developed By Hospitalin
            </p>
        </div>
    </div>
    <!-- footer end-->





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script> 

    <!-- <script src="{{asset ('assets/js/app.js')}}"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="{{ asset ('assets/js/chosen.jquery.js')}}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    

    <script>
        $(".multi").select2({
            // maximumSelectionLength: 2
        });
    </script>
    <script>
        $(document).ready(function(){
            $(document).on('click', '.delete-Prescription',function(){
                var deletePrescriptionId = $(this).val();
                // alert(deletePrescriptionId);
                $("#del-Prescription").modal('show');
                $('#del-Prescription-id').val(deletePrescriptionId);
            });
        });
    </script>
    <script src="{{ asset ('assets/js/bs-stepper.js')}}"></script>
    <script src="{{ asset ('assets/js/main.js')}}"></script>
 
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>


<script type="text/javascript" src="{{ asset ('assets/js/slick.js')}}"></script>
</body>

</html>

  


