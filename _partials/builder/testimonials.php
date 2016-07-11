<?php $image = get_field('testimonial_image');
  if (!empty($image)) : ?>
  <div class="testimonial-image-container">
    <img src="<?php echo $image[url] ?>" alt="<?php echo $image[alt] ?>" class="testimonial-image" />
  </div>
<?php else : ?>
  <div class="quotation-mark">
    <span class="quote-icon">"</span>
  </div>
<?php endif; ?>
<blockquote><?php the_content(); ?></blockquote>
<div class='testimonial-author'>
  - <?php echo get_field('testimonial_author') ?>
</div>
