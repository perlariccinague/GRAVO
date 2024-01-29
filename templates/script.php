<script>
  if(document.querySelector('.error')) {
    const errorElement = document.querySelector('.error');
    setTimeout(function() {
      window.scrollTo({
        top: errorElement.offsetTop-100,
        left: errorElement.offsetLeft,
        behavior: 'smooth'
      });
    }, 150)
  }
</script>
