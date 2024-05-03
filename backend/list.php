<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список документов доступных к заполнению</title>
</head>
<body>

    <div class="container">
        <div class="img">
            <img src="assets/img/user.png" width="225px" alt="">
            <button class="box">
                <p>
                    Список документов доступных к <br> заполнению
                </p>
            </button>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">ФИО</label>
        </div>

        <div class="input-container">
            <div class="edit">
                <button>
                    <svg class="edit_svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6"><rect x="12.8298" y="0.368164" width="3.97369" height="2.83835" transform="rotate(45 12.8298 0.368164)" fill="white"/><path d="M10.4131 2.77637L13.2229 5.58619L5.78196 13.0271L2.1617 13.5621L2.97213 10.2173L10.4131 2.77637Z" fill="white"/><rect x="10.6968" y="3.62744" width="0.653726" height="8.44211" transform="rotate(45 10.6968 3.62744)" fill="#6297E9"/></g>
                    </svg>                        
                </button>
            </div>
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">ФИО в родительном падеже</label>
        </div>

        <div class="input-container">
            <div class="edit">
                <button>
                    <svg class="edit_svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6"><rect x="12.8298" y="0.368164" width="3.97369" height="2.83835" transform="rotate(45 12.8298 0.368164)" fill="white"/><path d="M10.4131 2.77637L13.2229 5.58619L5.78196 13.0271L2.1617 13.5621L2.97213 10.2173L10.4131 2.77637Z" fill="white"/><rect x="10.6968" y="3.62744" width="0.653726" height="8.44211" transform="rotate(45 10.6968 3.62744)" fill="#6297E9"/></g>
                    </svg>                        
                </button>
            </div>
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">ФИО в дательном падеже</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Фамилия с инициалами</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Курс</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Номер группы</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Название школы</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Название направления</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Логин</label>
        </div>

        <div class="input-container">
            <input type="password" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Пароль</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Институт</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Место практики</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Сроки практики</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Таблица производственных работ</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Вид практики</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Вид практики в винительном</label>
        </div>

        <div class="input-container">
            <input type="name" id="nameInput" placeholder="&nbsp;">
            <label for="nameInput">Адрес организации (института)</label>
        </div>

        <div class="upload-container">
            <p style="color: #777777; font-size: 20px">Загрузка CSV файла с задачами</p>
            <label for="csvFile" class="upload-label">Выберите файл</label>
            <input type="file" id="csvFile" name="csvFile" class="upload-input">
            <button class="upload-button">Загрузить</button>
        </div>


        <div class="form_button">
            <button>Изменить данные</button>
        </div>
        
    </div>
</body>
</html>