<html>
    <head>
        <title> My test blog view </title>
    </head>

    <h2>Welcome to test blog</h2>
    
    <?php echo anchor("blog/comments", "test link title to blog-comments");?>
    <br/>
    
    <?php test_my_url_helper();?>
    <br/>
    
    page_title: <br/>
    <?= $page_title ?> <br/>
    message: <br/>
    <?= $message ?> <br/> <br/>

    todo list from data: <br/>
    <ul>
        <?php foreach ($todo_list as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

    
</html>