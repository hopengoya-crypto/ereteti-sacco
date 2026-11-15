<?php
$page_title = 'Our Routes';
include 'includes/header.php';
?>
    <main>
      <label for="route-search">Find a route or a centre</label>
      <input type="search" id="route-search" placeholder="e.g. Kibiko">
      <p id="route-count" aria-live="polite"></p>
    </main>
    <?php include 'includes/footer.php'; ?>