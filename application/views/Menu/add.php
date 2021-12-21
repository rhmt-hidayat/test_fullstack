<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add New</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
<div class="card">
<form method="POST" action="<?php echo base_url('add/insert') ?>">
    <div class="card-header"><strong>Add</strong><small> New</small></div>
    <div class="card-body card-block">
        <div class="form-group"><label for="title" name="title" class=" form-control-label">Title</label><input type="text" id="title" placeholder="Enter your title name" class="form-control"></div>
        <div class="form-group"><label for="content" name="content" class=" form-control-label">Content</label><input type="text" id="content" placeholder="Enter content name" class="form-control"></div>
        <div class="form-group"><label for="category" name="category" class=" form-control-label">Category</label><input type="text" id="category" placeholder="Enter category name" class="form-control"></div>              
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Publish
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Draft
        </button>
    </div>
</form>
</div>
</div>