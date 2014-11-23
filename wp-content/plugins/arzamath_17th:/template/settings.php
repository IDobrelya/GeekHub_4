<div class="wrap">
<h2>Arzamath_17th: setting page</h2>
<form method="post" action="options.php">
    <?php @settings_fields('arzamath_settings_group'); ?>
    <?php @do_settings_fields('arzamath_settings_group'); ?>
    <?php @do_settings_sections('arzamath_template'); ?>

    <?php @submit_button(); ?>
</form>
</div>