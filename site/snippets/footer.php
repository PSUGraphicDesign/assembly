    <footer>
      <section>
        <article>

         <div class="column quarter">
            <h5>Many Thanks</h5>
            <?php /* <? snippet('thanks', ['year' => AB::contextual_year()]) ?> */ ?>
          </div>

          <div class="column half sponsors">
            <h5>Sponsors</h5>
            <?php /* <? snippet('sponsors', ['year' => AB::contextual_year()]) ?> */ ?>
             
              <ul>
                <? foreach ( $sponsors as $sponsor ) { ?>
         
                  <h4><?= $sponsors->sponsor()->html() ?></h4>
          
                <? } ?>

              </ul>
          </div>

          <div class="column quarter social">
            <h5>Find Us</h5>
            <?= $site->social_links()->kirbytext() ?>
          </div>  

        
          <div class="column half">
            <div class="thebottom">2015 Assembly</div>
          </div>

          <div class="column half">
            <div class="thebottomright"><a href="http://psusocialpractice.org">PSU Social Practice</a>
            </div>
          </div>


        </article>
      </section>


    </footer>
  </body>
</html>
