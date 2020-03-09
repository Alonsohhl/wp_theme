<?php get_header();?>
</body>

<script>

document.addEventListener('aos:in:super-duper', ({ detail }) => {
  console.log('animated in', detail);
});

AOS.init({
  duration: 1200,
});

document.addEventListener('aos:out', ({ detail }) => {
  console.log('animated out', detail);
});


window.addEventListener('load', (event) => {
  console.log('page is fully loaded');
  window.scrollTo(0,0);

  // setTimeout(function() { window.scrollTo(0, 0); }, 100);


});

</script>
</html>
