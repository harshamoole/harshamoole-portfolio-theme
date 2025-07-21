<?php get_header(); ?>

<main style="padding: 0 20px;">
    
    <!-- Hero Section -->
    <section style="margin-top: 30px;">
        <h2>Welcome to My Portfolio</h2>
        <p>Hi! I’m Harsha, a passionate B.Tech student in Data Science & AI. I build tools using Python, ML, and WordPress!</p>
    </section>

    <!-- About Section -->
    <section style="margin-top: 40px;">
        <h2>👤 About Me</h2>
        <p>
            I’m a final-year student specializing in Data Science and Artificial Intelligence. I love combining automation with web technologies.
            This theme is part of my open-source learning journey using WordPress, PHP, and Git.
        </p>
    </section>

    <!-- Projects Section -->
    <section style="margin-top: 40px;">
        <h2>🧑‍💻 Projects</h2>
        <ul>
            <li><strong>AI Web Scraper</strong> – Scrapes and displays website content using Python + Streamlit</li>
            <li><strong>Face Detection System</strong> – Real-time webcam-based face detection using OpenCV</li>
            <li><strong>QR Code Generator</strong> – Generates downloadable QR codes from user input</li>
        </ul>
    </section>

    <!-- Latest Blog Posts -->
    <section style="margin-top: 40px;">
        <h2>📰 Blog Posts</h2>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile;
        else :
            echo '<p>No blog posts found.</p>';
        endif;
        ?>
    </section>

</main>

<?php get_footer(); ?>
