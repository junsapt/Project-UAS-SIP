<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Basic Inputs</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
            </div>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="form_inputs_basic.html">Forms</a></li>
            <li class="active">Basic inputs</li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    Settings
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Basic form inputs</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <a href="<?= site_url('Admin/input_wisata'); ?>" style="float: right;" class="mb-20 btn btn-primary btn-raised">Tambah Wisata</a>
        </div>
        <!-- Basic datatable -->
        <table class="table datatable-basic table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama Wisata</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wisata as $wst) { ?>
                    <tr>
                        <td><?= $wst['nama_wisata']; ?></td>
                        <td><?= $wst['deskripsi_wisata']; ?></td>
                        <td><?= $wst['nama_kategori']; ?></td>
                        <td><img src="<?= base_url('upload/' . $wst['foto']); ?>" width="100px" alt=""></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="<?= site_url('Admin/update_wisata/' . $wst['id_wisata']); ?>"><i class="icon-pencil"></i> Edit</a></li>
                                        <li><a href="<?= site_url('Admin/delete_wisata/' . $wst['id_wisata']); ?>"><i class="icon-trash"></i> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- /basic datatable -->
    </div>
    <!-- /form horizontal -->



    <!-- /content area -->