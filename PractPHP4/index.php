<!DOCTYPE HTML>
<Html>
    <Head>
    <Title>Практика</Title>
        <Meta charset="utf-8">
        <Link rel="stylesheet" type="text/css" href="CSS/G_Style.css">
    </Head>
<Body>
	<Div class="Logo"><A name="0" class="Bookmark"></A>
		<Img src="Img/logo.png" />
	</Div>
	
	<Div class="Menu Delimiter">
		<Div class="Block_Head">Навигация по сайту</Div>
		<Div class="Block_Body">
			<Ul>
				<Li><A href="http://domenpracticaka.esy.es">Главная</A></Li>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Навигация по странице</Div>
		<Div class="Block_Body">
			<Ul>
				<Li><A href="#0">Вверх</A></Li>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Оповещения</Div>
		<Div class="Block_Body">
			8(123)123-23-23
		</Div>
	</Div>
	
	<Div class="General">
		<Div class="Block_Head">О сайте.<A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">
			Данный сайт поможет вам найти нужную информацию в большом обьеме текста.
		</Div>
		
		<Div class="Block_Head">Парсер<A name="2" class="Bookmark">#2</A></Div>
		<Div class="Block_Body">
			<Form method="post" >
			<P class="P_Null">Url сайта.</P>
			<Input type="text" name="_URL" reqyred class="Type_Text"></Input>
		
			<P class="P_Null">Шаблон поиска</P>
			<select class="Type_Text"  name="_Pattern">
				<option>Выберите шаблон</option>
				<option value="1">Русские слова</option>
				<option value="2">Автомобильный номер (Х555ХХ)</option>
				<option value="3">Аудиозаписи(qwerty - qwerty)</option>
				<option value="4">Emal (qwerty@qwerty.qwerty)</option>
				<option value="5">Интервал веков (X-XI)</option>
			</select>
			<Input type="submit" value="кнопка" class="Type_Button" />
		</Div>
		
		<Div class="Block_Head">Результат.<A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">
			<?php require('PHP/Parser.php'); ?>
		</Div>
		
		<Div class="Clear"></Div>
	</Div>
	
</Body>
</Html>