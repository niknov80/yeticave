<main>
  <nav class="nav">
    <ul class="nav__list container">
        <?php foreach ($template_data['category'] as  $value): ?>                
            <li class="nav__item">
                <a href="all-lots.html"><?=htmlspecialchars($value); ?></a>
            </li>
        <?php endforeach; ?>      
    </ul>
  </nav>
  <section class="lot-item container">
    <h2><?=htmlspecialchars($template_data['lot']['lot-name']); ?></h2>
    <div class="lot-item__content">
      <div class="lot-item__left">
        <div class="lot-item__image">
          <img src="img/<?=htmlspecialchars($template_data['lot']['path']); ?>" width="730" height="548" alt="Сноуборд">
        </div>
        <p class="lot-item__category">Категория: <span><?=htmlspecialchars($template_data['lot']['category']); ?></span></p>
        <p class="lot-item__description"><?=htmlspecialchars($template_data['lot']['message']); ?></p>
      </div>
      <div class="lot-item__right">
        <div class="lot-item__state">
          <div class="lot-item__timer timer">
            <?=htmlspecialchars($template_data['lot']['lot-date']); ?>
          </div>
          <div class="lot-item__cost-state">
            <div class="lot-item__rate">
              <span class="lot-item__amount">Текущая цена</span>
              <span class="lot-item__cost"><?=htmlspecialchars($template_data['lot']['lot-rate']); ?></span>
            </div>
            <div class="lot-item__min-cost">
              Мин. ставка <span><?=htmlspecialchars($template_data['lot']['lot-step']); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>