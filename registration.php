<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>����� ������ - SoftWars University</title>
    <link href="styles/styles.css" rel="stylesheet" />
    <meta charset="utf-8" />
</head>
<body>
    <div id="wrapper">
        <?php

        include("header.php");

        ?>

        <form class="form-reg" method="post">
            <div id="position-reg">
            <section class="section-form">
                <label class="lable" for="FirstName">��� *</label>
                <input class="input-txt" id="FirstName" type="text" required="required" title="first-name" placeholder="���" />

                <label class="lable" for="SecName">������� *</label>
                <input class="input-txt" id="SecName" type="text" required="required" title="sec-name" placeholder="�������" />

                <label class="lable" for="LastName" placeholder="��� �� ���������">������� *</label>
                <input class="input-txt" id="LastName" type="text" required="required" title="last-nale" placeholder="�������" />
            </section>
            <section class="section-form">

                <label class="lable" for="race">����*</label>
                <input class="input-txt" id="race" type="text" required="required" title="" placeholder="����" />

                <label class="lable" for="gender">���� �� �������*</label>
                <input class="input-txt" id="gender" type="date" required="required" />

                <label class="lable">���*</label>
                <select class="input-txt" required="required">
                    <option>���</option>
                    <option>����</option>
                    <option>������ �</option>
                </select>
            </section>
            <section class="section-form">
                <label class="lable" for="gal">���������</label>
                <input class="input-txt" id="gal" type="text" title="" placeholder="���������" />

                <label class="lable" for="planet">�������</label>
                <input class="input-txt" id="planet" type="text" title="" placeholder="�������" />

                <label class="lable" for="country">�������</label>
                <input class="input-txt" id="country" type="text" title="" placeholder="�������" />
            </section>
            </div>
             <button id="btn" type="submit">����� ������</button>
        </form>

        <section id="foot-master">
        <?php

        include("footer.php")

        ?>
            </section>
    </div>
</body>
</html>
