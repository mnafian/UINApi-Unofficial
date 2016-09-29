# UINApi-Unofficial

The following project is used to extract the data UIN Maliki's official website and shown into the data with JSON format. Data extraction purpose is to display the data in the form of news, announcements, and other information data to be more easily reused.

This project build  with SLIM PHP Framework 2.

Open contribute is open and welcome to UIN Maliki member.

## Sample API Documentation request :

* Lastest news UIN Malang:
    * GET http://infouin.mnafian.net/data/news

Sample output :
```json
{
   "@attributes":{
      "version":"2.0"
   },
   "channel":{
      "title":"Berita",
      "link":"http:\/\/uin-malang.ac.id",
      "description":"Berita",
      "lastBuildDate":"Mon, 15 Feb 2016 14:05:02 +0700",
      "language":"id",
      "generator":"http:\/\/uin-malang.ac.id\/?v=1.0.0",
      "item":[
         {
            "title":"The Muslim College London UK Ajak Kerjasama UIN Malang",
            "link":"http:\/\/uin-malang.ac.id\/r\/1602\/the-muslim-college-london-uk-ajak-kerjasama-uin-malang.html",
            "guid":"http:\/\/uin-malang.ac.id\/r\/16020104191282440",
            "pubDate":"Mon, 15 Feb 2016 14:05:02 +0700",
            "category":" Berita ",
            "description":"<p>GEMA- Dekan The Muslim College London Inggris, Dr. Muhamed Ben Othman dan Dr. Faisal Hamid siang ini melakukan kunungan sekaligus untuk melakukan kerjasama dengan UIN Maulana Malik Ibrahim Malang, Senin (15\/2).<\/p> "
         },
         {
            "title":"Kanwil Kemenag Papua Barat Minta Bantuan Peningkatan SDM",
            "link":"http:\/\/uin-malang.ac.id\/r\/1602\/kanwil-kemenag-papua-barat-minta-bantuan-peningkatan-sdm.html",
            "guid":"http:\/\/uin-malang.ac.id\/r\/16020101581300235",
            "pubDate":"Mon, 15 Feb 2016 13:28:11 +0700",
            "category":" Berita ",
            "description":"<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>GEMA-<\/strong>Dalam rangka meningkatkan kualitas pendidikan dan pembelajaran di Papua Barat, Kementerian Agama Papua Barat menyelenggarakan kerjasama dengan UIN Maulana Malik Ibrahim Malang, Senin (15\/2). Pertemuan kerjasama disambut langsung oleh Wakil Rektor Bidang Akademik Dr. H. M. Zainuddin, MA., dan Wakil Rektor III Dr. H. Agus Maimun, M.Pd. <em>Memorandum of Understanding<\/em> (MoU) ini diselenggarakan di Ruang Rektor Gedung Rektorat lt.1 antara Pihak Kerjasama UIN Maliki dengan Tim Kanwil Papua Barat.<\/p> "
         }
      ]
   }
}
```

* Info announcment:
    * GET http://infouin.mnafian.net/data/info

Sample output :
```json
{
   "@attributes":{
      "version":"2.0"
   },
   "channel":{
      "title":"Pengumuman",
      "link":"http:\/\/uin-malang.ac.id",
      "description":"Pengumuman",
      "lastBuildDate":"Wed, 10 Feb 2016 16:54:39 +0700",
      "language":"id",
      "generator":"http:\/\/uin-malang.ac.id\/?v=1.0.0",
      "item":[
         {
            "title":"Pengumuman Lelang Pengadaan Jas Almamater, Dasi dan Topi UIN Maliki Malang TA 2016",
            "link":"http:\/\/uin-malang.ac.id\/r\/1602\/pengumuman-lelang-pengadaan-jas-almamater-dasi-dan-topi-uin-maliki-malang-ta-2016.html",
            "guid":"http:\/\/uin-malang.ac.id\/r\/16020103964042890",
            "pubDate":"Wed, 10 Feb 2016 16:54:39 +0700",
            "category":" Lelang ",
            "description":{

            }
         },
         {
            "title":"Pengumuman Lelang Ulang Cleaning Service UIN Maulana Malik Ibrahim Malang Tahun Anggaran 2016",
            "link":"http:\/\/uin-malang.ac.id\/r\/1602\/pengumuman-lelang-ulang-cleaning-service-uin-maulana-malik-ibrahim-malang-tahun-anggaran-2016.html",
            "guid":"http:\/\/uin-malang.ac.id\/r\/16020100418061454",
            "pubDate":"Wed, 03 Feb 2016 07:54:30 +0700",
            "category":" Lelang ",
            "description":{

            }
         }
      ]
   }
}
```
* Lastest Article:
    * GET http://infouin.mnafian.net/data/article

Sample output :
```json
{
   "@attributes":{
      "version":"2.0"
   },
   "channel":{
      "title":"Artikel",
      "link":"http:\/\/uin-malang.ac.id",
      "description":"Artikel",
      "lastBuildDate":"Fri, 19 Feb 2016 08:01:01 +0700",
      "language":"id",
      "generator":"http:\/\/uin-malang.ac.id\/?v=1.0.0",
      "item":[
         {
            "title":"Demokrasi Dan Korupsi",
            "link":"http:\/\/uin-malang.ac.id\/r\/1602\/demokrasi-dan-korupsi.html",
            "guid":"http:\/\/uin-malang.ac.id\/r\/16020101715749430",
            "pubDate":"Fri, 19 Feb 2016 08:01:01 +0700",
            "category":" Dosen ",
            "description":"<p>Persoalan korupsi di negeri ini sekalipun sudah cukup lama diberantas, ternyata belum selesai.<\/p> "
         },
         {
            "title":"Berbicara Dengan Hati, Akal, Dan Saku",
            "link":"http:\/\/uin-malang.ac.id\/r\/1602\/berbicara-dengan-hati-akal-dan-saku.html",
            "guid":"http:\/\/uin-malang.ac.id\/r\/16020103699728739",
            "pubDate":"Thu, 18 Feb 2016 08:01:01 +0700",
            "category":" Dosen ",
            "description":"<p>Berbicara dengan hati dan akal memang gampang dimengerti dan keduanya sangat mudah dibedakan.<\/p> "
         }
      ]
   }
}
```
* Mahad annoucment:
    * GET http://infouin.mnafian.net/data/mahad

Sample output :
```
Temporary error from main resource target link
```

* Profile UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/profile

Sample output :
```json
[
   {
      "tittle":"Profil Universitas",
      "text":"\n\t\u00a0\nContent text sample"
   }
]
```

* Academic UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/academic

Sample output :
```json
[
   {
      "text":"\nKurikulum Universitas mencakup komponen: (a) universitas, yang mencerminkan pengejawantahan visi, misi, serta tradisi yang dijunjung tinggi dan dikembangkan oleh universitas, yang mengikat seluruh komponen universitas; (b)fakultas, yang mencerminkan bidang ilmu yang dikembangkan oleh fakultas; dan (c) jurusan\/program studi, yang mencerminkan spesifikasi bidang ilmu tertentu yang dikembangkan oleh fakultas; dan (d) pendukung, yang mencakup berbagai kajian ilmiah yang mendukung pengembangan atau pencapaian tujuan pendidikan.\n\n"
   },
   {
      "text":"\nIsi kurikulum adalah seperangkat matakuliah, seperangkat kajian ilmiah, dan seperangkat pengalaman belajar tertentu, yang ditetapkan oleh setiap fakultas, yang diorganisasikan sedemikian rupa sehingga menjamin tercapainya tujuan Universitas, Fakultas, Jurusan\/Program Studi\/Konsentrasi, serta tujuan lain yang dipandang penting.\n\n"
   }
]
```

* Organization UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/organization

Sample output :
```json
[
   {
      "tittle":"Profil Universitas",
      "text":"\n\t\u00a0\nContent text sample"
   }
]
```

* Registration UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/registration

Sample output :
```json
[
   {
      "tittle":"Profil Universitas",
      "text":"\n\t\u00a0\nContent text sample"
   }
]
```

* Detail News/Announment/Article/Mahad:
    * POST http://infouin.mnafian.net/data/detail

Parameter : 
* guid : "link from list news/annoucment/article"

* tittle : "tittle from list news/annoucment/article"

Sample output :
```json
[
   {
      "tittle":"The Muslim College London UK Ajak Kerjasama UIN Malang",
      "text":"\n\tGEMA- Dekan The Muslim College London, Inggris, Dr. Mohamed Benothman dan Dr. Faisal Hamid siang ini melakukan kunjungan sekaligus untuk melakukan kerjasama dengan UIN Maulana Malik Ibrahim Malang, Senin (15\/2).\n\n\n\nDelegasi The Muslim College yang diwakili Dr. Mohamed Benothman dan Dr. Faisal Hamid diterima langsung oleh Wakil Rektor Bidang Akademik Dr. H. Zainuddin, MA di Ruang Rektor Lt.1.\nDalam kesempatan itu, Dr.\u00a0Mohamed\u00a0Benothman menyampaikan bahwa saat ini perkembangan umat Islam di Eropa khususnya di Inggris tengah mengalami peningkatan yang cukup pesat dan hal itu terus mendapatkan respon yang positif dari masyarakat, faktanya saat ini masyarakat di Inggris semakin banyak yang memeluk agama Islam.\n\u201cMeskipun muslim di\u00a0 sana (Eropa, Red) masih minoritas akan tetapi perkembangan pemeluk agama Islam di sana sangat menggembirakan,\u201d ceritanya.\n\u201cKerjasama antara dua institusi pendidikan kita ini didukung dengan visi misi yang hampir sama, yaitu sebagai sebuah institusi pendidikan yang membawa rahmat bagi alam semesta,\u201d ungkapnya.\nThe Muslim College merupakan salah satu perguruan tinggi Islam yang terletak di kota London, Inggris, yang fokus pada isu-isu keagamaan dan bertujuan untuk mengenalkan Islam di Eropa dengan cara yang lebih moderat.\nDr.\u00a0Mohamed Benothman berharap kunjungan ini menjadi pintu pembuka bagi kerjasama-kerjasama antara The Muslim College dengan UIN Maliki Malang. \u201cSemoga dalam waktu dekat bisa merealisasikan kerjasama yang sudah disepakati bersama dalam MoU tersebut,\u201d harapnya. (*)\n\u00a0"
   }
]
```

This project still under development and buggy, let me know if you interested to contribute.

```
Copyright (c) 2016 mnafian.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```