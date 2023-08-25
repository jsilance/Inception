NAME = Inception

$(NAME): build run

all: $(NAME)

build:
	docker build -t ftnginx ./nginx/
	docker build -t ftwp ./wp/
	docker build -t ftdb ./db/

run:
	docker-compose up -d

clean:
	-docker-compose down

fclean: clean
	-docker rmi ftnginx
	-docker rmi ftwp
	-docker rmi ftdb

re: fclean all

.PHONY: build run all clean fclean re