<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
    <p><?php echo $news_item['text'] ?></p>
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>

    <a href="news/create">Create News</a><br/>