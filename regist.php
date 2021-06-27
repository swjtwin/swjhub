<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? require "validate.php" ?>
    <title>회원가입</title>
</head>
<body>
    <h2>회원정보 입력</h2>
    <form method="POST" action="#">
        <div class="inpt_text">
            <label for="id">아이디 :</label>
            <input type="text" id = "id">
        </div>
        <div class="inpt_text">
            <label for="pw">비밀번호 :</label>
            <input type="password" id = "pw">
        </div>
        <div class="inpt_text">
            <label for="pw_chk">비밀번호확인 :</label>
            <input type="password" id = "pw_chk">
        </div>
        <div class="name">
            <label for="name">이름 :</label>
            <input type="text" id = "name">
        </div>
        <div class="birth">
            <label for="birth">생년월일 :</label>
            <input type="date" id = "birth">
        </div>

        <div class="email">
            <label for="email">이메일 :</label>
            <input type="test" id = "email">
        </div>

        

        <button type="submit" class = "submit">완료</button>       

    </form>
    <button onclick = "history.back()">뒤로가기</button>
</body>
</html>