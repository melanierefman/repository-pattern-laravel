<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Repository Pattern

Repository Pattern adalah pola desain yang memisahkan logika bisnis dari akses data dalam sebuah aplikasi. Dalam konteks Laravel, Repository Pattern sering digunakan untuk memisahkan logika database dari logika aplikasi itu sendiri.

Dalam Laravel, Repository Pattern sering digunakan untuk:

- Memisahkan Logika Database: Repository mengabstraksi akses data ke dalam model-model Eloquent atau bahkan ke dalam kueri langsung. Hal ini memungkinkan pengembang untuk mengisolasi logika database ke dalam kelas-kelas repository, membuat kode lebih bersih dan lebih mudah dipahami.
- Memfasilitasi Pengujian: Dengan menggunakan Repository Pattern, logika aplikasi dapat diuji tanpa ketergantungan langsung pada database. Repository dapat dengan mudah digantikan dengan imitasi atau stub dalam pengujian unit, sehingga pengujian menjadi lebih mudah dan lebih cepat.
- Mengurangi Duplikasi Kode: Dengan memisahkan logika database ke dalam kelas-kelas repository, Anda dapat menghindari duplikasi kode yang terkait dengan akses data. Anda dapat membuat metode umum di dalam repository untuk berbagai operasi CRUD, sehingga mengurangi kode yang harus Anda tulis.
- Memperjelas Struktur Aplikasi: Dengan menggunakan Repository Pattern, struktur aplikasi menjadi lebih jelas. Model Eloquent bertanggung jawab hanya untuk representasi data dan logika bisnis, sementara repository bertanggung jawab untuk akses data dan manipulasi database

## Documentation

![Screenshot 2024-05-16 152030](https://github.com/melanierefman/repository-pattern-laravel/assets/87106838/09020f95-7c15-4bb3-882d-87d39b92673e)
![Screenshot 2024-05-16 153829](https://github.com/melanierefman/repository-pattern-laravel/assets/87106838/f273213e-a179-4876-a74f-a0f198e49d3a)

## Source

https://www.youtube.com/watch?v=kA3W9DbRoN0&t=407s 
