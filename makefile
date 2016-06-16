install:
	@echo "Getting Composer Setup Files"
	@php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	@php composer-setup.php
	@php -r "unlink('composer-setup.php');"
	@echo "Install Smarty Template Engine"
	@php composer.phar require "Smarty/Smarty" "~3.0"
	@echo "Create Directories"
	@mkdir smarty
	@mkdir smarty/templates_c
	@mkdir smarty/cache
	@mkdir smarty/configs
	@chmod 777 smarty/templates_c
	@chmod 777 smarty/cache

clean:
	@rm composer*
	@rm -rf vendor
	@rm -rf smarty

update:
	@test -s composer.phar || { echo "Composer not installed, try 'make install'"; exit 1;}
	@php composer.phar update

.PHONY: install clean update
