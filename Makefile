NAME = Inception

DOCK_COMP = ./srcs/docker-compose.yml

$(NAME): build run

all: $(NAME)

build:
	-mkdir -p /home/jusilanc/data/mariadb
	-mkdir -p /home/jusilanc/data/wordpress
	docker-compose -f $(DOCK_COMP) build

run:
	docker-compose -f $(DOCK_COMP) up -d

clean:
	-docker-compose -f $(DOCK_COMP) down -v

fclean: clean
	-docker rmi srcs_nginx
	-docker rmi srcs_wordpress
	-docker rmi srcs_mariadb
	-docker volume rm mariadb
	-docker volume rm wordpress

re: fclean all

.PHONY: build run all clean fclean re
