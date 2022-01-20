<br><br><br>
<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col-md-6">
            <h1 class="mb-4">Projects</h1>
            <p class="small text-muted mb-4">I have experience in creating custom devloped tools with php using professional coding standards, making eye-catching front end designs from scratch, and building practical UI and UX content. I love the process creating a project from start to finish, reimagining legacy projects, and making them simple to use for the client or end-user</p>
        </div>
    </div>
    <div class="row mb-5">
        <?php
        foreach ($projects as $project) {
            if ($project['cat'] == "WordPress") {
                $class = 'primary';
            }
            if ($project['cat'] == "PHP MVC & OOP" || $project['cat'] == "Full Stack") {
                $class = 'secondary';
            }
            if ($project['cat'] == "Laravel") {
                $class = 'danger';
            }
            if ($project['cat'] == "React JS") {
                $class = 'info';
            }
            ?>
            <div class="col-md-3 mb-4">
                <div class="card sh-card proj_card shadow-3">
                    <!-- <img src="<?= App::path('/resources/images/'.$project['img']) ?>" class="card-img-top bg-light" alt="proj_img"> -->
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <?= $project['title'] ?>
                        </h5>
                        <!-- <button class="btn btn-dark btn-rounded">Project Info</button> -->
                        <!-- <span class="badge rounded-pill bg-<?= $class ?>"><?= $project['cat'] ?></span> -->
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>