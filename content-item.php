<p>商品名: <?php the_title(); ?></p>

<?php $price = get_post_meta(get_the_ID(), '価格', true); ?>
<?php $publisher = get_post_meta(get_the_ID(),'出版社',true);?>
<dl class="table">
  <?php if($price !== ''): ?>
  <dt>価格</dt>
   <dd><?php echo number_format($price); ?>円</dd>
  <?php endif; ?>
  <?php if($piblisher !== ''): ?>
  <dt>出版社</dt>
   <dd><?php echo esc_html($publisher); ?></dd>
  <?php endif; ?>
</dl>