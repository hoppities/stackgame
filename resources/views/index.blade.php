<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Vuetify</title>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="description" content="<!-- DESCRIPTION -->">
    <meta name="keywords" content="<!-- KEYWORDS -->">
    <link rel="icon" type="image/png" href="public/favicon-32x32.png" sizes="32x32">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css">
    <script>
          window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>
        </script>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <script src="{{ elixir('js/app.js') }}" defer></script>
  </head>
  <body>
    <div id="app">
        <example></example>
    </div>
  </body>
</html>