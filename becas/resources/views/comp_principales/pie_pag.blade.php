<footer>
    <img height="200px" src="{!! asset ('images/abajologo.png') !!}" width="100%">
    </img>
</footer>
<script>
    $(document).ready(function(){
 $("#search").keyup(function(){
 _this = this;
 
 $.each($("#tablabusqueda tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>
