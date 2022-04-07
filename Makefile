brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin