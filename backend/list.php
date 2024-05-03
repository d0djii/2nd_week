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
        </div>

        <form action="generate_word.php" method="post">

            <div class="input-container">
                <input type="text" id="student_fullname" name="student_fullname" placeholder="&nbsp;" required>
                <label for="student_fullname">ФИО</label>
            </div>

            <div class="input-container">
                <input type="text" id="student_fullname_dative" name="student_fullname_dative" placeholder="&nbsp;" required>
                <label for="student_fullname_dative">ФИО в Дат. Падеже</label> 
            </div>

            <div class="input-container">
                <input type="text" id="student_fullname_genitive" name="student_fullname_genitive" placeholder="&nbsp;" required>
                <label for="student_fullname_genitive">ФИО в Родит. Падеже</label> 
            </div>

            <div class="input-container">
                <input type="text" id="group" name="group" placeholder="&nbsp;" required>
                <label for="group">Группа</label>
            </div>

            <div class="input-container">
                <input type="text" id="direction_name" name="direction_name" placeholder="&nbsp;" required>
                <label for="direction_name">Направление</label> 
            </div>


            <div class="upload-container">
            <p style="color: #777777; font-size: 20px">Загрузка CSV файла с задачами</p>
            <label for="csvFile" class="upload-label">Выберите файл</label>
            <input type="file" id="csvFile" name="csvFile" class="upload-input">
            <button class="upload-button">Загрузить</button>
            </div>

            <div class="input-container">
                <input type="submit" value="Генерировать и скачать файл Word">
            </div>
        </form>


    </div>
</body>
</html>