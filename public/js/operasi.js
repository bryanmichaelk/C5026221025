function tambah() {
    var bil1 = parseInt(document.getElementById("bil1").value);
    var bil2 = parseInt(document.getElementById("bil2").value);
    var hasil = document.getElementById("hasil");
    hasil.innerHTML = bil1 + bil2;
  }
  function kali() {
    var bil1 = document.getElementById("bil1").value;
    var bil2 = document.getElementById("bil2").value;
    var hasil = document.getElementById("hasil");
    hasil.innerHTML = bil1 * bil2;
  }
