<script>
  document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('button-ui');
    button.addEventListener('click', (event) => {
      const select = document.getElementById('select-ui');
      window.location.href = '/?lib=' + select.value;
    });
  });
</script>
