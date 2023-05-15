This repo consists the code of resourceful APIs for the student registry app of South of Australia University using Laravel 9.

Video Presentation:
https://www.youtube.com/watch?v=5MEKvrJ6hqM

Postman collection link:
https://crimson-station-463924.postman.co/workspace/My-Workspace~3536b736-856b-47e3-8ce5-2f0685c56edd/collection/27404943-c38493b9-3e0a-4c9e-acd1-b0b6359f55bd?action=share&creator=27404943

Postman collection json:
{
  "info": {
    "_postman_id": "c38493b9-3e0a-4c9e-acd1-b0b6359f55bd",
    "name": "Postman response",
    "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
    "_exporter_id": "27404943",
    "_collection_link": "https://crimson-station-463924.postman.co/workspace/3536b736-856b-47e3-8ce5-2f0685c56edd/collection/27404943-c38493b9-3e0a-4c9e-acd1-b0b6359f55bd?action=share&creator=27404943&source=collection_link"
  },
  "item": [
    {
      "name": "Staff Registration",
      "request": {
        "method": "POST",
        "header": [],
        "body": {
          "mode": "formdata",
          "formdata": [
            {
              "key": "file",
              "type": "file",
              "src": "/C:/Users/aqila/Documents/Activity/Personal Data/Job Selection/Vimigo/student.csv"
            }
          ]
        },
        "url": {
          "raw": "http://127.0.0.1:8000/api/staff-register?name=eagle&email=eagle@gmail.com&password=eagle321",
          "protocol": "http",
          "host": ["127", "0", "0", "1"],
          "port": "8000",
          "path": ["api", "staff-register"],
          "query": [
            {
              "key": "name",
              "value": "eagle"
            },
            {
              "key": "email",
              "value": "eagle@gmail.com"
            },
            {
              "key": "password",
              "value": "eagle321"
            }
          ]
        }
      },
      "response": ["User register successfully."]
    },
    {
      "name": "Staff Login",
      "request": {
        "method": "POST",
        "header": [],
        "url": {
          "raw": "http://127.0.0.1:8000/api/staff-login?email=eagle@gmail.com&password=eagle321",
          "protocol": "http",
          "host": ["127", "0", "0", "1"],
          "port": "8000",
          "path": ["api", "staff-login"],
          "query": [
            {
              "key": "email",
              "value": "eagle@gmail.com"
            },
            {
              "key": "password",
              "value": "eagle321"
            }
          ]
        }
      },
      "response": [
        [
          {
            "name": "Kemal",
            "address": "desa skudai apart"
          },
          {
            "name": "aldi",
            "address": "klg residence"
          },
          {
            "name": "baim",
            "address": "taman flores"
          },
          {
            "name": "fikar",
            "address": "melana apartment"
          },
          {
            "name": "isfan",
            "address": "sentul city"
          }
        ]
      ]
    },
    {
      "name": "Search Student",
      "request": {
        "method": "POST",
        "header": [],
        "url": {
          "raw": "http://127.0.0.1:8000/api/staff-search?name=baim",
          "protocol": "http",
          "host": ["127", "0", "0", "1"],
          "port": "8000",
          "path": ["api", "staff-search"],
          "query": [
            {
              "key": "name",
              "value": "baim"
            }
          ]
        }
      },
      "response": [
        {
          "name": "baim",
          "address": "taman flores"
        }
      ]
    },
    {
      "name": "Upload CSV file",
      "request": {
        "method": "POST",
        "header": [],
        "body": {
          "mode": "formdata",
          "formdata": [
            {
              "key": "file",
              "type": "file",
              "src": "/C:/Users/aqila/Documents/Activity/Personal Data/Job Selection/Vimigo/student.csv"
            }
          ]
        },
        "url": {
          "raw": "http://127.0.0.1:8000/api/staff-upload-student",
          "protocol": "http",
          "host": ["127", "0", "0", "1"],
          "port": "8000",
          "path": ["api", "staff-upload-student"]
        }
      },
      "response": ["Student register successfully."]
    }
  ]
}
