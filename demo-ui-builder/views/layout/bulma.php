<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UI Builder demo: Bulma</title>

  <!-- PureCss -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
  <!-- Bulma -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
  <link rel="stylesheet" href="/bulma/badge.min.css">
  <link rel="stylesheet" href="/bulma/checkbox.min.css">
  <link rel="stylesheet" href="/bulma/radio.min.css">
  <link rel="stylesheet" href="/bulma/switch.min.css">
  <link rel="stylesheet" href="/bulma/styles.css">

  <?= $this->htmlHeader ?>
</head>

<body>
  <div>
    <main>
      <?= $this->pageContent ?>
    </main>
  </div>

  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js"></script>
  <script src="/bulma/scripts.js"></script>
  <!--<script src="/bulma/dialog.js"></script>-->

  <?= $this->htmlFooter ?>

</body>
</html>
