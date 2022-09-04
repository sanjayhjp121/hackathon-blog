<?php
include 'partials/header.php';

// fetch featured post from database
$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);

// fetch 9 posts from posts table
$query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 9";
$posts = mysqli_query($connection, $query);
?>


<!-- show featured post if there's any -->
<?php if (mysqli_num_rows($featured_result) == 1) : ?>
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/<?= $featured['thumbnail'] ?>">
            </div>
            <div class="post__info">
                <?php
                // fetch category from categories table using category_id of post
                $category_id = $featured['category_id'];
                $category_query = "SELECT * FROM categories WHERE id=$category_id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                ?>
                <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $featured['category_id'] ?>" class="category__button"><?= $category['title'] ?></a>
                <h2 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
                <p class="post__body">
                    <?= substr($featured['body'], 0, 300) ?>...
                </p>
                <div class="post__author">
                    <?php
                    // fetch author from users table using author_id
                    $author_id = $featured['author_id'];
                    $author_query = "SELECT * FROM users WHERE id=$author_id";
                    $author_result = mysqli_query($connection, $author_query);
                    $author = mysqli_fetch_assoc($author_result);

                    ?>
                    <div class="post__author-avatar">
                        <img src="./images/<?= $author['avatar'] ?>">
                    </div>
                    <div class="post__author-info">
                        <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                        <small>
                            <?= date("M d, Y - H:i", strtotime($featured['date_time'])) ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<!--====================== END OF FEATURED ====================-->



<div class="banner">
        <h2 class="bloggo">Bloggo</h2>
    </div>

    <section class="search__bar">
        <form action="" class="container search__bar-container">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="" placeholder="Search" class="search-text">
            </div>
            <button type="submit" class="btn">Go</button>
        </form>
    </section>

    <!-- END OF SEARCH -->

    <section class="category__buttons">
        <div class="category__buttons-container">
            <a href="" class="category__button">Art</a>
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Science & Technology</a>
            <a href="" class="category__button">Food</a>
            <a href="" class="category__button">Music</a>
        </div>
    </section>
    <!-- show list -->
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/blog-1.jpg">
            </div>
            <div class="post__info">
                <a href="category-posts.html" class="category__button">TECH</a>
                <h2 class="post__title">Hackers caused a massive traffic jam in Moscow using a ride-hailing app</h2>
                <p class="post__body">
                    Hackers caused a major traffic jam in Moscow after exploiting the Russian ride-hailing app, Yandex Taxi, to summon dozens of taxis to the same location at the same time (via Vice). The attack occurred on September 1st and had traffic heading towards Kutuzovsky Prospect — an already busy boulevard — stuck at a standstill.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar2.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By Emma Roth </h5>
                        <small>June 23, 2022 - 13:48</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF FEATURED -->

<section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog-2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">The iPhone 14 Pro could bring back the old battery percentage indicator</a>
                    </h3>
                    <p class="post__body">
                        The iPhone 14 Pro is rumored to revive the classic battery percentage indicator (yes, the one with the percentage and the battery level icon side-by-side), according to an alleged mockup of the device’s interface shared with MacRumors.
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
                    <img src="./images/blog-3.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Meta’s chip deal with Qualcomm may reflect its unrealized VR ambitions</a>
                    </h3>
                    <p class="post__body">
                        Qualcomm and Meta have signed a multi-year agreement promising to team up on custom versions of Qualcomm's Snapdragon XR chips for the "future roadmap of Quest products" and "other devices," as Mark Zuckerberg put it.
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
           <h2>Create Own Blog</h2>
            <textarea name="" class="texteditor" id="editor" cols="50" rows="40" placeholder="Write your own Blog here-"  ></textarea>

           </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog-4.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Google Maps and search will label health clinics that provide abortions</a>
                    </h3>
                    <p class="post__body">
                        Google Maps and Search will now explicitly label healthcare facilities that provide abortion services, TechCrunch reported. It’s another change made in the aftermath of the Supreme Court decision to overturn Roe v. Wade and end federal protection for abortion.
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
                    <img src="./images/blog-5.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Microsoft confirms new Xbox Game Pass Friends & Family plan and its pricing</a>
                    </h3>
                    <p class="post__body">
                        After a leak revealed Xbox Game Pass Friends & Family branding over the weekend, Microsoft has gone official with its new plan and revealed its pricing in Ireland and Colombia. 
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
                    <img src="./images/blog-6.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">A new ChromeOS gaming overlay puts touch-based Android games on your PC</a>
                    </h3>
                    <p class="post__body">
                        In a move that feels a little late, coming years after Chromebooks got access to Android apps and games, Google says that ChromeOS users will get access to an “early Alpha” of game controls optimized for certain touchscreen-only games. 
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
                    <img src="./images/blog-7.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Nvidia Broadcast support will make virtual green screens easier in OBS Studio</a>
                    </h3>
                    <p class="post__body">
                        Popular open-source streaming software OBS Studio is getting some new features, including AI-powered virtual backgrounds from Nvidia Broadcast that allow you to change your virtual environment without using a green screen.
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
                    <img src="./images/blog-8.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">‘Large’ hydrogen leak foils NASA’s schedule for Artemis I mission</a>
                    </h3>
                    <p class="post__body">
                        NASA will not attempt to launch its Space Launch System in the coming days, the agency announced today, skipping potential launch windows on Monday and Tuesday. The announcement comes after two scrubbed launch attempts of the massive rocket.
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
                    <img src="./images/blog-4.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Google Maps and search will label health clinics that provide abortions</a>
                    </h3>
                    <p class="post__body">
                        Google Maps and Search will now explicitly label healthcare facilities that provide abortion services, TechCrunch reported. It’s another change made in the aftermath of the Supreme Court decision to overturn Roe v. Wade and end federal protection for abortion.
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




<!--  -->
<!--====================== END OF CATEGORY BUTTONS ====================-->




<?php

include 'partials/footer.php';

?>