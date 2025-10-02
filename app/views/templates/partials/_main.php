
<?php include_once '../app/views/templates/partials/_aside.php'; ?>

<!-- Blog Post (Right Sidebar) Start -->
<div class="col-md-9">
<div class="col-md-12 page-body">
    <div class="row">
    <div class="col-md-12 content-page">
        

        <!-- Blog Post Start -->
            <?php echo $content; ?>
        <!-- Blog Post End -->

        <nav aria-label="Page navigation example" style="text-align: center;">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </nav>

    </div>
    </div>
</div>