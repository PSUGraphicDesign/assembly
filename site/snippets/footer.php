    <footer>
      <section>
        <article>
          <div class="column quarter">
            <h4>Many Thanks</h4>
            <? snippet('thanks', ['year' => AB::contextual_year()]) ?>
          </div>
          <div class="column half sponsors">
            <h4>Sponsors</h4>
            <? snippet('sponsors', ['year' => AB::contextual_year()]) ?>
          </div>
          <div class="column quarter social">
            <h4>Find Us</h4>
            <?= $site->social_links()->kirbytext() ?>
          </div>
        </article>
      </section>
    </footer>
  </body>
</html>
