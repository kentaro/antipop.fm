SOUSHI=vendor/bin/soushi

server:
	$(SOUSHI) server

deploy:
	$(SOUSHI) build
	mv build/feed.html build/feed.xml
	$(SOUSHI) gh-pages
