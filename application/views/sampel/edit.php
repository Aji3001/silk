<?php echo form_open('silk/edit');?>
<?php echo form_hidden('id',$data=[0]->id);?>

<table>
    <tr><td>ID</td><td><?php echo form_input('',$data=[0]->id,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$data=[0]->Nama);?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('nomor',$datak=[0]->Nomor);?></td></tr>
    <tr>
        <td colspan="2">
            <?php echo form_submit('submit','Simpan');?>
            <?php echo anchor('list','Kembali');?>
        </td>
    </tr>
</table>
<?php
echo form_close();
?>