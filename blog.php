<?php
include 'partials/header.php';


// fetch all posts from posts table
$query = "SELECT * FROM posts ORDER BY date_time DESC";
$posts = mysqli_query($connection, $query);
?>



<section class="search__bar" style="display: none;">
    <form class="container search__bar-container" action="<?= ROOT_URL ?>search.php" method="GET">
        <div>
            <i class="uil uil-search"></i>
            <input type="search" name="search" placeholder="Search">
        </div>
        <button type="submit" name="submit" class="btn">Go</button>
    </form>
</section>
====================== END OF SEARCH ====================







<section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article> 
           <article class="create-blog">
           
            <textarea name="" class="texteditor" id="editor" cols="50" rows="40" placeholder="Write your own Blog here-"  ></textarea>

           </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article> 
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article> 
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article> 
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article> 
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article> 
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam placeat magnam ducimus ea odit? Incidunt harum adipisci odio ipsam architecto? Obcaecati quaerat rem inventore?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: Priyanshu Shukla</h5>
                            <small>June 25, 2022 - 10:05</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
<!--====================== END OF POSTS ====================-->




<section class="category__buttons">
    <div class="container category__buttons-container">
        <?php
        $all_categories_query = "SELECT * FROM categories";
        $all_categories = mysqli_query($connection, $all_categories_query);
        ?>
        <?php while ($category = mysqli_fetch_assoc($all_categories)) : ?>
            <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>" class="category__button"><?= $category['title'] ?></a>
        <?php endwhile ?>
    </div>
</section>
<!--====================== END OF CATEGORY BUTTONS ====================-->




<?php
include 'partials/footer.php';

?>