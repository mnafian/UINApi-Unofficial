# UINApi-Unofficial

The following project is used to extract the data UIN Maliki's official website and shown into the data with JSON format. Data extraction purpose is to display the data in the form of news, announcements, and other information data to be more easily reused.

This project is made with SLIM PHP Framework version 2.

## Sample API Documentation sample request :

* Lastest news UIN Malang:
    * GET http://infouin.mnafian.net/data/news

Example output :
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
* Lastest Article:
    * GET http://infouin.mnafian.net/data/article
* Mahad annoucment:
    * GET http://infouin.mnafian.net/data/mahad
* Profile UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/profile
* Academic UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/academic
* Organization UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/organization
* Registration UIN Maliki Malang:
    * GET http://infouin.mnafian.net/data/registration

* Detail News/Announment/Article/Mahad:
    * POST http://infouin.mnafian.net/data/data/detail/

Parameter : 
guid : "link from list news/annoucment/article"
tittle: "tittle from list news/annoucment/article"
