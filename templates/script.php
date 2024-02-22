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

  if(window.location.href.includes('month=')) {
    window.scrollTo(0, document.querySelector('.calendar-headline').getBoundingClientRect().y);
  }
</script>
