    <footer>

      <section class="credits">
        <article>
          <div class="column quarter mobile-half partners">
            <a href="http://www.pdx.edu/the-arts/">
             <img src="<?= AB::asset('images', 'PSU.png') ?>">
            </a>
          </div>
          <div class="column quarter mobile-half partners">
            <a href="http://psusocialpractice.org">
              <img src="<?= AB::asset('images', 'PSUSOC.png') ?>">
            </a>
          </div>
          <div class="column quarter mobile-half partners">
            <a href="http://magnumphotos.com">
              <img src="<?= AB::asset('images', 'Magnum.png') ?>">
            </a>
          </div>
          <div class="column quarter mobile-half partners">
            <a href="http://www.pps.k12.or.us/schools/king/">
              <img src="<?= AB::asset('images', 'KSMoCA.png') ?>">
            </a>
          </div>
        </article>
        <? snippet('sponsors') ?>
      </section>

      <section class="last">
        <article>
          <div class="column half">
            <div class="copyright">
              <?= date('Y') ?> Assembly
            </div>
          </div>
          <div class="column half bottom">
            <div class="author">
              <a href="http://psusocialpractice.org">PSU Social Practice</a>
            </div>
          </div>
        </article>
      </section>
    </footer>
  </body>
</html>
