# apiPlatformSymfony

![](https://img.shields.io/badge/license-MIT-purple)
![](https://img.shields.io/badge/version-1.0.0-success)
![](https://img.shields.io/badge/PHP-7.3.24-red)
![](https://img.shields.io/badge/symfony-5.2.3-blue)


## Requirements

• [PHP](https://www.php.net/downloads)
• [symfony](https://symfony.com/)


##

1. /api/login_check
```shell
{
  "username": "string",
  "roles": [
    "string"
  ],
  "password": "string",
  "pseudo": "string",
  "hauteur": 0,
  "poids": 0,
  "age": 0
}
```
2. /api/user/{id}/getparticipation
```shell
{
  "id": 0,
  "IDuser": "string",
  "IDENT": "string",
}
```
3. /api/user/{id}/getentrainement
```shell
{
  "id": 0,
  "dateDeb": "2021-02-08T20:39:52.919Z",
  "dateFin": "2021-02-08T20:39:52.919Z",
  "heurDeb": "2021-02-08T20:39:52.919Z",
  "heurFin": "2021-02-08T20:39:52.919Z",
  "typeEnt": "string",
  "IDuser": "string",
}
```
4. /api/users/{id} , {GET,PUT,DELETE,PATCH}
```shell
{
  "id": 0,
  "email": "string",
  "roles": [
    "string"
  ],
  "password": "string",
  "pseudo": "string",
  "hauteur": 0,
  "poids": 0,
  "age": 0,
}
```
5. /api/entrainements/{id}
```shell
{
  "id": 0,
  "dateDeb": "2021-02-08T20:44:38.350Z",
  "dateFin": "2021-02-08T20:44:38.350Z",
  "heurDeb": "2021-02-08T20:44:38.350Z",
  "heurFin": "2021-02-08T20:44:38.350Z",
  "typeEnt": "string",
  "IDuser": "string",
}
```
6. /api/user_participations/{id}
```shell
{
  "id": 0,
  "IDuser": "string",
  "IDENT": "string",
  
}
```
7. /email (test)


## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License
See [MIT License](https://choosealicense.com/licenses/mit/)
