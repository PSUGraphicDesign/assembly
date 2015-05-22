    <footer>
      <section>
        <article>

         <div class="column quarter">
            <h5>Many Thanks</h5>
            <? snippet('thanks', ['year' => AB::contextual_year()]) ?>
          </div>
          <div class="column half sponsors">
            <h5>Sponsors</h5>
            <? snippet('sponsors', ['year' => AB::contextual_year()]) ?>
          </div>
          <div class="column quarter social">
            <h5>Find Us</h5>
            <?= $site->social_links()->kirbytext() ?>
          </div>

        </article>
      </section>
    </footer>
  </body>
</html>
