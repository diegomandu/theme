<div class="entry clearfix">
    <?php
    
        if( has_post_thumbnail() ){
            ?>
            <div class="entry-image">
                <a href="#">
                    <?php 
                    
                    the_post_thumbnail( 'full', [
                         'class' => 'image_fade' 
                    ] );     
                    ?>
                </a>
            </div>
            <?php
        }
    
    ?>
   
    <div class="entry-title">
        <h2>
            <a href="single.html">
                <?php the_title(); ?>
            </a>
        </h2>
    </div>
    <ul class="entry-meta clearfix">
        <li>
            <i class="icon-calendar3"></i> 10th February 2014
        </li>
        <li>
            <a href="#">
                <i class="icon-user"></i>
                admin
            </a>
        </li>
        <li>
            <i class="icon-folder-open"></i>
            <a href="#">General</a>, <a href="#">Media</a>
        </li>
        <li>
            <a href="#">
            <i class="icon-comments"></i>
            13 Comments
            </a>
        </li>
    </ul>
    <div class="entry-content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
            asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est
            quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis
            rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat
            atque vitae voluptatem libero at eveniet veritatis ab facere.
        </p>
        <a href="#" class="more-link">Read More</a>
    </div>
</div>
                