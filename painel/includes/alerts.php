<?php if( array_key_exists("success", $_GET) ): ?>
<!-- Caso adicione produto com sucesso -->
<div class="notification is-success">
  <button class="delete"></button>
  <i>Produto adicionado com sucesso! <span class="fa fa-check"></span></i>
</div>
<?php endif; ?>

<!-- Faz com que os alertas desapareçam -->
<script>
    $(function(){
       setTimeout(function(){
           $(".notification").slideUp("slow");
       }, 3000);
    });
</script>

<br>