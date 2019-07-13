<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>


    <form id="form" action="/ajax/polls/poll.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">���:</label>
            <input type="text" class="form-control" id="name" name="name" required="required" placeholder="������� ���"
                   required>

        </div>
        <div class="form-group">
            <label for="family">�������:</label>
            <input type="text" class="form-control" id="family" name="family" required="required"
                   placeholder="������� �������"
                   required>

        </div>
        <b> ���:</b> <br>
        <input type="radio" id="contactChoice1" id="sex"
               name="sex" value="famele" checked>
        <label for="contactChoice1">�������</label>

        <input type="radio" id="contactChoice2"
             id="sex"  name="sex" value="male" >
        <label for="contactChoice2">�������</label>
        <br>
        <label for="age">������� ��� ���?
            <select id="age" name="age" style="width: 200px" >
                <option value="18">�� 18</option>
                <option value="25">18-25</option>
                <option value="25">������ 25</option>
            </select>
        </label><br>

        <label for="activity">��� ��� ������������?
            <select name="activity" style="width: 200px">
                <option value="�������">�������</option>
                <option value="��������">��������</option>
                <option value="�������">�������</option>
                <option value="�����������">�����������</option>
                <option value="���������">���������</option>
                <option value="������������">������������</option>
                <option value="���������">���������</option>
                <option value="�����">�����</option>
            </select>
        </label><br>


        <div class="form-group">
            <label for="exampleInputFile">����� ������:</label><br><br>
            <textarea name="description" id="description" rows=11 cols=50 maxlength=250
                      required> </textarea>
        </div>


        <br><br>
        <!-- <button type="submit" class="btn btn-default">������� �����</button> -->

        <input type="button" id="btn" value="���������"/>
    </form>


    <script>
        $(document).ready(function () {
            $("#btn").click(function (e) {
                var frm = $.('#form');

                var att = frm.attr("action");
                var formData = frm.serialize();
                console.log(formData);
                $.ajax({
                    url: att,
                    type: 'POST',
                    data: formData,
                    statusCode: {
                        200: function () {
                            console.log("200 - Success");
                            alert("������ ������� �������!");
                            document.getElementById("form").reset();
                        },
                        404: function (request, status, error) {
                            console.log("404 - Not Found");
                            console.log(error);
                            alert("������. �������� �� �������!");
                        },
                        503: function (request, status, error) {
                            console.log("503 - Server Problem");
                            console.log(error);
                            alert("�������� �������.");
                        }
                    },
                    success: function (data,textStatus, xhr) {
                        if(xhr.status==201){
                            alert("������ �������")
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });




                    }
            );
        });
    </script>
    .<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>