.PHONY: run_behat phpunit_functional phpunit_unit
behat:
	export PANTHER_NO_HEADLESS=1; \
    export PANTHER_CHROME_ARGUMENTS=window-size=1920,800; \
	./vendor/bin/behat

phpunit_functional:
	./vendor/bin/phpunit --testsuite functional --stderr

phpunit_unit:
	./vendor/bin/phpunit --testsuite unit --stderr

phpunit:
	./vendor/bin/phpunit --coverage-html ./tests-coverage --stderr