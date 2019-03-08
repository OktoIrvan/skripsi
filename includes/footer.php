<!-- Loading Javascript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= BASE_URI; ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="<?= BASE_URI; ?>assets/plugins/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Loading Core... -->
<?php   $uri = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
<?php   $uri = $uri == 'skripsi' ? 'index' : basename($uri, '.php'); ?>
    <script type="text/javascript" src="<?php echo $uri; ?>.js"></script>
</body>
</html>