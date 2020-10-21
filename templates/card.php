<div class="col-lg-3 cardIndividual p-0" <?php post_class() ?>>
                    <div class="cardHeader">
                        <div class="cardDisplay">
                            <img src= <?php echo get_template_directory_uri()."/assets/icons/clock-fill.svg"?>>
                            <p>Hoje!</p>
                        </div>
                        <a href="#">
                            <img class="cardHeaderImg" src=<?php the_post_thumbnail('thumbnail')?>>
                        </a>
                    </div>

                    <div class="card-body cardBody">
                        <h1><?php the_title(); ?></h1>
                        <h2><?php the_excerpt(); ?></h2>
                        <h3><?php echo get_the_date(); ?></h3>
                        <a href="#" class="mt-3">Saiba Mais
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                    </div>
                </div>