Учебный фреймворк на базе Symfony 2
http://fabien.potencier.org/article/50/create-your-own-framework-on-top-of-the-symfony2-components-part-1

Каждый коммит сооответствует одной из статей (начиная со второй).
Посмотреть список коммитов и изменения на любом шаге можно Git командами:

	git log
	git diff --name-only SHA1 SHA2

Запустить тесты с генерацией отчета о покрытии кода:

	phpunit --coverage-html=web/cov/

1. Автозагрузка + HttpFoundation (ООП HTTP)
2. Front Controller + Templates
3. Routing + Use Composer autoloader + Config + add 5xx catch
4. Controllers
5. HTTP Kernel
6. Reusable structure
7. Tests
8. Events
9. Cashing
10. Add standart events
11. Dependency injection