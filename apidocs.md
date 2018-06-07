FORMAT: 1A

# Documentation

# Group Users API [/users]
The users API will allow you to work with the users, roles and permissions.It requires your user to have permissions to fetch, create, update or delete users in the system depending on the request you want to make

## List users [GET /users]
This endpoint will allow you to get the users registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    {
                        "id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "name": "Administardor",
                        "email": "admin@novo.com",
                        "created_at": "2018-03-06T03:28:30+00:00",
                        "updated_at": "2018-03-06T03:28:30+00:00",
                        "roles": {
                            "data": [
                                {
                                    "id": "a5ed39d3-7b58-4dcc-8e2d-bba6f94451b2",
                                    "name": "Administrador",
                                    "created_at": "2018-03-06T03:28:28+00:00",
                                    "updated_at": "2018-03-06T03:28:28+00:00",
                                    "permissions": {
                                        "data": [
                                            {
                                                "id": "19634156-fc64-4e43-8619-5116556ed5d0",
                                                "name": "List users",
                                                "created_at": "2018-03-06T03:28:28+00:00",
                                                "updated_at": "2018-03-06T03:28:28+00:00"
                                            },
                                            {
                                                "id": "b58bfe2d-a590-457f-ad2d-09ea27c04e64",
                                                "name": "Create users",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "04426d88-7843-4b48-9309-dea40148f14d",
                                                "name": "Delete users",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "4d9908e9-2fcf-48f4-aeb9-4da8f8e0f4a3",
                                                "name": "Update users",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "6da3033c-c558-4a37-a767-c47a14cfdcc3",
                                                "name": "List roles",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "d328be96-e3e2-44ae-a4b7-ee52916b7b2b",
                                                "name": "Create roles",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "55ab3558-3934-4ec2-b7a0-600fa0334a5f",
                                                "name": "Delete roles",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "0784cb3f-3b5e-486a-ab93-2f79deee2849",
                                                "name": "Update roles",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            },
                                            {
                                                "id": "68185e73-1bb5-48ad-a98d-2c0d8b89db16",
                                                "name": "List permissions",
                                                "created_at": "2018-03-06T03:28:29+00:00",
                                                "updated_at": "2018-03-06T03:28:29+00:00"
                                            }
                                        ]
                                    }
                                }
                            ]
                        }
                    }
                ],
                "meta": {
                    "pagination": {
                        "total": 1,
                        "count": 1,
                        "per_page": 15,
                        "current_page": 1,
                        "total_pages": 1,
                        "links": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Show User [POST /users]
This endpoint will allow you to show a user in the system.

+ Parameters
    + uuid: (string, required) - universal unique identifier

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                    "name": "Administardor",
                    "email": "admin@novo.com",
                    "created_at": "2018-03-06T03:28:30+00:00",
                    "updated_at": "2018-03-06T03:28:30+00:00",
                    "roles": {
                        "data": [
                            {
                                "id": "a5ed39d3-7b58-4dcc-8e2d-bba6f94451b2",
                                "name": "Administrador",
                                "created_at": "2018-03-06T03:28:28+00:00",
                                "updated_at": "2018-03-06T03:28:28+00:00",
                                "permissions": {
                                    "data": [
                                        {
                                            "id": "19634156-fc64-4e43-8619-5116556ed5d0",
                                            "name": "List users",
                                            "created_at": "2018-03-06T03:28:28+00:00",
                                            "updated_at": "2018-03-06T03:28:28+00:00"
                                        },
                                        {
                                            "id": "b58bfe2d-a590-457f-ad2d-09ea27c04e64",
                                            "name": "Create users",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "04426d88-7843-4b48-9309-dea40148f14d",
                                            "name": "Delete users",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "4d9908e9-2fcf-48f4-aeb9-4da8f8e0f4a3",
                                            "name": "Update users",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "6da3033c-c558-4a37-a767-c47a14cfdcc3",
                                            "name": "List roles",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "d328be96-e3e2-44ae-a4b7-ee52916b7b2b",
                                            "name": "Create roles",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "55ab3558-3934-4ec2-b7a0-600fa0334a5f",
                                            "name": "Delete roles",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "0784cb3f-3b5e-486a-ab93-2f79deee2849",
                                            "name": "Update roles",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        },
                                        {
                                            "id": "68185e73-1bb5-48ad-a98d-2c0d8b89db16",
                                            "name": "List permissions",
                                            "created_at": "2018-03-06T03:28:29+00:00",
                                            "updated_at": "2018-03-06T03:28:29+00:00"
                                        }
                                    ]
                                }
                            }
                        ]
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

## Create User [POST /users]
This endpoint will allow you to create a user in the system.

+ Parameters
    + name: (string, optional) - Name of the user to register.
    + email: (string, optional) - Email of the user to register.
    + password: (string, optional) - Password of the user to register.

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "id": 10,
                "username": "foo"
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

# Group Tows API [/towns]
It requires that your user has permission to search, create, update or delete municipalities in the system, according to the request you want to make.

## List twons [GET /towns]
This endpoint will allow you to get the twons registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    {
                        "id": "58df507f-ad40-464c-bd6e-bea6f6eda6a6",
                        "code": "7938641964",
                        "name": "TESTteeci",
                        "coverage": "TESTftfegwplp",
                        "cellular": "399825678",
                        "created_at": "2018-03-06T05:55:58+00:00",
                        "updated_at": "2018-03-06T05:55:58+00:00"
                    }
                ],
                "meta": {
                    "pagination": {
                        "total": 1,
                        "count": 1,
                        "per_page": 15,
                        "current_page": 1,
                        "total_pages": 1,
                        "links": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Show Town [POST /towns]
This endpoint will allow you to show a town in the system.

+ Parameters
    + uuid: (string, required) - universal unique identifier

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "58df507f-ad40-464c-bd6e-bea6f6eda6a6",
                    "code": "7938641964",
                    "name": "TESTteeci",
                    "coverage": "TESTftfegwplp",
                    "cellular": "399825678",
                    "created_at": "2018-03-06T05:55:58+00:00",
                    "updated_at": "2018-03-06T05:55:58+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

## Create Town [POST /towns]
This endpoint will allow you to create a town in the system.

+ Parameters
    + name: (string, optional) - Name of the user to register.
    + code: (string, optional) - Code of the town.
    + coverage: (string, optional) - Coverage.
    + cellular: (string, optional) - .
    + user_id: (string, optional) - Universal unique identificator

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "58df507f-ad40-464c-bd6e-bea6f6eda6a6",
                    "code": "7938641964",
                    "name": "TESTteeci",
                    "coverage": "TESTftfegwplp",
                    "cellular": "399825678",
                    "created_at": "2018-03-06T05:55:58+00:00",
                    "updated_at": "2018-03-06T05:55:58+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

# Group Pathways API [/pathways]
It requires your user to have permissions to fetch, create, update or delete pathways in the system depending on the request you want to make

## List pathways [GET /pathways]
This endpoint will allow you to get the pathways registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    {
                        "id": "h432mgsd-54gfdg23",
                        "identification_code": "21334",
                        "name": "test",
                        "user_id": "1",
                        "telephone": "3234242342",
                        "created_at": "2018-03-06T00:00:00+00:00",
                        "updated_at": "2018-03-06T00:00:00+00:00"
                    },
                    {
                        "id": "3275160e-fe27-4c19-bf49-d44eb797195b",
                        "identification_code": "1810",
                        "name": "TESTuldxvil",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "468232591",
                        "created_at": "2018-03-06T06:47:57+00:00",
                        "updated_at": "2018-03-06T07:00:06+00:00"
                    },
                    {
                        "id": "20f5f7fa-f927-4d1c-87c2-3d3e1d7c69a8",
                        "identification_code": "727",
                        "name": "TESTihvpsbd",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "344897429",
                        "created_at": "2018-03-06T06:49:26+00:00",
                        "updated_at": "2018-03-06T06:49:26+00:00"
                    },
                    {
                        "id": "7dc56649-b0f7-4aea-98ee-18d77e520b0b",
                        "identification_code": "613",
                        "name": "TESTreccblwk",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "412478317",
                        "created_at": "2018-03-06T06:50:15+00:00",
                        "updated_at": "2018-03-06T06:50:15+00:00"
                    },
                    {
                        "id": "a8dcfb98-fc4d-4065-b0f7-96608f217f87",
                        "identification_code": "488",
                        "name": "TESTvkfbkb",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "729610381",
                        "created_at": "2018-03-06T06:50:55+00:00",
                        "updated_at": "2018-03-06T06:50:55+00:00"
                    },
                    {
                        "id": "1b6ace78-2bcc-45d7-8ea2-5cc3123935ed",
                        "identification_code": "1876",
                        "name": "TESTmoqi",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "696057745",
                        "created_at": "2018-03-06T06:52:17+00:00",
                        "updated_at": "2018-03-06T06:52:17+00:00"
                    },
                    {
                        "id": "385cc396-13c9-44f1-907c-c853477bc9e7",
                        "identification_code": "993",
                        "name": "TESTqrkzqqx",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "329940560",
                        "created_at": "2018-03-06T06:54:40+00:00",
                        "updated_at": "2018-03-06T06:54:40+00:00"
                    },
                    {
                        "id": "d3bbe71c-fc03-4ee3-9057-7fb2a2bc6cfa",
                        "identification_code": "772",
                        "name": "TESTvswvxtlvnn",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "819441821",
                        "created_at": "2018-03-06T06:55:25+00:00",
                        "updated_at": "2018-03-06T06:55:25+00:00"
                    },
                    {
                        "id": "3c2eeec8-9ac4-4ace-99db-281a75c6d193",
                        "identification_code": "1130",
                        "name": "TESTnvsxogxj",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "124794598",
                        "created_at": "2018-03-06T06:56:36+00:00",
                        "updated_at": "2018-03-06T06:56:36+00:00"
                    },
                    {
                        "id": "29a1315e-e526-42c0-965b-156a344be973",
                        "identification_code": "1497",
                        "name": "TESTxyfgzviwfie",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "920735971",
                        "created_at": "2018-03-06T06:57:04+00:00",
                        "updated_at": "2018-03-06T06:57:04+00:00"
                    },
                    {
                        "id": "f3d08a10-ecbe-42b0-a6e8-7d34524d3adc",
                        "identification_code": "1979",
                        "name": "TESTonoaxvdq",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "961879844",
                        "created_at": "2018-03-06T06:57:56+00:00",
                        "updated_at": "2018-03-06T06:57:56+00:00"
                    },
                    {
                        "id": "0c91d806-ad5a-4196-8819-25e2b9deeb1d",
                        "identification_code": "351",
                        "name": "TESThryfwwf",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "328547179",
                        "created_at": "2018-03-06T07:01:16+00:00",
                        "updated_at": "2018-03-06T07:01:16+00:00"
                    },
                    {
                        "id": "e15688eb-d789-4288-a3c4-b849f5b51648",
                        "identification_code": "460",
                        "name": "TESTxifwmc",
                        "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                        "telephone": "984527026",
                        "created_at": "2018-03-06T07:02:19+00:00",
                        "updated_at": "2018-03-06T07:02:19+00:00"
                    }
                ],
                "meta": {
                    "pagination": {
                        "total": 13,
                        "count": 13,
                        "per_page": 15,
                        "current_page": 1,
                        "total_pages": 1,
                        "links": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Show pathway [POST /pathways]
This endpoint will allow you to show a pathway in the system.

+ Parameters
    + uuid: (string, required) - universal unique identifier

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "3275160e-fe27-4c19-bf49-d44eb797195b",
                    "identification_code": "1810",
                    "name": "TESTuldxvil",
                    "user_id": "655dc5d1-1c2b-48ea-a045-cd4b106c26e0",
                    "telephone": "468232591",
                    "created_at": "2018-03-06T06:47:57+00:00",
                    "updated_at": "2018-03-06T07:00:06+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

## Create pathway [POST /pathways]
This endpoint will allow you to create a pathway in the system.

+ Parameters
    + identification_code: (string, optional) - Code of the towns.
    + name: (string, optional) - Name of the town to register.
    + telephone: (string, optional) - Telephone.
    + user_id: (string, optional) - UUID of the user to register.

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "id": 10,
                "username": "foo"
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

# Group Campaings API [/campaings]
It requires your user to have permissions to fetch, create, update or delete campaings in the system depending on the request you want to make

## List Campaigns [GET /campaings]
This endpoint will allow you to get the Campaigns registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    {
                        "id": "d2449c7e-f6d3-474c-a305-133b18c44113",
                        "topic": "vgvzbr",
                        "responsable": "TESTvgvzbr@test.com",
                        "capacity": 10,
                        "date": "2018-01-02",
                        "created_at": "2018-03-06T07:15:25+00:00",
                        "updated_at": "2018-03-06T07:27:35+00:00"
                    },
                    {
                        "id": "a8a7323e-491a-4cd1-a1af-27b3b2ab122b",
                        "topic": "dasuhgo",
                        "responsable": "rehyghfdsfsdfsdfsdaswerewte",
                        "capacity": 10,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:18:16+00:00",
                        "updated_at": "2018-03-06T07:18:16+00:00"
                    },
                    {
                        "id": "4460e88e-4712-4da1-8e15-3d103c09c233",
                        "topic": "TESTajzretoytv",
                        "responsable": "TESTgevkiy",
                        "capacity": 17,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:19:51+00:00",
                        "updated_at": "2018-03-06T07:19:51+00:00"
                    },
                    {
                        "id": "dfdac055-8ead-430e-99c6-c0eed287aaf3",
                        "topic": "TESTdnslq",
                        "responsable": "TESTmwfjgj",
                        "capacity": 87,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:20:59+00:00",
                        "updated_at": "2018-03-06T07:20:59+00:00"
                    },
                    {
                        "id": "6a3587a1-dc27-415b-a262-22fbcd282852",
                        "topic": "TESTecqpgdvwta",
                        "responsable": "TESTgotcbz",
                        "capacity": 45,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:21:23+00:00",
                        "updated_at": "2018-03-06T07:21:23+00:00"
                    },
                    {
                        "id": "5e1277e6-b12f-4731-adb7-ae60166f4bec",
                        "topic": "TESTtpauxyh",
                        "responsable": "TESTgquensavt",
                        "capacity": 4,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:21:56+00:00",
                        "updated_at": "2018-03-06T07:21:56+00:00"
                    },
                    {
                        "id": "9ec5d7bc-f368-4860-aa09-06b7df5d7c60",
                        "topic": "TESTdtfvagp",
                        "responsable": "TESTakhbkhgb",
                        "capacity": 19,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:22:10+00:00",
                        "updated_at": "2018-03-06T07:22:10+00:00"
                    },
                    {
                        "id": "cf3b2c4b-e5ae-4dcc-abcd-5c9c87e567ab",
                        "topic": "TESTetyqepi",
                        "responsable": "TESTnwllbqh",
                        "capacity": 92,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:23:56+00:00",
                        "updated_at": "2018-03-06T07:23:56+00:00"
                    },
                    {
                        "id": "4caf1fe1-5baf-4ea9-abce-bb80c8f0a32e",
                        "topic": "TESTqajlpj",
                        "responsable": "TESTnwllbqh",
                        "capacity": 92,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:30:41+00:00",
                        "updated_at": "2018-03-06T07:30:41+00:00"
                    },
                    {
                        "id": "8d98e925-5d32-4850-916b-67d557650012",
                        "topic": "TESTmxrdfbpjp",
                        "responsable": "TESTkcmoivxo",
                        "capacity": 9,
                        "date": "2017-01-01",
                        "created_at": "2018-03-06T07:31:04+00:00",
                        "updated_at": "2018-03-06T07:31:04+00:00"
                    }
                ],
                "meta": {
                    "pagination": {
                        "total": 10,
                        "count": 10,
                        "per_page": 15,
                        "current_page": 1,
                        "total_pages": 1,
                        "links": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Show Campaigns [POST /campaings]
This endpoint will allow you to show a Campaigns in the system.

+ Parameters
    + uuid: (string, required) - universal unique identifier

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "d2449c7e-f6d3-474c-a305-133b18c44113",
                    "topic": "vgvzbr",
                    "responsable": "TESTvgvzbr@test.com",
                    "capacity": 10,
                    "date": "2018-01-02",
                    "created_at": "2018-03-06T07:15:25+00:00",
                    "updated_at": "2018-03-06T07:27:35+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

## Create Campaigns [POST /campaings]
This endpoint will allow you to create a Campaigns in the system.

+ Parameters
    + topic: (string, optional) - Name of the user to register.
    + responsable_name: (string, optional) - Responsable name.
    + pathway_id: (string, optional) - UUID pathway.
    + capacity: (string, optional) - Capacity of the campaings.
    + date: (string, optional) - Date of the campaings.

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "cf3b2c4b-e5ae-4dcc-abcd-5c9c87e567ab",
                    "topic": "TESTetyqepi",
                    "responsable": "TESTnwllbqh",
                    "capacity": 92,
                    "data": "2017-01-01",
                    "created_at": "2018-03-06T07:23:56+00:00",
                    "updated_at": "2018-03-06T07:23:56+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

# Group Suppliers API [/supplier]
It requires your user to have permissions to fetch, create, update or delete suppliers in the system depending on the request you want to make

## List suppliers [GET /supplier]
This endpoint will allow you to get the suppliers registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    {
                        "id": "8fdf8027-e8f9-4388-872b-c7f792dc5e68",
                        "legal_representative_name": "TESTubysljwxp",
                        "telephone": "754759351",
                        "email": "TEST@dzhtfvzontm.com",
                        "tax_identification_number": "3847709202",
                        "sanitary_registration": "7692444003",
                        "created_at": "2018-03-06T07:48:44+00:00",
                        "updated_at": "2018-03-06T07:51:20+00:00"
                    },
                    {
                        "id": "2efd3900-8b71-48bc-bd16-65c106284705",
                        "legal_representative_name": "TESTmdavkhg",
                        "telephone": "266355438",
                        "email": "TEST@jgojxhrd.com",
                        "tax_identification_number": "6555005475",
                        "sanitary_registration": "4255206422",
                        "created_at": "2018-03-06T07:50:15+00:00",
                        "updated_at": "2018-03-06T07:50:15+00:00"
                    }
                ],
                "meta": {
                    "pagination": {
                        "total": 2,
                        "count": 2,
                        "per_page": 15,
                        "current_page": 1,
                        "total_pages": 1,
                        "links": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Show suppliers [POST /supplier]
This endpoint will allow you to show a suppliers in the system.

+ Parameters
    + uuid: (string, required) - universal unique identifier

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "8fdf8027-e8f9-4388-872b-c7f792dc5e68",
                    "legal_representative_name": "TESTubysljwxp",
                    "telephone": "754759351",
                    "email": "TEST@dzhtfvzontm.com",
                    "tax_identification_number": "3847709202",
                    "sanitary_registration": "7692444003",
                    "created_at": "2018-03-06T07:48:44+00:00",
                    "updated_at": "2018-03-06T07:51:20+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

## Create suppliers [POST /supplier]
This endpoint will allow you to create a suppliers in the system.

+ Parameters
    + legal_representative_name: (string, optional) - Name representative of the suppliers.
    + email: (string, optional) - Email of the suppliers to register.
    + telephone: (string, optional) - Teplephone.
    + tax_identification_number: (string, optional) - 
    + sanitary_registration: (string, optional) - Sanitary registration of the supplier

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "2efd3900-8b71-48bc-bd16-65c106284705",
                    "legal_representative_name": "TESTmdavkhg",
                    "telephone": "266355438",
                    "email": "TEST@jgojxhrd.com",
                    "tax_identification_number": "6555005475",
                    "sanitary_registration": "4255206422",
                    "created_at": "2018-03-06T07:50:15+00:00",
                    "updated_at": "2018-03-06T07:50:15+00:00"
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }

# Group Customers API [/customers]
It requires your user to have permissions to fetch, create, update or delete customers in the system depending on the request you want to make

## List Customers [GET /customers]
This endpoint will allow you to get the customers registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    {
                        "id": "155c7ae5-cc0d-490d-ac76-42b9db925220",
                        "name": "TESTkebdc",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTrhkdqxn",
                        "departament": "TESTntiflowa",
                        "municipality": "TESTsltgzntnw",
                        "residence_address": "TESTufoqvfna ufoqvfna",
                        "cellular": "6321096",
                        "telephone": "3802571",
                        "email": "testjwafty@test.com",
                        "education_level": "wlngqltr",
                        "occupation": "ibjhld",
                        "created_at": "2018-03-06T16:58:52+00:00",
                        "updated_at": "2018-03-06T17:35:23+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    },
                    {
                        "id": "ff83d6f1-42a9-4be4-a6b4-825e19313327",
                        "name": "TESTjrkxidpo",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTnigxdblh",
                        "departament": "TESTptqcjball",
                        "municipality": "TESTnfxipgzh",
                        "residence_address": "TESTzxndyvd zxndyvd",
                        "cellular": "1790944",
                        "telephone": "1953966",
                        "email": "testibung@test.com",
                        "education_level": "kkcowibrhvc",
                        "occupation": "vdeguczd",
                        "created_at": "2018-03-06T16:58:54+00:00",
                        "updated_at": "2018-03-06T16:58:54+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    },
                    {
                        "id": "baf58484-b4c2-4fac-b97b-2e3049721f44",
                        "name": "TESThovrcytlcd",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTkjslnoke",
                        "departament": "TESTeyxplwlx",
                        "municipality": "TESTnowrrs",
                        "residence_address": "TESTtjhjto tjhjto",
                        "cellular": "7876010",
                        "telephone": "544371",
                        "email": "testpcssovh@test.com",
                        "education_level": "uskplpjr",
                        "occupation": "pjomwwsdymq",
                        "created_at": "2018-03-06T16:58:55+00:00",
                        "updated_at": "2018-03-06T16:58:55+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    },
                    {
                        "id": "38c74a43-aa3d-4b5e-b39d-6ff332ffb5d2",
                        "name": "TESTjxqksdsa",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTpbtablzlzp",
                        "departament": "TESTlabezvoti",
                        "municipality": "TESTikdppl",
                        "residence_address": "TESTfpphaawbmw fpphaawbmw",
                        "cellular": "3946547",
                        "telephone": "991413",
                        "email": "testplkfpqazh@test.com",
                        "education_level": "byspjlfna",
                        "occupation": "suaijf",
                        "created_at": "2018-03-06T17:37:11+00:00",
                        "updated_at": "2018-03-06T17:37:11+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    },
                    {
                        "id": "8c488365-a728-4139-9f4e-9e9ef34a5ffb",
                        "name": "TESTdjiwjarmo",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTbqutzrif",
                        "departament": "TESTrqkmkcum",
                        "municipality": "TESTeoyiswlck",
                        "residence_address": "TESTccucozl ccucozl",
                        "cellular": "7939066",
                        "telephone": "6853962",
                        "email": "testorbeqhyu@test.com",
                        "education_level": "hpqausdv",
                        "occupation": "tfxyobh",
                        "created_at": "2018-03-06T17:37:25+00:00",
                        "updated_at": "2018-03-06T17:37:25+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    },
                    {
                        "id": "fc62daf7-ffcf-466c-b186-694c74361744",
                        "name": "TESTmxsoqhi",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTvdelpdghbp",
                        "departament": "TESTflanfpben",
                        "municipality": "TESTznfeawawd",
                        "residence_address": "TESTxuxhlkko xuxhlkko",
                        "cellular": "7727684",
                        "telephone": "1029908",
                        "email": "testwpooecf@test.com",
                        "education_level": "bdkbveemsc",
                        "occupation": "ipcbucd",
                        "created_at": "2018-03-06T17:37:47+00:00",
                        "updated_at": "2018-03-06T17:37:47+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    },
                    {
                        "id": "e7a4e9fd-2711-49d2-96b0-3b87993d45e7",
                        "name": "TESTtygfbmjjg",
                        "birthdate": "1993-01-01",
                        "gender": "M",
                        "city": "TESTcajvwelhv",
                        "departament": "TESTzjzgthwr",
                        "municipality": "TESTtpqyors",
                        "residence_address": "TESTsyylblxle syylblxle",
                        "cellular": "4983002",
                        "telephone": "5001736",
                        "email": "testjungxfw@test.com",
                        "education_level": "zkoowxrm",
                        "occupation": "hexhbexz",
                        "created_at": "2018-03-06T17:38:04+00:00",
                        "updated_at": "2018-03-06T17:38:04+00:00",
                        "familyReferences": {
                            "data": []
                        },
                        "personalReferences": {
                            "data": []
                        }
                    }
                ],
                "meta": {
                    "pagination": {
                        "total": 7,
                        "count": 7,
                        "per_page": 15,
                        "current_page": 1,
                        "total_pages": 1,
                        "links": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Show Customers [GET /customers]
This endpoint will allow you to get the customers registered in the system

+ Parameters
    + page: (string, optional) - The page of results to view.
        + Default: 1
    + limit: (string, optional) - The amount of results per page.
        + Default: 20

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA2NzNhZGYzY2I2ZmMxOTY1ZThlZmZkNTJkNzk3MWYwYWY1NzQ3OTcwNWNmNjhiZTM2ODFmMDdlZDE3NDk0NTVjYWJkOTRmZmZlNzk3NDA1In0.eyJhdWQiOiIyIiwianRpIjoiMDY3M2FkZjNjYjZmYzE5NjVlOGVmZmQ1MmQ3OTcxZjBhZjU3NDc5NzA1Y2Y2OGJlMzY4MWYwN2VkMTc0OTQ1NWNhYmQ5NGZmZmU3OTc0MDUiLCJpYXQiOjE1MjAyOTkyMjEsIm5iZiI6MTUyMDI5OTIyMSwiZXhwIjoxNTIxNTk1MjIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DW4t_BE7nPE-aXIsVVWKGRvV9lt_p5el_ikMj7c8U-zVYeOTupsYyqcjnzwYU_JrpM2vmgdLgR5x4IuGnzFg6OmA0AlmHjppEMmsCj2UxSKa9j43nSvztxixA4d6puPfbz9ySlKefhq3qEtUYtfucRCh4-JCRywgl9oelKb6sFI9QVirQlD0dKx36-jnWIAt3tPmavw9FJ05VCyktjYd6oCqjVrPeRFta0zujAx6kgngIwG3OAXBjPkamqoWsJYAObEidbbp1ZatxwESYgmpMG3dcNVZfx2xL-lf-Iw4bCOnOuykY3JUc6yfw-oT4-ySWP6xS0P8zSsOhTlUpaT6In3Nhq2ZbIWBTbs2hW3UjxXCxmWIT037r2cZ5_ryM8nQSVxx3Q5hcMPZ4dWeG1AYzf7cvtHlZusIOTR2Br8DmLGS-R4uqXMpCAvVE8vMawqoangdaTMAiH_TWW2RgD3j7W1dYHTlPqBjIf7VoluguC55sMFHtfzQnVd-aa-iWQ7YzpJ3tGX3PYr0KLq3CQ-pao36q5POsNU0WB0TyR1sHDsUtOhH3ufmuFknosDvZs_Y_SGXwtAlGnDyhPWNsMpJ-O6Wg17gCxuY24df9OeqXgwCAZITRkUMpQNFaoWOIGBqO5iioIk0bs0k9MFqdT6m2L60QWb2DqDZkFt2GWqyzAU

+ Response 200 (application/json)
    + Body

            {
                "data": {
                    "id": "155c7ae5-cc0d-490d-ac76-42b9db925220",
                    "name": "TESTkebdc",
                    "birthdate": "1993-01-01",
                    "gender": "M",
                    "city": "TESTrhkdqxn",
                    "departament": "TESTntiflowa",
                    "municipality": "TESTsltgzntnw",
                    "residence_address": "TESTufoqvfna ufoqvfna",
                    "cellular": "6321096",
                    "telephone": "3802571",
                    "email": "testjwafty@test.com",
                    "education_level": "wlngqltr",
                    "occupation": "ibjhld",
                    "created_at": "2018-03-06T16:58:52+00:00",
                    "updated_at": "2018-03-06T17:35:23+00:00",
                    "familyReferences": {
                        "data": []
                    },
                    "personalReferences": {
                        "data": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "404 Not found",
                "status_code": 404
            }

## Create Customers [POST /customers]
This endpoint will allow you to create a customers in the system.

+ Parameters
    + name: (string, optional) - Name of the customer to register.
    + birthdate: (string, optional) - date of birth of the customer.
    + gender: (string, optional) - Gender of the customer.
    + departament: (string, optional) - Departament of the customer.
    + municipality: (string, optional) - Municipality of the customer.
    + residence_address: (string, optional) - Residence address of the customer.
    + cellular: (string, optional) - Cellular of the customer.
    + telephone: (string, optional) - Telephone of the customer.
    + email: (string, optional) - Email of the customer.
    + education_level: (string, optional) - Education level of the customer.
    + occupation: (string, optional) - Occupation of the customer.

+ Request (application/vnd.api.v1+json)
    + Body

            Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBlOGVhOGY0YWY2Yjg3NzU0YjZjZDBjNjdkNzBmMjdhYTZkMmRjNjU3YzIwYTU0MjQ3NWRlZGU4Y2VkNTc1N2IwZDcwMWFmNTAyMGU4MGE4In0.eyJhdWQiOiIxIiwianRpIjoiMGU4ZWE4ZjRhZjZiODc3NTRiNmNkMGM2N2Q3MGYyN2FhNmQyZGM2NTdjMjBhNTQyNDc1ZGVkZThjZWQ1NzU3YjBkNzAxYWY1MDIwZTgwYTgiLCJpYXQiOjE0NzYyOTk1NTQsIm5iZiI6MTQ3NjI5OTU1NCwiZXhwIjoxNDc3NTk1NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.gTOotTVp2eF_HvuW48ngGqdly4bocNMlvY0al0YmYPJ_tjBQYegE4AjtCH2bWUf9aUz8tQqhMr2UFae3JV6VDQC9VzoGK8gU_nulM0BkqaCCxadqrw_slcd4he9hT0FE3WshvdZKcmgaVovgrI2-sAnX3n749BiWtWLEpw6x-TdEHEVcW6uRfRWyrwKhPBfOk-hXpgbecgT8LYdBW531P1ryjSJzzi5zBEe0Ecbp9Lo-fV69AW8ZBnG1DBjzxW-hvE0rRLXXnI4-f9rbQfK6QUzfG3Dg2INexcKxu9sQ3Vn5wHhQyu4_nTNQh8rsgphdAqFnEo-FQZrRWejkKbOi_BcpQybaXNn7Qln-96QF6PAzT-2E08VmL4XeVNcSvmM1sPVwirnSXo4UIFSsHvvIdVfEYEXD8XDonlnVO74RgBDMXWs6xo7dmDNaqQxKt9J_s_xtmyM3w62C4QucKw7MY0zOqviEyXySbrYbgazO_Pl1--GXtksE8tVMW8OW6Y8fw0JE0GEd5hZVadR277A5164QAJhiGXI_mKNTtUZVNaj0JpKEQpu4tod_BJR_DxzvcpKHwc1YrfrPOul6mL4kZeafkehPe79jxrCXKgKEuGlgSFcyrXUNCtME9LxsMID6QpJ-tfx4i0jqjixd_smqpjPPYqhPuqhox3uMLcDgM6s

+ Response 201 (application/json)
    + Body

            {
                "data": {
                    "id": "ed418592-e63e-499c-b538-7a81ac84ad85",
                    "name": "TESTjfeghkrmg",
                    "birthdate": "1993-01-01",
                    "gender": "M",
                    "city": "TESTiooyo",
                    "departament": "TESTytlvsbbzn",
                    "municipality": "TESTnfxvzu",
                    "residence_address": "TESTsmkoaly smkoaly",
                    "cellular": "3939771",
                    "telephone": "8796211",
                    "email": "testdxyxocxlbe@test.com",
                    "education_level": "wlycnij",
                    "occupation": "yynqpvbhyb",
                    "created_at": "2018-03-06T18:00:30+00:00",
                    "updated_at": "2018-03-06T18:00:30+00:00",
                    "familyReferences": {
                        "data": []
                    },
                    "personalReferences": {
                        "data": []
                    }
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "message": "Unauthenticated",
                "status_code": 401
            }

+ Response 403 (application/json)
    + Body

            {
                "message": "Forbidden",
                "status_code": 403
            }

+ Response 422 (application/json)
    + Body

            {
                "message": "Validation error",
                "errors": [
                    {
                        "key": "error"
                    }
                ],
                "status_code": 422
            }