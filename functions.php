<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'belajarphp');
    
    function read($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function add($data){
        global $conn;
        $nama = htmlspecialchars($data['nama']);
        $nis = htmlspecialchars($data['nis']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $alamat = htmlspecialchars($data['alamat']);

        $query = "INSERT INTO siswa VALUES
                ('', '$nama', '$nis', '$jurusan', '$alamat')
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>