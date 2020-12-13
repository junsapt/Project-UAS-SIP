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
            <h5 class="panel-title">Form Input Wisata</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="<?= site_url('Admin/input_wisata'); ?>" method="POST" enctype="multipart/form-data">
                <fieldset class="content-group">
                    <legend class="text-bold">Input Wisata</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nama Wisata</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="nama_wisata">
                            <td><?php echo form_error('nama_wisata'); ?></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Kategori Wisata</label>
                        <div class="col-lg-10">
                            <select name="id_kategori" class="form-control">
                                <?php foreach ($kategori as $kat) { ?>
                                    <option value="<?= $kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Diskripsi Wisata</label>
                        <div class="col-lg-10">
                            <div class="content-group">
                                <textarea id="editor-full" rows="4" cols="4" class="form-control" name="deskripsi_wisata"></textarea>
                                <td><?php echo form_error('deskripsi_wisata'); ?></td>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Foto</label>
                        <div class="col-lg-10">
                            <input type="file" class="file-styled" name="foto">
                            <td><?php echo form_error('foto'); ?></td>
                        </div>
                    </div>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form horizontal -->


    <!-- /content area -->