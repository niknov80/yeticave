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
  <div class="container">
    <section class="lots">
      <h2>История просмотров</h2>
      <ul class="lots__list">


      <?php foreach ($template_data['visited_lots_id'] as $visited_lots_id): ?>
        <?php foreach ($template_data['announcements'] as $key => $item): ?> 
         
            <?php if ($item['id'] == $visited_lots_id): ?>       
        
            <li class="lots__item lot">
              <div class="lot__image">
                <img src="<?=htmlspecialchars($item['img']); ?>" width="350" height="260" alt="Сноуборд">
              </div>
              <div class="lot__info">
                <span class="lot__category"><?=htmlspecialchars($item['category']); ?></span>
                <h3 class="lot__title"><a class="text-link" href="lot.html"><?=htmlspecialchars($item['title']); ?></a></h3>
                <div class="lot__state">
                  <div class="lot__rate">
                    <span class="lot__amount">Стартовая цена</span>
                    <span class="lot__cost"><?=get_cost(htmlspecialchars($item['price'])); ?><b class="rub">р</b></span>
                  </div>
                  <div class="lot__timer timer">
                    <?=$template_data['timer']; ?>
                  </div>
                </div>
              </div>
            </li>
          <?php endif; ?>
          <?php endforeach; ?>
        <?php endforeach; ?>




      </ul>
    </section>
    <ul class="pagination-list">
      <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
      <li class="pagination-item pagination-item-active"><a>1</a></li>
      <li class="pagination-item"><a href="#">2</a></li>
      <li class="pagination-item"><a href="#">3</a></li>
      <li class="pagination-item"><a href="#">4</a></li>
      <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
    </ul>
  </div>
</main>