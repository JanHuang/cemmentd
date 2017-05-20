# 评论模块

评论模块 RESTful 接口

### 查看评论列表

GET /api/discussions

```
GET /api/discussions

HTTP/1.1 200 OK

[
    {
        "id": "1",
        "target_id": "0",
        "user_id": "0",
        "nickname": "",
        "title": "测试",
        "content": "测试内容",
        "reply_id": "0",
        "reply_user_id": "0",
        "reply_nickname": "",
        "comments_count": "0",
        "like_count": "0",
        "is_locked": "0",
        "created": "2017-04-19 21:59:31",
        "updated": "2017-04-19 21:59:31"
    }
]
```

### 查看评论详情

GET /api/discussions/{id}

```
GET /api/discussions/1

HTTP/1.1 200 OK

{
    "id": "1",
    "target_id": "0",
    "user_id": "0",
    "nickname": "",
    "title": "测试",
    "content": "测试内容",
    "reply_id": "0",
    "reply_user_id": "0",
    "reply_nickname": "",
    "comments_count": "0",
    "like_count": "0",
    "is_locked": "0",
    "created": "2017-04-19 21:59:31",
    "updated": "2017-04-19 21:59:31"
}
```

### 查看回复

GET /api/discussions/{id}/reply

```
GET /api/discussions/1/reply

HTTP/1.1 200 OK

[
    {
        "id": "1",
        "target_id": "0",
        "user_id": "0",
        "nickname": "",
        "title": "测试",
        "content": "测试内容",
        "reply_id": "0",
        "reply_user_id": "0",
        "reply_nickname": "",
        "comments_count": "0",
        "like_count": "0",
        "is_locked": "0",
        "created": "2017-04-19 21:59:31",
        "updated": "2017-04-19 21:59:31"
    }
]
```

### 添加评论

POST /api/discussions

```
POST /api/discussions

{
    "target_id": "0",
    "user_id": "0",
    "nickname": "",
    "title": "测试",
    "content": "测试内容",
}

HTTP/1.1 201 Created

{
    "id": "1",
    "target_id": "0",
    "user_id": "0",
    "nickname": "",
    "title": "测试",
    "content": "测试内容",
    "reply_id": "0",
    "reply_user_id": "0",
    "reply_nickname": "",
    "comments_count": "0",
    "like_count": "0",
    "is_locked": "0",
    "created": "2017-04-19 21:59:31",
    "updated": "2017-04-19 21:59:31"
}
```

### 添加回复

POST /api/discussions

```
POST /api/discussions

{
    "reply_id": "1",
    "target_id": "0",
    "user_id": "0",
    "nickname": "",
    "title": "测试",
    "content": "测试内容",
}

HTTP/1.1 201 Created

{
    "id": "1",
    "target_id": "0",
    "user_id": "0",
    "nickname": "",
    "title": "测试",
    "content": "测试内容",
    "reply_id": "0",
    "reply_user_id": "0",
    "reply_nickname": "",
    "comments_count": "0",
    "like_count": "0",
    "is_locked": "0",
    "created": "2017-04-19 21:59:31",
    "updated": "2017-04-19 21:59:31"
}
```

### 获取用户评论

GET /api/users/{id}/discussions

```
GET /api/users/1/discussions

HTTP/1.1 200 OK

[
    {
        "id": "1",
        "target_id": "0",
        "user_id": "0",
        "nickname": "",
        "title": "测试",
        "content": "测试内容",
        "reply_id": "0",
        "reply_user_id": "0",
        "reply_nickname": "",
        "comments_count": "0",
        "like_count": "0",
        "is_locked": "0",
        "created": "2017-04-19 21:59:31",
        "updated": "2017-04-19 21:59:31"
    }
]
```

### 获取目标评论

GET /api/target/{id}/discussions

```
GET /api/target/1/discussions

HTTP/1.1 200 OK

[
    {
        "id": "1",
        "target_id": "0",
        "user_id": "0",
        "nickname": "",
        "title": "测试",
        "content": "测试内容",
        "reply_id": "0",
        "reply_user_id": "0",
        "reply_nickname": "",
        "comments_count": "0",
        "like_count": "0",
        "is_locked": "0",
        "created": "2017-04-19 21:59:31",
        "updated": "2017-04-19 21:59:31"
    }
]
```
