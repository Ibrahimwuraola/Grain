<script>
  document.querySelectorAll('.scroll-to-target').forEach(function(btn) {
    btn.addEventListener('click', function() {
      const target = document.querySelector(this.getAttribute('data-target'));
      if (target) {
        window.scrollTo({
          top: target.offsetTop,
          behavior: 'smooth'
        }); // Missing closing brace for the click event listener
  });
 </script>
