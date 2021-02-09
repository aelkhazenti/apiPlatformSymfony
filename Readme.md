# apiPlatformSymfony

![](https://img.shields.io/badge/license-MIT-purple)
![](https://img.shields.io/badge/version-1.0.0-success)
![](https://img.shields.io/badge/PHP-7.3.24-red)
![](https://img.shields.io/badge/symfony-5.2.3-blue)
![](https://img.shields.io/badge/LexikJWT-2.10.6-yellow)


## Requirements

• [PHP](https://www.php.net/downloads)
• [symfony](https://symfony.com/)
. [LexikJWT](https://github.com/lexik/LexikJWTAuthenticationBundle)

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
  "dateDeb": "2021-02-08",
  "dateFin": "2021-02-08",
  "heurDeb": "20:44:38",
  "heurFin": "20:44:38",
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
5. /api/entrainements/{id} , {GET,PUT,DELETE,PATCH}
```shell
{
  "id": 0,
  "dateDeb": "2021-02-08",
  "dateFin": "2021-02-08",
  "heurDeb": "20:44:38",
  "heurFin": "20:44:38",
  "typeEnt": "string",
  "IDuser": "string",
}
```
6. /api/user_participations/{id} , {GET,PUT,DELETE,PATCH}
```shell
{
  "id": 0,
  "IDuser": "string",
  "IDENT": "string",
  
}
```
7. /api/newentrainement/1/sendmail
```shell
{
  "dateDeb": "2021-02-0",
  "dateFin": "2021-02-09",
  "heurDeb": "12:36:31",
  "heurFin": "12:36:32",
  "typeEnt": "test push 2 ",
  "iDuser": "/api/users/3"
}
```


## Installation Steps

1. Clone repo: `git clone https://github.com/aelkhazenti/testMarsupilami.git apiPlatformSymfony`

2. Change into root directory: `cd apiPlatformSymfony`

3. `symfony serve`



## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License
See [MIT License](https://choosealicense.com/licenses/mit/)

