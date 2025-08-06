        <aside class="sidebar-area">
          <ul>
            <li>
              <h2>ARCHIVES</h2>
              <ul>
                <?php wp_get_archives('type=yearly'); ?>
              </ul>
            </li>
            <li>
              <h2 class="en">CATEGORIES</h2>
              <ul>
                <?php wp_list_categories('title_li='); ?>
              </ul>
            </li>
          </ul>
        </aside>