</main>

<footer class="bg-secondary-100 text-white <?= $hasSnapScroll ? 'snap-start' : '' ?>">
  <div class="block-content flex flex-col items-center py-8">
    <svg width="127" height="34" class="h-8 lg:h-12 w-auto"><use href="#disruptive-studio-logo"/></svg>
  </div>
  <div class="flex flex-col lg:flex-row-reverse lg:justify-between gap-4 items-center px-7 pb-7">
    <ul class="text-center lg:flex items-center gap-6">
      <?php # foreach([1,2,3] as $item): ?>
        <li>
          <a href="#" class="block text-white/70 hover:text-white active:text-white py-1 transition-colors"><?= $trans('footer.privacy') ?></a>
        </li>
      <?php # endforeach; ?>
    </ul>
    <small>&copy; <?= date("Y") ?> Disruptive Talent, Inc. All rights reserved</small>
  </div>
  <div class="p-7 border-t border-secondary-50 text-center">
    <small><?= $trans('footer.legal_small') ?></small>
    <small class="block"><a target="_blank" href="https://www.comparasoftware.com/software-de-mlm"><?= $trans('footer.affiliate_brand') ?></a> <?= $trans('footer.affiliate_text') ?> <a href="https://www.comparasoftware.com/afiliados"> <?= $trans('footer.affiliate_name') ?></a></small>
  </div>
  <?php require_once __DIR__ .'/../components/svgSprites.php'; ?>
</footer>
</body>
</html>
