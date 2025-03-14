<?php
/**
 * Index
 * 
 * @package Personal Website
 * 
 */
?>

<?php
  get_header();
  get_template_part('partials/main', 'head');
  ?>
    <!-- About Me -->
    <section id="about-me" class="my-10 lg:max-w-[70%]">
       <!-- About Me Title -->
      <div class="relative">
        <img class="absolute -top-3 -left-5 h-[120px] w-[160px] lg:-top-5 lg:-left-8 lg:h-[140px] lg:w-[180px]" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/components/dialogue-box.png" alt="Dialogue Box">
        <h1 class="text-2xl font-bold font-primary text-black translate-x-[10px] underline transform -rotate-3 md:text-3xl lg:text-4xl">About Me</h1>
      </div>

      <?php echo do_shortcode('[embed_about_me]'); ?>
    </section>

  <?php
  get_template_part('partials/main', 'foot');
  get_footer();
?>