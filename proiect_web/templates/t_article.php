<div class="read-article container row">
    <section class="article-content col">
        <h1 class="fs-h1 text-accent300 title">Numele articolului</h1>
        <p class="article-author fs-date text-dark">Numele Prenumele</p>
        <div class="article-text">
            <p class="fs-text text-dark"></p>

         </div>
        <p class="fs-date article__date date-bottom"><date> <em>05 Decembrie 2023</em> </date> </p>
        <div class="btn-group">
            <a href="#" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Aproba</a>
            <a href="#comment-section" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Respinge</a>
        </div>


        <div class="comment-section col" id="comment-section">
            <h2 class="comment__title fs-h2 text-dark" id="comment-title">Comentarii</h2>

            <!-- Only for editors -->
            <div class="comment-form" id="comment-form">
                <textarea class="form__data fs-text b-dark text-dark" cols="40" rows="7" name="comment" id="comment-text" <?php ?> required>
                </textarea>
                <a class="comment__btn text-dark fs-link b-dark bg-neutral100" id="add-comment"> Adauga Feedback </a>
            </div>
            <!--  -->
        </div>
    </section>

    <aside class="latest-articles col">
        <h2 class="fs-h2 title aside-title">Ultimele articole</h2>

        <article class="col aside-article">
            <p class="category fs-category">Categorie</p>
            <h3 class="article__title fs-h3"><a href="#" class="article-link text-accent300">Titlu Articol</a></h3>
            <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
            <footer class="aside-footer col">
                <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                <!-- if editor -->
                <div class="btn-group">
                    <!-- If editor-->
                    <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>                </div>
            </footer>
        </article>
        <hr/>
        <article class="col aside-article">
            <p class="category fs-category">Categorie</p>
            <h3 class="article__title fs-h3"><a href="#" class="article-link text-accent300">Titlu Articol</a></h3>
            <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
            <footer class="aside-footer col">
                <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                <!-- if editor -->
                <div class="btn-group">
                    <!-- If editor-->
                    <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                </div>
            </footer>
        </article>
        <hr/>
        <article class="col aside-article">
            <p class="category fs-category">Categorie</p>
            <h3 class="article__title fs-h3"><a href="#" class="article-link text-accent300">Titlu Articol</a></h3>
            <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
            <footer class="aside-footer col">
                <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                <!-- if editor -->
                <div class="btn-group">
                    <!-- If editor-->
                    <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                </div>
            </footer>
        </article>
        <hr/>
    </aside>
</div>