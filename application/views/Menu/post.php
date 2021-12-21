<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Tabs</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Default Tab</h4>
            </div>
            <div class="card-body">
                <div class="default-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Published</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Drafts</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Trashed</a>
                        </div>
                    </nav>
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="content mt-3">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Data Table Published</strong>
                                                </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $no = 1;
                                                            foreach($data as $row)
                                                            {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        <td><?php echo $row->Title; ?></td>
                                                                        <td><?php echo $row->Category; ?></td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <a href="" class="btn btn-flat btn-xs btn-warning" data-tooltip="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
                                                                                <a href="" data-toggle="modal" data-target="#hapusData" data-id="" data-tooltip="tooltip" data-placement="top" title="Delete Data" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="content mt-3">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Data Table Drafts</strong>
                                                </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $no = 1;
                                                            foreach($data as $row)
                                                            {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        <td><?php echo $row->Title; ?></td>
                                                                        <td><?php echo $row->Category; ?></td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <a href="" class="btn btn-flat btn-xs btn-warning" data-tooltip="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
                                                                                <a href="" data-toggle="modal" data-target="#hapusData" data-id="" data-tooltip="tooltip" data-placement="top" title="Delete Data" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="content mt-3">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Data Table Trashed</strong>
                                                </div>
                                                <div class="card-body">
                                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $no = 1;
                                                            foreach($data as $row)
                                                            {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        <td><?php echo $row->Title; ?></td>
                                                                        <td><?php echo $row->Category; ?></td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <a href="" class="btn btn-flat btn-xs btn-warning" data-tooltip="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>
                                                                                <a href="" data-toggle="modal" data-target="#hapusData" data-id="" data-tooltip="tooltip" data-placement="top" title="Delete Data" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>