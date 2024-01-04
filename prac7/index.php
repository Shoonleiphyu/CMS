<?php
    session_start();
    include('header.php');
?>

<section>
    <h2>Recent Blog Posts</h2>
    <?php
        // Display recent blog posts using a loop
        $blogPosts = [
            [
                'title' => '10 Tips for a Shiny Car',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in ligula auctor, venenatis justo id, fermentum turpis.',
                'author' => 'Admin',
                'post_date' => '2022-03-01 10:30:00',
            ],
            [
                'title' => 'Choosing the Right Car Wash Service',
                'content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'author' => 'Admin',
                'post_date' => '2022-03-05 14:45:00',
            ],
            // Add more blog posts as needed
        ];

        foreach ($blogPosts as $post) {
            echo "<div class='blog-post'>";
            echo "<h3>{$post['title']}</h3>";
            echo "<p>{$post['content']}</p>";
            echo "<p class='meta'>By {$post['author']} on {$post['post_date']}</p>";
            echo "</div>";
        }
    ?>
</section>

<?php
    include('footer.php');
?>
