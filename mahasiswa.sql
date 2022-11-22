-- membuat database
CREATE DATABASE fakultas;

-- membuat tabel jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

-- membuat tabel mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- memasukkan data jurusan
insert into jurusan (kode,nama) values ('ABCD','Teknik Informatika');
insert into jurusan (kode,nama) values ('EFGH','Manajemen Informatika');

-- memasukkan data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'20220001', 'Umami', 'perempuan', 'Banyuwangi', '2002-02-26', 'Jl. Semangka 02');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (2,'20220002', 'Ramadhani', 'laki-laki', 'Banyuwangi', '2001-11-27', 'Jl. Rambutan 11');

-- update data mahasiswa
update mahasiswa set alamat = "Jl. Duku 24" where id = 1;

-- delete data mahasiswa
delete from mahasiswa where id=2;