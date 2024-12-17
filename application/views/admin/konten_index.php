<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
    <div class="mt-3 mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Konten
        </button>
        

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="judul" required />
                                </div>
                            </div>
                            <div class="row">
                             <div class="col mb-3">
                                <label class="form-label">Kategori</label>
                                        <select name="id_kategori" class="from-control">
                                    <?php  $no=1; foreach ($kategori as $aa) { ?>  
                                    <option value="<?= $aa['id_kategori'] ?>">><?= $aa['nama_kategori'] ?></option>
                                    <?php }?>
                                    </select>
                            </div>
                                </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <textarea name="keterangan" class="form-control"></textarea>
                                    <script src="https://cdn.tiny.cloud/1/17pgq9wlnij8550gaesph8y4e7zmdwx53ukhry5qiu0yyd1l/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Dec 10, 2024:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      // Early access to document converters
      'importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    exportpdf_converter_options: { 'format': 'Letter', 'margin_top': '1in', 'margin_right': '1in', 'margin_bottom': '1in', 'margin_left': '1in' },
    exportword_converter_options: { 'document': { 'size': 'Letter' } },
    importword_converter_options: { 'formatting': { 'styles': 'inline', 'resets': 'inline',	'defaults': 'inline', } },
  });
</script>
                                </div>
                            </div>
                     
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="from-control"
                                    accept="image/png, image/jpeg">
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                               <!-- Place the first <script> tag in your HTML's <head> -->

                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="card">
    <h5 class="card-header">Kategori Konten</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori Konten</th>
                    <th>Tanggal</th>
                    <th>Kreator</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                <tr>
                    <?php  $no=1; foreach ($konten as $aa) { ?>
                        <td><?= $no ?></td>
                        <td><?= $aa['judul'] ?></td>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td><?= $aa['tanggal'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td>
                        <a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>" target="_blank"> 
                        <span class="tf-icons bx bx-search">Lihat Foto</span>
                    </a>
                    </td>
                        
                        <td>
                            <a href="<?php echo site_url('admin/konten/delete_data/' . $aa['foto']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                                <span class="tf-icons bx bx-trash-alt"></span></a>
                            
                             <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>">
        <span class="tf-icons bx bx-edit"></span>
        </button>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" value="<?= $aa['judul'] ?>" placeholder="Nama" name="judul" />
                                </div>
                            </div>
                            <div class="row">
                             <div >
                                <label class="form-label">Kategori</label>
                                        <select name="id_kategori" class="from-control">
                                    <?php  $no=1; foreach ($kategori as $uu) { ?>  
                                    <option <?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected";} ?>
                                     value="<?= $uu['id_kategori'] ?>">><?= $uu['nama_kategori'] ?>        
                                </option>
                                    <?php }?>
                                    </select>
                            </div>
                                </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                </div>
                            </div>
                     
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="from-control"
                                    accept="image/png, image/jpeg">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        
                </form>
            </div>
        </div>
    </div>
</td>
</tr>
<?php $no++;} ?>
</tbody>
</table>
</div>
</div>