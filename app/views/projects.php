<br><br><br>
<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col-md-6">
            <h1 class="mb-4 fw-bold">Projects</h1>
            <p class="small text-muted mb-4 mt-2">I have experience in creating custom developed tools with php using professional coding standards, making eye-catching front end designs from scratch, and building practical UI and UX content. I love the process creating a project from start to finish, reimagining legacy projects, and making them simple to use for the client or end-user</p>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <h4>Notable Projects</h4>
        </div>
    </div>
    <hr class="mb-4">
    <div class="row mb-5">
        <?php
        foreach ($projects as $project) {
            ?>
            <div class="col-md-3 mb-4">
                <div class="card sh-card proj_card shadow-3" data-title="<?= $project['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <?= $project['title'] ?>
                        </h5>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="row mb-3">
        <div class="col">
            <h4>Other Projects</h4>
        </div>
    </div>
    <hr class="mb-4">
    <div class="row mb-5">
        <?php
        foreach ($otherProjects as $project) {
            ?>
            <!-- <div class="col-md-3 mb-4">
                <div class="card sh-card proj_card shadow-3" data-title="<?= $project['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <?= $project['title'] ?>
                        </h5>
                    </div>
                </div>
            </div> -->
            <div class="col-md-3 mb-4">
                <a href="<?= $project['link'] ?>" target="_blank">
                    <div class="card sh-card">
                        <div class="overlay_container shadow">
                            <img src="<?=App::path('/resources/images/'.$project['img']) ?>" alt="work_img" class="overlay_image">
                            <div class="overlay_overlay">
                                <div class="overlay_text"><?= $project['title'] ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script>
    $('.proj_card').click(function(){
        let modalTitle = $(this).attr('data-title');
        $('#projectModalLabel').html(modalTitle);

        $.ajax({
            url : '<?= App::path('/ajax') ?>',
            type : 'POST',
            data : {
                'proj' : modalTitle
            },
            /* dataType:'json', */
            success : function(data) {              
                $('#modalContent').html(data);
            },
            error : function(request, error) {
                alert("Request: "+JSON.stringify(request));
            }
        });

        $('#projectModal').appendTo("body").modal('show');
    });
</script>

<!-- Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info fw-bold" id="projectModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="modalContent"></div>
      </div>
    </div>
  </div>
</div>