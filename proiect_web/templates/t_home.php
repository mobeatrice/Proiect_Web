<div class="container col-row">
    <!-- If journalist
    <h1 class="page-title text-h1 text-dark">Articolele tale</h1>
    -->
    <!-- else if editor  -->
    <div class="home-header">
        <h1 class="page-title text-h1 text-dark">Articole</h1>

        <!-- If journalist add this button -->
        <a href="add_article.php" class="article_btn article_btn-gold fs-text text-accent300 bg-light b-accent300">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>

    <!-- If journalist  -->
    <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">Schite</h2>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Edit</a>
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ut incidunt vel fuga. Rerum, animi enim. Optio voluptatum modi saepe! Impedit asperiores corporis, quaerat mollitia excepturi distinctio? Illum, quasi incidunt?</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Edit</a>
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quam beatae deleniti quae sed eveniet fugit debitis id modi quas quisquam provident nisi repellat quidem animi non veritatis commodi perspiciatis.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Edit</a>
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo enim, deserunt laborum commodi repellendus harum voluptates dicta deleniti iure, omnis ad eaque dolorum ex, iste atque molestiae delectus debitis! Placeat.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Edit</a>
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
    </section>


    <!-- If editor or journalist-->
    <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">In asteptare..</h2>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <!-- If editor -->
                            <a href="#" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Aproba</a>
                            <a href="comment.php" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800 rejected">Respinge</a>
                            <!--  -->
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ut incidunt vel fuga. Rerum, animi enim. Optio voluptatum modi saepe! Impedit asperiores corporis, quaerat mollitia excepturi distinctio? Illum, quasi incidunt?</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <!-- If editor -->
                            <a href="#" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Aproba</a>
                            <a href="comment.php" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800 rejected">Respinge</a>
                            <!--  -->
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quam beatae deleniti quae sed eveniet fugit debitis id modi quas quisquam provident nisi repellat quidem animi non veritatis commodi perspiciatis.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <!-- If editor -->
                            <a href="#" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Aproba</a>
                            <a href="comment.php" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800 rejected">Respinge</a>
                            <!--  -->
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo enim, deserunt laborum commodi repellendus harum voluptates dicta deleniti iure, omnis ad eaque dolorum ex, iste atque molestiae delectus debitis! Placeat.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <!-- If editor -->
                            <a href="#" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Aproba</a>
                            <a href="comment.php" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800 rejected">Respinge</a>
                            <!--  -->
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
    </section>



    <section class="col-row main-articles">
        <h2 class="page-subtitle-h2">Aprobate</h2>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <!-- if editor
                        <div class="btn-group">
                            <!-- If editor
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div> -->
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ut incidunt vel fuga. Rerum, animi enim. Optio voluptatum modi saepe! Impedit asperiores corporis, quaerat mollitia excepturi distinctio? Illum, quasi incidunt?</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <!-- if editor
                        <div class="btn-group">
                            <!-- If editor
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div> -->
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quam beatae deleniti quae sed eveniet fugit debitis id modi quas quisquam provident nisi repellat quidem animi non veritatis commodi perspiciatis.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <!-- if editor
                        <div class="btn-group">
                            <!-- If editor
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div> -->
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo enim, deserunt laborum commodi repellendus harum voluptates dicta deleniti iure, omnis ad eaque dolorum ex, iste atque molestiae delectus debitis! Placeat.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <!-- if editor
                        <div class="btn-group">
                            <!-- If editor
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                        -->
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ut incidunt vel fuga. Rerum, animi enim. Optio voluptatum modi saepe! Asperiores corporis, quaerat mollitia excepturi distinctio? Illum, quasi incidunt?</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <!-- if editor
                        <div class="btn-group">
                            <!-- If editor
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div> -->
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sint quae cum maiores culpa dolor quas numquam ipsa, iusto illum recusandae expedita voluptas eos placeat odit repellendus tempore ratione commodi.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <!-- if editor
                        <div class="btn-group">
                            <!-- If editor
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div> -->
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
    </section>



    <section class="col-row main-articles">
        <!-- If journalist-->
        <h2 class="page-subtitle-h2">Respinse</h2>
        <div class="row">
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam, ducimus obcaecati earum alias architecto aliquam cumque at accusamus dicta ad eveniet facilis animi fugit iste doloribus quod omnis nostrum.</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Edit</a>
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
            <div class="col-row article-container">
                <article class="article">
                    <p class="category fs-category">Categorie</p>
                    <h3 class="article__title fs-h3"><a href="article.php" class="article-link text-accent300">Titlu Articol</a></h3>
                    <p class="article__text fs-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ut incidunt vel fuga. Rerum, animi enim. Optio voluptatum modi saepe! Impedit asperiores corporis, quaerat mollitia excepturi distinctio? Illum, quasi incidunt?</p>
                    <footer class="article__footer">
                        <p class="fs-date article__date"><date> <em>05 Decembrie 2023</em> </date> </p>
                        <div class="btn-group">
                            <a href="edit_article.php" class="edit article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Edit</a>
                            <a href="#" class="article_btn article_btn--dark fs-text bg-neutral100 text-accent800 b-accent800">Sterge</a>
                        </div>
                    </footer>
                </article>
                <hr/>
            </div>
        </div>
    </section>
</div>