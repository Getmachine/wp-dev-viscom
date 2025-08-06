    <!------------------------------------------------------------ footer -->
    <footer class="footer">
      <div class="inr">
        <div class="wrap">
          <h1><a href="<?php echo esc_url(home_url("/")) ?>">VISUAL COMMUNICATION</a></h1>

        </div>
        <div class="wrap-right">
          <div class="viewport-dimensions">
            <p>幅: <span id="viewport-width">0</span>px</p>
            <p>高さ: <span id="viewport-height">0</span>px</p>
          </div>
          <p><a href="<?php echo esc_url(home_url('/')); ?>privacy/" <?php if (is_page('privacy')) echo ' class="current"'; ?>>PRIVACY POLICY</a></p>
          <div class="copyright">&copy;VISCOM</div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>