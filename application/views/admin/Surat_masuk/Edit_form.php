<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/surat_masuk') ?>">Surat_masuk</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('admin/surat_masuk/edit') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="no_surat">NO SURAT MASUK <code>*</code></label>
                        <input class="form-control" type="hidden" name="id" value="<?= isset($surat->id) ? $surat->id : ''; ?>" required />
                        <input class="form-control" type="text" id="no_surat" name="no_surat" value="<?= isset($surat->no_surat) ? $surat->no_surat : ''; ?>" placeholder="NO SURAT MASUK" required />
                    </div>
                    <div class="mb-3">
                        <label for="perihal">PERIHAL SURAT <code>*</code></label>
                        <input class="form-control" type="text" id="perihal" name="perihal" value="<?= isset($surat->perihal) ? $surat->perihal : ''; ?>" placeholder="PERIHAL SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="tgl_surat">TANGGAL SURAT <code>*</code></label>
                        <input class="form-control" type="date" id="tgl_surat" name="tgl_surat" value="<?= isset($surat->tgl_surat) ? $surat->tgl_surat : ''; ?>" placeholder="TANGGAL SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="surat_from">SURAT DARI <code>*</code></label>
                        <input class="form-control" type="text" id="surat_from" name="surat_from" value="<?= isset($surat->surat_from) ? $surat->surat_from : ''; ?>" placeholder="SURAT DARI" required />
                    </div>
                    <div class="mb-3">
                        <label for="surat_to">TUJUAN SURAT <code>*</code></label>
                        <input class="form-control" type="text" id="surat_to" name="surat_to" value="<?= isset($surat->surat_to) ? $surat->surat_to : ''; ?>" placeholder="TUJUAN SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="tgl_terima">TANGGAL TERIMA SURAT <code>*</code></label>
                        <input class="form-control" type="date" id="tgl_terima" name="tgl_terima" value="<?= isset($surat->tgl_terima) ? $surat->tgl_terima : ''; ?>" placeholder="TANGGAL TERIMA SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="keterangan">KETERANGAN <code>*</code></label>
                        <textarea class="form-control" placeholder="KETERANGAN" name="keterangan" id="keterangan" style="height: 100px"><?= isset($surat->keterangan) ? $surat->keterangan : ''; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">BERKAS SURAT (Photo)</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <input class="form-control" type="hidden" name="old_image" value="<?= isset($surat->image) ? $surat->image : ''; ?>" required />
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save Data</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>