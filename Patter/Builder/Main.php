  mysql:
    environment:
      MYSQL_ROOT_PASSWORD: "123456"
      MYSQL_USER: 'dev'
      MYSQL_PASS: 'dev!#%79'
    image: "docker.io/mysql:latest"
    restart: always
    volumes:
      - "/Users/william/docker/mysql/db:/var/lib/mysql"
      - "/Users/william/docker/mysql/conf/my.cnf:/etc/mysql/my.cnf"
    ports:
        - "3306:33060"
    networks:
      - frontend
      - backend