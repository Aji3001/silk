<!-- <h3>Tambah Buah</h3>
<form action="<?= base_url('silk/sampel/aksi_tambah')?>" method="post">
    <div>
        <label for="">Id Produk</label><br>
        <input type="number" name="id" required><br>
    </div>
    <div>
        <label for="">Nama Buah</label><br>
        <input type="text" name="nama" required><br>
    </div>
    <div>
        <label for="">Harga (Rupiah) </label><br>
        <input type="number" name="harga" required><br>
    </div>
    <div>
        <label for="">Gambar</label><br>
        <input type="file" name="gambar" required><br>
    </div>
    <div style="padding-bottom:30px">
        <label for="">deskripsi</label><br>
        <textarea name="deskripsi" id="" cols="30" rows="10" required></textarea>
    </div>
    <a href="<?= base_url('silk/sampel')?>">Kembali</a>
    <button type="submit">Simpan</button>
</form> -->

<?php echo form_open_multipart('silk/sampel/aksi_tambah');?>
<table>
    <tr><td>Id</td><td><?php echo form_input('id');?></td></tr>
    <tr><td>Nama</td><td><?php echo form_input('nama');?></td></tr>        
    <tr><td>Harga</td><td><?php echo form_input('harga');?></td></tr>        
    <tr><td>Gambar</td><td><?php echo form_input('gambar');?></td></tr>        
    <tr><td>Deskripsi</td><td><?php echo form_input('deskripsi');?></td></tr>        
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>