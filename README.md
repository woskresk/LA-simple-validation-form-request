# LA-simple-validation-form-request
Здесь реализованн простой пример валидации введённых в form данных с использованием request StoreBlogPost класса посредника.
Порядок создания:
1) С помощью команды: php artisan make:request StoreBlogPost создаём класс- посредник для проверки данных
2) Редактируем созданный класс StoreBlogPost (namespase app\Http\Requests) как в примере
3) Импортируем класс StoreBlogPost в соответствующий контроллер и используем его вместо (Request $request) как в примере  public function store(StoreBlogPost $request)
4) Выводим @errors в view так как в примере
Готово!
Всем успехов и удачи!)
