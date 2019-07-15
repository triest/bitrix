<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>


    <form id="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" name="name" required="required" placeholder="Введите имя"
                   required>

        </div>
        <div class="form-group">
            <label for="family">Фамилия:</label>
            <input type="text" class="form-control" id="family" name="family" required="required"
                   placeholder="Введите фамилию"
                   required>

        </div>
        <b> Пол:</b> <br>
        <select name="sex" id="sex">
            <option>Мужской</option>
            <option>Женский</option>
        </select>

        <br>
        <label for="age">Сколько вам лет?
            <select id="age" name="age" style="width: 200px">
                <option value="18">до 18</option>
                <option value="25">18-25</option>
                <option value="25">больше 25</option>
            </select>
        </label><br>

        <label>Ваш род деятельности? <BR>

            <input type="checkbox" name="activity"  value="1"/>Студент <br>
            <input type="checkbox" name="activity" value="2"/>Служащий <br>
            <input type="checkbox" name="activity" value="3"/>Рабочий<br>

            <input type="checkbox" name="activity" value="5"/>Пенсионер<br>
            <input type="checkbox" name="activity" value="4"/>Руководитель<br>
            <input type="checkbox" name="activity" value="5"/>Ничем

        </label><br>


        <div class="form-group">
            <label for="exampleInputFile">Текст заявки:</label><br><br>
            <textarea name="description" id="description" rows=11 cols=50 maxlength=250
                      required> </textarea>
        </div>


        <br><br>
        <input id="btnSubmit" type="button" value="Release"/>
    </form>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#btnSubmit").click(function () {

                    $.post("http://startcode3/ajax/polls/poll.php",
                        {
                            'name': $("#name").val(),
                            'family': $("#family").val(),
                            'sex': $("#sex").val(),
                            'description': $("#description").val(),
                            'age': $("#age").val(),
                            'activity': $("#activity").val(),
                        },
                        function (data, textStatus, xhr) {
                            if (xhr.status == 201) {
                                alert("Анкета создана")
                            }
                        })
                }
            );
        });


        /* $('form').on('submit', function (e) {
             consol.log("submit");
             e.preventDefault();
             var frm = $('#form');

             var att = frm.attr("action");
             var formData = frm.serialize();

             $.ajax({
                 url: att,
                 type: 'POST',
                 data: formData,
                 statusCode: {
                     200: function () {
                         console.log("200 - Success");
                         alert("Зайвка успешео создана!");
                         document.getElementById("form").reset();
                     },
                     404: function (request, status, error) {
                         console.log("404 - Not Found");
                         console.log(error);
                         alert("Ошибка. Страница не неадена!");
                     },
                     503: function (request, status, error) {
                         console.log("503 - Server Problem");
                         console.log(error);
                         alert("Проблема сервера.");
                     }
                 },
                 success: function (data,textStatus, xhr) {
                     if(xhr.status==201){
                         alert("Анкета создана")
                     }
                 },
                 cache: false,
                 contentType: false,
                 processData: false
             });

                 }
         );*/

    </script>
    .<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>