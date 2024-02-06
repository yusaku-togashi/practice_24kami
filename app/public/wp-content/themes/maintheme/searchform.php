<form action="<?php echo home_url(); ?>/">
  <label for="search" class="searchButton">検索</label>
  <input type="text" id="search" name="s" placeholder="キーワードを入力" value="<?php the_search_query(); ?>">
</form>