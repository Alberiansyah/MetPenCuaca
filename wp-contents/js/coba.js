// Waktu sekarang
var waktuSekarang = new Date();

// Data jam cuaca yang diberikan
var dataJamCuaca = [
  new Date("2023-07-14 00:00:00"),
  new Date("2023-07-14 06:00:00"),
  new Date("2023-07-14 12:00:00"),
  new Date("2023-07-14 18:00:00"),
  new Date("2023-07-15 00:00:00"),
  new Date("2023-07-15 06:00:00")
];

// Fungsi untuk mencari jam cuaca yang paling dekat dengan waktu sekarang
function cariJamTerdekat(waktuSekarang, dataJamCuaca) {
  var selisihTerkecil = Infinity;
  var jamTerdekat = null;

  for (var i = 0; i < dataJamCuaca.length; i++) {
    var selisih = Math.abs(waktuSekarang - dataJamCuaca[i]);

    if (selisih < selisihTerkecil) {
      selisihTerkecil = selisih;
      jamTerdekat = dataJamCuaca[i];
    }
  }

  return jamTerdekat;
}

// Memanggil fungsi untuk mencari jam cuaca terdekat
var jamTerdekat = cariJamTerdekat(waktuSekarang, dataJamCuaca);

// Menampilkan jam cuaca terdekat
console.log("Jam cuaca terdekat dengan waktu sekarang:", jamTerdekat, selisihTerkecil);
