NAME = Inception

$(NAME): build run

all: $(NAME)

build:
	docker build -t ftnginx ./nginx/
	docker build -t ftwp ./wp/

run:
	docker-compose up -d

clean:
	-docker-compose down

fclean: clean
	-docker rmi ftnginx
	-docker rmi ftwp

re: fclean all

.PHONY: build run all stop clean fclean re kill