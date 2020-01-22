---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Create a new user instance after a valid registration.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_95d2e2ef6e109359e993be4eb823a708 -->
## api/acronyms
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/acronyms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/acronyms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "user_id": "1",
        "acronym": "IGPR                                                                                                                                                                                                                                                           ",
        "expansion": "Ispiring Great Performances Review",
        "definition": "Used on a monthly basis to review employees from the previous month, ranking their performance from 1 to 3",
        "created_at": null,
        "updated_at": null,
        "user": {
            "id": 1,
            "name": "Bradley",
            "email": "bcoles-perkins@rock.co.uk",
            "email_verified_at": null,
            "created_at": "2019-12-11 10:59:03.650",
            "updated_at": "2020-01-02 10:00:20.303"
        }
    },
    {
        "id": 2,
        "user_id": "1",
        "acronym": "TGIM                                                                                                                                                                                                                                                           ",
        "expansion": "Thank God It's Monday",
        "definition": "Used to notifiy all employees of the previous weeks work. Usually emailed out by Rob on a Sunday\/Monday",
        "created_at": null,
        "updated_at": null,
        "user": {
            "id": 1,
            "name": "Bradley",
            "email": "bcoles-perkins@rock.co.uk",
            "email_verified_at": null,
            "created_at": "2019-12-11 10:59:03.650",
            "updated_at": "2020-01-02 10:00:20.303"
        }
    },
    {
        "id": 3,
        "user_id": "1",
        "acronym": "POPS                                                                                                                                                                                                                                                           ",
        "expansion": "People Operations",
        "definition": "The HR side of ROCK",
        "created_at": null,
        "updated_at": null,
        "user": {
            "id": 1,
            "name": "Bradley",
            "email": "bcoles-perkins@rock.co.uk",
            "email_verified_at": null,
            "created_at": "2019-12-11 10:59:03.650",
            "updated_at": "2020-01-02 10:00:20.303"
        }
    },
    {
        "id": 4,
        "user_id": "2",
        "acronym": "asdasdas                                                                                                                                                                                                                                                       ",
        "expansion": "asdasdas",
        "definition": "asdasdasdasd",
        "created_at": "2020-01-15 09:48:50.787",
        "updated_at": "2020-01-15 09:48:50.787",
        "user": {
            "id": 2,
            "name": "test",
            "email": "test@example.com",
            "email_verified_at": null,
            "created_at": "2019-12-11 11:06:05.243",
            "updated_at": "2020-01-15 10:30:33.173"
        }
    },
    {
        "id": 5,
        "user_id": "2",
        "acronym": "123123                                                                                                                                                                                                                                                         ",
        "expansion": "123123",
        "definition": "123123123123123123",
        "created_at": "2020-01-15 09:49:56.057",
        "updated_at": "2020-01-15 09:49:56.057",
        "user": {
            "id": 2,
            "name": "test",
            "email": "test@example.com",
            "email_verified_at": null,
            "created_at": "2019-12-11 11:06:05.243",
            "updated_at": "2020-01-15 10:30:33.173"
        }
    },
    {
        "id": 6,
        "user_id": "2",
        "acronym": "456456                                                                                                                                                                                                                                                         ",
        "expansion": "456456",
        "definition": "456456456456456456456456",
        "created_at": "2020-01-15 10:24:15.127",
        "updated_at": "2020-01-15 10:24:15.127",
        "user": {
            "id": 2,
            "name": "test",
            "email": "test@example.com",
            "email_verified_at": null,
            "created_at": "2019-12-11 11:06:05.243",
            "updated_at": "2020-01-15 10:30:33.173"
        }
    }
]
```

### HTTP Request
`GET api/acronyms`


<!-- END_95d2e2ef6e109359e993be4eb823a708 -->

<!-- START_0c31786b7b1deef253d16936bd5bbb2f -->
## api/acronym/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/acronym/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/acronym/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "user_id": "1",
    "acronym": "IGPR                                                                                                                                                                                                                                                           ",
    "expansion": "Ispiring Great Performances Review",
    "definition": "Used on a monthly basis to review employees from the previous month, ranking their performance from 1 to 3",
    "created_at": null,
    "updated_at": null,
    "user": {
        "id": 1,
        "name": "Bradley",
        "email": "bcoles-perkins@rock.co.uk",
        "email_verified_at": null,
        "created_at": "2019-12-11 10:59:03.650",
        "updated_at": "2020-01-02 10:00:20.303"
    },
    "next": {
        "id": 2,
        "user_id": "1",
        "acronym": "TGIM                                                                                                                                                                                                                                                           ",
        "expansion": "Thank God It's Monday",
        "definition": "Used to notifiy all employees of the previous weeks work. Usually emailed out by Rob on a Sunday\/Monday",
        "created_at": null,
        "updated_at": null
    },
    "previous": null
}
```

### HTTP Request
`GET api/acronym/{id}`


<!-- END_0c31786b7b1deef253d16936bd5bbb2f -->

<!-- START_f6cd589dbc3baa5ba2ecfdb51fbd253e -->
## api/acronym
> Example request:

```bash
curl -X POST \
    "http://localhost/api/acronym" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/acronym"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/acronym`


<!-- END_f6cd589dbc3baa5ba2ecfdb51fbd253e -->

<!-- START_ede56570e795b471c2c2b40fd0c4d9d9 -->
## api/loginTest
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/loginTest" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/loginTest"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/loginTest`


<!-- END_ede56570e795b471c2c2b40fd0c4d9d9 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


