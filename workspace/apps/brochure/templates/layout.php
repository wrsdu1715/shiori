<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
      @import url('https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:400,500,700&display=swap');
    </style>
  </head>
  <body>
    <?php include('common.php'); ?>
    <section class="main">
      <?php echo image_tag('main.jpg') ?>
    </section>
    <?php echo $sf_content ?>
    <?php include_javascripts() ?>
  </body>
</html>
