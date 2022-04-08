brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-progression:
	./bin/brain-progression

brain-gcd:
	./bin/brain-gcd

brain-prime:
	./bin/brain-prime

install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin