<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Стани джедай - SoftWars University</title>
    <link href="styles/styles.css" rel="stylesheet" />
    <meta charset="utf-8" />
</head>
<body>
    <div id="wrapper">
        <?php

        include("header.php");

        ?>

        <form class="form-reg">
            <div id="position-reg">
            <section class="section-form">
                <label class="lable" for="FirstName">Име *</label>
                <input class="input-txt" id="FirstName" type="text" required="required" pattern="[A-Za-z]{3}" title="first-name" placeholder="Име" />

                <label class="lable" for="SecName">Презиме *</label>
                <input class="input-txt" id="SecName" type="text" required="required" pattern="[A-Za-z]{3}" title="sec-name" placeholder="Презиме" />

                <label class="lable" for="LastName" placeholder="Име на български">Фамилия *</label>
                <input class="input-txt" id="LastName" type="text" required="required" pattern="[A-Za-z]{3}" title="last-nale" placeholder="Фамилия" />
            </section>
            <section class="section-form">

                <label class="lable" for="race">Раса*</label>
                <input class="input-txt" id="race" type="text" required="required" pattern="[A-Za-z]" title="" placeholder="Раса" />

                <label class="lable" for="gender">Дата на раждане*</label>
                <input class="input-txt" id="gender" type="date" required="required" />

                <label class="lable">Пол*</label>
                <select class="input-txt" required="required">
                    <option>Мъж</option>
                    <option>Жена</option>
                    <option>Сложно е</option>
                </select>
            </section>
            <section class="section-form">
                <label class="lable" for="gal">Галактика</label>
                <input class="input-txt" id="gal" type="text" pattern="[A-Za-z]" title="" placeholder="Галактика" />

                <label class="lable" for="planet">Планета</label>
                <input class="input-txt" id="planet" type="text" pattern="[A-Za-z]" title="" placeholder="Планета" />

                <label class="lable" for="country">Държава</label>
                <input class="input-txt" id="country" type="text" pattern="[A-Za-z]" title="" placeholder="Държава" />
            </section>
            </div>
             <button id="btn" type="submit">Стани джедай</button>
        </form>

        <section id="foot-master">
        <?php

        include("footer.php")

        ?>
            </section>
    </div>
</body>
</html>
