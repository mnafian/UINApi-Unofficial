# UINApi-Unofficial

The following project is used to extract the data UIN Maliki's official website and shown into the data with JSON format. Data extraction purpose is to display the data in the form of news, announcements, and other information data to be more easily reused.

This project is made with SLIM PHP Framework version 2.

## Sample API Documentation sample request :

* Lastest news UIN Malang:
    * GET http://infouin.mnafian.net/data/news
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
    * POST http://infouin.mnafian.net/data/registration
	Params : 
	guid : "link from list news/annoucment/article"
	tittle: "tittle from list news/annoucment/article"
