# Executables (local)
DOCKER_COMP = PROJECT_ROOT=`pwd` docker compose

# Docker containers
PHP_CONT = $(DOCKER_COMP) exec php
PHP_CONT_DEBUG = $(DOCKER_COMP) exec -e XDEBUG_MODE=debug -e XDEBUG_SESSION=1 php

# Executables
PHP      = $(PHP_CONT) php
COMPOSER = $(PHP_CONT) composer

# Misc
.DEFAULT_GOAL = help
.PHONY        = help build up start down logs sh composer vendor sf cc

# Icons
ICON_THICK = \033[32m\xE2\x9C\x94\033[0m
ICON_CROSS = \033[31m\xE2\x9C\x96\033[0m

##
##Help
##====
##

help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/ '

cov: ## Opens the code coverage in the browser
	open var/coverage/coverage-html/index.html

mut: ## Opens the report of mutations in the browser
	open var/mutations/index.html

##
##Docker:

start: ## Starts the containers to run the lib (all in detached mode - no logs).
	make stop
	@$(DOCKER_COMP) up -d

stax: ## Starts, WITH XDEBUG, the containers to run TrustBack.Me (all in detached mode - no logs).
	make stop
	@XDEBUG_MODE=debug PROJECT_ROOT=`pwd` docker compose up -d

stop: ## Stops the docker hub (using `docker compose stop`)
	@$(DOCKER_COMP) stop

down: ## Downs the docker hub (using `docker compose down`)
	@$(DOCKER_COMP) down --remove-orphans -v

sh: ## Connects to the lib's main container
	@$(PHP_CONT) bash

initialize: build start ## Builds and start the containers

build: ## Builds the Docker images
	SERVER_NAME="trustbackme.localhost, caddy:80" $(DOCKER_COMP) build --pull

##
##Composer:

composer: ## Run Composer. Pass the parameter "c=" to run a given command, example: make composer c='install'
	@$(eval c ?=)
	@$(COMPOSER) $(c)

vendor: ## Install vendors according to the current composer.lock file
vendor: c=install --prefer-dist --no-dev --no-progress --no-scripts --no-interaction
vendor: composer
