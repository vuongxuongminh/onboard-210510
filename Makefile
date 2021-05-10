.PHONY: behat phpunit_functional phpunit_unit
behat:
	./vendor/bin/behat

phpunit_functional:
	./vendor/bin/phpunit --testsuite functional --stderr

phpunit_unit:
	./vendor/bin/phpunit --testsuite unit --stderr

phpunit:
	./vendor/bin/phpunit --coverage-html ./tests-coverage --stderr