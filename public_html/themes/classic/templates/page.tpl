{extends file=$layout}

{block name='content'}

  <section id="main">

    {block name='page_header_container'}
      {block name='page_title' hide}
        <header class="page-header">
          <h1>{$smarty.block.child}</h1>
        </header>
      {/block}
    {/block}

    {block name='page_content_container'}
      <div id="content" class="page-content card card-block">
        {block name='page_content_top'}{/block}
        {block name='page_content'}
          <!-- Zawartość strony kontaktu -->
        {/block}
      </div>
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}

  </section>

  {block name='google_reviews_section'}
    <!-- Oddzielny blok dla opinii Google -->
    <section id="google-reviews" class="reviews-section">
      <div class="google-reviews-content">
        <iframe src="https://1569f588ae1d4fa6bca2dbef90cfc749.elf.site/" width="100%" height="410" style="position: relative; display: block; background-color: #fff !important; border-radius: 10px; border: 1px solid rgba(0, 0, 0, .125); box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);"></iframe>
      </div>
    </section>
  {/block}

{/block}
