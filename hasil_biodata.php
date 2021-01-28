<?php 
    $jurusan = $_POST['jurusan'];
    $hasil = "";

    switch ($jurusan) {
        case 'MI':
            $hasil = 'Manajemen Informatika';
            break;
        case 'TI':
            $hasil = 'Teknik Informatika';
            break;
        case 'MB':
            $hasil = 'Manajemen Bisnis';
            break;
        case 'KA':
            $hasil = 'Komputer Akuntansi';
            break;
        
        default:
            # code...
            break;
    }
    
?>

<table>
    <tr>
        <td colspan="3" class="text-center">Biodata </td>
    </tr>
    <tr>
        <td colspan="3" class="text-center">Mahasiswa </td>
    </tr>
    <tr>
        <td>NPM </td>
        <td>: <?php echo $_POST['npm']; ?></td>
    </tr>
    <tr>
        <td>Nama </td>
        <td>: <?php echo $_POST['nama']; ?></td>
    </tr>
    <tr>
        <td>Jurusan </td>
        <td>: <?php echo $hasil . "($jurusan)"; ?></td>
    </tr>
</table>