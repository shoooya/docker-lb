# docker-lb

## installation

```bash
$ git clone git@github.com:shoooya/docker-lb.git
$ cd docker-lb
```

## using

### start

```bash
$ docker-compose up -d
```

### stop

```bash
$ docker-compose down
```

### verify

- load barancing
  - `http://localhost:8000`
  - アクセスするたびにserver1とserver2に振り分けられて表示が変わります
- web1 server
  - `http://localhost:8001`
  - このポートでは必ずserver1にアクセスされます
- web2 server
  - `http://localhost:8002`
  - このポートでは必ずserver2にアクセスされます

※本来、web1,2に直接アクセスできる必要はないですがload barancing時と違いをわかりやすくする為アクセスできるようにしてます