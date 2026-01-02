<div class="language-switcher relative group">
  <button type="button" class="lang-trigger flex items-center pl-3 lg:es:pl-1.5 py-4 lg:py-5 gap-1">
    <svg class="size-7 text-secondary-50/80 group-hover:text-brand-100"><use href="#world"/></svg>
    <svg class="size-5 text-brand-100 lg:group-hover:rotate-180 [&.open]:rotate-180 transition-transform"><use href="#chevron-down"/></svg>
  </button>
  <ul class="lang-options absolute top-full left-0 min-w-max w-full space-y-1 p-2 rounded-lg bg-white border border-surface-300 opacity-0 pointer-events-none lg:group-hover:opacity-100 [&.open]:opacity-100 lg:group-hover:pointer-events-auto [&.open]:pointer-events-auto transition-opacity">
    <?php
      $availableLanguages = $config['languages']['available'];
      $defaultLanguage = $config['languages']['default'];
      $currentPath = $_SERVER['REQUEST_URI'];

      foreach ($availableLanguages as $lang):
        $langUrl = getLanguageSwitchUrl($currentPath, $currentLang, $lang, $defaultLanguage);
    ?>
      <li>
        <?php if ($lang === $currentLang): ?>
          <span class="block text-center p-2 rounded-sm bg-brand-100 text-secondary-100">
            <?= $config['languages']['names'][$lang] ?>
          </span>
        <?php else: ?>
          <a class="block text-center p-2 rounded-sm active:bg-surface-100 lg:hover:bg-surface-100 active:text-brand-100 lg:hover:text-brand-100 transition-colors" href="<?= $langUrl ?>" title="<?= $config['languages']['names'][$lang] ?>">
            <?= $config['languages']['names'][$lang] ?>
          </a>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
