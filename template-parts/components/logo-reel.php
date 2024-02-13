<style>
.logo-reel {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-items: center;
  background-color: white;
}

.logo {
  flex: 1 0 calc(16.666% - 10px);
  margin: 5px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  opacity: 0;
  animation: fadeInLogo 0.5s ease forwards;
}

@keyframes fadeInLogo {
  to {
    opacity: 1;
  }
}

<?php if( have_rows('add_logo') ): ?>
  <?php $i = 0; ?>
  <?php while( have_rows('add_logo') ): the_row(); $i++; ?>
    .logo:nth-child(<?php echo $i; ?>) {
      animation-delay: <?php echo $i * (2.5 / count(get_field('add_logo'))); ?>s;
    }
  <?php endwhile; ?>
<?php endif; ?>
</style>

<div class="logo-reel">
  <?php if( have_rows('add_logo') ): ?>
    <?php while( have_rows('add_logo') ): the_row(); 
      $logo_image = get_sub_field('logo_to_be_added');
      $logo_url = esc_url($logo_image['url']);
    ?>
      <div class="logo" style="background-image: url('<?php echo $logo_url; ?>'); min-width: 150px; max-width: calc(16.666% - 10px); height: 6rem;">
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
