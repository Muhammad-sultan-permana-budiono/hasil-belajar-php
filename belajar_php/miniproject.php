<form method="POST">
    <input name="nama">
    <button>kirim</button>
</from>

<?phpif(isset($_POST['nama'])){
    echo "Halo".$_POST['nama'];
}
?>