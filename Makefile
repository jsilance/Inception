NAME = Inception

$(NAME): build run

all: $(NAME)

build:
	docker-compose -f ./srcs/docker-compose.yml build

run:
	docker-compose -f ./srcs/docker-compose.yml up -d

clean:
	-docker-compose -f ./srcs/docker-compose.yml down -v

fclean: clean
	-docker rmi nginx
	-docker rmi wordpress
	-docker rmi mariadb
	-docker volume rm srcs_mariadb
	-docker volume rm srcs_wordpress

re: fclean all

.PHONY: build run all clean fclean re