<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="info">
                <center>
                    <h2><i class="fas fa-th-list"></i>&nbsp;&nbsp;Kelola Data Semnas Roboco 2021</h2>
                </center>
                <hr style="border: 1px grey solid;">
            </div><br>

            <?php if (session()->getFlashdata('pesanAdd')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesanAdd'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesanUpdate')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesanUpdate'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesanDelete')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('pesanDelete'); ?>
                </div>
            <?php endif; ?>

            <nav class="navbar navbar-light bg-info justify-content-between">
                <form action="" method="POST" class="form-inline" style="margin-bottom: 10px;">
                    <form class="form-inline">
                        <div class="input-group">
                            <div class="btn-group mr-2" role="group" aria-label="cari">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Peserta..." aria-label="Search" name="key">
                            </div>
                            <div class="btn-group" role="group" aria-label="tombolCari">
                                <b>
                                    <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                                </b>
                            </div>
                        </div>
                    </form>
                </form>
                <div class="btn-group btn-group-toggle" style="background:none;">
                    <form>
                        <div class="input-group">
                            <div class="btn-group mr-2" role="group" aria-label="multibutton" style="margin-top: 10px;height: 40px;">
                                <div class="btn-group" role="group" aria-label="add">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#create">
                                        <b>
                                            <i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah
                                        </b>
                                    </button>
                                </div>
                                <div class="btn-group" role="group" aria-label="excel">
                                    <a href="admin/excel" type="button" class="btn btn-success" name="excel">
                                        <b>
                                            <i class="fas fa-file-csv"></i>&nbsp;&nbsp;Excel
                                        </b>
                                    </a>
                                </div>
                                <div class="btn-group" role="group" aria-label="print">
                                    <a href="admin/print" type="button" class="btn btn-light" name="print">
                                        <b>
                                            <i class="fas fa-print"></i>&nbsp;&nbsp;Print
                                        </b>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="pagination" style="margin-top: 10px;">
                                <?= $pager->links('semnas', 'semnas_pagination') ?>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>

            <div style="overflow-x:auto;">
                <table id="table_id" class="table table-striped table-dark mydatatable" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal Instansi/Sekolah</th>
                            <th scope="col">No Whatsapp</th>
                            <th scope="col">Opsi/Pilihan Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($curpage - 1)); ?>
                        <?php foreach ($semnas as $dt) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $dt['email']; ?></td>
                                <td><?= $dt['nama']; ?></td>
                                <td><?= $dt['insek']; ?></td>
                                <td><?= $dt['wa']; ?></td>
                                <td class="btn-class">
                                    <button type="button" class="edit btn btn-warning btn-sm" data-toggle="modal" data-target="#update"><i class="fas fa-edit"></i>&nbsp;&nbsp;Ubah</button>
                                    <button type="button" class="del btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php foreach ($semnas as $dt) : ?>
            <!-- ADD -->
            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">CREATE DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?= base_url('admin/save') ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="modal-body bg-dark">
                                <div class="avatar">
                                    <i class="pencil fas fa-pencil-alt"></i>
                                    <i class="book fas fa-book-open"></i>
                                </div>
                                <div class="form-group">
                                    <div class="box-registry">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <input type="email" placeholder="Email" name="email" autofocus required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-child"></i>
                                        <input type="name" placeholder="Nama Lengkap" name="nama" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-building"></i>
                                        <input type="text" placeholder="Asal Institusi/Sekolah" name="insek" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fab fa-whatsapp"></i>
                                        <input type="text" placeholder="No Whatsapp" name="wa" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="button-class">
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Tambah
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- EDIT -->
            <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">UPDATE DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?= base_url('admin/update/'.$dt['id']); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="UPDATE">
                            <div class="modal-body bg-dark">
                                <div class="avatar">
                                    <i class="edicon far fa-edit"></i>
                                    <i class="book fas fa-book-open"></i>
                                </div>
                                <div class="form-group">
                                    <div class="box-registry">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <input type="email" placeholder="Email" name="email" value="<?= $dt['email']; ?>" autofocus required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-child"></i>
                                        <input type="name" placeholder="Nama Lengkap" name="nama" value="<?= $dt['nama']; ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-building"></i>
                                        <input type="text" placeholder="Asal Institusi/Sekolah" name="insek" value="<?= $dt['insek']; ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fab fa-whatsapp"></i>
                                        <input type="text" placeholder="No Whatsapp" name="wa" value="<?= $dt['wa']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="button-class">
                                    <button type="submit" name="update" class="btn btn-primary">
                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Ubah
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- DELETE -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">HAPUS DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?= base_url('admin/delete/'. $dt['id']); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="modal-body bg-dark">
                                <div class="avatar">
                                    <i class="delicon far fa-trash-alt"></i>
                                    <i class="book fas fa-book-open"></i>
                                </div>
                                <div class="modal-body">
                                    <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="button-class">
                                    <button type="submit" name="delete" class="btn btn-primary">
                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Hapus
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>