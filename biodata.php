<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form action="hasil_biodata.php" method="POST" id="form-biodata">
        <table>
            <tr>
                <td colspan="3" class="text-center">Biodata </td>
            </tr>
            <tr>
                <td colspan="3" class="text-center">Mahasiswa </td>
            </tr>
           
            <tr>
                <td>NPM </td>
                <td>: </td>
                <td><input type="text" id="npm" name="npm"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>: </td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan </td>
                <td>: </td>
                <td>
                  <select name="jurusan" id="jurusan">
                    <option value="">Pilih Jurusan </option>
                    <option value="MI">Manajemen Informatika</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="MB">Manajemen Bisnis</option>
                    <option value="KA">Komputer Akuntansi</option>
                  </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                   <button type="button" onclick = "validasi()">Submit </button>
                   <button type="reset">Clear </button>
                </td>
            </tr>
        </table>
    </form>
</body>

<script type="text/javascript">
    function validasi(){
        var npm = document.getElementById('npm').value;
        var nama = document.getElementById('nama').value;
        if (npm == "") {
            alert('NPM Belum Diisi,.');
        } else if(nama == "") {
            alert('Nama Belum Diisi,.');
        } else {
            document.getElementById('form-biodata').submit()
        }
    }
</script>

</html>
